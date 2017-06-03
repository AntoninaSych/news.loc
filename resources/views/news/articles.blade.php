@extends(env('THEME').'.layouts.site')

@section('content')
    {!! $content !!}
@endsection

@section('bar')
    {!! $rightBar or '' !!}
@endsection