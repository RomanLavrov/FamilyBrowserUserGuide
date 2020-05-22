<?php
require_once("./application/models/model_auth.php");
class Controller_Auth extends Controller
{
    public function action_index()
    {
        $this->view->generate('content_view.php', 'de/Auth/authTemplate_view.php');
    }

    public function action_Login()
    {
        $errorText = null;
        if (isset($_POST) && count($_POST) > 0) {
            $this->model = new Auth_Model;
            $role = $this->model->getUser($_POST['login'], $_POST['password']);
            if (isset($role)) {
                session_start();
                $_SESSION['role'] = $role;
                $_SESSION['user'] = $_POST['login'];
                header('location: /FamilyBrowser/de/');
            } else {
                $errorText = "Benutzer nicht gefunden oder falsches Passwort.";
            }
        }
        $this->view->error = $errorText;
        $this->view->generate('Auth/login_view.php', 'de/Auth/authTemplate_view.php');
    }

    public function action_Register()
    {
        $errorText = null;
        if (isset($_POST) && count($_POST) > 0) {

            if ($_POST['password'] != $_POST['password-confirm']) {
                $errorText = "Die Passwörter stimmen nicht überein.";
            } else if (strlen($_POST['password']) < 5) {
                $errorText = "Passwort zu kurz.";
            } else {
                $this->model = new Auth_Model;
                if ($this->model->createUser($_POST['login'], $_POST['password'])) {
                    header('location: /FamilyBrowser/de/Auth/Login');
                } else {
                    header('location: /FamilyBrowser/de/Auth/Register');
                }
            }
        }

        $this->view->error = $errorText;
        $this->view->generate('Auth/register_view.php', 'de/Auth/authTemplate_view.php');
    }
}
?>;