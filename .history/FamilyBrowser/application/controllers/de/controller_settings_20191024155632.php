<?php
class Controller_Settings extends Controller{
    public function action_index(){
      $this->view->generate('settings_view.php', 'de/template_view.php');    
    }
}
?>