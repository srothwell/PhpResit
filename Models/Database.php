<?php

class Database
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

    public function loginCheck($email, $password)
    {

        //$servername = "helios.csesalford.com";
        //$username = "stb242";
        //$dbpassword = "jgw0Mqrj";
        //$dbname = "stb242";
        //&charset=utf8

        $emailtocheck = $email;
        $passwordtocheck = $password;



        try {

            $db = new PDO('mysql:host=helios.csesalford.com;dbname=stb242', 'stb242', 'jgw0Mqrj');


            $query = $db->prepare('SELECT * FROM users WHERE(email = :email AND password = :password)');
            $query->execute(array(':email'=>$emailtocheck,':password'=>$passwordtocheck));
            if ($query->rowCount() === 0) {
                echo('incorrect');
                return 0;
            } else {
                $fetch = $query->fetch();
                //echo $fetch['email'];
                echo('correct');
                return $fetch['userID'];

            }




        } catch (PDOException $e) {
            var_dump($e);
        }

    }

    public function fetchAllCD()
    {
        try {
            $db = new PDO('mysql:host=helios.csesalford.com;dbname=stb242', 'stb242', 'jgw0Mqrj');

            $get = $db->query('SELECT * FROM CDs');
            return $get->fetchAll();
        } catch (PDOException $e) {
            var_dump($e);
        }

    }

}
?>