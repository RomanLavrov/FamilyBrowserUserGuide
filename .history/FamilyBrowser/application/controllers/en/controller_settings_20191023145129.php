<?php
class Controller_Settings extends Controller{
    public function action_index(){
        $this->view->generate('interface_view.php', 'en/settings_view.php');
    }
}
?>