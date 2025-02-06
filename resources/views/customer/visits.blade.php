@extends('layouts.customer_layout')
@section('style')
@endsection

@section('content')
@endsection

@section('script')
    @if(isset($contactid))
        <script>
            var contactid = "<?php echo $contactid?>";
            var token = "<?php echo $token?>";
        </script>
    @endif
    <script>
        $(document).on('ready', function () {
            $('#selector-visits').addClass('open');
        })

    </script>
@endsection