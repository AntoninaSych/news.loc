<div class="md-12">
    <div class="panel panel-default">
        <div class="panel-body">
      @if($articles)
           @foreach($articles as $article)
            <div class="media">
                <div class="media-left">
                    <a href="{{route('articles.show',['alias'=>$article->alias])}}"> <img src="{{asset(env('THEME'))}}/images/articles/{{ $article->img->mini }}" alt="001" title="001" />
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">{{$article->title}}</h4>
                    {{$article->created_at->format('F d, Y')}}
                </div>
            </div>
        @endforeach
      @endif
        </div>
    </div>
</div>
