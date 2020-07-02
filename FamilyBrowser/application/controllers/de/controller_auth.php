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
            $this->model = new Auth_Model;
            if ($this->model->isUserExists($_POST['login']) == 1) {
                //header('location: /FamilyBrowser/de/Auth/Login');
                $errorText = "Benutzer bereits registriert.";
            } else {
                if ($_POST['password'] != $_POST['password-confirm']) {
                    $errorText = "Die Passwörter stimmen nicht überein.";
                } else if (strlen($_POST['password']) < 5) {
                    $errorText = "Passwort zu kurz.";
                } else {

                    if ($this->model->createUser($_POST['login'], $_POST['password'])) {
                        header('location: /FamilyBrowser/de/Auth/Login');
                    } else {
                        header('location: /FamilyBrowser/de/Auth/Register');
                    }
                }
            }
        }

        $this->view->error = $errorText;
        $this->view->generate('Auth/register_view.php', 'de/Auth/authTemplate_view.php');
    }

    public function action_Logout()
    {
        $_SESSION = array();
        session_destroy();
        header("location: /FamilyBrowser/de/");
        exit();
    }

    public function action_ResetPassword($userToken = null)
    {
        $this->model = new Auth_Model;

        if (isset($_POST) && count($_POST)) {
            $token = bin2hex(random_bytes(50));
            $this->model->resetPassword($_POST['mail'], $token);
            $this->mailToken($_POST['mail'], $token);
            header('location: /FamilyBrowser/de/Auth/Login');
        }

        if (isset($userToken)) {

            $isValid = $this->model->checkToken($userToken);

            if ($isValid) {
                header('location: /FamilyBrowser/de/Auth/UpdatePassword');
            }
        }

        $this->view->generate('Auth/reset_view.php', 'de/Auth/authTemplate_view.php');
    }

    public function action_UpdatePassword()
    {
        $errorText = null;
        if (isset($_POST) && count($_POST)) {
            if ($_POST['password'] != $_POST['password-confirm']) {
                $errorText = "Die Passwörter stimmen nicht überein.";
            } else if (strlen($_POST['password']) < 5) {
                $errorText = "Passwort zu kurz.";
            } else {
                $this->model = new Auth_Model;

                if ($this->model->updatePassword($_POST['login'], $_POST['password'])) {
                    header('location: /FamilyBrowser/de/Auth/Login');
                } else {
                    $errorText = "Benutzer mit gegebener E-Mail nicht gefunden";
                }
            }
        }
        $this->view->error = $errorText;
        $this->view->generate('Auth/newPassword_view.php', 'de/Auth/authTemplate_view.php');
    }

    private function mailToken($mailAdress, $token)
    {
        ini_set('SMTP', "asmtp.mail.hostpoint.ch");
        ini_set('smtp_port', "465");
        ini_set('sendmail_from', "no-reply@building360.ch");
        ini_set('password', 'nUK2E253ZJA-WG7');

        $to = $mailAdress; // 'johny@example.com, sally@example.com'; 
        $subject = 'Reset password'; //Your order was successfully added to system

        $message = '
        <html>

        <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        </head>
        
        <body>
            <div>
                <div>
                    <h3>Sehr geehrter Kunde</h3>
                </div>
        
                <br>
                <div>Sie haben diese Mail erhalten, weil wir eine Anfrage erhalten haben, das Passwort für das mit Ihrer E-Mail verbundene Konto zurückzusetzen.</div>
                <br>
                <div>Wenn Sie nicht darum gebeten haben, Ihr Passwort zurückzusetzen, ignorieren Sie diese E-Mail.</div>

                <br>
                <div>Wenn Sie Ihr Passwort zurücksetzen möchten, folgen Sie dem folgenden Link</div>
                    <div>
                        <a  href="https://help.building360.ch/FamilyBrowser/de/Auth/ResetPassword/' . $token . '">Passwort zurücksetzen</a> </div>
                    </div>                    
                <br />
               
                <br>
                <div>Mit freundlichen Grüßen,</div>
                <div>BUILDing360 Team</div>
            </div>
        </body>
        
        </html>';

        $headers = array(
            'From' => 'no-reply@building360.ch',
            'Reply-To' => 'admin@building360.ch',
            'Content-type' => 'text/html',
            'X-Mailer' => 'PHP/' . phpversion()
        );

        mail($to, $subject, $message, $headers);
    }
}
?>;