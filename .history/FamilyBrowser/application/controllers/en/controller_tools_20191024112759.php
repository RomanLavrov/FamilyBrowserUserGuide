<?php
class Controller_Tools extends Controller{
    public function action_index(){
        $this->view->generate('content_view.php', 'en/template_view.php');
    }
}
?>