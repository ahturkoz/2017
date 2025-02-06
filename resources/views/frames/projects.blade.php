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
<link href="{{url('/assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{url('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet"
      type="text/css"/>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="{{url('/assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css"/>
<link href="{{url('/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="{{url('/assets/layouts/layout5/css/layout.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{url('/assets/layouts/layout5/css/custom.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{url('/assets/global/plugins/cubeportfolio/css/cubeportfolio.css')}}" rel="stylesheet" type="text/css"/>

<link href="{{url('/css/sweetalert2.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{url('/css/sweetalert2.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{url('/css/sweetalert2.css')}}" rel="stylesheet" type="text/css"/>
<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-bulb font-dark"></i>
                    <span class="caption-subject bold uppercase"> {{$title}}</span>
                </div>

            </div>
            <div class="portlet-body">

                <table class="table table-striped table-bordered table-hover order-column">
                    <thead>
                    <tr>
                        <th> ID</th>
                        <th> Adı</th>
                        <th> Durumu</th>
                        <th> Süre</th>
                        <th> İlçe</th>
                        <th style="max-width: 15px">
                            Detay
                        </th>
                        <th style="max-width: 15px">
                            Dosyalar
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key=>$value)
                        <tr class="odd gradeX">
                            <td style="vertical-align: middle;text-align: center">{{$key}}</td>
                            <td style="vertical-align: middle;text-align: center">{{$value['job_name']}}</td>
                            @if($value['job_durumu']=="Aktif")
                                <td style="vertical-align: middle;text-align: center"><a
                                            class="btn blue"
                                            style="pointer-events: none;"> {{$value['job_durumu']}}

                                    </a>
                                </td>
                            @else
                                <td style="vertical-align: middle"><a
                                            class="btn red"
                                            style="pointer-events: none"> {{$value['job_durumu']}}

                                    </a>
                                </td>
                            @endif

                            @if(isset($value['job_sure']))
                                <td style="vertical-align: middle;text-align: center">{{$value['job_sure']}}</td>
                            @else
                                <td style="vertical-align: middle;text-align: center">Yok</td>
                            @endif
                            @if(isset($value['job_ilce']))
                                <td style="vertical-align: middle;text-align: center">{{$value['job_ilce']}}</td>
                            @else
                                <td style="vertical-align: middle;text-align: center">Yok</td>
                            @endif
                            <td style="vertical-align: middle;text-align: center">
                                <a name="{{$key}}" class="btn btn-icon-only green detail-button">
                                    <i class="fa fa-search"></i>
                                </a>
                            </td>
                            <td style="vertical-align: middle;text-align: center">
                                <a name="{{$key}}" class="btn btn-icon-only green file-button">
                                    <i class="fa fa-file"></i>
                                </a>
                            </td>


                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{--modals--}}
