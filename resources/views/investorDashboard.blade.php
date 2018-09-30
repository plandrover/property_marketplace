{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<title>Dashboard</title>--}}
    {{--<!-- Bootstrap CSS -->--}}
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"--}}
          {{--integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">--}}
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"--}}
          {{--integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">--}}
{{--</head>--}}
@extends('layouts.app')
@section('content')
<body id="dashboard">


<div class="container-fluid user-dashboard ">
    <div class="container-fluids dash-header">
        <h1>Hello, James</h1>
        <p>Lets make some deals</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="dash-icons">
                    <i class="fas fa-search icons-dash"></i>
                </div>

                <div class="dash-box">
                    <p>Browse</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="dash-icons">
                    <i class="fas fa-star icons-dash"></i>
                </div>

                <div class="dash-box">
                    <p>Favourites</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="dash-icons">
                    <i class="fas fa-user-edit icons-dash"></i>
                </div>

                <div class="dash-box">
                    <p>Edit profile</p>
                </div>
            </div>
        </div>
        <div class="row half-circle dash-message-container">
            <div class="col-lg-12">
                <div class="dash-icons dash-message">
                    <i class="fas fa-comments dash-message-icons"></i>
                </div>

                <div class="dash-box-message">
                    <p>Messages</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
</body>
{{--</html>--}}
    @endsection