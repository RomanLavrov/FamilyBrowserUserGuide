<?php
class Controller_Main extends Controller{
    public function action_index(){
        $this->view->generate('overview_view.php', 'en/template_view.php');
    }
}
?>