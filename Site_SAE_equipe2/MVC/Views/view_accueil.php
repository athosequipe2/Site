<?php require "view_begin.php";?>

<body id="reportsPage">

<?php require "view_navigation.php";?>

            <!-- row -->
            <div class="row tm-content-row tm-mt-big">
                <div class="tm-col tm-col-big">
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title">Latest Hits</h2>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
                <div class="tm-col tm-col-big">
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title">Performance</h2>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
                <div class="tm-col tm-col-small">
                    <div class="bg-white tm-block h-100">
                        <canvas id="pieChart" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
                <?php
                $tab = ["tm-col tm-col-big","bg-white tm-block h-100","row","col-8"];
                foreach($tab as $val) :?>
                    <div class="<?= $val?>">
                <?php endforeach ?>
                        <h2 class="tm-block-title d-inline-block">Top Product List</h2>
                    </div>
                    <div class="col-4 text-right">
                        <a href="?controller=bos&action=bos" class="tm-link-black">View All</a>
                    </div>
                </div>
                <ol class="tm-list-group tm-list-group-alternate-color tm-list-group-pad-big">
                <?php
                    $tab = ["Donec eget libero","Nunc luctus suscipit elementum","Maecenas eu justo maximus","ellentesque auctor urna nunc","Sit amet aliquam lorem efficitur","Pellentesque auctor urna nunc","Sit amet aliquam lorem efficitur"];
                    foreach($tab as $val) :?>
                        <li class="tm-list-group-item"><?= $val?></li>
                    <?php endforeach ?>
                        </ol>
                    </div>
                </div>
                <div class="tm-col tm-col-big">
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title">Calendier</h2>
                        <div id="calendar"></div>
                        <div class="row mt-4">
                            <div class="col-12 text-right">
                                <a href="#" class="tm-link-black">View Schedules</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tm-col tm-col-small">
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title">Upcoming Tasks</h2>
                        <ol class="tm-list-group">
                        <?php
                            $tab = ["List of tasks","Lorem ipsum doloe","Read reports","Write email<","Call customersr","Go to meeting","Weekly plan","Ask for feedback","Meet Supervisor","Company trip"];
                            foreach($tab as $val) :?>
                                <li class="tm-list-group-item"><?= $val?></li>
                            <?php endforeach ?>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php require "view_copy.php"?>
    </div>
    <script src="Content/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="Content/js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="Content/js/utils.js"></script>
    <script src="Content/js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="Content/js/fullcalendar.min.js"></script>
    <!-- https://fullcalendar.io/ -->
    <script src="Content/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="Content/js/tooplate-scripts.js"></script>
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
