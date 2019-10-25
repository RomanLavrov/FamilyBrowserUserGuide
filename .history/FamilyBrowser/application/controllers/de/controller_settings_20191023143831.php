<?php
class Controller_Faq extends Controller{
    public function action_index(){
        $this->view->generate('faq_view.php', 'de/template_view.php');
    }
}
?>