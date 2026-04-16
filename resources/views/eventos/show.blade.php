<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Evento - Reforesta</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --verde-bosque: #2d5016;
            --verde-hoja: #4a7c23;
            --tierra: #8b4513;
            --crema: #faf8f5;
            --gris: #5d6e5a;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: var(--crema);
            color: #2c2c2c;
        }

        h1, h2, h3, .logo-text {
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 32px;
        }

        /* HEADER */
        header {
            background: var(--verde-bosque);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 0;
            flex-wrap: wrap;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: #ffd700;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .logo-text {
            color: white;
            font-size: 1.4rem;
            font-weight: 700;
        }

        .logo-text span {
            color: #ffd700;
        }

        .nav-links {
            display: flex;
            gap: 24px;
            align-items: center;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 8px 0;
        }

        .nav-links a:hover {
            color: #ffd700;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid #ffd700;
            color: #ffd700;
            padding: 6px 18px;
            border-radius: 40px;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-primary {
            background: var(--tierra);
            color: white;
            padding: 6px 20px;
            border-radius: 40px;
            font-weight: 600;
            border: none;
            cursor: pointer;
        }

        /* CONTENIDO PRINCIPAL */
        .section {
            padding: 50px 0;
        }

        .evento-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            max-width: 800px;
            margin: 0 auto;
        }

        .evento-header {
            background: var(--verde-bosque);
            color: white;
            padding: 20px 24px;
        }

        .evento-header h1 {
            font-size: 1.8rem;
            margin-bottom: 8px;
        }

        .evento-fecha {
            color: #ffd700;
            font-size: 0.9rem;
        }

        .evento-contenido {
            padding: 24px;
        }

        .evento-info {
            margin-bottom: 16px;
            padding-bottom: 12px;
            border-bottom: 1px solid #eee;
        }

        .evento-info strong {
            color: var(--tierra);
            display: inline-block;
            min-width: 140px;
            font-weight: 600;
        }

        .evento-info p {
            display: inline;
            color: #555;
        }

        .especie-badge {
            display: inline-block;
            background: var(--verde-hoja);
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin: 4px 6px 4px 0;
        }

        .participante-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 8px;
        }

        .participante-item {
            background: #f0f0f0;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
        }

        .evento-imagen {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 12px;
            margin: 16px 0;
        }

        .acciones {
            display: flex;
            gap: 12px;
            margin: 24px 0 16px;
            flex-wrap: wrap;
        }

        .btn-unir {
            background: var(--verde-hoja);
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            border: none;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-desunir {
            background: #c0392b;
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            border: none;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-editar {
            background: var(--tierra);
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            text-decoration: none;
            display: inline-block;
            font-weight: 600;
        }

        .btn-pdf {
            background: #2c3e50;
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            text-decoration: none;
            display: inline-block;
            font-size: 0.9rem;
        }

        .volver {
            display: inline-block;
            margin-top: 20px;
            color: var(--verde-bosque);
            text-decoration: none;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .alert-error {
            background: #f8d7da;
            color: #721c24;
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        /* FOOTER */
        footer {
            background: var(--verde-bosque);
            color: white;
            padding: 40px 0 20px;
            margin-top: 40px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-col h4 {
            color: #ffd700;
            margin-bottom: 12px;
            font-size: 0.9rem;
        }

        .footer-col a {
            display: block;
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 0.8rem;
            margin-bottom: 6px;
        }

        .copyright {
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            font-size: 0.7rem;
            color: rgba(255,255,255,0.5);
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 20px;
            }
            .navbar {
                flex-direction: column;
                gap: 12px;
            }
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
            .evento-info strong {
                display: block;
                margin-bottom: 4px;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="container">
        <div class="navbar">
            <a href="{{ route('eventos.index') }}" class="logo">
                <div class="logo-icon">🌿</div>
                <span class="logo-text">Refore<span>sta</span></span>
            </a>
            <div class="nav-links">
                <a href="{{ route('eventos.index') }}">Eventos</a>
                <a href="{{ route('especies.index') }}">Especies</a>
                <a href="{{ route('usuarios.index') }}">Usuarios</a>
            </div>
        </div>
    </div>
</header>

<section class="section">
    <div class="container">
        <div class="evento-card">
            <div class="evento-header">
                <h1>{{ $evento->nombre }}</h1>
                <div class="evento-fecha">
                    📅 {{ \Carbon\Carbon::parse($evento->fecha)->isoFormat('LL') }}
                </div>
            </div>

            <div class="evento-contenido">

                @if(session('success'))
                    <div class="alert-success">{{ session('success') }}</div>
                @endif

                @if(session('error'))
                    <div class="alert-error">{{ session('error') }}</div>
                @endif

                <div class="evento-info">
                    <strong>🌿 Organizador:</strong> {{ $evento->anfitrion->nombre ?? 'No especificado' }}
                </div>

                <div class="evento-info">
                    <strong>📍 Ubicación:</strong> {{ $evento->ubicacion }}
                </div>

                <div class="evento-info">
                    <strong>📝 Descripción:</strong>
                    <p>{{ $evento->descripcion }}</p>
                </div>

                <div class="evento-info">
                    <strong>🗺️ Terreno:</strong> {{ $evento->tipo_terreno }}
                </div>

                <div class="evento-info">
                    <strong>🌱 Tipo evento:</strong> {{ $evento->tipo_evento }}
                </div>

                @if($evento->especiesIncluidas->count() > 0)
                <div class="evento-info">
                    <strong>🌳 Especies a plantar:</strong>
                    <div style="margin-top: 8px;">
                        @foreach($evento->especiesIncluidas as $especie)
                            <span class="especie-badge">{{ $especie->nombre }} (x{{ $especie->pivot->num_especies }})</span>
                        @endforeach
                    </div>
                </div>
                @endif

                <div class="evento-info">
                    <strong>👥 Participantes ({{ $evento->participantes->count() }}):</strong>
                    <div class="participante-list">
                        @foreach ($evento->participantes as $participante)
                            <span class="participante-item">{{ $participante->nombre }}</span>
                        @endforeach
                    </div>
                </div>

                @if($evento->imagen)
                    <img class="evento-imagen" src="{{ asset('storage/' . $evento->imagen) }}" alt="{{ $evento->nombre }}">
                @endif

                <div class="acciones">
                    @if(auth()->check())
                        <form action="{{ route('eventos.unir', ['id_evento' => $evento->id, 'id_usuario' => auth()->id()]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn-unir">➕ Unirse al evento</button>
                        </form>

                        <form action="{{ route('eventos.desunir', ['id_evento' => $evento->id, 'id_usuario' => auth()->id()]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn-desunir">➖ Desunirse</button>
                        </form>
                    @else
                        <p><a href="{{ route('showLogin') }}">Inicia sesión</a> para unirte al evento</p>
                    @endif

                    <a href="{{ route('eventos.edit', $evento) }}" class="btn-editar">✏️ Editar evento</a>

                    @if($evento->pdf)
                        <a href="{{ asset('storage/' . $evento->pdf) }}" target="_blank" class="btn-pdf">📄 Ver PDF</a>
                    @endif
                </div>

                <a href="{{ route('eventos.index') }}" class="volver">← Volver al listado</a>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-col">
                <h4>Reforesta</h4>
                <a href="#">Sobre nosotros</a>
                <a href="#">Contacto</a>
            </div>
            <div class="footer-col">
                <h4>Recursos</h4>
                <a href="#">Eventos</a>
                <a href="#">Especies</a>
                <a href="#">Voluntariado</a>
            </div>
            <div class="footer-col">
                <h4>Ayuda</h4>
                <a href="#">Preguntas frecuentes</a>
                <a href="#">Privacidad</a>
            </div>
        </div>
        <div class="copyright">
            © 2026 Reforesta - Fran
        </div>
    </div>
</footer>

</body>
</html>