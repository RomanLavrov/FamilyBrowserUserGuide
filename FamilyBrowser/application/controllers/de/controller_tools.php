<?php
class Controller_Tools extends Controller{
    public function action_index(){
        $this->view->generate('tools_view.php', 'de/template_view.php');
    }
}
?>