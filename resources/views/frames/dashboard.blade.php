<link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css"/>
<!-- END LAYOUT FIRST STYLES -->
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
      type="text/css"/>
<link href="{{url('/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{url('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
      type="text/css"/>
<link href="{{url('/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{url('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet"
      type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{url('/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet"
      type="text/css"/>
<link href="{{url('/assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{url('/assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{url('/assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{{url('/assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css"/>
<link href="{{url('/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="{{url('/assets/layouts/layout5/css/layout.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{url('/assets/layouts/layout5/css/custom.min.css')}}" rel="stylesheet" type="text/css"/>


<div class="row" style="padding: 15px;padding-top: 51px">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 blue" href="#" style="box-shadow: 2px 2px 5px grey;">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span id="project-count" class="counter" data-counter="counterup"
                          data-value="{{$totalProjects}}">0</span>
                </div>
                <div class="desc">Proje Sayısı</div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 red" href="#" style="box-shadow: 2px 2px 5px grey;">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span id="visit-count" class="counter" data-counter="counterup"
                          data-value="{{$totalVisits}}">0</span>
                </div>
                <div class="desc">Ziyaret Sayısı</div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 green" href="#" style="box-shadow: 2px 2px 5px grey;">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span id="activeVisits" class="counter" data-counter="counterup"
                          data-value="{{$activeProjects}}">0</span>
                </div>
                <div class="desc"> Yapılacak Ziyaret Sayısı</div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" >
        <a class="dashboard-stat dashboard-stat-v2 purple" href="#" style="box-shadow: 2px 2px 5px grey;">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span id="unRatedVisits" class="counter" data-counter="counterup"
                          data-value="{{$unRatedVisits}}">0</span>
                </div>
                <div class="desc"> Oylanmamış Proje</div>
            </div>
        </a>
    </div>
</div>
<div class="clearfix"></div>

<!-- BEGIN CORE PLUGINS -->
<script src="{{url('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"
        type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{url('/assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>

<script src="{{url('/assets/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
<script>
    $(document).on('ready', function () {
        $.post("{{url('/projects/statistics/content')}}", {
            _token: "{{csrf_token()}}",
        }, function (data, status) {
            if (data.result) {
                $('#project-count').data('value', data.inProgressVisits);
                $('#visit-count').data('value', data.visitCount);
                $('#activeVisits').data('value', data.activeVisits);
                $('#unRatedVisits').data('value', data.unRatedVisits);
                setTimeout(function () {
                    $('.counter').counterUp({
                        delay: 10,
                        time: 2000
                    });
                }, 1000);
            }
        })
    });
</script>