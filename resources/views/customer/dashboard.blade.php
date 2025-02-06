@extends('layouts.customer_layout')
@section('style')
@endsection

@section('content')
    <iframe id="frame" src="{{url('/dashboard/content')}}"
            style="border: none;width: 100%;min-height:650px;padding: 0;"></iframe>





@endsection

@section('script')
    @if(isset($contactid))
        <script>
            var contactid = "<?php echo $contactid?>";
            var token = "<?php echo $token?>";
        </script>
    @endif
    <script>
        function startLoadingObj() {
            $.blockUI();
            $('.blockUI.blockMsg.blockPage').css('display', 'none')
            App.startPageLoading({animate: true});
        }
        function endLoadingObj() {
            window.setTimeout(function () {
                App.stopPageLoading();
                $.unblockUI();
            }, 1000);
        }
        $(document).on('ready', function () {

            $('#frame').on('load', function () {
                endLoadingObj();
            })
        })
    </script>

@endsection