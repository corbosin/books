<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->get();

        return view('books.books', compact('books'));
    }
 
    public function create() {
        return view('books.create');
    }

    public function store() {
        $data = request()->validate([
            'name' => 'string',
            'author_id' => 'string',
            'description' => 'string',
            'page_count' => 'integer',
        ]);

        $author = Author::where('name', $data['author_id'])->first();

        if (!$author) {
            $author = new Author();
            $author->name = $data['author_id'];
            $author->save();
        }
        
        $data['author_id'] = $author->id;


        Book::create($data);
        return redirect()->route('books.index');
    }
}
