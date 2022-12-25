<?php

class Controller_auth extends Controller
{
    public function action_auth()
    {
        $m = Model::getModel();
        $data = [
            "mes" => "mot",
        ];
        $this->render("login", $data);
    }

    public function action_default()
    {
        $this->action_auth();
    }

    public function action_login(){
        if (isset($_POST["login"]) and preg_match("/^[a-z]+$/", $_POST["login"]) and isset($_POST["mdp"]) and preg_match("/^[a-z]+$/", $_POST["mdp"])) { /***
            Modifier le preg_match
            */
            $m = Model::getModel();
            if($m->getLogin($_POST["login"])){
                if($m->getmdp($_POST["mdp"])){
                    $data = [
                        "mes" => "authentification réussi",
                    ];
                }
            }
            else{
                $data = [
                    "mes" => "Mauvais Mot de passe/Login",
                ];
            }
            
        }
        else{
            $data = [
                "mes" => "veuillez entre toutes informations",
            ];
        }
        $this->render("login",$data);
    }
}
?>