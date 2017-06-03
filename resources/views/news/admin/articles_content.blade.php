@if($articles)
    <div class="panel panel-default">

            <div class="panel-heading"><h3>Добавленные статьи</h3></div>
            <div class="panel-body">
                <table class="table table-striped table-hover" lstyle="width: 100%" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <th class="align-left">ID</th>
                        <th>Заголовок</th>
                        <th>Текст</th>
                        <th>Изображение</th>
                        <th>Категория</th>
                        <th>Псевдоним</th>
                        <th>Дествие</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($articles as $article)
                        <tr>
                            <td class="align-left">{{$article->id}}</td>
                            <td class="align-left">{!! Html::link(route('admin.articles.edit',['articles'=>$article->alias]),$article->title) !!}</td>
                            <td class="align-left">{{str_limit($article->text,200)}}</td>
                            <td>
                                @if(isset($article->img->mini))


                                    {!! Html::image(asset(env('THEME')).'/images/articles/'.$article->img->mini) !!}
                                @endif
                            </td>
                            <td>{{$article->category->title}}</td>
                            <td>{{$article->alias}}</td>
                            <td>
                                {!! Form::open(['url' => route('admin.articles.destroy',['articles'=>$article->alias]),'class'=>'form-horizontal','method'=>'POST']) !!}
                                {{ method_field('DELETE') }}
                                {!! Form::button('Удалить', ['class' => 'btn btn-danger','type'=>'submit']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                {!! HTML::link(route('admin.articles.create'),'Добавить  материал',['class' => 'btn btn-lg  btn-success middle']) !!}

            </div>
        <div class="panel-footer">&nbsp;</div>

        </div>
        <!-- START COMMENTS -->
        <div id="comments">
        </div>
        <!-- END COMMENTS -->
    </div>
@endif