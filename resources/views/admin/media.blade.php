@include('admin.header')

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Media</h1>
            <a href="{{route('addmedia')}}"><button class="btn btn-primary">Add new image</button></a>
          </div>
          
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

            <div class="row">
              <div class="col-md-12">
            
                <div id="mdb-lightbox-ui"></div>
            
                <div class="mdb-lightbox d-flex flex-wrap">
            
                  @foreach($media as $image)
                  <figure class="col-md-4">
                    <a href="#" data-size="800x600">
                      <img alt="{{$image->alt}}" src="{{url('/')}}{{$image->url}}" class="img-fluid">
                    </a>
                  </figure>
                  @endforeach
            
                </div>
            
              </div>
            </div>
        </main>
      </div>
    </div>

</body>