<?php
class Controller_Architecture extends Controller{
    public function action_index(){
        $this->view->generate('architecture_view.php', 'de/template_view.php');
    }
}
?>