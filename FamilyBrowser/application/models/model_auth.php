<?php

class Auth_Model extends Model
{
    public function createUser($login, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $defaultRole = "Designer";

        $sql = "INSERT INTO `hhmeweme_orderFamilies`.`Users` (`Login`, `Password`, `Role`) VALUES ('$login', '$hashedPassword', '$defaultRole')";
      
        $query = $this->pdo->prepare($sql);
        if ($query->execute()) {
            return true;
        }
        else{
            return false;
        } 
    }

    public function getUser($login, $password){
        $sql = "SELECT * FROM `hhmeweme_orderFamilies`.`Users` WHERE `Login`='$login'";
        $query = $this->pdo->prepare($sql);
        if ($query->execute()) {
            if($query->rowCount() == 1){
                if($user = $query->fetch()){
                    if (password_verify($password, $user['Password'])){
                        print_r($user['Role']);
                        return $user['Role'];
                    }
                }
            }
        }
    }

    public function isUserExists($login){
        $sql = "SELECT * FROM `hhmeweme_orderFamilies`.`Users` WHERE `Login`='$login'";
        $query = $this->pdo->prepare($sql);
        if ($query->execute()){
            if ($query->rowCount()>0){               
                return true;
            }
        }
        else return false;
    }

    public function resetPassword($email, $token){
        $sql = "INSERT INTO `hhmeweme_orderFamilies`.`PasswordReset` (`Email`, `Token`) VALUES ('$email', '$token')";
        $query = $this->pdo->prepare($sql);
        $query->execute();
    }

    public function checkToken($token){
        $sql="SELECT * FROM `hhmeweme_orderFamilies`.`PasswordReset`";
        $query = $this->pdo->prepare($sql);
        if ($query->execute()) {
            if($query->rowCount() == 1){

                $sql="DELETE FROM  `hhmeweme_orderFamilies`.`PasswordReset` WHERE `Token` = '$token'";
               
                $query = $this->pdo->prepare($sql);
                $query->execute();
                return true;
            }
            else{
                return false;
            }
        }
    }

    public function updatePassword($login, $password){
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql="UPDATE `hhmeweme_orderFamilies`.`Users` SET `Password` = '$hashedPassword' WHERE (`Login` = '$login')";
        $query = $this->pdo->prepare($sql);
        if ($query->execute()) {
            return true;
        }
        else {
            return false;
        }
    }
}
