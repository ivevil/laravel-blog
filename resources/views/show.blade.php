@include('layouts.header')


<div class="container">
    <div class="bg-faded p-4 my-4">
        <h2 class="text-center text-lg text-uppercase my-5">
            {{ $post->title }}
        </h2>
        <hr class="side">
        <h2 class="text-center text-sm text-uppercase my-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            <strong>Author:</strong>
            <a href="{{url('/')}}/user/{{$post->user->id}}">
                {{ $post->user->name }}
            </a>
        </h2>
        <h2 class="text-center text-sm text-uppercase my-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-anchor"><circle cx="12" cy="5" r="3"/><line x1="12" y1="22" x2="12" y2="8"/><path d="M5 12H2a10 10 0 0 0 20 0h-3"/></svg>
            <strong>Category:</strong>
            <a href="{{url('/')}}/category/{{$post->categories->id}}">
                {{ $post->categories->name }}
            </a>
        </h2>
        <h2 class="text-center text-sm text-uppercase my-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
            <strong>Created at:</strong>
            {{ date_format($post->created_at, 'd.m.Y') }}
        </h2>
        @if($post->featured_image)
        <hr class="divider">
        <div class=" d-flex justify-content-center align-items-center">
            <img class="img-fluid" src="{{url('/')}}/storage/app/public{{$post->featured_image}}">
        </div>
        @endif
        <hr class="divider">
        <p>{{ $post->body }}</p>
        <hr class="side">
    </div>
</div>
</div>

</body>

</html>

@include('layouts.footer')