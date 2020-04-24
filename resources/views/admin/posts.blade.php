@include('admin.header')

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
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
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Date</th>
                  <th>Author</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                <tr>
                  <td>{{$post->title}}</td>
                  <td>{{$post->categories->name}}</td>
                  <td>{{$post->created_at}}</td>
                  <td>{{$post->user->name}}</td>
                  <td>
                      <a href="edit?id={{$post->idPosts}}">
                          <button class="btn btn-primary">Edit</button>
                      </a>
                  </td>
                  <td>
                      <a href="delete?id={{$post->idPosts}}" onclick="return confirm('Are you sure you want delete it?')">
                        <button class="btn btn-danger">Delete</button>
                      </a>
                    </td>
                 </tr>
                @endforeach
              </tbody>
            </table>
            {{$posts->links()}}
          </div>
        </main>
      </div>
    </div>

</body>