@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('usuarios.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="nick">Nick:</label><br>
        <input type="text" name="nick">
    </div>
    <br>
    <div>
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre">
    </div>
    <br>
    <div>
        <label for="apellidos">Apellidos:</label><br>
        <input type="text" name="apellidos"></input>
    </div>
    <br>
    <div>
        <label for="email">Email:</label><br>
        <input type="email" name="email">
    </div>
    <br>
    <div>
        <label for="password">Password:</label><br>
        <input type="password" name="password">
    </div>
    <br>
    <br>
    <div>
        <label for="avatar">Avatar:</label><br>
        <input type="file" name="avatar">
    </div>
    <br>
    <div>
        <button type="submit">Enviar formulario</button>
    </div>
</form>