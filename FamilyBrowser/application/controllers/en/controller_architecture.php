<?php
class Controller_Architecture extends Controller{
    public function action_index(){
        $this->view->generate('architecture_view.php', 'en/template_view.php');
    }
}
?>