<?php require "view_begin.php" ?>

<body class="bg03">
    
<?php require "view_navigation.php" ?>

        <!-- row -->
        <div class="row tm-content-row tm-mt-big">
            <div class="tm-col tm-col-big">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title">Profil</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form action="" class="tm-signup-form">
                                <div class="form-group">
                                    <label for="name">Nom Prénom</label>
                                    <input placeholder="Vulputate Nulla" id="name" name="name" type="text" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input placeholder="vulputate@eleifend.co" id="email" name="email" type="email" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Téléphone</label>
                                    <input placeholder="0613300781" id="phone" name="phone" type="tel" class="form-control validate">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input placeholder="******" id="password" name="password" type="password" class="form-control validate">
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <button type="submit" class="btn btn-primary">Sauvegarder
                                        </button>
                                    </div>
                                    <!-- <div class="col-12 col-sm-8 tm-btn-right">
                                        <button type="submit" class="btn btn-danger">Delete Account
                                        </button>
                                    </div> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-col tm-col-small">
                <div class="bg-white tm-block">
                    <h2 class="tm-block-title">Image de Profile</h2>
                    <img src="Content/img/profile-image.png" alt="Profile Image" class="img-fluid">
                    <div class="custom-file mt-3 mb-3">
                        <input id="fileInput" type="file" style="display:none;" />
                        <input type="button" class="btn btn-primary d-block mx-xl-auto" value="changer" onclick="document.getElementById('fileInput').click();"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require "view_end.php"?>