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
    <div class="player-0-panel active">
        <div class="player-name" id="name-0">Player 1</div>
        <div class="player-score" id="score-0">43</div>
        <div class="player-current-box">
            <div class="player-current-label">Current</div>
            <div class="player-current-score" id="current-0">11</div>
        </div>
    </div>

    <div class="player-1-panel">
        <div class="player-name" id="name-1">Player 2</div>
        <div class="player-score" id="score-1">72</div>
        <div class="player-current-box">
            <div class="player-current-label">Current</div>
            <div class="player-current-score" id="current-1">0</div>
        </div>
    </div>

    <button class="btn-new"><i class="ion-ios-plus-outline"></i>New game</button>
    <button class="btn-roll"><i class="ion-ios-loop"></i>Roll dice</button>
    <button class="btn-hold"><i class="ion-ios-download-outline"></i>Hold</button>

    <input type="text" placeholder="Final score" class="final-score">

    <img src="img/dice-5.png" alt="Dice" class="dice" id="dice-1">
    <img src="img/dice-5.png" alt="Dice" class="dice" id="dice-2">
</div>

<!--<script src="app.js"></script>-->
<script type="text/javascript" src="js/challenge.js"></script>




@extends('layouts.footer')
