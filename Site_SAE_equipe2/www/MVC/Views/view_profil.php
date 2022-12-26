<?php require "view_begin.php"?>

<body class="bg02">
<?php require "view_navigation.php"?>
        <!-- row -->
        <div class="row tm-mt-big">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="grandblock">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Profil étudiant</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form action="" class="tm-edit-product-form">
                                <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Nom Prénom
                                    </label>
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">CHAMI Bilal
                                    </label>    
                                </div>
                                <div class="input-group mb-3">
                                    <label for="description" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Information</label>
                                    <label for="description" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">12104123 <br> Athos2022 <br> BUT info 2</label>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="expire_date" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">
                                        Dernière modification
                                    </label>
                                    <label for="expire_date" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                        14h17 - 17/11/2022
                                    </label>
                                    
                                </div>
                                <div class="input-group mb-3">
                                    <label for="category" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Etat</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" id="category">
                                        <option value="1" selected>Valider</option>
                                        <option value="2">En attente</option>
                                        <option value="3">Refuser</option>
                                    </select>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    <div class="imgbos">
                        <div>
                            <center><h4>Feuille de route</h4> </center>
                            <img src="Content/img/fichederoute.png" alt="Profile Image" class="img-fluid mx-auto d-block">
                            <div class="custom-file mt-3 mb-3">
                                <input id="fileInput" type="file" style="display:none;" />
                                <input type="button" class="btn btn-primary d-block mx-auto" value="Voir" onclick="document.getElementById('fileInput').click();"
                                />
                            </div>
                        </div>
                        <div>
                            <center><h4>Bordereau de stage </h4> </center>
                            <img src="Content/img/bordereau.png" alt="Profile Image" class="img-fluid mx-auto d-block">
                            <div class="custom-file mt-3 mb-3">
                                <input id="fileInput" type="file" style="display:none;" />
                                <input type="button" class="btn btn-primary d-block mx-auto" value="Voir" onclick="document.getElementById('fileInput').click();"
                                />
                            </div>
                        </div>
                        <!-- <div>
                            <img src="img/product-image.jpg" alt="Profile Image" class="img-fluid mx-auto d-block">
                            <div class="custom-file mt-3 mb-3">
                                <input id="fileInput" type="file" style="display:none;" />
                                <input type="button" class="btn btn-primary d-block mx-auto" value="Voir" onclick="document.getElementById('fileInput').click();"
                                />
                            </div>
                        </div> -->
                    </div>
                    <div class="confirmer">
                        <div class="input-group mb-3">
                            <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                <button type="submit" class="btn btn-primary">Confirmer
                                </button>
                            </div>
                        </div>
                        
                    </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
    </script>
<?php require "view_end.php"?>