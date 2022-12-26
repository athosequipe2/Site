<?php

class Controller_etudiant extends Controller
{
    public function action_etudiant()
    {
        $m = Model::getModel();
        $data = [
            "liste" => "mot",
        ];
        $this->render("etudiant", $data);
    }

    public function action_default()
    {
        $this->action_etudiant();
    }
}
?>