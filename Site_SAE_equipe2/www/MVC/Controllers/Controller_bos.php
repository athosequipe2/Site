<?php

class Controller_bos extends Controller
{
    public function action_bos()
    {
        $m = Model::getModel();
        $data = [
            "liste" => "mot",
        ];
        $this->render("bos", $data);
    }

    public function action_default()
    {
        $this->action_bos();
    }
}
?>