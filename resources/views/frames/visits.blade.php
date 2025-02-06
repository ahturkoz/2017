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

<link href="{{url('/css/sweetalert2.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{url('/css/sweetalert2.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{url('/css/sweetalert2.css')}}" rel="stylesheet" type="text/css"/>
<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    @if($type=="Uzman Ziyareti")
                        <i class="icon-briefcase font-dark"></i>
                    @elseif($type=="Doktor Ziyareti")
                        <i class="icon-chemistry font-dark"></i>
                    @else
                        <i class="icon-list font-dark"></i>
                    @endif
                    <span class="caption-subject bold uppercase"> {{$type}}</span>
                </div>

            </div>
            <div class="portlet-body">
                {{--<div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-print"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>--}}
                <table class="table table-striped table-bordered table-hover order-column">
                    <thead>
                    <tr>
                        <th> ID</th>
                        <th> Adı</th>
                        <th style="max-width: 100px;"> Başlangıç Tarihi</th>
                        <th> Durum</th>
                        <th style="max-width: 60px;"> Görev Açıklama</th>
                        <th> Görevli Kişi</th>
                        <th> Tarih</th>
                        <th>
                            <a class="btn btn-icon-only green" style="pointer-events:none;">
                                <i class="fa fa-star"></i>
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key=>$value)
                        <tr class="odd gradeX">
                            <td style="vertical-align: middle;text-align: center">{{$key}}</td>
                            <td style="vertical-align: middle;text-align: center">{{$value['job_name']}}</td>
                            <td style="vertical-align: middle;text-align: center">{{$value['job_projetarihi']}}</td>
                            @if($value['task_status']=="In progress")
                                <td style="vertical-align: middle;">
                                    <span class="label label-sm label-success"
                                          style="padding: 2px 15px;box-shadow: 2px 2px 5px grey;">  Yapılacak </span>
                                </td>
                            @elseif($value['task_status']=="Completed")
                                <td style="vertical-align: middle;text-align: center">
                                    <span class="label label-sm label-warning"
                                          style="box-shadow: 2px 2px 5px grey;"> Tamamlandı </span>
                                </td>
                            @endif
                            <td style="vertical-align: middle;text-align: center">
                                <p> {{substr($value['task_description'],0,80)}}
                                    <a class="tooltips"
                                       data-original-title="{{$value['task_description']}}">
                                        ... </a></p></td>
                            <td style="vertical-align: middle;text-align: center">{{$value['task_user']}}</td>
                            <td style="vertical-align: middle;text-align: center">{{$value['task_datetimedue']}}</td>


                            {{--task point--}}
                            @if($value['task_point'])
                                @if($value['task_point']==5)
                                    <td style="vertical-align: middle;">
                                        <a class="btn btn-icon-only green"
                                           style="pointer-events:none;">{{$value['task_point']}}</a>
                                    </td>
                                @elseif($value['task_point']==4)
                                    <td style="vertical-align: middle;">
                                        <a class="btn btn-icon-only green"
                                           style="pointer-events:none;">{{$value['task_point']}}</a>
                                    </td>
                                @elseif($value['task_point']==3)
                                    <td style="vertical-align: middle;">
                                        <a class="btn btn-icon-only yellow"
                                           style="pointer-events:none;">{{$value['task_point']}}</a>
                                    </td>
                                @elseif($value['task_point']==2)
                                    <td style="vertical-align: middle;">
                                        <a class="btn btn-icon-only yellow"
                                           style="pointer-events:none;">{{$value['task_point']}}</a>
                                    </td>
                                @elseif($value['task_point']==1)
                                    <td style="vertical-align: middle;">
                                        <a class="btn btn-icon-only red"
                                           style="pointer-events:none;">{{$value['task_point']}}</a>
                                    </td>
                                @endif
                            @else
                                <td style="vertical-align: middle;">
                                    <a name="{{$key}}" class="btn btn-icon-only green">
                                        <i class="fa fa-star"></i>
                                    </a>
                                </td>
                            @endif
                            {{--task point--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade draggable-modal" id="pointModal" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Puanladığınız için teşekkür ederiz</h4>
            </div>
            <div class="modal-body">
                <div id="pointAlert" class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Puanlama yapınız. </span>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet">

                            <div class="portlet-body">
                                <form role="form">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-edit"></i>
                                                                </span>
                                                <input id="commentInput" type="text" class="form-control"
                                                       placeholder="Yorumunuz"></div>
                                        </div>
                                        <div class="form-group">
                                            <a class="icon-btn" style="min-width: 45px;height: 45px">
                                                <i class="fa fa-star"></i>
                                                <span class="badge badge-success" style="display: none">1</span>
                                            </a>
                                            <a class="icon-btn" style="min-width: 45px;height: 45px">
                                                <i class="fa fa-star"></i>
                                                <span class="badge badge-success" style="display: none">2</span>
                                            </a>
                                            <a class="icon-btn" style="min-width: 45px;height: 45px">
                                                <i class="fa fa-star"></i>
                                                <span class="badge badge-success" style="display: none">3</span>
                                            </a>
                                            <a class="icon-btn" style="min-width: 45px;height: 45px">
                                                <i class="fa fa-star"></i>
                                                <span class="badge badge-success" style="display: none">4</span>
                                            </a>
                                            <a class="icon-btn" style="min-width: 45px;height: 45px">
                                                <i class="fa fa-star"></i>
                                                <span class="badge badge-success" style="display: none">5</span>
                                            </a>

                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Vazgeç</button>
                <button id="postRateButton" type="button" class="btn green">Puanla</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
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
<script src="{{url('/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}"
        type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{url('/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{url('/assets/pages/scripts/table-datatables-managed.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{url('/assets/layouts/layout5/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>

<script src="{{url('/js/sweetalert2.min.js')}}" type="text/javascript"></script>
<script>
    var point = null;
    var id = null;
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

        $('#postRateButton').on('click', function () {
            if (point == null) {
                console.log('alert');
                $('#pointAlert').css('display', "block")
            } else {
                $('#pointAlert').css('display', "none")
                $.ajax({
                            url: "{{url('/projects/visits/rate')}}",
                            type: "POST",
                            data: {
                                task_id: id,  // Ziyaret sorgusunda gelen unique_task_id gönderilmeli
                                task_point: point, //  VarChar(200)
                                task_comment: $('#commentInput').val(), //  VarChar(1000)
                                _token: "{{csrf_token()}}",
                            },
                            success: function (data, textStatus, jqXHR) {
                                $('#pointModal').modal('hide');
                                swal({
                                    title: 'Puanlama Başarılı',
                                    text: "Şifre Değişikliği Başarıyla Gerçekleşti!",
                                    type: 'success',
                                    showCancelButton: false,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Devam et'
                                }).then(function () {
                                    window.location.reload();

                                })


                            }
                        }
                );
            }
        })
        ;

        $('.btn.btn-icon-only.green').on('click', function (event) {
            id = this.name;
            $('#pointModal').modal('show');
        })
        $('.icon-btn').on('click', function () {
            $('.badge.badge-success').css('display', 'none');
            $(this)[0].getElementsByTagName('span')[0].style.display = ""
            point = $(this)[0].getElementsByTagName('span')[0].innerHTML;
        });
    })
</script>