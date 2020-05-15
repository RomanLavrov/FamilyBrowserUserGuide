<?php
class Controller_Order extends Controller{
    public function action_index(){
        $this->view->generate('order_view.php', 'en/template_view.php');
    }

    public function action_Submit(){
        $data = $_POST;
        //$order = json_decode($data);
        $response =  json_encode($data);
        echo ($response);        
    }
}
?>