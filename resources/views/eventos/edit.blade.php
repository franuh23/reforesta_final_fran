@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('eventos.update', $evento) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre">
    </div>
    <br>
    <div>
        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="30"></textarea>
    </div>
    <br>
    <div>
        <label for="ubicacion">Ubicación:</label><br>
        <input type="text" id="ubicacion" name="ubicacion">
    </div>
    <br>
    <div>
        <label for="tipo_terreno">Tipo de terreno:</label><br>
        <input type="text" id="tipo_terreno" name="tipo_terreno">
    </div>
    <br>
    <div>
        <label for="tipo_evento">Tipo de evento:</label><br>
        <input type="text" id="tipo_evento" name="tipo_evento">
    </div>
    <br>
    <div>
        <label for="imagen">Imagen:</label><br>
        <input type="file" id="imagen" name="imagen">
    </div>
    <br>
    <div>
        <button type="submit">Enviar formulario</button>
    </div>
</form>