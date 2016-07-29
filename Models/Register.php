<?php

class Register {




    public function addUser($email,$password,$address,$phone) {
        $servername = "helios.csesalford.com";
        $username = "stb242";
        $dbpassword = "jgw0Mqrj";
        $dbname = "stb242";

        $emailtoadd = $email;
        $passwordtoadd = $password;
        $addresstoadd = $address;
        $phonetoadd = $phone;

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$dbpassword);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO users (email, password, address, phone) VALUES ($emailtoadd,$passwordtoadd,$addresstoadd,$phonetoadd)";

            $conn->exec($sql);
            echo "Added successfully";

        }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
        $conn = null;
    }
}
?>