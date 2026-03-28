@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('usuarios.update', $usuario) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="nick">Nick:</label><br>
        <input type="text" name="nick" value="{{ old('nick', $usuario->nick) }}">
    </div>
    <br>
    <div>
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" value="{{ old('nombre', $usuario->nombre) }}">
    </div>
    <br>
    <div>
        <label for="apellidos">Apellidos:</label><br>
        <input type="text" name="apellidos" value="{{ old('apellidos', $usuario->apellidos) }}">
    </div>
    <br>
    <div>
        <label for="email">Email:</label><br>
        <input type="email" name="email" value="{{ old('email', $usuario->email) }}">
    </div>
    <br>
    <div>
        <label for="password">Nueva contraseña (opcional):</label><br>
        <input type="password" name="password" value="{{old('password')}}">
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