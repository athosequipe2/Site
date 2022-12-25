<?php require "view_begin.php"?>

<body class="bg03">
    <?php 
    $tab = ["container","row tm-mt-big","col-12 mx-auto tm-login-col","bg-white tm-block","row","col-12 text-center"];
    foreach($tab as $val) :?>
        <div class="<?= $val?>">
    <?php endforeach ?>
    <object data="Content/img/1200px-Uspn.png" width="325" height="200"> </object>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12">
                <form action="?controller=acceuil&action=acceuil"
                 method="post" class="tm-login-form">
                    <div class="input-group">
                        <label for="username" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Identifiant</label>
                        <input name="username" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="username" value="Identifiant" required>
                    </div>
                    <div class="input-group mt-3">
                        <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Mot de passe</label>
                        <input name="password" type="password" class="form-control validate" id="password" value="1234" required>
                    </div>
                    <div class="input-group mt-3">
                        <button type="submit" class="btn btn-primary d-inline-block mx-auto">Connexion</button>
                    </div>
                    <div class="input-group mt-3">
                        <p><a href="">Mot de passe oublié /</a></p>
                        <p><a href="">obtenir mes identifiants</a></p>
                    </div>
                </form>
        <?php foreach($tab as $val) :?>
            </div>
        <?php endforeach ?>

<?php require "view_end.php"?>