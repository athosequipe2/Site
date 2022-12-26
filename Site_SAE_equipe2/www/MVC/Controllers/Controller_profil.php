<?php

class Controller_profil extends Controller
{
    public function action_profil()
    {
        $m = Model::getModel();
        $data = [
            "liste" => "mot",
        ];
        $this->render("profil", $data);
    }

    public function action_default()
    {
        $this->action_profil();
    }
}
?>