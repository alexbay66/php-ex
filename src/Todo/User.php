<?php

namespace App\Todo;

class User 
{
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $password;

public function __construct($id, $firstname, $lastname, $email, $password)
{
    $this->$id = $id;
    $this->$firstname = $firstname;
    $this->$lastname = $lasname;
    $this->$email = $email;
    $this->$password = $password;
}
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lasname
     */ 
    public function getLasname()
    {
        return $this->lasname;
    }

    /**
     * Set the value of lasname
     *
     * @return  self
     */ 
    public function setLasname($lasname)
    {
        $this->lasname = $lasname;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}