<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="shortcut icon" href="{{ url('public/images/favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ url('public/images/favicon.ico') }}" type="image/x-icon">
<title>@yield('head.title')</title>
<!-- bootstrap 3.0.2 -->
    <link href="{{ url('public/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="{{ url('public/admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{ url('public/admin/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{ url('public/admin/css/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ url('public/admin/css/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="{{ url('public/admin/css/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="{{ url('public/admin/css/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="{{ url('public/admin/css/iCheck/all.css') }}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="{{ url('http://fonts.googleapis.com/css?family=Lato') }}" rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="{{ url('public/admin/css/style.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ url('public/admin/css/custom.css') }}" rel="stylesheet" type="text/css" />
    @yield('head.css')
</head>
<body class="skin-black">
    @include('admin.partials.header')
    <div class="wrapper row-offcanvas row-offcanvas-left">   
    @include('admin.partials.menu')
    
    @yield('body.content')

    </div>
    <!-- jQuery 2.0.2 -->
        <script src="{{ url('http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js') }}"></script>
        
        <script src="{{ url('public/admin/js/jquery.min.js') }}" type="text/javascript"></script>

        <!-- jQuery UI 1.10.3 -->
        <script src="{{ url('public/admin/js/jquery-ui-1.10.3.min.js') }}" type="text/javascript"></script>

        <!-- Bootstrap -->
        <script src="{{ url('public/admin/js/bootstrap.min.js') }}" type="text/javascript"></script>

        <!-- daterangepicker -->
        <script src="{{ url('public/admin/js/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>

        <script src="{{ url('public/admin/js/plugins/chart.js') }}" type="text/javascript"></script>

        <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->

        <!-- iCheck -->
        <script src="{{ url('public/admin/js/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
        <!-- calendar -->

        <script src="{{ url('public/admin/js/plugins/fullcalendar/fullcalendar.js') }}" type="text/javascript"></script>

        <!-- Director App -->
        <script src="{{ url('public/admin/js/Director/app.js') }}" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="{{ url('public/admin/js/Director/dashboard.js') }}" type="text/javascript"></script>

        <!-- Director for demo purposes -->
        <script type="text/javascript">
            $('input').on('ifChecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().addClass('highlight');
                $(this).parents('li').addClass("task-done");
                console.log('ok');
            });
            $('input').on('ifUnchecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().removeClass('highlight');
                $(this).parents('li').removeClass("task-done");
                console.log('not');
            });

        </script>
        <script>
            $('#noti-box').slimScroll({
                height: '400px',
                size: '5px',
                BorderRadius: '5px'
            });

            $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
                checkboxClass: 'icheckbox_flat-grey',
                radioClass: 'iradio_flat-grey'
            });
</script>
<script type="text/javascript">
    $(function() {
                "use strict";
                //BAR CHART
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [28, 48, 40, 19, 86, 27, 90]
                        }
                    ]
                };
            new Chart(document.getElementById("linechart").getContext("2d")).Line(data,{
                responsive : true,
                maintainAspectRatio: false,
            });

            });
            // Chart.defaults.global.responsive = true;
</script>
<<<<<<< HEAD
    @yield('body.js')
=======
@yield('body.js')
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
</body>
</html>