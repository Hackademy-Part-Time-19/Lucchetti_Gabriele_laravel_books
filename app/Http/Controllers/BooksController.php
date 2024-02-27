<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Requests\booksRequest;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres=Genre::all();
        return view('books.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BooksRequest $request)
    {
        
        $validated = $request->validated();
        
        $book=Book::create([
            'title' => $validated['title'],
            
            'description' => $validated['description'],
            'published' => $validated['published'],
            'user_id' => auth()->user()->id,
        ]);
        $book->genres()->attach($validated['genres']);
        return redirect()->route('books.index')->with('success', 'Libro aggiunto con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $books)
    {
        return view('books.show', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $books, $id)
    {
        $book = Book::find($id);
        if (auth()->user()->id == $book->user->id) {

            return view('books.edit', compact('book'));
        }

        return redirect()->back()->with('denied', 'Non hai il permesso per modificare questo libro');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BooksRequest $request, Book $book)
    {
        $validated = $request->validated();

        $book->update([
            'title' => $validated['title'],
            'genre' => $validated['genre'],
            'description' => $validated['description'],
            'published' => $validated['published']
        ]);
        if (auth()->user() != null) {
            return redirect()->route('user.books')->with('success', 'Libro aggiornato con successo!');
        }
        return redirect()->route('books.index')->with('success', 'Libro aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $books, $id)
    {

        $books->find($id)->destroy($id);
        return redirect()->route('books.index')->with('success', 'Libro eliminato con successo!');
    }
}
