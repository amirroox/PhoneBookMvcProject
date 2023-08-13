<?php
namespace App\Controller;

use App\Models\Contacts;

class HomeController{
    private Contacts $Contacts;
    private array $Data;
    public function __construct()
    {
        $this->Contacts = new Contacts();
        $this->Data = [
            'Contacts' => $this->Contacts->readAll(),
            'Pagination' => $this->Contacts->calculatePagination()
        ];
    }

    public function index(){
        global $request;
        $page = $request->getParams()['page'] ?? null;
        if(!is_null($page) && ($page > $this->Data['Pagination'] || $page < 1)) # Page Exited
            header("Location: {$_ENV['HOST']}");
        view("home.index", $this->Data);
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
