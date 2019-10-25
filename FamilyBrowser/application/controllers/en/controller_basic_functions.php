<?php
class Controller_Basic_Functions extends Controller{
    public function action_index(){
        $this->view->generate('basic_functions_view.php', 'en/template_view.php');
    }
}
?>