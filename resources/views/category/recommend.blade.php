@section('recommend')
<section class="home-recommend top-section">
    <div class="wrap">
        <header class="section-header">
            @yield('logo')
            <h2 class="post-title" ><span>富フリーに初めて訪れた方にオススメしたい記事</span></h2>
        </header>
        <ul class="home-recommend-cont">
            @foreach($recommend_list as $key => $recommend)
            <li class="home-recommend-item item-0{{$key + 1}}">
                <figure class="img">
                    <a href="{{url('business/articles/show/'.$recommend['number'])}}" rel="nofollow"><img width="400" height="250" src="{{url('img/articles/'.$recommend['number'].'/resize',$recommend['image'])}}" class="attachment-loop_thumb size-loop_thumb wp-post-image" alt="{{$recommend['image_alt']}}" /></a>
                </figure>
                <div class="cont">
                    <h3 class="title"><a href="{{url('business/articles/show/'.$recommend['number'])}}">{{$recommend['title']}}</a></h3>
                    <ul class="meta">
                        <li class="cat">{{$master->getCategory($recommend['category'])}}</li>
                    </ul>
                    @if($key == 0)
                    <div class="description">
                        <p>{!!$common->strRound($recommend['content'],300)!!}</p>
                    </div>
                    @endif
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection
