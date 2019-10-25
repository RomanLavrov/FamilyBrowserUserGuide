<?php
class Controller_Overview extends Controller{
    public function action_index(){
        $this->view->generate('overview_view.php', 'de/template_view.php');
    }
}
?>