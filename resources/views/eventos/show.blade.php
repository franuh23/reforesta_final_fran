<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de Eventos</title>
    

</head>

<body>
    <div class="container">
        @csrf
        <h1>Detalles del Evento</h1>

        <div class="eventos-lista">

            <div class="evento-item">
                <h3>{{ $evento->nombre }}</h3>

                <div class="evento-info">
                    <strong>ID anfitrión:</strong> {{ $evento->id_usuario }}
                </div>

                <div class="evento-info">
                    <strong>Nombre anfitrión:</strong> {{ $evento->anfitrion->nombre }}
                </div>
                <br>
                <div class="evento-info">
                    <strong>Descripción:</strong>
                    <p>{{ $evento->descripcion }}</p>
                </div>

                <div class="evento-info">
                    <strong>Ubicación:</strong> {{ $evento->ubicacion }}
                </div>

                <div class="evento-info">
                    <strong>Tipo de terreno:</strong> {{ $evento->tipo_terreno }}
                </div>

                <div class="evento-info">
                    <strong>Tipo de evento:</strong> {{ $evento->tipo_evento }}
                </div>

                <div class="evento-info">
                    <strong>Fecha del evento:</strong> {{ \Carbon\Carbon::parse($evento->fecha)->isoFormat('LL') }}
                </div>

                <div class="evento-info">
                    <strong>Listado de participantes:</strong>
                    @foreach ($evento->participantes as $participante )
                        <p><strong>Participante: </strong> {{ $participante->nombre }}</p>
                    @endforeach                   
                </div>
                <form action="{{ route('eventos.unir', ['id_evento' => $evento->id, 'id_usuario' => 1]) }}" method="POST">
                    @csrf
                    <button type="submit">Unirse al evento</button>
                </form>

                @if($evento->imagen)
                    <img class="evento-imagen" src="{{ asset('storage/' . $evento->imagen) }}" alt="{{ $evento->nombre }}">
                @endif
                <br>
                @if($evento->pdf)
                    <a href="{{ asset('storage/' . $evento->pdf) }}" target="_blank">📄 Ver PDF</a>
                @endif
                <br>
                <a href="{{ route('eventos.edit', $evento) }}">Editar evento</a>
            </div>
        </div>
    </div>
</body>

</html>