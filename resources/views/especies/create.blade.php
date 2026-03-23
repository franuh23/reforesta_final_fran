@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('especies.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" value="{{ old('nombre') }}">
    </div>
    <br>
    <div>
        <label for="clima">Clima:</label><br>
        <input type="text" name="clima" value="{{ old('clima') }}">
    </div>
    <br>
    <div>
        <label for="tiempo">Tiempo:</label><br>
        <input type="text" name="tiempo" value="{{ old('tiempo') }}">
    </div>
    <br>
    <div>
        <label for="beneficios">Beneficios:</label><br>
        <input type="text" name="beneficios" value="{{ old('beneficios') }}">
    </div>
    <br>
    <div>
        <label for="enlace">Enlace:</label><br>
        <input type="text" name="enlace" value="{{ old('enlace') }}">
    </div>
    <br>
    <br>
    <div>
        <label for="foto">Foto:</label><br>
        <input type="file" name="foto">
    </div>
    <br>
    <div>
        <button type="submit">Enviar formulario</button>
    </div>
</form>