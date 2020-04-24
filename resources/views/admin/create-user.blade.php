@include('admin.header')

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Users</h1>
            <a href="{{route('createpost')}}"><button class="btn btn-primary">Add new user</button></a>
          </div>

          <div class="table-responsive">
               <form method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
        
        <div class="container col-lg-12">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>
        </div>
        <div class="container col-lg-12">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
    
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
    
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
            </div>
        </div>
            <div class="container col-lg-12">           
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>
    
                     <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>
    
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="container col-lg-12">
                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
    
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>
            </div>
            <div class="container col-lg-12">
                <div class="form-group">
                    <label for="image">Profile picture</label>
                        <div class="container col-lg-12">
                            <input id="image" type="file" class="form-control" name="image">
                        </div>
                </div>
            </div>
            <div class="container col-lg-12">
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" placeholder="description"></textarea>
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