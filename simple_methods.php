<?php

class User {
    public $id;
    public $username;
    public $email;
    public $password;
    //autoamtically called always when we instantiate something
    public function __construct() {
       // echo "Constructor called";
    }

   public function register() {
        echo "User registered";
    }
    
    public function check_auth($username, $password){
        echo $username. " is now autheenticated";
    }

        public function login($username, $password) {
            $this->check_auth($username,$password);
    }
    
    //automatically called at the end
    public function __destruct() {
       // echo "Destructor called";
    }
}

$user = new User;

//$user -> register();

$user->login('Marcin', '1234');









?>
