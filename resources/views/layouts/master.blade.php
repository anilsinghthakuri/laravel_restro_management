<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pos Billing System</title>
    @include('layouts.style')
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="/css/categories.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="{{asset('font/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('nepali_date/nepali-date-picker.min.css')}}">


    @livewireStyles

</head>

<body>
    <section class="add__categories">




       @include('layouts.nav')

        <div class="container">
            <div class="col-md-12 body-class ">

                <div class="row">

                    {{-- <div class="col-md-3 sidebar__col__div px-0">

                        @include('layouts.nav')

                    </div> --}}

                    @yield('components')
                </div>
            </div>
        </div>

    </section>
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>

    <script src="{{asset('nepali_date/script.js')}}"></script>
    <script src="{{asset('nepali_date/nepali-date-picker.min.js')}}"></script>

    <script src="/js/script.js"></script>
    @livewireScripts


    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

</body>

</html>
