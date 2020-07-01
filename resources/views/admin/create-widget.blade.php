@include('admin.header')

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Widgets</h1>
            <a href="{{route('addwidget')}}"><button class="btn btn-primary">Add new widget</button></a>
          </div>

          <div class="table-responsive">
               <form method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
        
            <div class="container col-lg-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                    </div>
            </div>
            <div class="container col-lg-12">
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" placeholder="description"></textarea>
                </div>
            </div>
            <div class="container col-lg-12">
                <div class="form-group">
                    <label for="type" class="col-lg-12 control-label">Type</label>
                    <div class="col-md-6">
                        <select name="type" class="form-control" id="type">
                                <option value="">-- Choose Type --</option>
                                                @foreach($types as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                                                @endforeach
                        </select>
                    </div>
                </div>
            </div>
        
        <div class="widget slider" style="display: none;">
            <div class="container col-lg-12 p-4">
                <h1>Slider</h1>
            </div>
            @for($i = 1; $i < 7; $i++)
            <div class="container col-lg-6 border border-info rounded my-4 p-4">
                <div class="container col-lg-12">
                    <div class="form-group">
                        <input type="text" name="slider_title_{{ $i }}" class="form-control" id="slider_title_{{ $i }}" placeholder="Title">
                    </div>
                </div>
                <div class="container col-lg-12">
                        <input hidden class="form-control slider_image_{{ $i }}" name="slider_image_{{ $i }}" value="">
                        <button type="button" id="add-image-button-{{$i}}" class="btn btn-secondary add-image-button d-flex justify-content-center align-items-center" data-number="{{$i}}" data-toggle="modal" data-target=".bd-example-modal-lg">Add image</button>
                        <img src="{{asset('/') . 'public/img/no-image.png'}}" class="responsive widget-image-{{$i}} border d-flex justify-content-center align-items-center" width="380" height="250" style="object-fit: cover;">
                    </div>
                <div class="container col-lg-12">
                    <div class="form-group">
                        <label for="slider_description_{{ $i }}">Slide {{ $i }} description</label>
                        <textarea name="slider_description_{{ $i }}" class="form-control" id="slider_description_{{ $i }}" placeholder="Description"></textarea>
                    </div>
                </div>
            </div>
            @endfor
        </div>
        
         <div class="widget starrater" style="display: none;">
             <div class="container col-lg-12 p-4">
                <h1>Starrater</h1>
            </div>
            @for($i = 1; $i < 7; $i++)
            <div class="container col-lg-6 border border-info rounded my-4 p-4">
                <div class="container col-lg-12">
                    <div class="form-group">
                        <input type="text" name="starrater_title_{{ $i }}" class="form-control" id="starrater_title_{{ $i }}" placeholder="Title">
                    </div>
                </div>
                    <div class="container col-lg-12">
                        <input hidden class="form-control starrater_image_{{ $i }}" name="starrater_image_{{ $i }}" value="">
                        <button type="button" id="add-image-button-{{$i}}" class="btn btn-secondary add-image-button d-flex justify-content-center align-items-center" data-number="{{$i}}" data-toggle="modal" data-target=".bd-example-modal-lg">Add image</button>
                        <img src="{{asset('/') . 'public/img/no-image.png'}}" class="responsive widget-image-{{$i}} border d-flex justify-content-center align-items-center" width="380" height="250" style="object-fit: cover;">
                    </div>
                <div class="container col-lg-12">
                    <div class="form-group">
                        <label for="starrater_description_{{ $i }}">Slide {{ $i }} description</label>
                        <textarea name="starrater_description_{{ $i }}" class="form-control" id="starrater_description_{{ $i }}" placeholder="Description"></textarea>
                    </div>
                </div>
            </div>
            @endfor
        </div>
        
         <div class="widget catagolizer" style="display: none;">
             <div class="container col-lg-12 p-4">
                <h1>Catagolizer</h1>
            </div>
            @for($i = 1; $i < 7; $i++)
            <div class="container col-lg-6 border border-info rounded my-4 p-4">
                <div class="container col-lg-12">
                    <div class="form-group">
                        <input type="text" name="catagolizer_title_{{ $i }}" class="form-control" id="catagolizer_title_{{ $i }}" placeholder="Title">
                    </div>
                </div>
                <div class="container col-lg-12">
                    <input hidden class="form-control catagolizer_image_{{ $i }}" name="catagolizer_image_{{ $i }}" value="">
                    <button type="button" id="add-image-button-{{$i}}" class="btn btn-secondary add-image-button d-flex justify-content-center align-items-center" data-number="{{$i}}" data-toggle="modal" data-target=".bd-example-modal-lg">Add image</button>
                    <img src="{{asset('/') . 'public/img/no-image.png'}}" class="responsive widget-image-{{$i}} border d-flex justify-content-center align-items-center" width="380" height="250" style="object-fit: cover;">
                </div>
                <div class="container col-lg-12 p-4">
                    <select name="catagolizer_description_{{ $i }}" class="form-control" id="catagolizer_description_{{ $i }}">
                        <option value="">-- Choose Category --</option>
                            @foreach($categories as $category)
                        <option value="{{$category->name}}">{{$category->name}}</option>
                            @endforeach
                    </select>            
                </div>
            </div>
            @endfor
        </div>
        <div class="container col-lg-12 my-4 p-4 d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>
            </form>
          
          
          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="row">
                    <div class="col-md-12">
                        <div id="mdb-lightbox-ui"></div>
                        <div class="mdb-lightbox d-flex flex-wrap">
                    
                          @foreach($media as $image)
                          <figure class="col-md-4">
                            <a href="#" data-size="800x600">
                              <img alt="{{$image->alt}}" src="{{url('/')}}{{$image->url}}" class="img-fluid gallery-item-widget">
                            </a>
                          </figure>
                          @endforeach
                    
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      
    </div>

</body>

@include('layouts.footer')