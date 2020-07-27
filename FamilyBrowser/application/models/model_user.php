<?php
class User_Model extends Model
{
    public function getUsers()
    {
        $users = [];
        $sql = "SELECT * FROM Users LEFT JOIN Roles on Users.RoleId = Roles.idRoles";
        if ($query = $this->pdo->prepare($sql)) {
            if ($query->execute()) {
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    $user = $row;
                    $user['Orders'] = $this->getOrdersCount($row['idUsers']);
                    $users[] = $user;
                }
            }
        }

        return $users;
    }

    private function getOrdersCount($idUsers)
    {
        $sql = "SELECT count(*) AS Orders FROM Orders WHERE UserId = $idUsers ";
        if ($query = $this->pdo->prepare($sql)) {
            if ($query->execute()) {
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    return $row['Orders'];
                }
            }
        }
    }

    public function getRoles()
    {
        $roles = [];
        $sql = "SELECT * FROM Roles";
        if ($query = $this->pdo->prepare($sql)) {
            if ($query->execute()) {
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    $roles[] = $row;
                }
            }
        }

        return $roles;
    }

    public function changeRole($userId, $role)
    {
        $sql = "UPDATE `hhmeweme_orderFamilies`.`Users` SET `RoleId` = '$role' WHERE (`idUsers` = '$userId')";
        if ($query = $this->pdo->prepare($sql)) {
            if ($query->execute()) {
                print_r ("Role Successfully updated");
            }
        }
    }

    public function deleteUser($userId){        
        $sql = "DELETE FROM `hhmeweme_orderFamilies`.`Users` WHERE (`idUsers` = '$userId')";
        if ($query = $this->pdo->prepare($sql)) {
            if ($query->execute()) {
                print_r ("User Successfully deleted");
            }
        }
    }
}
