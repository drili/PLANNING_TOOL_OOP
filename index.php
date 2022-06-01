<?php
    // *** Set current directory
    $currentDirectory = ".";
    $activePage = "active-dashboard";

    // *** Require global files (header)
    require_once dirname( __FILE__ ) . '/' . 'template-parts/header.php';
?>

<div class="grid-x grid-x-main animate__animated animate__slideInUp grid-x-outter-dashboard">
    <div class="cell small-9">
        <div class="grid-x grid-x-full">
            <div class="cell small-12">
                <h1>Dashboard</h1>
            </div>
        </div>

        <div class="grid-x grid-x-full grid-x-margin">
            <div class="cell small-12 medium-12 large-12 xlarge-4 cell-position-start">
                <div class="card-box">
                    <div class="card-box-left">
                        <i class="bi bi-activity"></i>
                    </div>

                    <div class="card-box-right">
                        <h5>Your registered time this week</h5>
                        <h3>52.25 hours</h3>
                        <h6>12.12 (8%) hours remaining</h6>
                    </div>

                    <div class="card-box-percentage-circle">
                        <p>55%</p>
                    </div>
                </div>
            </div>

            <div class="cell small-12 medium-12 large-12 xlarge-4 cell-position-center">
                <div class="card-box">
                    <div class="card-box-left">
                        <i class="bi bi-activity"></i>
                    </div>

                    <div class="card-box-right">
                        <h5>Your registered time this week</h5>
                        <h3>152.25 hours</h3>
                        <h6>12.12 (8%) hours remaining</h6>
                    </div>

                    <div class="card-box-percentage-circle">
                        <p>100%</p>
                    </div>
                </div>
            </div>

            <div class="cell small-12 medium-12 large-12 xlarge-4 cell-position-end">
                <div class="card-box">
                    <div class="card-box-left">
                        <i class="bi bi-activity"></i>
                    </div>

                    <div class="card-box-right">
                        <h5>Your registered time this week</h5>
                        <h3>52.25 hours</h3>
                        <h6>12.12 (8%) hours remaining</h6>
                    </div>

                    <div class="card-box-percentage-circle">
                        <p>55%</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-x grid-x-full grid-x-box grid-x-margin">
            <div class="cell small-12 xlarge-5">
                <div class="table-box-outter">
                    <h3>Time registrations</h3>
                    <div class="table-box">
                        <table>
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Allocations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Monday</td>
                                    <td>100</td>
                                    <td class="table-allocations-percentages">
                                        <p class="table-internal-allocation">25%</p>
                                        <p class="table-external-allocation">75%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tuesday</td>
                                    <td>80</td>
                                    <td class="table-allocations-percentages">
                                        <p class="table-internal-allocation">25%</p>
                                        <p class="table-external-allocation">75%</p>
                                    </td>
                                </tr>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <td>Sum</td>
                                    <td>180</td>
                                    <td class="table-allocations-percentages">
                                        <p class="table-internal-allocation">25%</p>
                                        <p class="table-external-allocation">75%</p>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="table-box-after">
                        <h6 class="int-time">Internal Time</h6>
                        <h6 class="ext-time">External Time</h6>
                    </div>
                </div>
            </div>

            <div class="cell small-12 xlarge-7">
                <h5>Your time registrations this week</h5>
                <div id="curve_chart" class="chart-custom" style="width: 100%; height: 400px"></div>
            </div>
        </div>
    </div>

    <div class="cell small-12 xlarge-3 cell-widget-right" style="margin-top: 80px;z-index:-1;">
        <div class="card-box-widget">
            <div class="settings-title">
                <h3>Dashboard settings</h3>
                <i class="bi bi-gear"></i>
            </div>

            <div class="settings-filters">
                <p class="text-color-main">Sprint filters</p>

                <div class="settings-filters-box">
                    <div class="settings-filter-by-sprint">
                        <h4 class="text-bold">Filter by date</h4>
                    </div>

                    <div class="settings-filter-by-sprint">
                        <h4 class="text-bold">Filter by sprint</h4>
                    </div>

                    <div class="settings-filter-by-sprint">
                        <h4 class="text-bold">Filter by task type</h4>
                    </div>

                    <div class="settings-filter-by-sprint">
                        <h4 class="text-bold">Filter by vertical</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    // *** Require global files (footer)
    require_once dirname( __FILE__ ) . '/' . 'template-parts/footer.php';
?>

<!-- *** Google Charts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var chartwidth = $('#curve_chart').width();

        var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales', 'Expenses'],
            ['2004',  1000,      400],
            ['2005',  1170,      460],
            ['2006',  660,       1120], 
            ['2007',  1030,      540],
            ['2008',  1030,      240]
        ]);

        var options = {
            width: chartwidth,
            curveType: 'function',
            legend: { position: 'bottom' },
            colors: ['#6363FC', "#01152e"],
            chartArea: {width:chartwidth,left:80,top:50,right:50,bottom:100,height:300},
            backgroundColor: "#f1f1f1"
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
    }
</script>