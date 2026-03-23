<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Usuarios</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
        }

        .usuarios-lista {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .usuario-item {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .usuario-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .usuario-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            background-color: #e0e0e0;
        }

        .avatar-placeholder {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 28px;
            font-weight: bold;
        }

        .usuario-nombre h3 {
            margin: 0;
            color: #333;
            font-size: 1.2em;
        }

        .usuario-nick {
            color: #666;
            font-size: 0.9em;
            margin-top: 5px;
        }

        .usuario-info {
            margin: 12px 0;
            padding: 8px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .usuario-info strong {
            color: #555;
            display: inline-block;
            min-width: 80px;
        }

        .karma-badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            margin-top: 10px;
        }

        .karma-alto {
            background-color: #4CAF50;
            color: white;
        }

        .karma-medio {
            background-color: #FFC107;
            color: #333;
        }

        .karma-bajo {
            background-color: #f44336;
            color: white;
        }

        .no-usuarios {
            text-align: center;
            padding: 60px;
            color: #666;
            background-color: #f9f9f9;
            border-radius: 8px;
        }

        .eventos-count {
            margin-top: 15px;
            padding-top: 10px;
            font-size: 0.9em;
            color: #4CAF50;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Listado de Usuarios</h1>

        @if($usuarios->isEmpty())
            <div class="no-usuarios">
                <p>No hay usuarios registrados en este momento.</p>
            </div>
        @else
            <div class="usuarios-lista">
                @foreach ($usuarios as $usuario)
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
                        <a href="{{ route('usuarios.show', $usuario) }}">Ver detalles</a>
                        <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Borrar usuario</button>
                        </form>
                    </div>

                @endforeach
            </div>
        @endif
    </div>
</body>

</html>