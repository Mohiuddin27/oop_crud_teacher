<?php

namespace App\Controllers;

use App\Models\Database;

class Teacher extends Database{
    public function createNewTeacher($name,$email,$cell,$image){
        $this->create("INSERT INTO teachers(name,email,cell,image) VALUES('$name','$email','$cell','$image')");
    }
    public function showAllTeacher(){
        return $this->all('teachers');
    }
}


?>