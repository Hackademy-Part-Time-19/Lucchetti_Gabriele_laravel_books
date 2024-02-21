<?php

namespace App\Http\Controllers;

use App\Http\Requests\booksRequest;
use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Books::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BooksRequest $request)
    {
        $validated= $request->validated();
       
        Books::create($validated);
        return redirect()->route('books.index')->with('success', 'Libro aggiunto con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $books,$id)
    {
        
        $books->find($id)->destroy($id);
        return redirect()->route('books.index')->with('success', 'Libro eliminato con successo!');
    }
}
