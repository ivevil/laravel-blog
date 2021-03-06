@include('admin.header')

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Pages</h1>
            <a href="{{route('addpage')}}"><button class="btn btn-primary">Add new page</button></a>
          </div>
          
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @if(session()->has('dangermessage'))
            <div class="alert alert-danger">
                {{ session()->get('dangermessage') }}
            </div>
        @endif

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Slug</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($pages as $page)
                <tr>
                  <td>{{$page->name}}</td>
                  <td>{{$page->slug}}</td>
                  <td></td>
                  <td></td>
                  <td>
                      <a href="pages/edit?id={{$page->id}}">
                          <button class="btn btn-primary">Edit</button>
                      </a>
                  </td>
                  <td>
                      <a href="pages/delete?id={{$page->id}}" onclick="return confirm('Are you sure you want delete it?')">
                        <button class="btn btn-danger">Delete</button>
                      </a>
                    </td>
                 </tr>
                @endforeach
              </tbody>
            </table>
            {{$pages->links()}}
          </div>
        </main>
      </div>
    </div>

</body>