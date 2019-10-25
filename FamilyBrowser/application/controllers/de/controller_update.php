<?php
class Controller_Update extends Controller{
    public function action_index(){
        $this->view->generate('update_view.php', 'de/template_view.php');
    }
}
?>