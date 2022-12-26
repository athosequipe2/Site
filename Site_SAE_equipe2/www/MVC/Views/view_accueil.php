<?php require "view_begin.php";?>

<body id="reportsPage">

<?php require "view_navigation.php";?>

            <!-- row -->
        

            <div class="row tm-content-row tm-mt-big">
            <div class="tm-col tm-col-big">
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title">Aperçu du BOS</h2>
                            <div class="table-responsive">
                                <table class="table table-hover table-striped tm-table-striped-even mt-3">
                                    <thead>
                                        <tr class="tm-bg-Blue">
                                            <th scope="col">Nom Prénom</th>
                                            <th scope="col" class="text-center">BOS</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody id ="myTable">
                                        <?php
                                        $tab = [["CHAMI Bilal","2018-10-28"],
                                        ["FRATILA Adriana "	,	"2018-10-24"],
                                        ["JIE Juan","2018-10-28"],
                                        ["CHAMI Bilal",	"2018-10-28"],
                                        ["FRATILA Adriana ","2018-10-24"],
                                        ["JIE Juan ","2018-10-28"]];
                                        foreach($tab as $val) :?>
                                        <tr>
                                            <td class="tm-product-name"><?= $val[0]?></td>
                                            <td class="text-center">BOS</td>
                                            <td><?= $val[1]?></td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
                <?php
                $tab = ["tm-col tm-col-big","bg-white tm-block h-100","row","col-8"];
                foreach($tab as $val) :?>
                    <div class="<?= $val?>">
                <?php endforeach ?>
                        <h2 class="tm-block-title d-inline-block">Administration</h2>
                    </div>
                    <div class="col-4 text-right">
                        <a href="https://youtu.be/dQw4w9WgXcQ" class="tm-link-black">petite surprise ?</a>
                    </div>
                </div>
                <ol class="tm-list-group tm-list-group-alternate-color tm-list-group-pad-big">
                <?php
                    $tab = [
                    "Offre de Stage",
                    "Réunion - Mercredi à 23h00 /!",
                    "Offre de Stage",
                    "Offre de Stage",
                    "Réunion - Lundi à 13h00 /!",
                    "Réunion - Jeudi à 8h30 /!",
                    "Offre de Stage",
                    ];
                    foreach($tab as $val) :?>
                        <li class="tm-list-group-item"><?= $val?></li>
                    <?php endforeach ?>
                        </ol>
                    </div>
                </div>
                <div class="tm-col tm-col-small">
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title">Dernière notification</h2>
                        <ol class="tm-list-group">
                            <li class="tm-list-group-item">List of tasks</li>
                            <li class="tm-list-group-item">Lorem ipsum doloe</li>
                            <li class="tm-list-group-item">Read reports</li>
                            <li class="tm-list-group-item">Write email</li>
                            
                            <li class="tm-list-group-item">Call customers</li>
                            <li class="tm-list-group-item">Go to meeting</li>
                            <li class="tm-list-group-item">Weekly plan</li>
                            <li class="tm-list-group-item">Ask for feedback</li>
                            
                            <li class="tm-list-group-item">Meet Supervisor</li>
                            <li class="tm-list-group-item">Company trip</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            updateChartOptions();
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart
            drawCalendar(); // Calendar

            $(window).resize(function () {
                updateChartOptions();
                updateLineChart();
                updateBarChart();
                reloadPage();
            });
        })
    </script>
<?php require "view_end.php";?>
