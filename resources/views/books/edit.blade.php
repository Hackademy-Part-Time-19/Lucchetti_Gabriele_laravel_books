<x-layout>
   
    <form action="{{route('books.update', compact('book'))}}" method="POST">
        @csrf
        @method('PUT')
        <h1>Modifica Libro</h1>
        <div class="form-group">
            <label for="title">Titolo del libro</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="{{old('title', $book->title)}}">

        </div>
        <div class="form-group">
            <label for="genre">Inserisci genere</label>
            <input type="text" class="form-control" name="genre" id="exampleInputPassword1" value="{{old('title', $book->genre)}}">
        </div>
        <div class="form-group">
            <label for="published">Inserisci anno di pubblicazione</label>
            <input type="text" class="form-control" name="published" id="exampleInputPassword1"
                value="{{old('title', $book->published)}}">
        </div>
        <div class="form-group">
            <label for="description">Inserisci descrizione</label>
            <input type="text" class="form-control" name="description" id="exampleInputPassword1" value="{{old('title', $book->description)}}">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>