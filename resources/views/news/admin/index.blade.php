@extends(env('THEME').'.layouts.admin')

            @section('navigation')
                {!!  $navigation   !!}
            @endsection


<div class="container main">
    <div class="jumbotron">
        <h1>Панель администрирования</h1>
        <p>Приветствую!</p>
    </div>
    <p>Реализован CRUD новостей.</p>
    <p>Реализована связь с ролями и правами пользователя.</p>
</div>