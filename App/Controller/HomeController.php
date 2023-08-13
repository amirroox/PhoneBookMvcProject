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
            'Contacts' => $this->Contacts->readAll()
        ];
    }

    public function index(){
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
