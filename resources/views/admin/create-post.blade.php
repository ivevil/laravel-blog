@include('admin.header')

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Add new post</h1>
          </div>

          <div class="table-responsive">
               <form method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
        <div class="container col-lg-12 border">
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                </div>
        </div>

        <div class="container col-lg-12 border">
            <div class="container col-lg-6 my-4">
                <div class="form-group">
                    <textarea name="body" class="form-control" id="body" rows="35"></textarea>
                </div>
            </div>
            
            <div class="container col-lg-6 p-4 border d-flex justify-content-center align-items-center">
                <button class="btn btn-info mr-4">Preview</button>
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            
            <div class="container col-lg-6 border p-4 d-flex justify-content-center align-items-center flex-column">
                <input hidden class="form-control featured_image" name="featured_image" value="">
                <button type="button" class="btn btn-secondary add-image-button d-flex justify-content-center align-items-center" data-toggle="modal" data-target=".bd-example-modal-lg">Add image</button>
                <img src="{{asset('/') . 'public/img/no-image.png'}}" class="responsive post-image border d-flex justify-content-center align-items-center" width="380" height="250" style="object-fit: cover;">
                
                <div class="form-group">
                    <label for="category" class="col-lg-12 control-label">Category</label>
                    <div class="col-lg-12">
                        <select name="id_category" class="form-control" id="id_category" required>
                                <option value="">-- Choose Category --</option>
                                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
            </form>
          </div>

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
                              <img alt="{{$image->alt}}" src="{{url('/')}}{{$image->url}}" class="img-fluid gallery-item">
                            </a>
                          </figure>
                          @endforeach
                    
                        </div>
                    
                      </div>
                    </div>
                </div>
              </div>
            </div>
            
        </main>
      </div>
    </div>

</body>

        <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'body' );
        </script>

@include('layouts.footer')