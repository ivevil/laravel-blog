@include('layouts.header')

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
                    <img class="d-block img-fluid w-100" src="{{asset('/')}}public/img/cat-1.jpg" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-shadow">First Slide</h3>
                        <p class="text-shadow">This is the caption for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid w-100" src="{{asset('/')}}public/img/cat-2.jpg" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-shadow">Second Slide</h3>
                        <p class="text-shadow">This is the caption for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid w-100" src="{{asset('/')}}public/img/cat-3.jpg" alt="">
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
                <strong>Ivevil</strong>
            </div>
        </div>
    </div>

 <div class="best-cats-area bg-faded p-4 my-4">
            <div class="row best-cats-area-row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3 class="my-4 p-4 text-center">The best pets</h3>
                    </div>
                </div>
            </div>

            <div class="row best-cats-area-row d-flex justify-content-center align-items-center">
                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-cats-area mb-30">
                        <img src="{{asset('/')}}public/img/cat-1.jpg" alt="">
                        <div class="cats-content">
                            <a href="cats-post.html">
                                <h5>Meow</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-cats-area mb-30">
                        <img src="{{asset('/')}}public/img/cat-2.jpg" alt="">
                        <div class="cats-content">
                            <a href="cats-post.html">
                                <h5>Meow 1</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-cats-area mb-30">
                        <img src="{{asset('/')}}public/img/cat-3.jpg" alt="">
                        <div class="cats-content">
                            <a href="cats-post.html">
                                <h5>Meow 2</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-cats-area mb-30">
                        <img src="{{asset('/')}}public/img/cat-1.jpg" alt="">
                        <div class="cats-content">
                            <a href="cats-post.html">
                                <h5>Meow 3</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-cats-area mb-30">
                        <img src="{{asset('/')}}public/img/cat-2.jpg" alt="">
                        <div class="cats-content">
                            <a href="cats-post.html">
                                <h5>Meow 4</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Best Receipe Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-cats-area mb-30">
                        <img src="{{asset('/')}}public/img/cat-3.jpg" alt="">
                        <div class="cats-content">
                            <a href="cats-post.html">
                                <h5>Meow 5</h5>
                            </a>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
 
        <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="text-center paddsection">

      <div class="bg-faded">
        <div class="section-title text-center">
          <h2 class="my-4 p-4">My Portfolio</h2>
        </div>
        <div class="row">
          <div class="col-md-12">

            <div class="portfolio-list">

              <ul class="nav list-unstyled" id="portfolio-flters">
                <li class="filter filter-active" data-filter=".all">all</li>
                <li class="filter" data-filter=".test">test</li>
                <li class="filter" data-filter=".mockups">mockups</li>
                <li class="filter" data-filter=".uikits">ui kits</li>
                <li class="filter" data-filter=".webdesign">web design</li>
                <li class="filter" data-filter=".photography">photography</li>
              </ul>

            </div>

            <div class="portfolio-container">

              <div class="col-lg-4 col-md-6 portfolio-thumbnail all test uikits webdesign">
                <a class="popup-img" href="assets/img/portfolio/1.jpg">
                  <img src="{{asset('/')}}public/img/cat-3.jpg" alt="img">
                </a>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups uikits photography">
                <a class="popup-img" href="assets/img/portfolio/2.jpg">
                  <img src="{{asset('/')}}public/img/cat-3.jpg" alt="img">
                </a>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-thumbnail all test webdesig photographyn">
                <a class="popup-img" href="assets/img/portfolio/3.jpg">
                  <img src="{{asset('/')}}public/img/cat-3.jpg" alt="img">
                </a>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups webdesign photography">
                <a class="popup-img" href="assets/img/portfolio/4.jpg">
                  <img src="{{asset('/')}}public/img/cat-3.jpg" alt="img">
                </a>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-thumbnail all branding uikits photography">
                <a class="popup-img" href="assets/img/portfolio/5.jpg">
                  <img src="{{asset('/')}}public/img/cat-3.jpg" alt="img">
                </a>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-thumbnail all mockups uikits webdesign">
                <a class="popup-img" href="assets/img/portfolio/6.jpg">
                  <img src="{{asset('/')}}public/img/cat-3.jpg" alt="img">
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
     </div>
    </div><!-- End Portfolio Section -->


@include('layouts.footer')