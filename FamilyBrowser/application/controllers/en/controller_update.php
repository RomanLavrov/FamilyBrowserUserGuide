<?php
class Controller_Update extends Controller{
    public function action_index(){
        $this->view->generate('update_view.php', 'en/template_view.php');
    }
}
?>