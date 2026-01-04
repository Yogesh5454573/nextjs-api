<!DOCTYPE html>
<html lang="en">

<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', config('app.name'))</title>
        <link type="text/css" href="{{ asset('backend/asset/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{ asset('backend/asset/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{ asset('backend/asset/css/theme.css')}}" rel="stylesheet">
        <link type="text/css" href="{{ asset('backend/asset/images/icons/css/font-awesome.css')}}" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
<body>
    @include('admin.layouts.header')
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                    @include('admin.layouts.sidebar')
                </div>
                <div class="span9">
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layouts.footer');
    <script src="{{ asset('backend/asset/scripts/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/asset/scripts/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/asset/bootstrap/js/bootstrap.min.js" type="text/javascript')}}"></script>
    <script src="{{ asset('backend/asset/scripts/flot/jquery.flot.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/asset/scripts/flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/asset/scripts/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend/asset/scripts/common.js')}}" type="text/javascript"></script>

</body>