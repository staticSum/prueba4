<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Estadísticos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="#">Nueva Consulta</a></li>
                        <li class="breadcrumb-item active">Top Navigation</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="far fa-chart-bar"></i>
                                        Interactive Area Chart
                                    </h3>
                                    <div class="card-tools">
                                        Real time
                                        <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                                            <button type="button" class="btn btn-default btn-sm active" data-toggle="on">On</button>
                                            <button type="button" class="btn btn-default btn-sm" data-toggle="off">Off</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="interactive" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="1262" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1262px; height: 300px;"></canvas><canvas class="flot-overlay" width="1262" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 1262px; height: 300px;"></canvas>
                                        <div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;"><svg style="width: 100%; height: 100%;">
                                                <g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><text x="28" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">0</text><text x="147.45826921559345" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">10</text><text x="270.8926126499369" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">20</text><text x="394.3269560842803" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">30</text><text x="517.7612995186238" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">40</text><text x="641.1956429529672" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">50</text><text x="764.6299863873106" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">60</text><text x="888.0643298216542" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">70</text><text x="1011.4986732559976" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">80</text><text x="1134.933016690341" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">90</text></g>
                                                <g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><text x="8.9521484375" y="269" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0</text><text x="1" y="218.2" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">20</text><text x="1" y="167.4" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">40</text><text x="1" y="116.6" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">60</text><text x="1" y="65.8" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">80</text><text x="-6.9521484375" y="15" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">100</text></g>
                                            </svg></div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="far fa-chart-bar"></i>
                                        Line Chart
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="line-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="603" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 603.5px; height: 300px;"></canvas><canvas class="flot-overlay" width="603" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 603.5px; height: 300px;"></canvas>
                                        <div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;"><svg style="width: 100%; height: 100%;">
                                                <g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><text x="37" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">0</text><text x="119.14814814814815" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">2</text><text x="201.2962962962963" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">4</text><text x="283.44444444444446" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">6</text><text x="365.5925925925926" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">8</text><text x="443.76466652199076" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">10</text><text x="525.9128146701389" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">12</text></g>
                                                <g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><text x="1" y="269" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">-1.5</text><text x="1" y="226.66666666666669" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">-1.0</text><text x="1" y="184.33333333333334" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">-0.5</text><text x="5.9765625" y="15" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">1.5</text><text x="5.9765625" y="142" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0.0</text><text x="5.9765625" y="99.66666666666667" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0.5</text><text x="5.9765625" y="57.333333333333336" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">1.0</text></g>
                                            </svg></div>
                                    </div>
                                </div>

                            </div>


                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="far fa-chart-bar"></i>
                                        Area Chart
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="area-chart" style="height: 338px; padding: 0px; position: relative;" class="full-width-chart"><canvas class="flot-base" width="641" height="338" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 641.5px; height: 338px;"></canvas><canvas class="flot-overlay" width="641" height="338" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 641.5px; height: 338px;"></canvas></div>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="far fa-chart-bar"></i>
                                        Bar Chart
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="bar-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="603" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 603.5px; height: 300px;"></canvas><canvas class="flot-overlay" width="603" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 603.5px; height: 300px;"></canvas>
                                        <div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;"><svg style="width: 100%; height: 100%;">
                                                <g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><text x="124.47274502840907" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">February</text><text x="232.56676136363635" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">March</text><text x="335.3082386363636" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">April</text><text x="435.8109463778409" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">May</text><text x="28.960271661931813" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">January</text><text x="531.3639470880681" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">June</text></g>
                                                <g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><text x="8.9521484375" y="269" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0</text><text x="8.9521484375" y="205.5" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">5</text><text x="1" y="15" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">20</text><text x="1" y="142" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">10</text><text x="1" y="78.5" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">15</text></g>
                                            </svg></div>
                                    </div>
                                </div>

                            </div>


                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="far fa-chart-bar"></i>
                                        Donut Chart
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="donut-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="603" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 603.5px; height: 300px;"></canvas><canvas class="flot-overlay" width="603" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 603.5px; height: 300px;"></canvas><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 69.5px; left: 359.703px;">
                                            <div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series2<br>30%</div>
                                        </span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 209.5px; left: 337.703px;">
                                            <div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series3<br>20%</div>
                                        </span><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 128.5px; left: 178.703px;">
                                            <div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">Series4<br>50%</div>
                                        </span></div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </section>


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->