<?php
namespace App\Models;

use mysqli;

abstract class Database
{
    private $host="localhost";
    private $user="root";
    private $pass= "";
    private $db="oop_teacher";



    private function connection(){
        return new mysqli($this->host,$this->user,$this->pass,$this->db);
    }
    protected function create($sql){
        $this->connection()->query($sql);
    }
    protected function all($table){
       return  $this->connection()->query("SELECT * FROM {$table} ORDER BY id DESC");
    }

}




?>