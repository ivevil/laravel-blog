@include('layouts.header')

<div class="container bg-faded blog__game">
<div class="wrapper clearfix">
    <div class="player-0-panel active col-md-5">
        <div class="player-name" id="name-0">Player 1</div>
        <div class="player-score" id="score-0">43</div>
        <div class="player-current-box">
            <div class="player-current-label">Current</div>
            <div class="player-current-score" id="current-0">11</div>
        </div>
    </div>
    
    <div class="blog__game-options col-md-2">
        <button class="btn-new"><i class="ion-ios-plus-outline"></i>New game</button>
        <button class="btn-roll"><i class="ion-ios-loop"></i>Roll dice</button>
        <button class="btn-hold"><i class="ion-ios-download-outline"></i>Hold</button>
    
        <input type="text" placeholder="Final score" class="final-score">
    
        <img src="{{ asset('/') }}public/img/dice-5.png" alt="Dice" class="dice" id="dice-1">
        <img src="{{ asset('/') }}public/img/dice-5.png" alt="Dice" class="dice" id="dice-2">
    </div>

    <div class="player-1-panel col-md-5">
        <div class="player-name" id="name-1">Player 2</div>
        <div class="player-score" id="score-1">72</div>
        <div class="player-current-box">
            <div class="player-current-label">Current</div>
            <div class="player-current-score" id="current-1">0</div>
        </div>
    </div>
    
</div>
</div>

<!--<script src="app.js"></script>-->
<script type="text/javascript" src="{{ asset('/') }}public/js/challenge.js"></script>




@include('layouts.footer')
