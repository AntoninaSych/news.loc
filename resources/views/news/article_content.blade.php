<div class="row">
    @if($article)
            <div class="panel panel-default">
                <div class="panel-body">

                    <h2 class="post-title"><a href="{{ route('articles.show',['alias'=>$article->alias]) }}">{{ $article->title }}</a></h2>
                    <img src="{{ asset(env('THEME')) }}/images/articles/{{ $article->img->max }}" alt="001" title="001"  />
                    <p class="date">
                        <span class="month">{{ $article->created_at->format('M') }}</span>
                        <span class="day">{{ $article->created_at->format('d') }}</span>
                        <span class="user"><i>{{ $article->user->name }}</i></span>
                        <span class="user">{{ $article->category->title }}</span>
                    </p><p>{!! $article->desc !!} </p>
                </div>
            </div>
    @endif
</div>
