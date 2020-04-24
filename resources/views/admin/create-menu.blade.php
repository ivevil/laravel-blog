 @include('admin.header')
 
 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
     
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Add new menu</h1>
          </div>
          
           @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif

          <div class="table-responsive">
               <form method="POST">
                {{ csrf_field() }}
        
                <div class="form-group">
                    <label for="menu_name">Menu name</label>
                    <input type="text" class="form-control" id="menu_name" name="menu_name" placeholder="Enter menu name">
                </div>
                
                <select name="page_id[]" class="selectpicker" multiple data-live-search="true">
                    @foreach($pages as $page)
                  <option value="{{$page->id}}">{{$page->name}}</option>
                  @endforeach
                </select>
                
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="navigation_menu" name="navigation_menu">
                  <label class="form-check-label" for="navigation_menu">
                    Navigation menu
                  </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="footer_menu" name="footer_menu">
                  <label class="form-check-label" for="footer_menu">
                    Footer menu
                  </label>
                </div>
                
                <button type="submit" class="btn btn-primary">Publish</button>
            </form>
          </div>
        </main>
      </div>
    </div>

</body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>