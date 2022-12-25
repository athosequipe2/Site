<?php

class Controller_compte extends Controller
{
    public function action_compte()
    {
        $m = Model::getModel();
        $data = [
            "liste" => "mot",
        ];
        $this->render("compte", $data);
    }

    public function action_default()
    {
        $this->action_compte();
    }
}
?>