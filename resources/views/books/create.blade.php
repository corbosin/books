@extends('layout.main')
@section('content')
        <div>
                <form action="{{ route('book.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                                <label for="title">Название</label>
                                <input type="text" name="name" class="form-cotrol" id="title" placeholder="Напишите сюда название">
                        </div>


                        <div class="form-group">
                                <label for="content">Автор</label>
                                <textarea name="author_id" class="form-cotrol" id="content" placeholder="Напишите имя автора"></textarea>
                        </div>


                        <div class="form-group">
                                <label for="image">Описание</label>
                                <input name="description" type="text" class="form-cotrol" id="title" placeholder="Про что книга">
                        </div>
                        
                        <div class="form-group">
                                <label for="image">Страницы</label>
                                <input name="page_count" type="text" class="form-cotrol" id="title" placeholder="Количество страниц">
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
                </form>
</div>
@endsection