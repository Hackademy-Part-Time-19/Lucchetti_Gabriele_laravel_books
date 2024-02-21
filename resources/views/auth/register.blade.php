<x-layout>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <h1>Registrati su Aulibrary</h1>
        <div class="form-group">
            <label for="email">Inserisci email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="E-mail">
            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Inserisci nome</label>
            <input type="text" class="form-control" name="name" id="exampleInputPassword1" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="surname">Inserisci cognome</label>
            <input type="text" class="form-control" name="surname" id="exampleInputPassword1" placeholder="Cognome">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                placeholder="password">
            @error('password')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="password_confirmation">Conferma Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1"
                placeholder="password">
            @error('password-confirmation')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
