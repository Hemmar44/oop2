<?php

class User {
    
    public $username;
    public static $minPassLength = 5;
    
    public static function validatePassword($password) {
        if(strlen($password) >= self::$minPassLength){
            return true;
        }
        else {
            return false;
        }
    }
}
/*
$password = "passsss";

if(User::validatePassword($password)){
    echo "Password is valid";
}
else {
    echo "Password is to short";
}
 
 */

echo User::$minPassLength;
?>