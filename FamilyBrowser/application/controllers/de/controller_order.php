<?php
class Controller_Order extends Controller{
    public function action_index(){
        $this->view->generate('order_view.php', 'de/template_view.php');
    }
}
?>