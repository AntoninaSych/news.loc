<div class="row">
    @if($articles)

        @foreach($articles as $article)


            <div class="panel panel-default">
                <div class="panel-body">

                <h2 class="post-title"><a href="{{ route('articles.show',['alias'=>$article->alias]) }}">{{ $article->title }}</a></h2>
                <img src="{{ asset(env('THEME')) }}/images/articles/{{ $article->img->max }}" alt="001" title="001"  />
                    <p class="date">
                        <span class="month">{{ $article->created_at->format('M') }}</span>
                        <span class="day">{{ $article->created_at->format('d') }}</span>
                        <span class="user"><i>{{ $article->user->name }}</i></span>
                        <span class="user">{{ $article->category->title }}</span>
                    </p><p>  {!! $article->desc !!} </p>
                <p><a class="btn   btn-beetle-bus-goes-jamba-juice-4 btn-more-link" href="{{route('articles.show',['alias' =>$article->alias])}} " role="button">  Читать подробнее  &raquo;</a></p>


                </div>


            </div>



         @endforeach
            <ul class="pagination">
            @if($articles->lastPage() > 1)
                @if($articles->currentPage() !== 1)  <li class="active">    </li>
                    <li><a href="{{ $articles->url(($articles->currentPage() - 1)) }}">&laquo;</a></li>

                @endif
                @for($i = 1; $i <= $articles->lastPage(); $i++)
                    @if($articles->currentPage() == $i)
                       <li> <a class="selected disabled">{{ $i }}</a></li>
                    @else
                            <li> <a href="{{ $articles->url($i) }}">{{ $i }}</a></li>
                    @endif
                @endfor
                @if($articles->currentPage() !== $articles->lastPage())
                        <li><a href="{{ $articles->url(($articles->currentPage() + 1)) }}">&raquo;</a></li>
                @endif
            @endif
            </ul>

    @endif
</div>
