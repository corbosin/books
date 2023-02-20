@extends('layout.main')

@section('content')
               
                
    <div class="container">
    <div>
                        <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Добавить книгу</a>
                </div>
        <div class="row">
            <div class="col-md-12">
                <h1>Книги</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Автор</th>
                            <th>Описание</th>
                            <th>Количество страниц</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->author->name }}</td>
                                <td>{{ $book->description }}</td>
                                <td>{{ $book->page_count }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection