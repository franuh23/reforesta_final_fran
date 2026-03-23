<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de Usuarios</title>
</head>

<body>
    <div class="container">
        @csrf
        <h1>Detallo del Usuario</h1>

        <div class="usuarios-lista">

            <div class="usuario-item">
                <div class="usuario-header">
                    @if($usuario->avatar)
                        <img class="avatar" src="{{ asset('storage/' . $usuario->avatar) }}" alt="{{ $usuario->nick }}">
                    @else
                        <div class="avatar-placeholder">
                            {{ strtoupper(substr($usuario->nombre, 0, 1)) }}
                        </div>
                    @endif

                    <div class="usuario-nombre">
                        <h3>{{ $usuario->nombre }} {{ $usuario->apellidos }}</h3>
                        <div class="usuario-nick">@ {{ $usuario->nick }}</div>
                    </div>
                </div>

                <div class="usuario-info">
                    <strong>Email:</strong> {{ $usuario->email }}
                </div>

                <div class="usuario-info">
                    <strong>Karma:</strong>
                    @php
                        $karma = $usuario->karma ?? 0;
                        $karmaClass = $karma >= 100 ? 'karma-alto' : ($karma >= 50 ? 'karma-medio' : 'karma-bajo');
                    @endphp
                    <span class="karma-badge {{ $karmaClass }}">
                        {{ $karma }} puntos
                    </span>
                </div>

                <div class="eventos-count">
                    📅 Eventos como anfitrión: {{ $usuario->ser_anfitrion->count() }}
                </div>

                <div class="eventos-count">
                    🎯 Participa en: {{ $usuario->participar->count() }} eventos
                </div>
            </div>

        </div>

    </div>
</body>

</html>