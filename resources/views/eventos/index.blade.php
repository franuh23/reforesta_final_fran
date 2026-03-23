<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Eventos</title>
    
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
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        h1 {
            color: #333;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
        }
        
        .eventos-lista {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .evento-item {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            background-color: #fff;
            transition: transform 0.2s;
        }
        
        .evento-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .evento-item h3 {
            margin-top: 0;
            color: #4CAF50;
        }
        
        .no-eventos {
            text-align: center;
            padding: 40px;
            color: #666;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        
        .evento-imagen {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
            margin-top: 10px;
        }
        
        .evento-info {
            margin: 10px 0;
        }
        
        .evento-info strong {
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        @csrf
        <h1>Listado de Eventos</h1>
        
        @if($eventos->isEmpty())
            <div class="no-eventos">
                <p>No hay eventos disponibles en este momento.</p>
                <p>¡Crea tu primer evento!</p>
            </div>
        @else
            <div class="eventos-lista">
                @foreach ($eventos as $evento)
                    <div class="evento-item">
                        <h3>{{ $evento->nombre }}</h3>
                        
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
                        
                        @if($evento->imagen)
                            <img class="evento-imagen" 
                                 src="{{ asset('storage/' . $evento->imagen) }}" 
                                 alt="{{ $evento->nombre }}">
                        @endif
                        <a href="{{ route('eventos.show', $evento) }}">Ver detalles</a>
                        <form action="{{ route('eventos.destroy', $evento) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Borrar evento</button>
                        </form>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>