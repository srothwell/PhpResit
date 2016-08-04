<?php
class Validation {
    public function validateRegistration($email,$password,$confirmPassword,$address,$phone) {
        if ($email === '' || $password === '' || $confirmPassword === '' || $address === '' || $phone === '') {
            echo "please fill in all boxes";
            return false;
        }

        return true;

    }
}

?>