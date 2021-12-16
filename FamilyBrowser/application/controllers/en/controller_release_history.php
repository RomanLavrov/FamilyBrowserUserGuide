<?php
class Controller_Release_History extends Controller
{
    public function action_index()
    {
        $this->view->generate('release_history_view.php', 'en/template_view.php');
    }
}
