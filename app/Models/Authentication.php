<?php

namespace app\Models;
use app\Database;

class Authentication{
    private $conn;

    public function __construct(){
        $database = new Database();
        $this->conn=$database->connection();
    }

    public function signup($fullname, $email, $password){
        $hashPassword=password_hash($password, PASSWORD_DEFAULT);
        $email=strtolower(trim($email));
        $fullname=trim($fullname);

        $check=$this->conn->prepare("SELECT 1 FROM user WHERE email=? LIMIT 1");
        $check->execute([$email]);
        if($check->fetchColumn() !== false){
            return "Email is already registered";
        }

        $sql="INSERT INTO user(userid, fullname, Email, Password, Role) VALUES(?,?,?,?,?)";

        try{
            $stmt=$this->conn->prepare($sql);
            $stmt->execute([bin2hex(random_bytes(16)), $fullname, $email, $hashPassword, 0]);
            return "Success";
        }
        catch(\PDOException $exception){
            $errorCode=$exception->errorInfo[1] ?? null;
            if($exception->getCode()==="23000" || $errorCode===1062){
                return "Email is already registered";
            }
            throw $exception;
        }
    }

    public function login($email, $password){
        $email=strtolower(trim($email));
        $sql="SELECT * FROM user WHERE email=? LIMIT 1";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute([$email]);
        $user=$stmt->fetch(\PDO::FETCH_ASSOC);

        $storedPassword=$user["password"] ?? $user["Password"] ?? null;

        if(is_array($user) && is_string($storedPassword)
            && password_verify($password, $storedPassword)){
            return "Login Successful";
        }
        else{
            return "Invalid Credentials";
        }
    }

}

?>