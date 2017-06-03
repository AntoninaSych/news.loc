<div class="panel panel-default">

	<div class="panel-heading"><h3>Добавленные статьи</h3></div>
	<div class="panel-body">


		{!! Form::open(['url' => (isset($article->id)) ? route('admin.articles.update',['articles'=>$article->alias]) : route('admin.articles.store'),'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}


		<label for="editor">Название:</label>
		</br>
		<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('title',isset($article->title) ? $article->title  : old('title'), ['placeholder'=>'Введите название страницы','class' => 'form-control']) !!}
		</div>
		{{--</br>--}}
		{{--<label for="editor">Ключевые слова:</label>--}}
		{{--</br>--}}

		{{--<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>--}}
			{{--{!! Form::text('keywords', isset($article->keywords) ? $article->keywords  : old('keywords'), ['placeholder'=>'Ключевые слова','class' => 'form-control']) !!}--}}
		{{--</div>--}}
		{{--</br>--}}

		{{--<label for="editor">Мета описание:</label>--}}
		{{--</br>--}}

		{{--<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>--}}
			{{--{!! Form::text('meta_desc', isset($article->meta_desc) ? $article->meta_desc  : old('meta_desc'), ['placeholder'=>'Мета описание','class' => 'form-control']) !!}--}}
		{{--</div>--}}
		</br>
		<label for="editor"> </label>
		</br>
		<div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
			{!! Form::text('alias', isset($article->alias) ? $article->alias  : old('alias'), [ 'class' => 'form-control']) !!}
		</div>

		</br>
		<label for="editor">Краткое описание:</label>


		<div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span>
			{!! Form::textarea('desc', isset($article->desc) ? $article->desc  : old('desc'), ['id'=>'editor','name'=>'editor','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
		</div>
		<div class="msg-error"></div>
		</br>
		<label for="editor">Описание:</label>

			{!! Form::textarea('text', isset($article->text) ? $article->text  : old('text'), ['id'=>'editor2','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}

		<div class="msg-error"></div>

		</br>
		@if(isset($article->img->path))


			<label>
				<span class="label">Изображения материала:</span>
			</label>

			{{ Html::image(asset(env('THEME')).'/images/articles/'.$article->img->path,'',['style'=>'width:80px']) }}
			{!! Form::hidden('old_image',$article->img->path) !!}


		@endif

		<label for="name-contact-us">
			<span class="label">Изображение:</span>
			<br />
			<span class="sublabel">Изображение материала</span><br />
		</label>
		<div class="input-prepend">
			{!! Form::file('image', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
		</div>



		<label for="name-contact-us">
			<span class="label">Категория:</span>
			<br />
			<span class="sublabel">Категория материала</span><br />
		</label>
		<div class="input-prepend">
			{!! Form::select('category_id', $categories,isset($article->category_id) ? $article->category_id  : '', ['placeholder' => ' Выберите категорию', 'class' => 'form-control']) !!}

		</div>
		@if(isset($article->id))
			<input type="hidden" name="_method" value="PUT">
		@endif

		{{--<div class="form-group">--}}
			{{--<label for="sel1">Категория материала</label>--}}
			{{--{!! Form::select('category_id', $categories,isset($article->category_id) ? $article->category_id  : '',["class"=>"form-control"]) !!}--}}
		{{--</div>--}}


<br>


		{!! Form::button('Сохранить', ['class' => 'btn btn-success','type'=>'submit']) !!}





		{!! Form::close() !!}

		<script>
			CKEDITOR.replace( 'editor' );
			CKEDITOR.replace( 'editor2' );
		</script>


		{{--https://laravelcollective.com/docs/5.2/html--}}
	</div><div class="panel-footer">&nbsp;</div></div>

