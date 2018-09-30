{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<!-- Required meta tags -->--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

    {{--<!-- Bootstrap CSS -->--}}
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"--}}
          {{--integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">--}}
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"--}}
          {{--integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">--}}
    {{--<link rel="stylesheet" type="text/css" href="/css/style.css">--}}

    {{--<title>Home</title>--}}
{{--</head>--}}
{{--<body>--}}

{{--<!--Navbar//////////////////////////////////////////////////////-->--}}
{{--<nav class="navbar navbar-expand-lg">--}}
    {{--<!--<a class="navbar-brand" href="#"></a>-->--}}
    {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
            {{--aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
        {{--<span class="navbar-toggler-icon"></span>--}}
    {{--</button>--}}

    {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
        {{--<ul class="navbar-nav mr-auto">--}}
            {{--<li class="nav-item active">--}}
                {{--<a class="nav-link" href="homePage.html">Home</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#about">About</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="contact.html">Contact</a>--}}
            {{--</li>--}}

        {{--</ul>--}}
        {{--<ul class="navbar-nav">--}}
            {{--<a class="nav-link" id="nav_signup" href="/register">Sign Up</a>--}}
            {{--<a class="nav-link" href="/login">Log in</a>--}}
            {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
        {{--</ul>--}}

    {{--</div>--}}

{{--</nav>--}}


@extends('layouts.app')

@section('content')
<!--Home Landing page////////////////////////////////////////////////-->
<div class="container-fluid home">
    <div class="row">
        <div class="col-lg-12">
            <div class="content">
                <h1>Deal combinator</h1>
                <h3>Where deals are made</h3>
                <hr>
                <button type="button" class="btn btn-secondary btn-lg">Get started</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row what_we_do" id="about">
        <div class="col-lg-12">
            <h1>Why deal combinator?</h1>
        </div>
    </div>
    <div class="row what_we_do">
        <div class="col-lg-3">
            <i class="fas fa-lock icons"></i>
            <h2>Safe and secure</h2>
            <p>Securely uplpoad your deals onto the website and add as little or as much information as you choose. Also, check the track record of whoever you do business with.</p>
        </div>
        <div class="col-lg-3">
            <i class="fas fa-search icons"></i>
            <h2>Browse thousands of deals</h2>
            <p>Use our search tools ot browse thousands of deals from reputable deal sourcers and find those that are right for you.</p>

        </div>
        <div class="col-lg-3">
            <i class="fas fa-expand-arrows-alt icons"></i>
            <h2>Grow your network</h2>
            <p>Make connections and message other investors and sourcers online to make grow your business and your network</p>

        </div>
        <div class="col-lg-3">
            <i class="far fa-handshake icons"></i>
            <h2>Make more deals</h2>
            <p>With thousands of deals available you will be abe to easily find what your looking for and find all the details you ned in on place</p>


        </div>

    </div>
</div>
<div class="container-fluid how_it_works">
    <div class="row">
        <div class="col-lg-12">
            <h1>How it works</h1>
            <h6>for investors...</h6>
        </div>
    </div>
    <div class="row how_it_works">
        <div class="col-lg-6 ">
            <h3>hello world</h3>
        </div>
        <div class="col-lg-6 steps">
            <div>1</div>
            <p>Sign up</p>
            <div>2</div>
            <p>Upload deals online</p>
            <div>3</div>
            <p>Reply to investors and message investors to build custom deals</p>
            <a href="#" class="btn_app">
                <img src="/images/logo-app_store.png" class="btn-app">
            </a>
            <a href="#" class="btn_app">
                <img src="/images/googleplay.png" class="btn-app">
            </a>

        </div>
    </div>


</div>
<div class="container-fluid how_works sourcers">
    <div class="row how_it_works sourcers">
        <div class="col-lg-12">
            <h1>How it works</h1>
            <h6>for sourcers...</h6>
        </div>
    </div>
    <div class="row how_it_works sourcers">
        <div class="col-lg-6 ">
            <h3>hello world</h3>
        </div>
        <div class="col-lg-6 steps">
            <div>1</div>
            <p>Sign up</p>
            <div>2</div>
            <p>Browse the deals in your area</p>
            <div>3</div>
            <p>Become a member to message the sourcer and get full information</p>
            <a href="#" class="btn_app">
                <img src="/images/logo-app_store.png" class="btn-app">
            </a>
            <a href="#" class="btn_app">
                <img src="/images/googleplay.png" class="btn-app">
            </a>

        </div>


    </div>


</div>
<div class="container-fluid testimonials">
    <div class="row">
        <div class="col-lg-12">
            <h4>Our results speak for themselves</h4>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-4">
            <blockquote>
                Since joining DealCombinator I have been avle to grwo my networking and make more deals than ever before. It is now an essential tool in my business.
                <cite><img src="/images/person_1.jpg" alt="Customer 3 Photo">Harrison Stevens</cite>
            </blockquote>

        </div>
        <div class="col-lg-4">
            <blockquote>
                As a new investor I did not have any network, but Deal Combinator gave me the confidence and the resources to meet many like minded people and make my first deal.
                <cite><img src="/images/person_2.jpeg" alt="Customer 3 Photo">Sarah Milton</cite>
            </blockquote>

        </div>
        <div class="col-lg-4">
            <blockquote>
                I couldn't imagine life without it!
                <cite><img src="/images/person_3.jpg" alt="Customer 3 Photo">Josh Ryan</cite>
            </blockquote>

        </div>
    </div>

</div>
<div class="container-fluid" id="plans">
    <div class="row">
        <div class="col-lg-12 section_plans">
            <h4>Improve your deals today</h4>
        </div>
    </div>
    <div class="row plans_group">
        <div class="col-lg-4 section_plans">
            <div class="plan-box">
                <div>
                    <h3>Master</h3>
                    <p class="plan-price">£399 <span>/ month</span></p>
                </div>
                <div>
                    <ul>
                        <li><i class="fas fa-check"></i>nwwnnneiw</li>
                        <li><i class="fas fa-check"></i>nwwnnneiw</li>
                        <li><i class="fas fa-check"></i>nwwnnneiw</li>
                        <li><i class="fas fa-check"></i>nwwnnneiw</li>
                    </ul>
                </div>
                <div>
                    <a href="#" btn>Sign up now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 section_plans">
            <div class="plan-box">
                <div>
                    <h3>Pro</h3>
                    <p class="plan-price">£399 <span>/ month</span></p>
                </div>
                <div>
                    <ul>
                        <li><i class="fas fa-check"></i>nwwnnneiw</li>
                        <li><i class="fas fa-check"></i>nwwnnneiw</li>
                        <li><i class="fas fa-times"></i></li>
                        <li><i class="fas fa-check"></i>nwwnnneiw</li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn">Sign up now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 section_plans">
            <div class="plan-box">
                <div>
                    <h3>Starter</h3>
                    <p class="plan-price">£399 <span>/ month</span></p>
                </div>
                <div>
                    <ul>
                        <li><i class="fas fa-check"></i>nwwnnneiw</li>
                        <li><i class="fas fa-check"></i>nwwnnneiw</li>
                        <li><i class="fas fa-times"></i></li>
                        <li
                        <i class="fas fa-times"></i></li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="plan_btn">Sign up now</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container-fluid">
    <div class="container contactForm">
        <form>
            <div class="row">
                <div class="col-lg-6">
                    <div class="col">
                        <label>First name</label>
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="col">
                        <label>Last name</label>
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label>Example multiple select</label>
                <select multiple class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </form>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstra2p JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
@endsection

{{--</body>--}}
{{--</html>--}}