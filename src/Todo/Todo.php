<?php

namespace App\Todo;

class Category 
{
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->id=$id;
        $this->name = $name;
}

}




use App\Todo\Category;
use App\Todo\Tag;
use App\Todo\Task;
use App\Todo\User;