<?php
namespace App\Models;

use App\Models\Contracts\MySqlBaseModel;

class Contacts extends MySqlBaseModel{
    protected string $tableName = 'Contacts';
    protected int $pageSize = 10 ;
}
