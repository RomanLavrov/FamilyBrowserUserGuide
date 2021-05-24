<?php

class Controller_Account_Management extends Controller{
    public function action_index(){
        $this->view->generate('accountManagement_view.php', 'de/template_view.php');
    }
}