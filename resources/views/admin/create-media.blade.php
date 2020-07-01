 @include('admin.header')
 
 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
     
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Add new image</h1>
          </div>
          
           @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif

          <div class="table-responsive">
               <form method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
        
                <div class="form-group">
                    <label for="title">Image title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                </div>
                
                <div class="form-group">
                    <label for="alt">Image alt</label>
                    <input type="text" class="form-control" id="alt" name="alt" placeholder="Enter alt">
                </div>
                
                <div class="container col-lg-12">
                    <div class="form-group">
                        <label for="image">Image</label>
                            <div class="container col-lg-12">
                                <input id="image" type="file" class="form-control" name="image">
                            </div>
                    </div>
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