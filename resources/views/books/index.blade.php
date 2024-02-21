<x-layout>
    <div class="container">
        @if(session()->has('success'))
        <h5>{{session('success')}}</h5>
        @endif
        @foreach($books as $book)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$book['title']}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{$book['published']}}</h6>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{$book['genre']}}</h6>
                <p class="card-text">{{$book['description']}}</p>
                <a href="#" class="card-link">Dettaglio</a>
                <a href="{{route('books.edit',['book'=>$book->id])}}" class="card-link">Modifica</a>
                <form action="{{route('books.destroy',['book'=>$book->id])}}" method="POST">
                   
                    @csrf
                    @method('DELETE')
                <button class="btn btn-danger">Elimina</button></form>
            </div>
        </div>
        @endforeach
    </div>

    
</x-layout>
