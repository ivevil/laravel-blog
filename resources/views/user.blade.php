@include('layouts.header')

<div class="container">
    <div class="bg-faded p-4 my-4 card">
        <div class="card mb-3 d-flex">
          <div class="card-header text-center">ABOUT AUTHOR</div>
          <div class="d-flex flex-wrap flex-row">
              <div class="card-body col-lg-8 d-flex flex-wrap flex-column justify-content-center align-items-center p-4 my-4">
                <h1 class="card-title">{{ $user->name }}</h1>
                <hr class="my-4">
                <p class="card-text">{{ $user->description }}</p>
              </div>
              <div class="card-image col-lg-4 d-flex flex-wrap flex-column justify-content-center align-items-center">
                  @if($user->image)
            <img class="img-fluid" src="{{url('/')}}/storage/app/public/{{$user->image}}">
                  @endif
            </div>
            </div>
        </div>
    <div class="card mb-3 d-flex">
    <div class="card-header text-center">AUTHORS POSTS</div>
   <div class="bg-faded p-4 my-4 d-flex flex-wrap justify-content-between">
    @foreach($posts as $post)
        <div class="col-lg-4">
            <div class="bg-faded p-4 my-4 card">
                @if($post->featured_image)
                <img class="blog__featured-image" src="{{url('/')}}/storage/app/public/{{$post->featured_image}}">
                @endif
                <hr class="side">
                    <a href="{{url('/')}}/posts/{{ $post->idPosts }}" class="josefin text-center text-lg">
                        <strong>{{ $post->title }}</strong>
                    </a>
                <div class="card-body">
                    <hr class="side">
                    <p class="card-text text-center">
                        {{ str_limit($post->body, 150, '...') }}
                    </p>
                    <p></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"> <p class="card-text text-center text-uppercase my-0">
                    {{ $post->created_at->toFormattedDateString() }}
                </p></small>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    {{ $posts->links() }}
</div>
</div>
    </div>
</body>

</html>

@include('layouts.footer')