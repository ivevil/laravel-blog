@include('admin.header')

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
     
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Posts</h1>
            <a href="{{route('createpost')}}"><button class="btn btn-primary">Add new post</button></a>
          </div>
          
           @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif

          <div class="table-responsive">
               <form method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
        
                <div class="form-group col-md-12 container">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{$post->title}}">
                </div>
                
                <div class="form-group col-md-12 container">
                    <label for="category" class="col-md-4 control-label">Category</label>
                    <div class="col-md-6">
                        <select name="id_category" class="form-control" id="id_category">
                                <option value="">-- Choose Category --</option>
                                @foreach($categories as $category)
                                <option @if($post->categoryid === $category->id) selected @endif  value="{{$category->id}}">{{$category->name}}</option>@endforeach
                        </select>
                    </div>
                </div>
                <div class="container col-lg-12">
                <div class="form-group">
                    <label for="featured_image">Featured Image</label>
                        <div class="container col-lg-12">
                            <input id="featured_image" type="file" class="form-control" name="featured_image">
                            @if($post->featured_image)
                            <img src="{{url('/')}}/storage/app/public{{$post->featured_image}}" class="responsive">
                            @endif
                        </div>
                </div>
            </div>
                
                <div class="form-group col-md-12 container">
                    <label class="col-md-2" for="body">Body</label>
                    <textarea name="body" class="form-control col-md-10" id="body" placeholder="Body">{{$post->body}}</textarea>
                </div>
        
                <button type="submit" class="btn btn-primary">Publish</button>
            </form>
          </div>
        </main>
      </div>
    </div>

</body>