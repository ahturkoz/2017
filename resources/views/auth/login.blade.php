<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8"/>
    <title>NAZ TEKNİK OSGB</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
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
    <link href="{{url('/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{url('/assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components"
          type="text/css"/>
    <link href="{{url('/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{url('/assets/css/login.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('/css/sweetalert2.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN LOGO -->

<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content" style="box-shadow: -2px -2px 20px #5E738B;">
    <div class="logo" style="padding-top: 2rem;margin: 0">
        <a href="{{url('/')}}">
            <img src="{{url('/assets/img/nazteknik_logo.png')}}" alt=""/> </a>
    </div>
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" method="post">
        <h3 class="form-title font-green">Hoşgeldiniz</h3>
        <div id="loginAlert" class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Giriş Bilgilerinizi Kontrol Ediniz. </span>
        </div>

<div class="form-group">
    <label class="control-label visible-ie8 visible-ie9">Kullanıcı Adı</label>
    <input id="emailLogin" class="form-control form-control-solid placeholder-no-fix" type="email"
           autocomplete="off" placeholder="Mail Adresiniz" name="username" required />
</div>
<div class="form-group">
    <label class="control-label visible-ie8 visible-ie9">Şifre</label>
    <input id="passwordLogin" class="form-control form-control-solid placeholder-no-fix" type="password"
           autocomplete="off" placeholder="Şifre" name="password" required />
</div>
<div class="form-actions">
    <button id="postLoginButton" type="button" class="btn green btn-outline uppercase">Giriş</button>
    <label class="rememberme check mt-checkbox mt-checkbox-outline">
        <input id="loginRememberMe" type="checkbox" name="remember" value="1"/>Hatırla
        <span></span>
    </label>
    <a href="javascript:;" id="forget-password" class="forget-password">Şifremi unuttum?</a>
</div>

        <div class="login-options">
            <div hidden>
                <h4><a id="recommendButton" class="btn">Tavsiye Et</a></h4>
            </div>
            <ul class="social-icons" style="padding-top: 1rem">
            
            <li>
                    <a class="social-icons-color instagram" data-original-title="instagram" target="_blank"
                       href="https://www.facebook.com/nazteknikosgb/"></a>
                </li>
            <li>
                    <a class="social-icons-color facebook" data-original-title="facebook" target="_blank"
                       href="https://www.facebook.com/nazteknikosgb/"></a>
                </li>
            
                <li>
                    <a class="social-icons-color linkedin" data-original-title="Linkedin"
                       href="https://www.linkedin.com/company/nazteknik-osgb" target="_blank"></a>
                </li>
                <li>
                    <a class="social-icons-color youtube" data-original-title="Youtube"
                       href="https://www.youtube.com/channel/UCQ7dR2oNGiyIUPVn5naK89A" target="_blank"></a>
                </li>
            </ul>
        </div>
        <div class="create-account" style="background-color: #5ec9c6;color: #ffffff;">
            <p>
                <a href="javascript:;" id="register-btn" class="uppercase"
                   style="background-color: #5ec9c6;color: #ffffff;">Kayıt Ol</a>
            </p>
        </div>
        
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="index.html" method="post">
        <h3 class="font-green">Şifrenizi mi unuttunuz ?</h3>
        <div id="forgotPasswordAlert" class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> E-posta adresinizi kontrol ediniz. </span>
        </div>
        <p> Lütfen sisteme kayıtlı e-posta adresinizi giriniz. </p>
        <div class="form-group">
            <input id="emailForgotPassword" class="form-control placeholder-no-fix" type="text" autocomplete="off"
                   placeholder="E-posta"
                   name="email"/></div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn green btn-outline">Geri</button>
            <button id="postForgotPasswordButton" type="submit" class="btn btn-success uppercase pull-right">Tamamla
            </button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    <form class="register-form" action="index.html" method="post">
        <h3 class="font-green">Şifre Talebi</h3>
        <div id="registerAlert" class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Bilgileri tam olarak doldurunuz! </span>
        </div>
        <p class="hint"> Şifre talebi için aşağıdaki bilgileri doldurunuz: </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Adınız</label>
            <input id="registerName" class="form-control placeholder-no-fix" type="text" placeholder="Adınız"
                   name="name"/></div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Soyadınız</label>
            <input id="registerSurname" class="form-control placeholder-no-fix" type="text" placeholder="Soyadınız"
                   name="surname"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Şirket Vergi Numarası</label>
            <input id="registerCompanyTaxNo" class="form-control placeholder-no-fix" type="text"
                   placeholder="Şirket Vergi Numaranız" name="companyTaxNo"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Göreviniz</label>
            <input id="registerWorkTitle" class="form-control placeholder-no-fix" type="text" placeholder="Göreviniz"
                   name="workTitle"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Göreviniz</label>
            <input id="registerEmail" class="form-control placeholder-no-fix" type="email" placeholder="E-posta adresi"
                   name="email"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Telefon Numaranız</label>
            <input id="registerPhone" class="form-control placeholder-no-fix" type="tel" placeholder="Telefon Numaranız"
                   name="phone"/>
        </div>

        <div class="form-actions">
            <button type="button" id="register-back-btn" class="btn green btn-outline">Geri</button>
            <button type="button" id="postRegisterButton" class="btn btn-success uppercase pull-right">Başvur</button>
        </div>
    </form>
    <!-- END REGISTRATION FORM -->
