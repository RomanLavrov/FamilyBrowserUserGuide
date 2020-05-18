<?php
require_once("./application/models/model_orders.php");

class Controller_Order extends Controller
{
    public function action_index()
    {
        $this->view->generate('order_view.php', 'en/template_view.php');
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
        print_r($order['mail']);
        $orderId = $this->model->createOrder($order);
        $this->mailOrder($order['mail'], $orderId);
        $this->mailManager($orderId);
        $this->view->orders = $this->model->getOrders();
        $this->view->generate('orderStatus_view.php', 'en/template_view.php');
    }

    public function action_Status()
    {
        $this->model = new Order_Model;
        //print_r($this->model->getOrders());
        $this->view->orders = $this->model->getOrders();
        $this->view->generate('orderStatus_view.php', 'en/template_view.php');
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

        $to = $mailAdress; // 'johny@example.com, sally@example.com'; 
        $subject = 'Family order BUILDing360'; //Your order was successfully added to system

        $message = '
        <html>

        <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        </head>
        
        <body>
            <div>
                <div>
                    <h3>Dear client</h3>
                </div>
        
                <br />
                <div>Thank you for using BUILDing360 service to order family for your project</div>
                <div>Your Family order was succesfully added to the system with number</div>
                <div >
                    <br>
                    <h5>'.$orderId.'</h5>
                    <br>
                </div>
                <div>Progress in your order processing you can check on our website.</div>
                <br />
                <div >
                    <div>
                        <a  href="https://help.building360.ch/FamilyBrowser/en/Order/Submit">Check order status</a> </div>
                    </div> <br />
                <div>When work on your order will be finished you will have a mail notification</div>
                <br>
                <div>Best Regards,</div>
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
            <h3>Dear Manager<h3>
            <br>
            <div>
                New family order with number ' . $orderId . ' was just placed. 
                Please review the order and give a feedback to the client
            </div>

            <div>
                <a  href="https://help.building360.ch/FamilyBrowser/en/Order/Submit">Bestellstatus prüfen</a> </div>
            </div> 
             <br />
            <div>Best regards,</div>
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
