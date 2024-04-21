<?php include ("includes/connection.php"); ?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-body-image="none">

<head>
    <?php include ('includes/head.php') ?>
    <meta charset="utf-8">
    <title>Dashboard | Pinal & Co.</title>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- Header Section -->
        <?php include ("includes/top.php"); ?>

        <!-- ========== App Menu ========== -->
        <?php include ('includes/sidebar.php') ?>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content ">

            <div class="page-content">
                <div class="container-fluid bg-light p-5 rounded" style="font-family: sans-serif;" >
                    <h1 style="font-family: sans-serif;">Hey Admin!</h1><br>
                    <h2 style="font-family: sans-serif;"> Welcome to the Pinal & Co. Admin Panel!</h2>
                    <br>
                    <p> From here, you can manage Messages, Archives, Project, Products,
                        Blog Post.</p>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include ('includes/footer.php') ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-info btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->


    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <?php include ('includes/foot.php') ?>

    <script>
        //  Line chart datalabel
        var linechartDatalabelColors = getChartColorsArray("line_chart_datalabel");
        if (linechartDatalabelColors) {
            var options = {
                chart: {
                    height: 405,
                    zoom: {
                        enabled: true
                    },
                    toolbar: {
                        show: false
                    }
                },
                colors: linechartDatalabelColors,
                markers: {
                    size: 0,
                    colors: "#ffffff",
                    strokeColors: linechartDatalabelColors,
                    strokeWidth: 1,
                    strokeOpacity: 0.9,
                    fillOpacity: 1,
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    width: [2, 2, 2],
                    curve: 'smooth'
                },
                series: [{
                    name: "Orders",
                    type: 'line',
                    data: [180, 274, 346, 290, 370, 420, 490, 542, 510, 580, 636, 745]
                },
                {
                    name: "Refunds",
                    type: 'area',
                    data: [100, 154, 302, 411, 300, 284, 273, 232, 187, 174, 152, 122]
                },
                {
                    name: "Earnings",
                    type: 'line',
                    data: [260, 360, 320, 345, 436, 527, 641, 715, 832, 794, 865, 933]
                }
                ],
                fill: {
                    type: ['solid', 'gradient', 'solid'],
                    gradient: {
                        shadeIntensity: 1,
                        type: "vertical",
                        inverseColors: false,
                        opacityFrom: 0.3,
                        opacityTo: 0.0,
                        stops: [20, 80, 100, 100]
                    },
                },
                grid: {
                    row: {
                        colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0.2
                    },
                    borderColor: '#f1f1f1'
                },
                xaxis: {
                    categories: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                    ],
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'right',
                    floating: true,
                    offsetY: -25,
                    offsetX: -5
                },
                responsive: [{
                    breakpoint: 600,
                    options: {
                        chart: {
                            toolbar: {
                                show: false
                            }
                        },
                        legend: {
                            show: false
                        },
                    }
                }]
            }

            var chart = new ApexCharts(
                document.querySelector("#line_chart_datalabel"),
                options
            );
            chart.render();
        }

        // world map with line & markers
        var vectorMapWorldLineColors = getChartColorsArray("world-map-line-markers");
        if (vectorMapWorldLineColors)
            var worldlinemap = new jsVectorMap({
                map: "world_merc",
                selector: "#world-map-line-markers",
                zoomOnScroll: false,
                zoomButtons: false,
                markers: [{
                    name: "Greenland",
                    coords: [71.7069, 42.6043],
                    style: {
                        image: "../assets/images/flags/gl.svg",
                    }
                },
                {
                    name: "Canada",
                    coords: [56.1304, -106.3468],
                    style: {
                        image: "../assets/images/flags/ca.svg",
                    }
                },
                {
                    name: "Brazil",
                    coords: [-14.2350, -51.9253],
                    style: {
                        image: "../assets/images/flags/br.svg",
                    }
                },
                {
                    name: "Serbia",
                    coords: [44.0165, 21.0059],
                    style: {
                        image: "../assets/images/flags/rs.svg",
                    }
                },
                {
                    name: "Russia",
                    coords: [61, 105],
                    style: {
                        image: "../assets/images/flags/ru.svg",
                    }
                },
                {
                    name: "US",
                    coords: [37.0902, -95.7129],
                    style: {
                        image: "../assets/images/flags/us.svg",
                    }
                },
                {
                    name: "Australia",
                    coords: [25.2744, 133.7751],
                    style: {
                        image: "../assets/images/flags/au.svg",
                    }
                },
                ],
                lines: [{
                    from: "Canada",
                    to: "Serbia",
                },
                {
                    from: "Russia",
                    to: "Serbia"
                },
                {
                    from: "Greenland",
                    to: "Serbia"
                },
                {
                    from: "Brazil",
                    to: "Serbia"
                },
                {
                    from: "US",
                    to: "Serbia"
                },
                {
                    from: "Australia",
                    to: "Serbia"
                },
                ],
                regionStyle: {
                    initial: {
                        stroke: "#9599ad",
                        strokeWidth: 0.25,
                        fill: vectorMapWorldLineColors,
                        fillOpacity: 1,
                    },
                },
                labels: {
                    markers: {
                        render(marker, index) {
                            return marker.name || marker.labelName || 'Not available'
                        }
                    }
                },
                lineStyle: {
                    animation: true,
                    strokeDasharray: "6 3 6",
                },
            });


        // Multi-Radial Bar
        var chartRadialbarMultipleColors = getChartColorsArray("multiple_radialbar");
        if (chartRadialbarMultipleColors) {
            var options = {
                series: [85, 69, 45, 78],
                chart: {
                    height: 300,
                    type: 'radialBar',
                },
                sparkline: {
                    enabled: true
                },
                plotOptions: {
                    radialBar: {
                        startAngle: -90,
                        endAngle: 90,
                        dataLabels: {
                            name: {
                                fontSize: '22px',
                            },
                            value: {
                                fontSize: '16px',
                            },
                            total: {
                                show: true,
                                label: 'Sales',
                                formatter: function (w) {
                                    return 2922
                                }
                            }
                        }
                    }
                },
                labels: ['Fashion', 'Electronics', 'Groceries', 'Others'],
                colors: chartRadialbarMultipleColors,
                legend: {
                    show: false,
                    fontSize: '16px',
                    position: 'bottom',
                    labels: {
                        useSeriesColors: true,
                    },
                    markers: {
                        size: 0
                    },
                },
            };

            var chart = new ApexCharts(document.querySelector("#multiple_radialbar"), options);
            chart.render();
        }


        //  Spline Area Charts
        var areachartSplineColors = getChartColorsArray("area_chart_spline");
        if (areachartSplineColors) {
            var options = {
                series: [{
                    name: 'This Month',
                    data: [49, 54, 48, 54, 67, 88, 96]
                }, {
                    name: 'Last Month',
                    data: [57, 66, 74, 63, 55, 70, 85]
                }],
                chart: {
                    height: 250,
                    type: 'area',
                    toolbar: {
                        show: false
                    }
                },
                fill: {
                    type: ['gradient', 'gradient'],
                    gradient: {
                        shadeIntensity: 1,
                        type: "vertical",
                        inverseColors: false,
                        opacityFrom: 0.3,
                        opacityTo: 0.0,
                        stops: [50, 70, 100, 100]
                    },
                },
                markers: {
                    size: 4,
                    colors: "#ffffff",
                    strokeColors: areachartSplineColors,
                    strokeWidth: 1,
                    strokeOpacity: 0.9,
                    fillOpacity: 1,
                    hover: {
                        size: 6,
                    }
                },
                grid: {
                    show: false,
                    padding: {
                        top: -35,
                        right: 0,
                        bottom: 0,
                        left: -6,
                    },
                },
                legend: {
                    show: false,
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: [2, 2],
                    curve: 'smooth'
                },
                colors: areachartSplineColors,
                xaxis: {
                    labels: {
                        show: false,
                    }
                },
                yaxis: {
                    labels: {
                        show: false,
                    }
                },
            };

            var chart = new ApexCharts(document.querySelector("#area_chart_spline"), options);
            chart.render();
        }

    </script>
</body>


<!-- Mirrored from themesbrand.com/toner/html/backend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Oct 2023 16:32:50 GMT -->

</html>