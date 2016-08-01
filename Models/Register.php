<?php

class Register
{


    public function addUser($email, $password, $address, $phone)
    {

        //$servername = "helios.csesalford.com";
        //$username = "stb242";
        //$dbpassword = "jgw0Mqrj";
        //$dbname = "stb242";
        //&charset=utf8

        $emailtoadd = $email;
        $passwordtoadd = $password;
        $addresstoadd = $address;
        $phonetoadd = $phone;



        try {
            $db = new PDO('mysql:host=helios.csesalford.com;dbname=stb242', 'stb242', 'jgw0Mqrj');
            echo("worked");

            $query = $db->prepare('INSERT INTO users (email, password, address, phone) VALUES (:email, :password, :address, :phone) ');

            $query->bindParam(':email', $emailtoadd);
            $query->bindParam(':password', $passwordtoadd);
            $query->bindParam(':address', $addresstoadd);
            $query->bindParam(':phone', $phonetoadd);
            $query->execute();




        } catch (PDOException $e) {
            var_dump($e);
        }

    }
}
?>