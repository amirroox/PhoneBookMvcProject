<?php
namespace App\Controller;

use App\Models\Contacts;
use App\Core\Request;

class HomeController{
    private Contacts $Contacts;
    private array $Data;
    private Request $req;
    public function __construct()
    {
        global $request;
        $this->req = $request;
        $this->Contacts = new Contacts();
        $this->Data = [];
    }

    public function index(){
        $this->Data = [
            'Contacts' => $this->Contacts->readAll(),
            'Pagination' => $this->Contacts->calculatePagination()
        ];
        $page = $this->req->getParams()['page'] ?? null;
        if(!is_null($page) && ($page > $this->Data['Pagination'] || $page < 1)) # Page Exited
            header("Location: {$_ENV['HOST']}");
        view("home.index", $this->Data);
    }

    public function add(){
        $req = $this->req->getParams();
        $data = [
            'name' => $req['firstName'] . ' ' . $req['lastName'],
            'phone' => $req['Number'],
            'email' => $req['Email'],
            'description' => $req['description']
        ];
        $id = $this->Contacts->create($data);
        if($id){
            header("Location: {$_ENV['HOST']}");
        }
    }

    public function delete(){
        $id = $this->req->getParams()['id'];
        $this->Contacts->delete(['id' => $id]);
        if ($id) header("Location: {$_ENV['HOST']}");
    }
}

// Faker Test User
//for($i = 0 ; $i < 100 ; $i++){
//    $Faker = \Faker\Factory::create();
//    $data = [
//        'name' => $Faker->name(),
//        'phone' => $Faker->phoneNumber(),
//        'description' => $Faker->text(40),
//        'email' => $Faker->email(),
//    ];
//    $this->Contacts->create($data);
//}
