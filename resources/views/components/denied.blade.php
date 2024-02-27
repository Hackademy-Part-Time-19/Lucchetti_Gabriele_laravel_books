@if (session()->has('denied'))
<div class="alert alert-danger">
    <h5>{{ session('denied') }}</h5>
</div>
@endif