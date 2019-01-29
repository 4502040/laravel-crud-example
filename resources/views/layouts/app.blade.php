<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico?" type="image/x-icon">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Crud Example</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">


    @yield('css')
    @yield('js')

</head>

<body class="hold-transition skin-yellow">
<div class="wrapper">

    <header class="main-header">

        <h3>Crud Example</h3>


    </header>

    <aside class="main-sidebar">

        <section class="sidebar">

            <a href="/items">List Items</a> <br>
            <a href="/items/create">Create Item</a>
        </section>
        <!-- /.sidebar -->
    </aside>


    <div class="content-wrapper">
        @if(Session::has('success'))
            <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('success') !!}</em></div>
        @endif


        @if(Session::has('error'))
            <div class="alert alert-info"><span class="glyphicon glyphicon-warning-sign"></span><em> {!! session('error') !!}</em></div>
        @endif

        <div class="col-md-12">
            @if(isset($errors))
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            @endif
        </div>

        @yield('content')
    </div>

    <footer class="main-footer">


    </footer>


</div>
<!-- ./wrapper -->

</body>
</html>