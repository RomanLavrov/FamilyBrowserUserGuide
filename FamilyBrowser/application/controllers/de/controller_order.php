<?php
require_once("./application/models/model_orders.php");

class Controller_Order extends Controller
{
    public function action_index()
    {
        $this->view->generate('order_view.php', 'de/template_view.php');
    }

    public function action_Submit()
    {
        $order = $_POST;

        foreach ($_FILES  as $fileId => $file) {
            $order[$fileId] = "No File";
            if ($file['size'] != 0) {
                $order[$fileId] = $this->UploadFile($file);
            }
        }

        $this->model = new Order_Model;

        $orderId = $this->model->createOrder($order);
        $this->mailOrder($_POST['mail'], $orderId);
        $this->mailManager($orderId);
        $this->view->orders = $this->model->getOrders();
        $this->view->generate('orderStatus_view.php', 'de/template_view.php');
    }

    public function action_Status()
    {
        $this->model = new Order_Model;
        //print_r($this->model->getOrders());
        $this->view->orders = $this->model->getOrders();
        $this->view->generate('orderStatus_view.php', 'de/template_view.php');
    }

    function UploadFile($file)
    {
        $targetDir = "./application/orderFilesUploads/";
        $uniqueFileName = uniqid(true) . basename($file['name']);
        $targetFile = $targetDir . $uniqueFileName;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        if (
            $fileType == "jpg" ||
            $fileType == "png" ||
            $fileType == "jpeg" ||
            $fileType == "gif" ||
            $fileType == "pdf" ||
            $fileType == "doc" ||
            $fileType == "docx" ||
            $fileType == "xls" ||
            $fileType == "xlsx"
        ) {

            if (move_uploaded_file($file["tmp_name"], $targetFile)) {
                return ($uniqueFileName);
            } else {
                echo ('File not uploaded');
            }
        }
    }

    function mailOrder($mailAdress, $orderId)
    {
        ini_set('SMTP', "asmtp.mail.hostpoint.ch");
        ini_set('smtp_port', "465");
        ini_set('sendmail_from', "no-reply@building360.ch");
        ini_set('password', 'nUK2E253ZJA-WG7');

        $to = $mailAdress;// 'johny@example.com, sally@example.com'; 
        $subject = 'Familie bestellen BUILDing360'; //Your order was successfully added to system

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
        
                <br />
                <div>Vielen Dank, dass Sie den BUILDing360-Service nutzen, um Familien für Ihr Projekt zu bestellen</div>
                <div>Ihre Familienbestellung wurde erfolgreich in das System aufgenommen mit der Nummer</div>
                <div >
                    <br>
                    <h5>' . $orderId . '</h5>
                    <br>
                </div>
                <div>Den Fortschritt bei der Bearbeitung Ihrer Bestellung können Sie auf unserer Website überprüfen.</div>
                <br />
                <div >
                    <div>
                        <a  href="https://help.building360.ch/FamilyBrowser/en/Order/Submit">Bestellstatus prüfen</a> </div>
                    </div> <br />
                <div>Wenn die Arbeit an Ihrem Auftrag abgeschlossen ist, erhalten Sie eine E-Mail-Benachrichtigung</div>
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

    function mailManager($orderId)
    {
        ini_set('SMTP', "asmtp.mail.hostpoint.ch");
        ini_set('smtp_port', "465");
        ini_set('sendmail_from', "no-reply@building360.ch");
        ini_set('password', 'nUK2E253ZJA-WG7');

        $to = 'roman.lavrov@hhm.ch'; // 'johny@example.com, sally@example.com'; 
        $subject = 'Neue Familienordnung'; //Your order was successfully added to system

        $message = '
        <html>

        <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        </head>
        
        <body>
            <h3>Sehr geehrter Manager<h3>
            <br>
            <div>
                Neue Familienbestellung mit Nummer ' . $orderId . ' wurde soeben aufgegeben. 
                Bitte überprüfen Sie die Bestellung und geben Sie dem Kunden eine Rückmeldung.
            </div>

            <div>
                <a  href="https://help.building360.ch/FamilyBrowser/en/Order/Submit">Bestellstatus prüfen</a> </div>
            </div> 
             <br />
            <div>Mit freundlichen Grüßen,</div>
            <div>BUILDing360 Team</div>
        </body>
        </html>
        ';

        $headers = array(
            'From' => 'no-reply@building360.ch',
            'Reply-To' => 'admin@building360.ch',
            'Content-type' => 'text/html',
            'X-Mailer' => 'PHP/' . phpversion()
        );

        mail($to, $subject, $message, $headers);
    }
}
