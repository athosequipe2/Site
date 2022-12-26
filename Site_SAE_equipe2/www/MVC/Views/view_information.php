<?php require "view_begin.php"?>

<body class="bg02">
<?php require "view_navigation.php"?>
        <!-- row -->
        <?php 
            $val = ["row tm-mt-big","col-xl-8 col-lg-10 col-md-12 col-sm-12","bg-white tm-block","row","col-12"];
            foreach( $val as $i) : ?>
                <div class="<?= $i ?>">
            <?php endforeach ?>
                            <h2 class="tm-block-title d-inline-block">Edit Product</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form action="" class="tm-edit-product-form">
                                <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Product
                                        Name
                                    </label>
                                    <input placeholder="Product name" value="In malesuada placerat" id="name" name="name" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="description" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Description</label>
                                    <textarea class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" rows="3" placeholder="Product Description" required>Fusce finibus dui tellus, at viverra dui dignissim hendrerit. Sed a varius nulla. Donec auctor consectetur nulla.</textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="category" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Category</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" id="category">
                                        <option value="1" selected>Cras efficitur lacus</option>
                                        <option value="2">Pellentesque molestie</option>
                                        <option value="3">Sed feugiat nulla</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="expire_date" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Expire
                                        Date
                                    </label>
                                    <input placeholder="Expire Date" value="2018-10-28" id="expire_date" name="expire_date" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"
                                        data-large-mode="true">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="stock" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Units In
                                        Stock
                                    </label>
                                    <input placeholder="Stock" value="255" id="stock" name="stock" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <button type="submit" class="btn btn-primary">Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 mx-auto mb-4">
                            <img src="Content/img/product-image.jpg" alt="Profile Image" class="img-fluid mx-auto d-block">
                            <div class="custom-file mt-3 mb-3">
                                <input id="fileInput" type="file" style="display:none;" />
                                <input type="button" class="btn btn-primary d-block mx-auto" value="Upload ..." onclick="document.getElementById('fileInput').click();"
                                />
                            <?php 
                            foreach( $val as $il) : ?>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
    </script>
<?php require "view_end.php"?>