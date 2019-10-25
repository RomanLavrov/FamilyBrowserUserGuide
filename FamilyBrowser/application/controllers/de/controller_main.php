<?php
class Controller_Main extends Controller{
    public function action_index(){
        $this->view->generate('overview_view.php', 'de/template_view.php');
    }
}
?>