<?php
include "DBc.php";
session_start();
class user {
    private $id;
    private $name;
    private $email;
    private $password;

    public function __construct($name = null, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setname($name): void
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }
    

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function registerUser(){
        $conn1=DbConnection::connect();
        $register = $conn1->prepare("INSERT INTO `user`(`name`, `email`, `PASSWORD`, `role`) VALUES ('$this->name','$this->email','$this->password','1')");
        $register->execute();
    }

    public function loginUser(){





        $conn1=DbConnection::connect();
        $login = $conn1->prepare("select * from `user` where email = '$this->email' and password = '$this->email' and role = '1'");
        $login->execute();



$num_rows = $login->rowCount();

// var_dump ($num_rows);

        if ($num_rows == 1) {
            header('location: index.php'); 

            $data=$login->fetch(PDO::FETCH_ASSOC);
            $_SESSION['name'] =$data['name'] ;
            $_SESSION['id'] =$data['id'] ;
            // var_dump ($data['id']);
            var_dump ($data['name']);


            // $_SESSION['email'] = $this->email ;
            // $_SESSION['password'] = $this->email;
            // var_dump ($_SESSION['email']);
            // var_dump($_SESSION['password']);
    }



    }
}