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
                                <a href="" class="btn btn-small btn-primary">Filtre</a>
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
                                    $tab = [["CHAMI Bilal","2018-10-28"],
                                    ["FRATILA Adriana"	,	"2018-10-24"],
                                    ["JIE Juan","2018-10-28"],
                                    ["CHAMI Bilal",	"2018-10-28"],
                                    ["FRATILA Adriana","2018-10-24"],
                                    ["JIE Juan ","2018-10-28"],["CHAMI Bilal","2018-10-28"],
                                    ["FRATILA Adriana"	,	"2018-10-24"],
                                    ["JIE Juan","2018-10-28"],
                                    ["CHAMI Bilal",	"2018-10-28"],
                                    ["FRATILA Adriana","2018-10-24"],
                                    ["JIE Juan ","2018-10-28"]];
                                    foreach($tab as $val) :?>
                                    <tr>
                                        <td class="tm-product-name"><?= $val[0]?></td>
                                        <td class="text-center">BOS</td>
                                        <td><?= $val[1]?></td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
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
                            <?php $requ = ["CHAMI Bilal",
                                    "FRATILA Adriana",
                                    "JIE Juan ",
                                   " CHAMI Bilal ",
                                    "FRATILA Adriana",
                                    "JIE Juan ",
                                   " CHAMI Bilal ",
                                    "FRATILA Adriana",
                                    "JIE Juan ",
                                   " CHAMI Bilal ",
                                    "FRATILA Adriana"];
                                foreach($requ as $val) :?>
                                    <tr class="tm-bg-gray">
                                        <td><?= $val?></td>
                                        <td class="tm-trash-icon-cell"><input type="checkbox" aria-label="Checkbox"/></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $('.tm-product-name').on('click', function () {
                window.location.href = "?controller=profil&action=profil"; <?php /*probléme*/?>
            });
        })
    </script>
</body>

</html>