<div class="modal fade" id="visitsModal" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Proje Detayı</h4>
            </div>
            <div class="modal-body">
                {{--<div id="pointAlert" class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Puanlama yapınız. </span>
                </div>--}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet">

                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12" style="padding-left: 40px;padding-right: 40px">
                                        <div class="portlet light bordered">
                                            <!-- STAT -->
                                            <div class="row list-separated profile-stat">
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <div id="proVisitCount" class="uppercase profile-stat-title"> 37
                                                    </div>
                                                    <div class="uppercase profile-stat-text"> Uzman Ziyareti</div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <div id="doctorVisitCount" class="uppercase profile-stat-title">
                                                        51
                                                    </div>
                                                    <div class="uppercase profile-stat-text"> Doktor Ziyareti</div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <div id="portfolioVisitCount" class="uppercase profile-stat-title">
                                                        61
                                                    </div>
                                                    <div class="uppercase profile-stat-text"> Portföy Ziyareti</div>
                                                </div>
                                            </div>
                                            <!-- END STAT -->
                                            <div>
                                                <h4 id="projectName" class="profile-desc-title">Default</h4>
                                                <span id="activeBadge" class="profile-desc-text"
                                                      style="display: none;"> <a
                                                            class="btn green"
                                                            style="pointer-events: none"><i
                                                                class="icon-flag"></i> Aktif

                                                                                </a> </span>
                                                <span id="inactiveBadge" class="profile-desc-text"
                                                      style="display: none;">
                                                    <a id="inactiveBadgeText" class="btn red"
                                                       style="pointer-events: none">
                                                        <i class="icon-close"></i> İptal

                                                                                </a>
                                                </span>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="margin-top-20 profile-desc-link">
                                                            <i class="fa fa-suitcase"></i>
                                                            <a style="pointer-events: none;" id="proName"></a>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="margin-top-20 profile-desc-link">
                                                            <i class="fa fa-user-md"></i>
                                                            <a style="pointer-events: none;" id="doctorName"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="margin-top-20 profile-desc-link">
                                                            <i class="fa fa-list"></i>
                                                            <a style="pointer-events: none;" id="portfolioName">-</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4" style="padding-right: 0">
                                                <div class="dashboard-stat2 bordered">
                                                    <div class="display">
                                                        <div class="number">
                                                            <h3 class="font-green-sharp">
                                                                    <span id="workerCount" class="counter"
                                                                          data-counter="counterup"
                                                                          data-value="0">0</span>

                                                            </h3>
                                                            <small>Çalışan Sayı</small>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="icon-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="progress-info" style="display: none ">
                                                        <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                                                        </div>
                                                        <div class="status">
                                                            <div class="status-title"> progress</div>
                                                            <div class="status-number"> 76%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="padding-left: 0;padding-right: 0">
                                                <div class="dashboard-stat2 bordered">
                                                    <div class="display">
                                                        <div class="number">
                                                            <h3 class="font-green-sharp">
                                                                    <span id="projectCost" class="counter"
                                                                          data-counter="counterup"
                                                                          data-value="0">0</span>
                                                                <small class="font-green-sharp">TL</small>
                                                            </h3>
                                                            <small style="padding-top: 10rem">Proje Fiyatı</small>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="icon-tag"></i>
                                                        </div>
                                                    </div>
                                                    <div class="progress-info" style="display: none ">
                                                        <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                                                        </div>
                                                        <div class="status">
                                                            <div class="status-title"> progress</div>
                                                            <div class="status-number"> 76%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="padding-left: 0">
                                                <div class="dashboard-stat2 bordered">
                                                    <div class="display">
                                                        <div class="number">
                                                            <h3 class="font-green-sharp">
                                                                    <span id="projectTimeCounter" class="counter"
                                                                          data-counter="counterup"
                                                                          data-value="0">0</span>
                                                            </h3>
                                                            <small>Proje Süre</small>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="icon-clock"></i>
                                                        </div>
                                                    </div>
                                                    <div class="progress-info" style="display: none ">
                                                        <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                                                        </div>
                                                        <div class="status">
                                                            <div class="status-title"> progress</div>
                                                            <div class="status-number"> 76%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Devam Et</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{--docs modal--}}
<div class="modal fade" id="docsModal" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog" style=" overflow-y: initial !important">
        <div class="modal-content">
            <div class="modal-body" style="height: 400px;overflow-y: auto;">
                {{--<div id="pointAlert" class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Puanlama yapınız. </span>
                </div>--}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet">

                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12" style="padding:0;">
                                        <div class="mt-element-list">
                                            <div class="mt-list-head list-simple ext-1 font-white bg-green-sharp">
                                                <div class="list-head-title-container">
                                                    <h3 class="list-title">Proje Dosyaları</h3>
                                                </div>
                                            </div>
                                            <div class="mt-list-container list-simple ext-1">
                                                <ul id="docsContainer">

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Devam Et</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{--docs modal--}}
{{--modals--}}
<script src="{{url('/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"
        type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<script src="{{url('/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}"
        type="text/javascript"></script>
<script src="{{url('/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/pages/scripts/table-datatables-managed.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
<script src="{{url('/js/sweetalert2.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"
        type="text/javascript"></script>

