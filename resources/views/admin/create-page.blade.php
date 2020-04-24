 @include('admin.header')
 
 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
     
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Add new page</h1>
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
                    <label for="name">Page name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter menu name">
                </div>
            
                <div class="form-group">
                    <label for="slug">Page slug</label>
                    <textarea name="slug" class="form-control" id="slug" placeholder="slug"></textarea>
                </div>
        
                <button type="submit" class="btn btn-primary">Publish</button>
            </form>
          </div>
        </main>
      </div>
    </div>

</body>