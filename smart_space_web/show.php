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
    <title>作品展示</title>
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
                <div class="col-lg-8" data-bs-ride="carousel">

                    <!--  雷達圖  -->
                    <div id='chart4'>
                    </div>

                    <!-- 高度折線圖 -->
                    <div id="chart2" style="display:none;">
                    </div>

                    <!-- 無人機路徑圖 -->
                    <div id="chart3">
                    </div>


                </div>
                <!-- column -->

                <!-- column -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body browser">
                            <p class="f-w-600">機器目前高度 <span id="machine-h" class="pull-right">100m</span></p>

                            <p class="m-t-30 f-w-600">無人機目前經度<span class="pull-right" id="machine-x">120</span></p>


                            <p class="m-t-30 f-w-600">無人機目前緯度<span class="pull-right" id="machine-y">23.5</span></p>


                            <p class="m-t-30 f-w-600">無人機目前電量<span class="pull-right">65%</span></p>
                            <div class="progress">
                                <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-danger wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                            </div>

                            <p class="m-t-30 f-w-600">無人機偵測亮度<span id="light-content" class="pull-right">50%</span></p>
                            <div class="progress m-b-30">
                                <div id="light-progress" role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-warning wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column -->
            </div>


        </div>
        <!-- End Container fluid  -->

    </div>
    <!-- End Page wrapper  -->



    <script type="module" src="node_modules/dist/echarts.js"></script>
    <script type="text/javascript">
        mapboxgl.accessToken = 'pk.eyJ1IjoiYmlhYm9ibyIsImEiOiJjamVvejdlNXQxZnBuMndtdWhiZHRuaTNpIn0.PIS9wtUxm_rz_IzF2WFD1g';

        var chart2 = echarts.init(document.getElementById('chart2'));
        var chart3 = echarts.init(document.getElementById('chart3'));
        var chart4 = echarts.init(document.getElementById('chart4'));

        var currentCoord = [21.90186712, 120.8523732];
        var currentZoom = 17;
        var currentPitch = 60;
        var labels = ['data1', 'data2', 'data3', 'data4', 'data5', 'data6', 'data7', 'data8', 'data9', 'data10'];
        var bar3DData = createRandomBar3DData();

        var flight_plan_height = 50;
        var flight_plan_path = [];
        var flight_path_point_data = [];

        var tempDatas = []
        var humidityDatas = []
        var heightDatas = []
        var database = firebase.database();

        var data = [];

        var pathData = [];

        var p1 = []
        var p2 = []
        var nodes = []

        // var data3 = [];
        // // Parametric curve
        // for (var t = 0; t < 25; t += 0.001) {
        //     var x = (1 + 0.25 * Math.cos(75 * t)) * Math.cos(t);
        //     var y = (1 + 0.25 * Math.cos(75 * t)) * Math.sin(t);
        //     var z = t + 2.0 * Math.sin(75 * t);
        //     data3.push([x, y, z]);
        // }


        /**
         * 先從csv 
         */
        //    $.ajax({
        //        url:'file_path.csv',
        //        success: function (response) {
        //             console.log(response)
        //             //按回車拆分  
        //             response = response.split("\r\n");
        //             //第一行標題  
        //             var title = response[0].split(",");
        //             //刪除第一行  
        //             response.shift();
        //             for (var i = 0; i < response.length-1; i++) {//最後一行爲空行也會被讀取 -1
        //                 var t = response[i].split(",");
        //                 // x
        //                 flight_plan_path.push([t[0],t[1]],t[2])

        //             }
        //        }
        //    })

        function showData(data) {
            var pm25 = data["pm25"];
            var no2 = data["no2"];
            var so2 = data["so2"];
            var co = data["co"];
            var o3 = data["o3"];
            var pm100 = data["pm100"];
            var temperature = data["temperature"];
            var humidity = data["humidity"];
            var data_time = data["time"];
            var coords = data["coords"];
            var light = data["light"]
            // For 折線圖高度


            let threeDDatas = data["threeDdatas"];

            tempDatas.push(create2DData(temperature, data_time));
            humidityDatas.push(create2DData(humidity, data_time));
            heightDatas.push(create2DData(coords[2], data_time));
            pathData.push([coords[0], coords[1], coords[2]]);
            //建立 

            if (p1.length == 0) {
                p1 = [coords[0], coords[1], coords[2]];
            } else {
                p2 = [p1[0], p1[1], p1[2]];
                p1 = [coords[0], coords[1], coords[2]];
            }
            /**
             * 更新dashboard資訊
             */
            $('#machine-x').html(coords[1]);
            $('#machine-y').html(coords[0]);
            $('#machine-h').html(coords[2]);
            $('#light-content').html(light);
            $('#light-progress').css('width', light + "%");
            chart2.setOption(get2DOption(heightDatas, humidityDatas));

            // createNodes(p1, p2);
            chart3.setOption(get3DCirclePath(nodes));


            // for (let i = 0; i < nodes.length; i++) {
            //     let n = [nodes[i][0], nodes[i][1], nodes[i][2]]
            //     flight_path_point_data.push(createFlightPointsData(n, pm25));
            // }

            flight_path_point_data.push(createFlightPointsData(coords, light));
            chart4.setOption(getFlightData3D(flight_path_point_data));

        }

        function createCircle() {

        }

        function listenFirebaseData() {

            var ref = database.ref('datas/');

            ref.on('value', function(snapshot) {
                // console.log(snapshot.val())
                showData(snapshot.val());
            });
        }

        function createRandomBar3DData() {
            rbdatas = [];
            for (var i = 0; i < 5; i++) {
                for (var j = 0; j < 10; j++) {
                    rbdatas.push([i, j, getRandom(0, 30)])
                }
            }
            return rbdatas
        }

        function getRandom(min, max) {
            return Math.floor(Math.random() * max) + min;
        };

        function create2DData(value, data_time) {
            return {
                name: data_time,
                value: [
                    data_time,
                    value
                ]
            }
        }

        function createNoiseData() {
            var noise = new SimplexNoise(Math.random);
            var noise_data = [];
            for (var i = 0; i <= 30; i++) {
                for (var j = 0; j <= 50; j++) {
                    var value = noise.noise2D(i / 20, j / 20) * 40 + 40;
                    noise_data.push(value);
                }
            }
            return noise_data;
        }

        function createFlightPointsData(coords, value) {
            var coord_data = {
                name: '',
                value: [coords[1], coords[0], coords[2], value],
                itemStyle: {
                    'color': 'white',
                    'opacity': 0.8,
                    'borderWidth': 1,
                    'borderColor': 'green'
                }
            }
            return coord_data;
        }

        function createNodes(p1, p2) {
            if (p2.length == 0) {
                nodes.push([p1[0], p1[1], p1[2]]);
                return true;
            }

            for (let i = 0; i < 100; i++) {
                let x = parseFloat(p1[0]) + i / 100 * (parseFloat(p2[0]) - parseFloat(p1[0]));
                let y = parseFloat(p1[1]) + i / 100 * (parseFloat(p2[1]) - parseFloat(p1[1]));
                let z = parseFloat(p1[2]) + i / 100 * (parseFloat(p2[2]) - parseFloat(p1[2]));
                nodes.push([String(x), String(y), String(z)]);
            }
        }

        function get2DOption(temp_data, humidity_data) {
            return option = {
                title: {
                    text: '無人機高度圖'
                },
                tooltip: {
                    trigger: 'axis',
                    formatter: function(params) {
                        params = params[0];
                        var date = new Date(params.name);
                        return date.getDate() + '/' + (date.getMonth() + 1) + '/' + date.getFullYear() + ' : ' + params.value[1];
                    },
                    axisPointer: {
                        animation: false
                    }
                },
                xAxis: {
                    type: 'time',
                    splitLine: {
                        show: true
                    }
                },
                yAxis: {
                    type: 'value',
                    boundaryGap: [0, '100%'],
                    max: 100,
                    min: 0,
                    splitLine: {
                        show: false
                    }
                },
                legend: {
                    data: ['高度'],
                    itemWidth: 20,
                    itemHeight: 10,
                    textStyle: {
                        fontSize: 12,
                        color: '#F1F1F3'
                    }
                },
                series: [{
                    name: '無人機高度',
                    type: 'line',
                    symbol: 'circle',
                    symbolSize: 10,
                    lineStyle: {
                        color: '#5470C6',
                        width: 1,
                    },
                    itemStyle: {
                        borderWidth: 2,
                        borderColor: 'gray',
                        color: 'white'
                    },
                    data: temp_data
                }]
            };
        }

        function getMap3DOption() {
            return option = {
                title: {
                    text: '鵝鑾鼻燈塔上空亮度分佈圖',
                    textStyle: {
                        color: 'white'
                    }
                },
                mapbox3D: {
                    style: 'mapbox://styles/biabobo/cjha51jt70x802rqsorws3xqz',
                    center: [currentCoord[1], currentCoord[0]],
                    zoom: currentZoom,
                    pitch: currentPitch,
                    altitudeScale: 1,
                    shading: 'color',
                    postEffect: {
                        enable: true,
                        SSAO: {
                            enable: true,
                            radius: 2
                        }
                    },
                    light: {
                        main: {
                            intensity: 1,
                            shadow: true,
                            shadowQuality: 'high'
                        },
                        ambient: {
                            intensity: 0.
                        }
                    }
                },
                visualMap: {
                    type: 'piecewise',
                    pieces: [{
                        gte: 150.5,
                        label: '>= 150 lx',
                        color: '#660499',
                        colorAlpha: 1
                    }, {
                        gt: 55.5,
                        lt: 150.4,
                        label: '55.5-150.4 lx',
                        color: '#CC0233',
                        colorAlpha: 1
                    }, {
                        gt: 35.5,
                        lt: 55.4,
                        label: '35.5-55.4 lx',
                        color: '#FFA500',
                        colorAlpha: 1
                    }, {
                        gt: 12.1,
                        lte: 35.4,
                        label: '12.1-35.4 lx',
                        color: '#FFDE34',
                        colorAlpha: 1
                    }, {
                        lte: 12,
                        label: '<= 12.0 lx',
                        color: '#009966',
                        colorAlpha: 1
                    }],
                    dimension: 3,
                    seriesIndex: [0, 1],
                    itemWidth: 10,
                    itemHeight: 16,
                    itemGap: 12,
                    hoverLink: false,
                    left: 20,
                    bottom: 50,
                    fontSize: 12,
                    textStyle: {
                        'color': 'white',
                        'fontSize': 12
                    }
                }
            };
        }

        function getFlightData3D(data) {
            console.log(data)
            return option = {
                series: [{
                    name: 'Flight Path Point',

                    //TODO: 確認是不是可以用line3D
                    type: 'scatter3D',
                    coordinateSystem: 'mapbox3D',
                    symbol: 'circle',
                    symbolSize: 5,
                    animation: false,
                    data: data,
                    label: {
                        show: false
                    },
                    emphasis: {
                        itemStyle: {
                            borderWidth: 0.2,
                            borderColor: 'white'
                        }
                    }
                }]
            };
        }

        function getRadarOption(datas) {
            return option = {
                title: {
                    text: '空氣品質AQI雷達圖'
                },
                tooltip: {},
                legend: {
                    data: ['無人機1', '無人機2']
                },
                radar: {
                    name: {
                        textStyle: {
                            color: '#fff',
                            backgroundColor: '#999',
                            borderRadius: 3,
                            padding: [3, 5]
                        }
                    },
                    indicator: [{
                        name: '細懸浮微粒PM2.5(μg/m3)',
                        max: 100
                    }, {
                        name: '懸浮微粒PM10(μg/m3)',
                        max: 100
                    }, {
                        name: '臭氧O3(ppb)',
                        max: 150
                    }, {
                        name: '一氧化碳CO(ppm)',
                        max: 100
                    }, {
                        name: '二氧化硫SO2(ppb)',
                        max: 100
                    }, {
                        name: '二氧化氮NO2(ppb)',
                        max: 150
                    }]
                },
                series: [{
                    name: 'AQI Index',
                    type: 'radar',
                    data: [{
                        value: datas,
                        name: '無人機1'
                    }]
                }]
            };
        }

        function get3DCirclePath(datas) {
            let xLabels = [];
            let yLabels = [];
            for (let i = 0; i < pathData.length; i++) {
                if (xLabels.indexOf(pathData[i][0]) == -1)
                    xLabels.push(pathData[i][0]);
                if (yLabels.indexOf(pathData[i][1]) == -1)
                    yLabels.push(pathData[i][1]);
            }
            xLabels.sort(function(a, b) {
                return a - b;
            })
            yLabels.sort(function(a, b) {
                return a - b;
            })

            return option = {
                title: {
                    text: '無人機路徑圖'
                },
                tooltip: {},
                backgroundColor: '#fff',
                visualMap: {
                    show: false,
                    dimension: 2,
                    min: 0,
                    max: 30,
                    inRange: {
                        color: [
                            '#313695',
                            '#4575b4',
                            '#74add1',
                            '#abd9e9',
                            '#e0f3f8',
                            '#ffffbf',
                            '#fee090',
                            '#fdae61',
                            '#f46d43',
                            '#d73027',
                            '#a50026'
                        ]
                    }
                },
                xAxis3D: {
                    name: '緯度',
                    type: 'category',
                    data: xLabels
                },
                yAxis3D: {
                    name: '經度',
                    type: 'category',
                    data: yLabels
                },
                zAxis3D: {
                    name: '高度',
                    type: 'value'
                },
                grid3D: {
                    viewControl: {
                        projection: 'orthographic'
                    }
                },
                series: [{
                    type: 'line3D',
                    data: pathData,
                    lineStyle: {
                        width: 4
                    }
                }]
            };
        }

        function getBar3DOption(data) {
            return option = {
                title: {
                    text: '開放思考'
                },
                tooltip: {},
                visualMap: {
                    max: 20,
                    show: false,
                    inRange: {
                        color: ['#313695', '#4575b4', '#74add1', '#abd9e9', '#e0f3f8', '#ffffbf', '#fee090', '#fdae61', '#f46d43', '#d73027', '#a50026']
                    }
                },
                xAxis3D: {
                    name: 'x',
                    type: 'category',
                    data: labels
                },
                yAxis3D: {
                    name: 'y',
                    type: 'category',
                },
                zAxis3D: {
                    name: 'z',
                    type: 'value'
                },
                grid3D: {
                    boxWidth: 200,
                    boxDepth: 80,
                    viewControl: {
                        // projection: 'orthographic'
                    },
                    light: {
                        main: {
                            intensity: 1.2,
                            shadow: true
                        },
                        ambient: {
                            intensity: 0.3
                        }
                    }
                },
                series: [{
                    type: 'bar3D',
                    data: data.map(function(item) {
                        return {
                            value: [item[1], item[0], item[2]],
                        }
                    }),
                    shading: 'lambert',
                    label: {
                        textStyle: {
                            fontSize: 16,
                            borderWidth: 1
                        }
                    },
                    emphasis: {
                        label: {
                            textStyle: {
                                fontSize: 20,
                                color: '#900'
                            }
                        },
                        itemStyle: {
                            color: '#900'
                        }
                    }
                }]
            }
        }
        // setInterval(listenFirebaseData, 1000)
        listenFirebaseData()


        chart2.setOption(get2DOption([], []));
        chart3.setOption(get3DCirclePath([]));
        chart4.setOption(getMap3DOption());
        chart4.setOption(getFlightData3D([]));
    </script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'http://opendata2.epa.gov.tw/AQI.json',
                method: 'GET',
                success: function(response) {
                    response.forEach(function(data) {})
                }
            })
        })
    </script>
</body>