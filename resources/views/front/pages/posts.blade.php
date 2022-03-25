@extends('front.layouts.app')

@section('content')
<div class="tm-blog-img-container">
            
</div>

<section class="tm-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                @forelse ($posts as $key => $post)
                @if ($key > 0)
                    @break;
                @endif
                <div class="tm-blog-post">
                    <h3 class="tm-gold-text">{{$post['title']}}</h3>
                    <p>Published in {{$post['created_at']}}</p>
                    <img src="{{ asset('images/'.$post['image'])}}" alt="Image" class="img-fluid tm-img-post">
                    <p>{{$post['description']}}</p>                    
                </div>
                @empty
                <h1>No Post Yet </h1>
                @endforelse

                <div class="row tm-margin-t-big">
                    @forelse ($posts as $key => $post)
                    @if ($key > 2)
                        @break;
                    @endif
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                        <div class="tm-content-box">
                            <img src="{{ asset('images/'.$post['image'])}}" alt="Image" class="tm-margin-b-30 img-fluid">
                            <h4 class="tm-margin-b-20 tm-gold-text">{{$post['title']}}</h4>
                            <p class="tm-margin-b-20">{{$post['description']}}</p>
                            <a href="#" class="tm-btn text-uppercase">Detail</a>    
                        </div>  

                    </div>
                    @empty
                    <h1>No Post Yet</h1>
                    @endforelse
                </div>
                
            </div>

            <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-aside-r">

                <div class="tm-aside-container">
                    <h3 class="tm-gold-text tm-title">
                        Categories
                    </h3>
                    <nav>
                        <ul class="nav">
                            @forelse ($categories as $key => $category)
                            @if ($key > 3)
                                @break;
                            @endif
                
                            <li><a href="#" class="tm-text-link">{{$category['title']}}</a></li>
                            @empty
                            <p>No Category Yet</p>
                            @endforelse
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

                    <div class="tm-content-box tm-margin-t-small">
                        <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #1</h4></a>
                        <p class="tm-margin-b-30">Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p>
                    </div>
  
                </div>
                
                
            </aside>

        </div>
        
    </div>
</section>
@endsection