</div>

<!--floating button-->
<!--floating button-->


<div class="copyright">
    <a href="https://nazteknikosgb.com" target="_blank" style="color: white;">2025 © Naz Teknik Ortak Sağlık Ve Güvenlik Birimi.</a>
</div>




<!--modals-->
<!--forgot password modal-->
<div class="modal fade draggable-modal " id="forgotPasswordModal" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Sms ile gönderilen pini giriniz</h4>
            </div>
            <div class="modal-body">
                <div id="forgotPasswordModalAlert" class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Pin kodu ve şifre alanını doldurunuz. </span>
                </div>
                <div id="forgotPasswordNotMatchedModalAlert" class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Şifreniz birbiriyle uyuşmuyor. </span>
                </div>
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="pinForgotPasswordModal">Pin Kodu</label>
                        <input type="email" class="form-control" id="pinForgotPasswordModal" placeholder="Pin Kodu">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="passwordForgotPasswordModal">Şifre</label>
                        <input type="password" class="form-control" id="passwordForgotPasswordModal"
                               placeholder="Şifre"></div>

                    </label>
                    <div class="form-group">
                        <label class="sr-only" for="passwordForgotPasswordModal">Şifre</label>
                        <input type="password" class="form-control" id="passwordForgotPasswordAgainModal"
                               placeholder="Şifre tekrar"></div>

                    </label>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Vazgeç</button>
                <button id="postPinButton" type="button" class="btn green">Kaydet</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--forgot password modal-->
<!--recommend modal-->
<div class="modal fade draggable-modal" id="recommendModal" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Tavsiye ettiğiniz için teşekkürler</h4>
            </div>
            <div class="modal-body">
                <div id="forgotPasswordModalAlert" class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Pin kodu ve şifre alanını doldurunuz. </span>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-user"></i>Tavsiye Eden
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="recommenderAlert" class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button>
                                    <span> Boş alanları doldurunuz. </span>
                                </div>
                                <form role="form">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-user"></i>
                                                                </span>
                                                <input id="recommenderName" type="text" class="form-control"
                                                       placeholder="Ad ve soyad"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-building"></i>
                                                                </span>
                                                <input id="recommenderFirm" type="text" class="form-control"
                                                       placeholder="Firmanız"></div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-mobile-phone"></i>
                                                                </span>
                                                <input id="recommenderPhone" type="tel" class="form-control"
                                                       placeholder="Telefon numaranız">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-user"></i>Tavsiye Edilen
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div id="recommendedAlert" class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button>
                                    <span> Boş alanları doldurunuz. </span>
                                </div>
                                <form role="form">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-user"></i>
                                                                </span>
                                                <input id="recommendedName" type="text" class="form-control"
                                                       placeholder="Ad ve soyad"></div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-building"></i>
                                                                </span>
                                                <input id="recommendedFirm" type="text" class="form-control"
                                                       placeholder="Firması"></div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-mobile-phone"></i>
                                                                </span>
                                                <input id="recommendedPhone" type="text" class="form-control"
                                                       placeholder="Telefon numarası">
                                            </div>
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
                <button id="postRecommendationButton" type="button" class="btn green">Kaydet</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--recommend modal-->
