<?php

namespace App\Todo;

class Task
{
    private $id;
    private $title;
    private $status;
    private $limitDate;

    public function __construct($id, $name)
    {
        $this->id=$id;
        $this->title = $title;
        $this->status= $status;
        $this->limiteDate = $limitDate;
}

}