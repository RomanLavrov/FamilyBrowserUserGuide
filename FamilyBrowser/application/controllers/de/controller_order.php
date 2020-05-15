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

        //print_r($this->model->getOrders());
        print_r($order);
        print_r($this->model->createOrder($order));
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
}
