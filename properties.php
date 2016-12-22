<?php

class User {
    private $id;
    private $username;
    private $email;
    private $password;
    //autoamtically called always when we instantiate something
    public function __construct($username, $password) {
            $this->username = $username;
            $this->password = $password;
       // echo "Constructor called";
    }

   public function register() {
        echo "User registered";
    }
    
   public function login() {
            //can move those to the constrructor
//            $this->username = $username;
//            $this->password = $password;
            $this->check_auth();
    }
    
     public function check_auth(){
             echo $this->username. " is now authenticated and his password is ".$this->password;
    }
    //automatically called at the end
    public function __destruct() {
       // echo "Destructor called";
    }
}

$user = new User('Marcin','1234');

//$user -> register();

//$user->login();

//echo $user->username;







?>
