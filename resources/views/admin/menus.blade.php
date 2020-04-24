@include('admin.header')

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Menus</h1>
            <a href="{{route('addmenu')}}"><button class="btn btn-primary">Add new menu</button></a>
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
                  <th>Menu name</th>
                  <th>List items</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($menus as $menu)
                <tr>
                  <td>{{$menu->name}}</td>
                  <td>
                  @foreach ($menu->pages as $m)
                    <div class="d-flex">{{$m->name}}</div>
                  @endforeach
                  </td>
                  <td></td>
                  <td></td>
                  <td>
                      <a href="menus/edit?id={{$menu->id}}">
                          <button class="btn btn-primary">Edit</button>
                      </a>
                  </td>
                  <td>
                      <a href="menus/delete?id={{$menu->id}}" onclick="return confirm('Are you sure you want delete it?')">
                        <button class="btn btn-danger">Delete</button>
                      </a>
                    </td>
                 </tr>
                @endforeach
              </tbody>
            </table>
            {{$menus->links()}}
          </div>
        </main>
      </div>
    </div>

</body>