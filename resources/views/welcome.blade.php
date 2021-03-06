@extends('layouts.app')

@section('content')
    <!--Home Landing page////////////////////////////////////////////////-->
    <div class="container-fluid home">
        <div class="row">
            <div class="col-lg-12">
                <div class="content">
                    <h1>Deal combinator</h1>
                    <div>
                        <h3 class="css-typing">Where deals are made</h3>
                    </div>

                    <button type="button" class="btn btn-secondary btn-lg js--scroll-to-plan" id="get-started-btn">Get
                        started
                    </button>
                    <button type="button" class="btn btn-secondary btn-lg js--scroll-to-start" id="learn-more-btn">Learn
                        more
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid js--section-features">
        <div class="row what_we_do" id="about">
            <div class="col-lg-12">
                <h1>Why deal combinator?</h1>
            </div>
        </div>
        <div class="row what_we_do">
            <div class="col-lg-3">
                <i class="fas fa-lock icons"></i>
                <h2>Safe and secure</h2>
                <p>Securely upload your deals onto the website and add as little or as much information as you choose.
                    Also, check the track record of whoever you do business with.</p>
            </div>
            <div class="col-lg-3">
                <i class="fas fa-search icons"></i>
                <h2>Browse thousands of deals</h2>
                <p>Use our search tools ot browse thousands of deals from reputable deal sourcers and find those that
                    are right for you.</p>

            </div>
            <div class="col-lg-3">
                <i class="fas fa-expand-arrows-alt icons"></i>
                <h2>Grow your network</h2>
                <p>Make connections and message other investors and sourcers online to make grow your business and your
                    network</p>

            </div>
            <div class="col-lg-3">
                <i class="far fa-handshake icons"></i>
                <h2>Make more deals</h2>
                <p>With thousands of deals available you will be abe to easily find what your looking for and find all
                    the details you ned in on place</p>


            </div>

        </div>
    </div>
    <div class="container-fluid how_it_works">
        <div class="row">
            <div class="col-lg-12">
                <h1>How it works</h1>
                <h6>for investors...</h6>
            </div>
            <div class="row how_it_works how_content">
                <div class="col-lg-6 ">
                    <img src="/images/investor_SC.png" class="app_screenshot grow">
                </div>
                <div class="col-lg-6 steps">
                    <div>1</div>
                    <p>Sign up</p>
                    <div>2</div>
                    <p>Browse trusted deals</p>
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


    </div>
    <div class="container-fluid how_it_works sourcers">
        <div class="row">
            <div class="col-lg-12">
                <h1>How it works</h1>
                <h6>for sourcers...</h6>
            </div>
            <div class="row how_it_works sourcers how_content">
                <div class="col-lg-6 ">
                    <img src="/images/Sourcer_SC.png" class="app_screenshot grow">
                </div>
                <div class="col-lg-6 steps">
                    <div>1</div>
                    <p>Sign up</p>
                    <div>2</div>
                    <p>Upload deals to Deal Combinator</p>
                    <div>3</div>
                    <p>Connect to investors and build custom deals</p>
                    <a href="#" class="btn_app">
                        <img src="/images/logo-app_store.png" class="btn-app">
                    </a>
                    <a href="#" class="btn_app">
                        <img src="/images/googleplay.png" class="btn-app">
                    </a>
                </div>
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
                    Since joining DealCombinator I have been avle to grwo my networking and make more deals than ever
                    before. It is now an essential tool in my business.
                    <cite><br></b><img src="/images/person_1.jpg" alt="Customer 3 Photo"><br>Guy Wendon</cite>
                </blockquote>

            </div>
            <div class="col-lg-4">
                <blockquote>
                    As a new investor I did not have any network, but Deal Combinator gave me the confidence and the
                    resources to meet many like minded people and make my first deal.
                    <cite><br></b><img src="/images/person_2.jpeg" alt="Customer 3 Photo"><br>Jessica Harris</cite>
                </blockquote>

            </div>
            <div class="col-lg-4">
                <blockquote>
                    I couldn't imagine life without it! Before Deal Combinator i was never sure which investors to
                    trust, thats all changed now! I couldn't recommend more!
                    <cite><br></b><img src="/images/person_3.jpg" alt="Customer 3 Photo"><br>James Lewis</cite>
                </blockquote>

            </div>
        </div>

    </div>
    <div class="container-fluid js--section-plans" id="plans">
        <div class="row">
            <div class="col-lg-12 section_plans">
                <h4>Improve your deals today</h4>
            </div>
        </div>
        <div class="row plans_group">
            <div class="col-lg-4 section_plans grow">
                <div class="plan-box">
                    <div>
                        <h3>Starter</h3>
                        <p class="plan-price">£79 <span>/ month</span></p>
                    </div>
                    <div>
                        <ul>
                            <li><i class="fas fa-check"></i>Unlimited Browsing</li>
                            <li><i class="fas fa-check"></i>Favourite Deals</li>
                            <li><i class="fas fa-times"></i></li>
                            <li><i class="fas fa-times"></i></li>
                        </ul>
                    </div>
                    <div>
                        <a href="{{ route('register') }}" class="btn">Sign up now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 section_plans grow">
                <div class="plan-box">
                    <div>
                        <h3>Professional</h3>
                        <p class="plan-price">£199 <span>/ month</span></p>
                    </div>
                    <div>
                        <ul>
                            <li><i class="fas fa-check"></i>Unlimited Browsing</li>
                            <li><i class="fas fa-check"></i>Favourite Deals</li>
                            <li><i class="fas fa-times"></i></li>
                            <li><i class="fas fa-check"></i>Message Other Memebers</li>
                        </ul>
                    </div>
                    <div>
                        <a href="{{ route('register') }}" class="btn">Sign up now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 section_plans grow">
                <div class="plan-box">
                    <div>
                        <h3>Enterprise</h3>
                        <p class="plan-price">£499 <span>/ month</span></p>
                    </div>
                    <div>
                        <ul>
                            <li><i class="fas fa-check"></i>Unlimited Browsing</li>
                            <li><i class="fas fa-check"></i>Favourite Deals</li>
                            <li><i class="fas fa-times"></i>Uplaod Deals</li>
                            <li><i class="fas fa-times"></i>Message Other Members</li>
                        </ul>
                    </div>
                    <div>
                        <a href="{{ route('register') }}" class="btn">Sign up now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="page-footer">

        <!-- Footer Elements -->
        <div class="container">

            <!-- Grid row-->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-12 py-5">
                    <div class="foot-icons">

                        <!-- Facebook -->
                        <i class="fab fa-facebook-f fa-2x"></i>
                        <!-- Twitter -->
                        <i class="fab fa-twitter fa-2x foot-icon"></i>                            <!-- Google +-->
                        <i class="fab fa-google-plus-g fa-2x foot-icon"></i>
                        <!--Linkedin -->
                        <i class="fab fa-linkedin-in fa-2x foot-icon"></i>                            </a>
                        <!--Instagram-->
                        <i class="fab fa-instagram fa-2x foot-icon"></i>                            </a>
                        <!--Pinterest-->
                        <i class="fab fa-pinterest-p fa-2x foot-icon"></i>                            </a>
                    </div>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            DealCombinator Ltd.
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstra2p JS -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>


    {{--<script src="/resources/assets/js/typer.js"></script>--}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/script.js"></script>
@endsection
