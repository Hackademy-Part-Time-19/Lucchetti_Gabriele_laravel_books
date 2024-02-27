<x-layout>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <h1>Inserisci Libro</h1>
        <div class="form-group">
            <label for="title">Titolo del libro</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Titolo">

        </div>
        
        <div class="form-group">
            <label for="published">Inserisci anno di pubblicazione</label>
            <input type="text" class="form-control" name="published" id="exampleInputPassword1"
                placeholder="Anno di pubblicazione">
        </div>
        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
            @foreach($genres as $genre)
            <input type="checkbox" name="genres[]" class="btn-check" value={{$genre->id}} id="btncheck{{$genre->id}}" autocomplete="off">
            <label class="btn btn-outline-primary" for="btncheck{{$genre->id}}">{{$genre->name}}</label>
            @endforeach
        
        </div>
        <div class="form-group">
            <label for="description">Inserisci descrizione</label>
            <input type="text" class="form-control" name="description" id="exampleInputPassword1"
                placeholder="Descrizione del libro">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
