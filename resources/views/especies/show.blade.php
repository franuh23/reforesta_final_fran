<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de Especie - Reforesta</title>
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

        .especie-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            max-width: 800px;
            margin: 0 auto;
        }

        .especie-header {
            background: var(--verde-bosque);
            color: white;
            padding: 20px 24px;
            text-align: center;
        }

        .especie-header h1 {
            font-size: 1.8rem;
            margin-bottom: 8px;
        }

        .especie-contenido {
            padding: 24px;
        }

        .especie-foto {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .foto-placeholder {
            width: 100%;
            height: 200px;
            background: var(--verde-hoja);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 64px;
            border-radius: 12px;
            margin-bottom: 20px;
            color: white;
        }

        .especie-info {
            margin-bottom: 16px;
            padding: 12px 0;
            border-bottom: 1px solid #eee;
        }

        .especie-info strong {
            color: var(--tierra);
            display: inline-block;
            min-width: 100px;
            font-weight: 600;
        }

        .clima-badge, .tiempo-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .clima-badge {
            background: #e3f2fd;
            color: #1976d2;
        }

        .tiempo-badge {
            background: #fff3e0;
            color: #f57c00;
            margin-left: 8px;
        }

        .beneficios {
            background: #e8f5e9;
            padding: 16px;
            border-radius: 12px;
            margin: 16px 0;
            color: var(--verde-bosque);
        }

        .eventos-lista {
            margin-top: 16px;
        }

        .evento-item {
            background: #f5f5f5;
            padding: 10px 16px;
            border-radius: 8px;
            margin-bottom: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .evento-nombre {
            font-weight: 600;
            color: var(--verde-bosque);
        }

        .evento-cantidad {
            background: var(--tierra);
            color: white;
            padding: 2px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
        }

        .enlace {
            text-align: center;
            margin: 20px 0;
        }

        .enlace a {
            color: var(--verde-hoja);
            text-decoration: none;
            font-weight: 600;
        }

        .enlace a:hover {
            text-decoration: underline;
        }

        .btn-editar {
            display: inline-block;
            background: var(--tierra);
            color: white;
            padding: 10px 24px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 20px;
        }

        .btn-volver {
            display: inline-block;
            background: var(--gris);
            color: white;
            padding: 10px 24px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 20px;
            margin-left: 12px;
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
            .evento-item {
                flex-direction: column;
                gap: 8px;
                text-align: center;
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
        <div class="especie-card">
            <div class="especie-header">
                <h1>{{ $especie->nombre }}</h1>
            </div>

            <div class="especie-contenido">
                @if($especie->foto)
                    <img class="especie-foto" src="{{ asset('storage/' . $especie->foto) }}" alt="{{ $especie->nombre }}">
                @else
                    <div class="foto-placeholder">🌿</div>
                @endif

                <div class="especie-info">
                    <strong>🌡️ Clima:</strong>
                    <span class="clima-badge">{{ $especie->clima }}</span>
                    
                    <strong style="margin-left: 15px;">⏱️ Tiempo:</strong>
                    <span class="tiempo-badge">{{ $especie->tiempo }}</span>
                </div>

                <div class="beneficios">
                    <strong>🌱 Beneficios:</strong><br>
                    {{ $especie->beneficios }}
                </div>

                @if($especie->enlace)
                    <div class="enlace">
                        <a href="{{ $especie->enlace }}" target="_blank">🔗 Más información sobre esta especie</a>
                    </div>
                @endif

                @if($especie->especiesParaEventos->count() > 0)
                    <div class="especie-info">
                        <strong>📅 Eventos donde se planta:</strong>
                        <div class="eventos-lista">
                            @foreach($especie->especiesParaEventos as $evento)
                                <div class="evento-item">
                                    <span class="evento-nombre">{{ $evento->nombre }}</span>
                                    <span class="evento-cantidad">Cantidad: {{ $evento->pivot->num_especies }} unidades</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div style="text-align: center;">
                    <a href="{{ route('especies.edit', $especie) }}" class="btn-editar">✏️ Editar especie</a>
                    <a href="{{ route('especies.index') }}" class="btn-volver">← Volver al listado</a>
                </div>
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