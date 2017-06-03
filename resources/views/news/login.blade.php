@extends(env('THEME').'.layouts.site')
<div class="main container">
    <p>Логин user, пароль 123456</p>
<form class="form-1" method="post" action="{{url('login')}}">
    {{csrf_field()}}
    <p class="field">
        <input type="text" name="login"  placeholder="Логин">

    </p>
    <p class="field">
        <input type="password" name="password" placeholder="Пароль">

    </p>
    <p class="submit">
        <button type="submit" name="submit"><i class="icon-arrow-right icon-large">Отправить</i></button>
    </p>
</form>
</div>
