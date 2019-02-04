
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
        <!-- Welcome Message -->
        <div class="text-center mt-4">
            <div class="text-heading text-muted text-lg">Welcome To</div>
            <h1 class="my-2">Business Casual</h1>
            <div class="text-heading text-muted text-lg">By
                <strong>Start Bootstrap</strong>
            </div>
        </div>
    </div>

    @foreach($posts as $pos)
    <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
            {{ $pos->created_at->toFormattedDateString() }}
            <hr class="side">
            <a href="posts/{{ $pos->idPosts }}"><strong>{{ $pos->title }}</strong></a>
        </h2>
        <hr class="divider">
        <p style="text-align: center;">{{ $pos->body }}</p>
        <p></p>
    </div>
    @endforeach
    <div class="bg-faded p-4 my-4" style="overflow: hidden;">
        <div class="row" style="height: 70px;">
            <div class="col-xs-2">
                <div class="box">
            <button type="button" class="btn btn-primary" id="myBtn" style="margin-right: 30px;">Minister 1</button>
                </div></div>
            <div class="col-xs-2">
                <div class="box">
                    <button type="button" class="btn btn-primary">Minister 2</button>
                </div></div>
            <div class="col-xs-2">
                <div class="box">
                    <button type="button" class="btn btn-primary">Minister 3</button>
                </div></div>
        </div>
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <!-- Modal content -->
                        <span class="close">&times;</span>
                    <div class="modal-body" style="width: 100%; display: inline-flex;">
                        <div class="left-part" style="width: 60%;">
                            <div class="modal-img">
                            </div>
                                <span class="text-modal">
                                    Barbados
                                    Barbados -the best country!
                                </span>
                        </div>
                        <div id="map" style="width: 40%; height: 500px;"></div>
                    </div>

            </div>

        </div>

</div>
</div>
<!-- /.container -->

<!-- Bootstrap core JavaScript -->


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>



<script>
    function initMap() {
        var myLatLng = {lat: 13.113222, lng: -59.598808};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: myLatLng,
            disableDefaultUI: true,
            zoomControl: true,
            zoomControlOptions: {
                position: google.maps.ControlPosition.LEFT_TOP
            },
        });
        var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
        var beachMarker1 = new google.maps.Marker({
            position: {lat: 13.113222, lng: -59.598808},
            map: map,
            icon: image,
            title: 'Hello World!'
        });

        var contentString = '<div id="content">' + '<div class="info-image"></div>' + '<div class="headline">Sunny beach' + '<div class="text">This beach is one of the bestest beach in the world!' + '</div></div></div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 300,
            maxHeight: 300,

        });

        beachMarker1.addListener('click', function() {
            infowindow.open(map, beachMarker1);
        });
    }


    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<style>
    .headline {
        font-family: "Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-size: 18px;
    }

    .text {
        font-family: "Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
        font-size: 10px;
        font-weight: 100;
    }
    .info-image {
        background-image: url('https://static.pexels.com/photos/88212/pexels-photo-88212.jpeg');
        height: 200px;
        width: 300px;
        background-size: contain;
    }

    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        width: 100%; /* Full width */
        height: 120%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        margin-top: -200px; (100px because it’s half of 200px)
    }
    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-img {
        background-image: url('https://atozhairstyles.com/wp-content/uploads/2016/07/33-Dreadlocks.jpg?x73884');
        background-size: contain;
        background-repeat: no-repeat;
        height: 500px;
    }

    .left-part {
        overflow: hidden;
    }
    .text-modal {
        height: 30%;
        z-index: 10;
        background-color: darkblue;
        color: white;
        position: absolute;
        bottom: 10px;
        height: 100px;
        width: 100%;

    }
</style>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfxRzkNKLcWuiYB7hKbAiYvAqBWi60jy8&callback=initMap">
</script>

</body>

</html>




@extends('layouts.footer')
