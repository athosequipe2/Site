<?php

class Controller_information extends Controller
{
    public function action_information()
    {
        $m = Model::getModel();
        $data = [
            "liste" => "mot",
        ];
        $this->render("information", $data);
    }

    public function action_default()
    {
        $this->action_information();
    }
}
?>