<x-layout>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <h1>Login</h1>
        
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Genere">
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
          </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</x-layout>