@include('layouts.header')
 
 <div class="container">

    <div class="bg-faded p-4 my-4 d-flex flex-wrap justify-content-between">
    @foreach($posts as $post)
        <div class="col-lg-4">
            <div class="bg-faded p-4 my-4 card">
                @if($post->featured_image)
                <img class="blog__featured-image" src="{{url('/')}}/storage/app/public/{{$post->featured_image}}">
                @endif
                <hr class="side">
                    <a href="posts/{{ $post->idPosts }}" class="josefin text-center text-lg">
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
    {{ $posts->links() }}
    </div>
</div>
    
@include('layouts.footer')