<!DOCTYPE html>
<script src="./dist/echarts4.min.js"></script>
<script src="./dist/echarts-gl11.min.js"></script>
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.44.1/mapbox-gl.js'></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>
<script src="./init-firebase.js"></script>
<script type="text/javascript" src="./dist/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="./dist/jquery.toast.min.js"></script>
<script src="./dist/turf.min.js" charset="utf-8"></script>
<script src="./dist/simplex-noise.js"></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.44.1/mapbox-gl.css' rel='stylesheet' />
<link type="text/css" rel="stylesheet" href="./css/style.css?v=1">
<link type="text/css" rel="stylesheet" href="./dist/jquery.toast.min.css">
<link rel="stylesheet" href="css/bootstrap.css">
<!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script> -->
<script src="dist/jquery-3.2.1.min.js"></script>
<script src="dist/bootstrap.min.js"></script>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>智慧空間互動程式設計</title>
</head>

<body scroll="no" style="overflow: y">
    <?php
    include('navbar.php');
    ?>
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-primary">Dashboard</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-usd f-s-40 color-primary"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2>568120</h2>
                                <p class="m-b-0">Total Revenue</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-shopping-cart f-s-40 color-success"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2>1178</h2>
                                <p class="m-b-0">Sales</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2>25</h2>
                                <p class="m-b-0">Stores</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2>847</h2>
                                <p class="m-b-0">Customer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row bg-white m-l-0 m-r-0 box-shadow ">

                <!-- column -->
                <div id="carouselExampleInterval" class="col-lg-8 carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="dist/img/1.jpeg" width="700" height="350" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="dist/img/2.jpeg" width="700" height="350" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="dist/img/3.jpeg" width="700" height="350" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- column -->

                <!-- column -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body browser">
                            <p class="f-w-600">iMacs <span class="pull-right">85%</span></p>
                            <div class="progress ">
                                <div role="progressbar" style="width: 85%; height:8px;" class="progress-bar bg-danger wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                            </div>

                            <p class="m-t-30 f-w-600">iBooks<span class="pull-right">90%</span></p>
                            <div class="progress">
                                <div role="progressbar" style="width: 90%; height:8px;" class="progress-bar bg-info wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                            </div>

                            <p class="m-t-30 f-w-600">iPhone<span class="pull-right">65%</span></p>
                            <div class="progress">
                                <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                            </div>

                            <p class="m-t-30 f-w-600">Samsung<span class="pull-right">65%</span></p>
                            <div class="progress">
                                <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-warning wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                            </div>

                            <p class="m-t-30 f-w-600">android<span class="pull-right">65%</span></p>
                            <div class="progress m-b-30">
                                <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column -->
            </div>




            <!-- TODO: -->
            <!-- <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Todo</h4>
                            <div class="card-content">
                                <div class="todo-list">
                                    <div class="tdl-holder">
                                        <div class="tdl-content">
                                            <ul>
                                                <li>
                                                    <label>
                                                        <input type="checkbox"><i class="bg-primary"></i><span>Build
                                                            an angular app</span>
                                                        <a href='#' class="ti-close"></a>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" checked><i class="bg-success"></i><span>Creating component
                                                            page</span>
                                                        <a href='#' class="ti-close"></a>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" checked><i class="bg-warning"></i><span>Follow back those who
                                                            follow you</span>
                                                        <a href='#' class="ti-close"></a>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" checked><i class="bg-danger"></i><span>Design One page theme</span>
                                                        <a href='#' class="ti-close"></a>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label>
                                                        <input type="checkbox" checked><i class="bg-success"></i><span>Creating component
                                                            page</span>
                                                        <a href='#' class="ti-close"></a>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <input type="text" class="tdl-new form-control" placeholder="Type here">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->




            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->

    </div>
    <!-- End Page wrapper  -->


</body>