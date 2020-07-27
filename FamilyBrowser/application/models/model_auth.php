<?php

class Auth_Model extends Model
{
    public function createUser($login, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `hhmeweme_orderFamilies`.`Users` (`Login`, `Password`) VALUES ('$login', '$hashedPassword')";
      
        $query = $this->pdo->prepare($sql);
        if ($query->execute()) {
            return true;
        }
        else{
            return false;
        } 
    }

    public function getUser($login, $password){
        $sql = "SELECT * FROM `Users` LEFT JOIN `Roles` on `Users`.`RoleId` = `Roles`.`idRoles` WHERE `Login`='$login' ";
        $query = $this->pdo->prepare($sql);
        if ($query->execute()) {
            if($query->rowCount() == 1){
                if($user = $query->fetch()){
                    if (password_verify($password, $user['Password'])){
                        return $user;
                    }
                }
            }
        }
    }

    public function isUserExists($login){
        $sql = "SELECT * FROM `Users` WHERE `Login`='$login'";
        $query = $this->pdo->prepare($sql);
        if ($query->execute()){
            if ($query->rowCount()>0){               
                return true;
            }
        }
        else return false;
    }

    public function resetPassword($email, $token){
        $sql = "INSERT INTO `PasswordReset` (`Email`, `Token`) VALUES ('$email', '$token')";
        $query = $this->pdo->prepare($sql);
        $query->execute();
    }

    public function checkToken($token){
        $sql="SELECT * FROM `PasswordReset`";
        $query = $this->pdo->prepare($sql);
        if ($query->execute()) {
            if($query->rowCount() == 1){

                $sql="DELETE FROM `PasswordReset` WHERE `Token` = '$token'";
               
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
        $sql="UPDATE `Users` SET `Password` = '$hashedPassword' WHERE (`Login` = '$login')";
        $query = $this->pdo->prepare($sql);
        if ($query->execute()) {
            return true;
        }
        else {
            return false;
        }
    }
}
