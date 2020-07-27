<?php
require_once("./application/models/model_user.php");
class Controller_User extends Controller
{
    function action_index()
    {
        $this->model = new User_Model();

        $this->view->roles = $this->model->getRoles();
        $this->view->users = $this->model->getUsers();
        $this->view->generate('Orders/user_view.php', 'de/template_view.php');
    }

    public function action_ChangeRole(){       

        $role=$_POST['role'];
        $userId = $_POST['userId'];       

        $this->model = new User_Model();

        if ($role == 0){
            print_r("Delete User"); 
            $this->model->deleteUser($userId);           
        }

        else{
            print_r("Change Role");
            $this->model->changeRole($userId, $role);
        }
    }
}
