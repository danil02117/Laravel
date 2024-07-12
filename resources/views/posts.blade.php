@extends('layouts/app')

@section('title-block')
Новости
@endsection

@section('content')
    <h1>Новости</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->subject  }}</h3>
            <p>{{$el->category_id}}</p>
            <a href="{{ route('one_post', $el->id) }}"><button class="btn btn-warning">Детальнее</button></a>
        </div>
    @endforeach
@endsection