<script>
    var id = null;
    function startLoadingObj() {
        $.blockUI();
        $('.blockUI.blockMsg.blockPage').css('display', 'none')
        App.startPageLoading({animate: true});
        $('.bounce1,.bounce2,.bounce3').css('background', '#4bccd8')
    }
    function endLoadingObj() {
        window.setTimeout(function () {
            App.stopPageLoading();
            $.unblockUI();
        }, 1000);
    }
    $(document).ajaxStart(function () {
        startLoadingObj();
    });
    $(document).ajaxComplete(function () {
        endLoadingObj();
    });

    $(document).on('ready', function () {
        $('.table-striped.table-bordered.table-hover.order-column').DataTable({

            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            language: {
                oAria: {
                    sSortAscending: ": activate to sort column ascending",
                    sSortDescending: ": activate to sort column descending"
                },
                oPaginate: {sFirst: "İlk", sLast: "Son", sNext: "İleri", sPrevious: "Geri"},
                sEmptyTable: "Çalışan ziyareti bulunmamaktadır",
                sInfo: "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
                sInfoEmpty: "Kayıt yok",
                sInfoFiltered: "(_MAX_ kayıt içerisinden bulunan)",
                sInfoPostFix: "",
                sDecimal: "",
                sThousands: ",",
                sLengthMenu: "Sayfada _MENU_ kayıt göster",
                sLoadingRecords: "Yükleniyor...",
                sProcessing: "İşleniyor...",
                sSearch: "Ara:  ",
                sSearchPlaceholder: "",
                sUrl: "",
                sZeroRecords: "Eşleşen Kayıt Bulunmamaktadır."
            },

            // Or you can use remote translation file
            //"language": {
            //   url: '//cdn.datatables.net/plug-ins/3cfcc339e89/i18n/Portuguese.json'
            //},

            buttons: [
                {extend: 'print', text: 'Yazdır', className: 'btn dark btn-outline'},
                {extend: 'copy', text: 'Kopyala', className: 'btn red btn-outline'},
                {extend: 'pdf', text: 'Pdf', className: 'btn green btn-outline'},
                {extend: 'excel', text: 'Excel', className: 'btn yellow btn-outline '},
                {extend: 'csv', text: 'CSV', className: 'btn purple btn-outline '},
                {extend: 'colvis', text: 'Gizle', className: 'btn dark btn-outline'}
            ],

            "order": [
                [0, 'asc']
            ],

            "lengthMenu": [
                [5, 10, 15, 20, -1],
                [5, 10, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": 10,

            "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js).
            // So when dropdowns used the scrollable div should be removed.
            //"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
        });


        $('.btn.btn-icon-only.green.detail-button').on('click', function (event) {
            id = this.name;
            $.ajax({
                url: "{{url('/projects/detail/content')}}",
                type: "POST",
                data: {
                    "proj_id": this.name, /*password*/
                    "fnc": "show_detail3",
                    '_token': "{{csrf_token()}}",
                },
                success: function (data, textStatus, jqXHR) {


                            $('#proVisitCount').text(data.data.proVisitCount);
                            $('#doctorVisitCount').text(data.data.doctorVisitCount);
                            $('#portfolioVisitCount').text(data.data.portfolioVisitCount);
                    $('#doctorName').text(data.data.job_doktor);
                    $('#proName').text(data.data.job_uzman);
                    $('#portfolioName').text(data.data.job_diger_per);
                    $('#projectName').text(data.data.job_name);
                    if (data.data.job_aktivasyon_durum == "Aktif") {
                        $('#inactiveBadge').css('display', "none");
                        $('#activeBadge').css('display', "block");
                    } else {
                        $('#inactiveBadge').css('display', "block");
                        $('#activeBadge').css('display', "none");
                    }
                    setTimeout(function () {
                        $('#visitsModal').modal('show');
                    }, 1000);
                    $('#workerCount').attr('data-value', data.data.job_calisan_sayi);
                    $('#projectTimeCounter').attr('data-value', data.data.job_proje_sure);
                    $('#projectCost').attr('data-value', data.data.job_fiyati);
                    if (data.data.job_calisan_sayi > 0)
                        $('#workerCount').counterUp({
                            delay: 10,
                            time: 2000
                        });
                    if (parseFloat(data.data.job_fiyati) > 0)
                        $('#projectCost').counterUp({
                            delay: 10,
                            time: 2000
                        });
                    if (data.data.job_proje_sure > 0)
                        $('#projectTimeCounter').counterUp({
                            delay: 10,
                            time: 2000
                        });
                }
            });

        })

        $('.btn.btn-icon-only.green.file-button').on('click', function () {
            startLoadingObj();
            $.ajax({
                url: "{{url('/projects/docs/content')}}",
                type: "POST",
                data: JSON.stringify({
                    "proj_id": this.name, /*password*/
                    "_token": "{{csrf_token()}}", /*password*/
                }),
                contentType: "application/json; charset=utf-8",
                success: function (data, textStatus, jqXHR) {
                    if (data.result) {
                        var container = $('#docsContainer');
                        container.empty();
                        for (var i in data.data) {
                            container.append("<li class='mt-list-item done'><div class='list-icon-container'><i class='icon-file'></i></div> " +
                                    "<div class='list-datetime'> <a href='https://tr3.mybasiccrm.com/file/" + data.data[i]['doc_link'] + "'>Indir</a></div><div class='list-item-content'><h3 class='uppercase'>" +
                                    "<span>" + data.data[i]['doc_name'] + "</span></h3></div> </li>");
                            console.log(data.data[i]);

                        }

                        setTimeout(function () {
                            $('#docsModal').modal('show');
                        }, 1000);
                    }
                }
            });
        })
    })
</script>