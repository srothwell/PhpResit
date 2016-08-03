<?php

class Login
{


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
                //return 0;
            } else{
                echo('correct');

            }




        } catch (PDOException $e) {
            var_dump($e);
        }

    }
}
?>