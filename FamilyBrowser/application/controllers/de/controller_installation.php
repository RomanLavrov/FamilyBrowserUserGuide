<?php
class Controller_Installation extends Controller{
    public function action_index(){
        $this->view->generate('installation_view.php', 'de/template_view.php');
    }
}
?>