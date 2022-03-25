<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
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
</div> <!-- col -->
