<?php
class Validator{
public static function validateEmail(string $email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
     return true;
    }
    else {
        return false;
    }
}
}