@extends('front.layouts.app')

@section('content')
@extends('front.layouts.app')

@section('content')
<div class="tm-blog-img-container">
            
</div>

<section class="tm-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">

                <div class="tm-blog-post">
                    <h3 class="tm-gold-text">{{$post['title']}}</h3>
                    <p>Published in {{$post['created_at']}}</p>
                    <img src="{{ asset('images/'.$post['image'])}}" alt="Image" class="img-fluid tm-img-post">
                    <p>{{$post['description']}}</p>                    
                </div>
                @empty($post)
                <h1>No Post Yet </h1>
                @endempty
                
            </div>

            <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-aside-r">

                <div class="tm-aside-container">
                    <h3 class="tm-gold-text tm-title">
                        Categories
                    </h3>
                    <nav>
                        <ul class="nav">
                            {{-- @forelse ($categories as $key => $category)
                            @if ($key > 3)
                                @break;
                            @endif
                
                            <li><a href="#" class="tm-text-link">{{$category['title']}}</a></li>
                            @empty
                            <p>No Category Yet</p>
                            @endforelse --}}
                        </ul>
                    </nav>
                    <hr class="tm-margin-t-small">   
                    <h3 class="tm-gold-text tm-title tm-margin-t-small">
                        Useful Links
                    </h3>
                    <nav>   
                        <ul class="nav">
                            <li><a href="#" class="tm-text-link">Suspendisse sed dui nulla</a></li>
                            <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                            <li><a href="#" class="tm-text-link">Duiss nec purus et eros</a></li>
                            <li><a href="#" class="tm-text-link">Etiam pulvinar et ligula sed</a></li>
                            <li><a href="#" class="tm-text-link">Proin egestas eu felis et iaculis</a></li>
                        </ul>
                    </nav>   
                    <hr class="tm-margin-t-small">   
                </div>
                
                
            </aside>

        </div>
        
    </div>
</section>
@endsection
@endsection