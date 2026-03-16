<div>
    @csrf
    <p>Listado de eventos</p>
    @foreach ($eventos as $evento)
        {{ $evento->nombre }}
        {{ $evento->descripcion }}
        {{ $evento->ubicacion }}
        {{ $evento->tipo_terreno }}
        {{ $evento->tipo_evento }}
        {{ $evento->imagen }}
    @endforeach
</div>
