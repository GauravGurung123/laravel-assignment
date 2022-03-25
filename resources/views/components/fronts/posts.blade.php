<div class="row">

    @forelse ($posts as $key => $post)
    @if ($key > 3)
        @break;
    @endif
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

        <div class="tm-content-box">
            <img src="{{ asset('images/'.$post['image'])}}" alt="Image" class="tm-margin-b-20 img-fluid">
            <h4 class="tm-margin-b-20 tm-gold-text">{{ $post['title'] }}</h4>
            <p class="tm-margin-b-20">{{$key}}Aenean cursus tellus mauris, quis
            consequat mauris dapibus id. Donec
            scelerisque porttitor pharetra</p>
            <a href="{{route('posts.detail',$post->slug)}}" class="tm-btn text-uppercase">Detail</a>    
            {{-- <a href="/post/{{ $post->id }}/show" class="tm-btn text-uppercase">Detail</a>     --}}
        </div>  

    </div>
    @empty
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
    <h2 class="text-center">No Post Yet</h2>
    </div>
    @endforelse

</div> <!-- row -->
