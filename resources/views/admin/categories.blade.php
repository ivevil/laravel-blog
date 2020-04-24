@include('admin.header')

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Categories</h1>
            <a href="{{route('createcategory')}}">
                <button class="btn btn-primary">Add new category</button>
            </a>
          </div>
          
        @if(session()->has('dangermessage'))
            <div class="alert alert-danger">
                {{ session()->get('dangermessage') }}
            </div>
        @endif
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
          
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th> </th>
                  <th> </th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($categories as $category)
                <tr>
                  <td>{{$category->name}}</td>
                  <td>{{$category->description}}</td>
                  <td> </td>
                  <td> </td>
                  <td>
                      <a href="category/edit?id={{$category->id}}">
                        <button class="btn btn-primary">Edit</button>
                      </a>
                  </td>
                      <td>
                          <a href="category/delete?id={{$category->id}}" onclick="return confirm('Are you sure you want delete it?')">
                            <button class="btn btn-danger">Delete</button>
                          </a>
                      </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{$categories->links()}}
          </div>
        </main>
      </div>
    </div>

</body>