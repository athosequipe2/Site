<?php require "view_begin.php";?>

<body id="reportsPage" class="bg02">
<?php require "view_navigation.php";?>


            <!-- row -->
            <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-8 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-100">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <h2 class="tm-block-title d-inline-block">Demande de validation</h2>

                            </div>
                            <div class="col-md-4 col-sm-12 text-right">
                                <a href="?controller=compte&action=compte" class="btn btn-small btn-primary">Filtre</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped tm-table-striped-even mt-3">
                                <thead>
                                    <tr class="tm-bg-Blue">
                                        <th scope="col">Nom Prénom</th>
                                        <th scope="col" class="text-center">BOS</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $req = ["zer","dfg","fdsg","sdf","ézsdf","zer","dfg","fdsg","sdf","ézsdf"]; /** modifier */
                                    foreach($req as $val) :?>
                                    <tr>
                                        <td class="tm-product-name"><?= $val ?></td>
                                        <td class="text-center">BOS</td>
                                        <td><?= $val ?></td>

                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="tm-table-mt tm-table-actions-row">
                            <div class="tm-table-actions-col-right">
                                <span class="tm-pagination-label">Page</span>
                                <nav aria-label="Page navigation" class="d-inline-block">
                                    <ul class="pagination tm-pagination">
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <span class="tm-dots d-block">...</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">13</a></li>
                                        <li class="page-item"><a class="page-link" href="#">14</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title d-inline-block">Historique BOS</h2>
                        <table class="table table-hover table-striped mt-3">
                            <thead>
                                <tr class="tm-bg-Blue">
                                    <th scope="col">Nom Prénom</th>
                                    <th scope="col" class="text-center">Etat Validation</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $requ = ["zer","dfg","fdsg","sdf","ézsdf","zer","dfg","fdsg","sdf","ézsdf"];
                                foreach($requ as $val) :?>
                                    <tr class="tm-bg-gray">
                                        <td><?= $val?></td>
                                        <td class="tm-trash-icon-cell"><input type="checkbox" aria-label="Checkbox"/></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>

                        <a href="#" class="btn btn-primary tm-table-mt">Add New Category</a>
                    </div>
                </div>
            </div>
            <footer class="row tm-mt-small">
                <div class="col-12 font-weight-light">
                    <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                        Copyright &copy; 2018 Admin Dashboard . Created by
                        <a rel="nofollow" href="https://www.tooplate.com" class="text-white tm-footer-link">Tooplate</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('.tm-product-name').on('click', function () {
                window.location.href = "edit-product.html";
            });
        })
    </script>
</body>

</html>