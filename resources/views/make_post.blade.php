@extends('layouts.app')

@section('title-block')
Написать новость
@endsection

@section('content')
    <h1>Написать новость</h1>
    <form action="{{route('submit_post')}}" method="post">
        @csrf
       <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="category_id">Категория новости</label>
            <select class="custom-select" id="category_id" name="category_id">
                @foreach($data as $el)
                    <option value="{{$el->id}}">{{$el->name}}</option>
                @endforeach
            </select>
        </div>
       <div class="form-group">
            <label for="subject">Заголовок</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Текст</label>
            <textarea id="message" name="message" class="form-control" placeholder="Введите сообщение"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection
