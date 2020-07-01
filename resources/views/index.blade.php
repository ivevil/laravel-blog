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
                @for($i = 1; $i < 4; $i++)
                <div class="carousel-item @if($i == 1) active @endif">
                    <img class="d-block img-fluid w-100" src="{{$slider->details['slider_image_' . $i]}}" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-shadow">{{$slider->details['slider_title_' . $i]}}</h3>
                        <p class="text-shadow">{{$slider->details['slider_description_' . $i]}}</p>
                    </div>
                </div>
                @endfor
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
            <h1 class="my-2">{{$slider->name}}</h1>
            <div class="text-heading text-muted text-lg">By
                <strong>{{$slider->description}}</strong>
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
                @for($i = 1; $i < 4; $i++)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-cats-area mb-30">
                        <img src="{{$starrater->details['starrater_image_' . $i]}}" alt="">
                        <div class="cats-content">
                            <a href="cats-post.html">
                                <h5>{{$starrater->details['starrater_title_' . $i]}}</h5>
                            </a>
                            <div class="ratings ratings-{{$starrater->details['starrater_description_' . $i]}}">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
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
                @for($i = 1; $i < 7; $i++)
                <li class="filter" data-filter=".@isset($detailsunique['catagolizer_description_' . $i]){{$detailsunique['catagolizer_description_' . $i]}}@endisset">@isset($detailsunique['catagolizer_description_' . $i]) {{$detailsunique['catagolizer_description_' . $i]}} @endisset</li>
                @endfor
              </ul>

            </div>

            <div class="portfolio-container">
            
            @for($i = 1; $i < 7; $i++)
              <div class="col-lg-4 col-md-6 portfolio-thumbnail all {{$catagolizer->details['catagolizer_description_' . $i]}}">
                <a class="popup-img" href="assets/img/portfolio/1.jpg">
                  <img src="{{$catagolizer->details['catagolizer_image_' . $i]}}" alt="img">
                </a>
              </div>
              @endfor

            </div>
          </div>
        </div>
      </div>
     </div>
    </div><!-- End Portfolio Section -->


@include('layouts.footer')