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

<div class="wrapper clearfix">
<div class="container">

    <div class="bg-faded p-4 my-4">

    </div>

    <form method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" class="form-control" id="body" placeholder="Body"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
</div>


    <div class="bg-faded p-4 my-4">


            </div>
</div>

@extends('layouts.footer')