<!--modals-->
<!--[if lt IE 9]>
<script src="{{url('/assets/global/plugins/respond.min.js')}}"></script>
<script src="{{url('/assets/global/plugins/excanvas.min.js')}}"></script>
<![endif]-->
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
<script src="{{url('/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}"
        type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}"
        type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{url('/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{url('/assets/js/login.min.js')}}" type="text/javascript"></script>
<script src="{{url('/js/sweetalert2.min.js')}}" type="text/javascript"></script>
<script src="{{url('/js/jquery.md5.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/global/plugins/jquery.pulsate.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
<script src="{{url('/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script>
    var contactid = null;
    var pswtoken = null;
    var token = null;

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
        $('input').on('keydown', function (event) {
            var x = event.which;
            if (x === 13) {
                event.preventDefault();
            }
        });

        $('#recommendButton').on('click', function (event) {
            $('#recommendModal').modal('show');
        })
        $('#postRecommendationButton').on('click', function (event) {
            /*recommender values*/
            var recommenderName = $('#recommenderName').val();
            var recommenderFirm = $('#recommenderFirm').val();
            var recommenderPhone = $('#recommenderPhone').val();
            /*recommended person values*/
            var recommendedName = $('#recommendedName').val();
            var recommendedFirm = $('#recommendedFirm').val();
            var recommendedPhone = $('#recommendedPhone').val();

            if (recommendedName == "" || recommendedFirm == "" || recommendedPhone == "") {
                $('#recommendedAlert').css('display', 'block');
                $('#recommenderAlert').css('display', 'none');
                if (recommenderName == "" || recommenderFirm == "" || recommenderPhone == "") {
                    $('#recommenderAlert').css('display', 'block');
                }
            } else if (recommenderName == "" || recommenderFirm == "" || recommenderPhone == "") {
                $('#recommendedAlert').css('display', 'none');
                $('#recommenderAlert').css('display', 'block');
            } else {
                $('#recommendedAlert').css('display', 'none');
                $('#recommenderAlert').css('display', 'none');
                $.ajax({
                    url: "https://mobilevreni.com/service/naz_teknik_router.php",
                    type: "POST",
                    data: JSON.stringify({
                        subject: "Nazteknik Web Tavsiye İstek Maili",
                        tavsiye_eden_adi: recommenderName,
                        tavsiye_eden_firma: recommenderFirm,
                        tavsiye_eden_telefonu: recommenderPhone,
                        tavsiye_edilen_adi: recommendedName,
                        tavsiye_edilen_firma: recommendedFirm,
                        tavsiye_edilen_telefonu: recommendedPhone,
                    }),
                    contentType: "application/json; charset=utf-8",
                    success: function (data, textStatus, jqXHR) {
                        if (data.result) {
                            setTimeout(function () {
                                swal({
                                    title: 'Başarılı!',
                                    text: "Bizi tavsiye ettiğiniz için teşekkürler.",
                                    type: 'success',
                                    showCancelButton: false,
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'Tamam'
                                }).then(function () {
                                })
                            }, 1000);
                            $('#recommendModal').modal('hide');
                        }
                    }
                })
                ;
            }
        });
        $('#postRegisterButton').on('click', function (event) {
            event.preventDefault();
            var name = $('#registerName').val();
            var surname = $('#registerSurname').val();
            var email = $('#registerEmail').val();
            var taxNo = $('#registerCompanyTaxNo').val();
            var phone = $('#registerPhone').val();
            var workTitle = $('#registerWorkTitle').val();
            if (name == "" || surname == "" || email == "" || taxNo == "" || phone == "" || workTitle == "") {
                $('#registerAlert').css('display', "block");
                return;
            } else {
                $('#registerAlert').css('display', "none");
            }

            $.ajax({
                url: "{{url('/users/register')}}",
                type: "POST",
                data: {
                    "email": email, /*email*/
                    "telno": phone, /*email*/
                    "taxno": taxNo,
                    "_token": "{{csrf_token()}}",
                },
                success: function (data, textStatus, jqXHR) {

                    if (data.result) {
                        contactid = data.contactid;
                        pswtoken = data.pswtoken;
                        setTimeout(function () {
                            swal({
                                title: 'Talebiniz başarıyla alındı!',
                                text: "Geri dönüş yapılacaktır!",
                                type: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Devam et'
                            }).then(function () {
                                window.location.reload();
                            })
                        }, 1000)
                    } else {
                        setTimeout(function () {
                            swal({
                                title: 'Dikkat!',
                                text: data,
                                type: 'success',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Devam et'
                            }).then(function () {
                            })
                        }, 1000)

                    }
                }
            });

        });
        $('#postLoginButton').on('click', function (event) {
            var email = $('#emailLogin').val();
            var password = $('#passwordLogin').val();

            if (email == "" || password == "") {
                $('#loginAlert').css('display', 'block');
                return;
            } else {
                $('#loginAlert').css('display', 'none');
            }
            $.ajax({
                url: "{{url('/users/login')}}",
                type: "POST",
                data: {
                    "psw": $.md5(password), /*password*/
                    "email": email, {{--"demo@nazteknikosgb.com", /*email*/--}}
                    "_token": "{{csrf_token()}}", {{--"demo@nazteknikosgb.com", /*email*/--}}
                },
                success: function (data, textStatus, jqXHR) {

                    if (data.result && data.data != null) {
                        contactid = data.data.contactid;
                        token = data.data.token;


                        window.location = "{{url('/')}}";

                    } else {
                        setTimeout(function () {
                            swal({
                                title: 'Dikkat!',
                                text: "Giriş bilgileri yanlış",
                                type: 'error',
                                showCancelButton: false,
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Tamam'
                            }).then(function () {
                            })
                        }, 1000)
                    }
                }
            });
        });

        $('#postForgotPasswordButton').on('click', function (event) {
            event.preventDefault();
            var email = $('#emailForgotPassword').val();
            $.ajax({
                url: "{{url('/users/pinRequest')}}",
                type: "POST",
                data: {
                    email: email,
                    _token: "{{csrf_token()}}",
                },
                success: function (data, textStatus, jqXHR) {
                    if (data.result) {
                        contactid = data.data.contactid;
                        pswtoken = data.data.pswtoken;
                        setTimeout(function () {
                            $('#forgotPasswordModal').modal('show');
                        }, 1000);

                    }


                }
            });

        })

        $('#postPinButton').on('click', function (event) {
            var pin = $('#pinForgotPasswordModal').val();
            var password = $('#passwordForgotPasswordModal').val();
            var passwordAgain = $('#passwordForgotPasswordAgainModal').val();

            if (pin == "" || password == "") {
                $('#forgotPasswordModalAlert').css("display", 'block');
                $('#forgotPasswordNotMatchedModalAlert').css('display', "none");
            } else if (pin != "" && password != "" && passwordAgain != "" && password != passwordAgain) {

                $('#forgotPasswordModalAlert').css("display", 'none');
                $('#forgotPasswordNotMatchedModalAlert').css("display", 'block');
            } else {
                $.ajax({
                    url: "{{url('/users/pinPost')}}",
                    type: "POST",
                    data: {
                        _token: "{{csrf_token()}}",
                        "psw": $.md5(password), /*password*/
                        "pin": pin, /*email*/
                    },
                    success: function (data, textStatus, jqXHR) {
                        /*var json = null;
                         try {
                         json = JSON.parse(data);
                         $('#forgotPasswordModalAlert').css('display', "none");
                         }
                         catch (e) {
                         console.log(e)
                         $('#forgotPasswordModalAlert').css('display', "block");
                         $('#emailForgotPassword').pulsate({
                         color: "#399bc3",
                         repeat: false
                         });

                         json = null;
                         }*/


                        if (data.result) {
                            $('#forgotPasswordModal').modal('hide');
                            $('#forgotPasswordModalAlert').css('display', "none");
                            $('#forgotPasswordNotMatchedModalAlert').css('display', "none");
                            setTimeout(function () {
                                swal({
                                    title: 'Şifre Değişimi',
                                    text: "Şifre Değişikliği Başarıyla Gerçekleşti!",
                                    type: 'warning',
                                    showCancelButton: false,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Giriş yap!'
                                }).then(function () {
                                    window.location.reload();

                                })
                            }, 1000)

                        }

                    }
                });
            }
        });
    })
    ;
</script>
</body>

</html>