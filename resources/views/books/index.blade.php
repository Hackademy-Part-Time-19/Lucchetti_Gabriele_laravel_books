<x-layout>
    <div class="container" style="margin-top:50px">
        @auth
            <h3>{{ auth()->user()->name }} ecco i libri presenti in libreria</h3>
        @endauth
        @guest
            <h3>Benvenuto, ecco i libri presenti in libreria</h3>
        @endguest
        <x-success />
        <x-denied />

        <div class="row">

            @foreach ($books as $book)
                <div class="col-4">
                    <div class="card" style="width: 18rem; height:300px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book['title'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $book['published'] }}</h6>
                            @foreach($book->genres as $genre)
                            <h6 class="btn btn-secondary">{{ $genre->name }}</h6>
                            @endforeach
                            <p class="card-text">{{ $book['description'] }}</p>
                            <p class="card-text">Aggiunto da: {{ $book->user->name }}</p>
                            <a href="#" class="card-link">Dettaglio</a>
                            <a href="{{ route('books.edit', ['book' => $book->id]) }}" class="card-link">Modifica</a>
                            <form action="{{ route('books.destroy', ['book' => $book->id]) }}" method="POST">

                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</x-layout>
