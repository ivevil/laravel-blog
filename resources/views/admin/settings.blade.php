@include('admin.header')

 <div class="wrapper clearfix">
<div class="container">

    <div class="bg-faded p-4 my-4">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    </div>

    <form method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="website_name">Website Name</label>
            <input type="text" class="form-control" id="website_name" name="website_name" placeholder="Enter website name" value="{{$settings->website_name}}">
        </div>
    
        <div class="form-group">
            <label for="website_logo">Website logo</label>
            <textarea name="website_logo" class="form-control" id="website_logo" placeholder="website_logo">{{$settings->website_logo}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
</div>

</div>