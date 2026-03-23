<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de Especies</title>
</head>

<body>
    <div class="container">
        @csrf
        <h1>Detalle de la Especie</h1>

        <div class="especies-lista">
            <div class="especie-item">
                <div class="especie-header">
                    @if($especie->foto)
                        <img class="especie-foto" src="{{ asset('storage/' . $especie->foto) }}" alt="{{ $especie->nombre }}">
                    @else
                        <div class="foto-placeholder">
                            🌿
                        </div>
                    @endif
                </div>

                <div class="especie-nombre">
                    <h3>{{ $especie->nombre }}</h3>
                    <div class="especie-nombre-cientifico">
                        {{ $especie->nombre_cientifico ?? 'Sin nombre científico' }}
                    </div>
                </div>

                <div class="especie-info">
                    <strong>Clima:</strong>
                    <span class="clima-badge">{{ $especie->clima }}</span>

                    <strong style="margin-left: 15px;">Tiempo:</strong>
                    <span class="tiempo-badge">{{ $especie->tiempo }}</span>
                </div>

                <div class="beneficios">
                    <strong>🌱 Beneficios:</strong><br>
                    {{ $especie->beneficios }}
                </div>
                <div class="enlace">
                    <a href="{{ $especie->enlace }}" target="_blank">🔗 Más información</a>
                </div>
            </div>
            <a href="{{ route('especies.edit', $especie) }}">Editar especie</a>
        </div>
    </div>
</body>

</html>