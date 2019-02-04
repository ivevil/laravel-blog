@extends('layouts.header')
<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">IT IVEVIL 2017</div>
<div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">3481
    Melrose Place | Beverly Hills, CA 90210 | 123.456.7890
</div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="create">Create</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="">Blog</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="contact">Contact</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="game">Game</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="bg-faded p-4 my-4">
        <!-- Image Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid w-100" src="http://www.themalaysiantimes.com.my/wp-content/uploads/2017/05/06-train-cat-shake-hands.jpg" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-shadow">First Slide</h3>
                        <p class="text-shadow">This is the caption for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid w-100" src="http://www.discoverfrome.co.uk/wp-content/uploads/2017/06/cat.jpg" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-shadow">Second Slide</h3>
                        <p class="text-shadow">This is the caption for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid w-100" src="https://www.rd.com/wp-content/uploads/sites/2/2016/04/01-cat-wants-to-tell-you-laptop.jpg" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-shadow">Third Slide</h3>
                        <p class="text-shadow">This is the caption for the third slide.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    <div class="parent">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
        <div class="item">5</div>
    </div>

@extends('layouts.footer')