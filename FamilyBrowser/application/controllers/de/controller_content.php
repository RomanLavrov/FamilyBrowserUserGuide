<?php
class Controller_Content extends Controller{
    public function action_index(){
        $this->view->generate('content_view.php', 'de/template_view.php');
    }
}
?>