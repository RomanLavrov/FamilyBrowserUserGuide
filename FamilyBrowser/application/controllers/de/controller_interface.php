<?php
class Controller_Interface extends Controller{
    public function action_index(){
        $this->view->generate('interface_view.php', 'de/template_view.php');
    }
}
?>