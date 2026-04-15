@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('eventos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">
    </div>
    <br>
    <div>
        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="30" value="{{ old('descripcion') }}"></textarea>
    </div>
    <br>
    <div>
        <label for="ubicacion">Ubicación:</label><br>
        <input type="text" id="ubicacion" name="ubicacion" value="{{ old('ubicacion') }}">
    </div>
    <br>
    <div>
        <label for="tipo_terreno">Tipo de terreno:</label><br>
        <input type="text" id="tipo_terreno" name="tipo_terreno" value="{{ old('tipo_terreno') }}">
    </div>
    <br>
    <div>
        <label for="tipo_evento">Tipo de evento:</label><br>
        <input type="text" id="tipo_evento" name="tipo_evento" value="{{ old('tipo_evento') }}">
    </div>
    <br>
    <div>
        <label for="fecha">Fecha del evento:</label><br>
        <input type="date" id="fecha" name="fecha" value="{{ old('fecha') }}">
    </div>
    <br>
    <div>
        <label for="id_usuario">Id usuario:</label><br>
        <input type="text" id="id_usuario" name="id_usuario" value="{{ old('id_usuario') }}">
    </div>
    <br>
    <div>
        <label>Especies y cantidades:</label><br>
        @foreach($especies as $especie)
            <div>
                <input type="checkbox" name="especies[{{ $especie->id }}][id]" value="{{ $especie->id }}">
                <label>{{ $especie->nombre }}</label>
                <input type="number" name="especies[{{ $especie->id }}][cantidad]" placeholder="Cantidad" min="1" value="1" style="width: 80px;">
            </div>
        @endforeach
    </div>
    <br>
    <div>
        <label for="imagen">Imagen:</label><br>
        <input type="file" id="imagen" name="imagen">
    </div>
    <br>
    <div>
        <label for="pdf">Documento PDF (opcional):</label><br>
        <input type="file" id="pdf" name="pdf" accept=".pdf">
        <small>Sube un archivo PDF con información adicional</small>
    </div>
    <br>
    <div>
        <button type="submit">Enviar formulario</button>
    </div>
</form>