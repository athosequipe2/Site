<?php

class Controller_acceuil extends Controller
{
    public function action_acceuil()
    {
        $m = Model::getModel();
        $data = [
                "liste" => "moi",
        ];
        $this->render("accueil", $data);
    }

    public function action_default()
    {
        $this->action_acceuil();
    }
}

?>