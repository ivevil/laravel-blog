@include('admin.header')

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Posts</h1>
            <a href="{{route('createpost')}}"><button class="btn btn-primary">Add new post</button></a>
          </div>

          <div class="table-responsive">
               <form method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
        
        <div class="container col-lg-12">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                </div>
        </div>
        <div class="container col-lg-12">
                <div class="form-group">
                    <label for="category" class="col-lg-12 control-label">Category</label>
                    <div class="col-md-6">
                        <select name="id_category" class="form-control" id="id_category">
                                <option value="">-- Choose Category --</option>
                                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="container col-lg-12">
                <div class="form-group">
                    <label for="featured_image">Featured Image</label>
                        <div class="container col-lg-12">
                            <input id="featured_image" type="file" class="form-control" name="featured_image">
                        </div>
                </div>
            </div>
            <div class="container col-lg-12">
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" class="form-control" id="body" placeholder="Body"></textarea>
                </div>
            </div>
        
                <button type="submit" class="btn btn-primary">Publish</button>
            </form>
          </div>
        </main>
      </div>
    </div>

</body>

@include('layouts.footer')