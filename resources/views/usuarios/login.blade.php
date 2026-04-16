@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('usuarios.login') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="email">Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}">
    </div>
    <br>
    <div>
        <label for="password">Password:</label><br>
        <input type="password" name="password">
    </div>
    <br>
    <div>
        <button type="submit">Log in</button>
    </div>
</form>