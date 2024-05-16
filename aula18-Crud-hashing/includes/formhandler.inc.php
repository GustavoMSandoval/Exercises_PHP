<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    if(empty($username)){
        header("Location: ../index.php");
        exit();
    }

    try{

        require_once "dbh.inc.php";

        $query = "INSERT INTO users2 (username,pwd,email) VALUES 
        (:username, :pwd, :email);";

        $stmt = $pdo->prepare($query);

        $options = [   
            'cost' => 12
        ];
        $hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":pwd",$hashedPwd);
        $stmt->bindParam(":email",$email);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();

    } catch (PDOException $e) {

        die("Query failed: ". $e->getMessage());

    }

} else {

    header("Location: ../index.php");

}