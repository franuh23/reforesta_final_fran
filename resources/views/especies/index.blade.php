<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Especies</title>
    
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
        
        .btn-crear {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        .btn-crear:hover {
            background-color: #45a049;
        }
        
        .especies-lista {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .especie-item {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        .especie-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }
        
        .especie-header {
            text-align: center;
            margin-bottom: 15px;
        }
        
        .especie-foto {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        
        .foto-placeholder {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 48px;
            font-weight: bold;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        
        .especie-nombre {
            text-align: center;
            margin-bottom: 15px;
        }
        
        .especie-nombre h3 {
            margin: 0;
            color: #4CAF50;
            font-size: 1.5em;
        }
        
        .especie-nombre-cientifico {
            color: #666;
            font-style: italic;
            margin-top: 5px;
        }
        
        .especie-info {
            margin: 12px 0;
            padding: 8px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .especie-info strong {
            color: #555;
            display: inline-block;
            min-width: 80px;
        }
        
        .beneficios {
            background-color: #e8f5e9;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
            color: #2e7d32;
        }
        
        .enlace {
            margin-top: 15px;
            text-align: center;
        }
        
        .enlace a {
            color: #4CAF50;
            text-decoration: none;
            font-size: 0.9em;
        }
        
        .enlace a:hover {
            text-decoration: underline;
        }
        
        .no-especies {
            text-align: center;
            padding: 60px;
            color: #666;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
        
        .clima-badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            background-color: #e3f2fd;
            color: #1976d2;
        }
        
        .tiempo-badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            background-color: #fff3e0;
            color: #f57c00;
            margin-left: 8px;
        }
        
        .acciones {
            margin-top: 15px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        
        .btn-editar, .btn-eliminar {
            padding: 5px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9em;
            transition: opacity 0.3s;
        }
        
        .btn-editar {
            background-color: #2196F3;
            color: white;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-eliminar {
            background-color: #f44336;
            color: white;
        }
        
        .btn-editar:hover, .btn-eliminar:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Listado de Especies</h1>
        
        <a href="{{ route('especies.create') }}" class="btn-crear">+ Crear Nueva Especie</a>
        
        @if(session('success'))
            <div style="background-color: #4CAF50; color: white; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif
        
        @if(session('error'))
            <div style="background-color: #f44336; color: white; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                {{ session('error') }}
            </div>
        @endif
        
        @if($especies->isEmpty())
            <div class="no-especies">
                <p>No hay especies registradas en este momento.</p>
                <p>¡Crea tu primera especie!</p>
            </div>
        @else
            <div class="especies-lista">
                @foreach ($especies as $especie)
                    <div class="especie-item">
                        <div class="especie-header">
                            @if($especie->foto)
                                <img class="especie-foto" 
                                     src="{{ asset('storage/' . $especie->foto) }}" 
                                     alt="{{ $especie->nombre }}">
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
                        
                        <div class="acciones">
                            <a href="{{ route('especies.show', $especie) }}" class="btn-editar">Ver detalles</a>
                            <form action="{{ route('especies.destroy', $especie) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-eliminar">Eliminar</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>