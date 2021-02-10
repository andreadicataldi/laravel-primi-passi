@extends('app')
@section('content')
    <div>
        <h1>Il mio post</h1>
        <article>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </article>
    </div>
@endsection
@section('footer')
    @parent
    <a href="/post-simili">Post simili</a>
@endsection
