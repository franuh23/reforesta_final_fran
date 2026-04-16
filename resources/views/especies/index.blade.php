<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Especies - Reforesta</title>
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

        /* HERO */
        .hero {
            background: var(--verde-hoja);
            padding: 50px 0;
            text-align: center;
        }

        .hero h1 {
            color: white;
            font-size: 2.2rem;
            margin-bottom: 10px;
        }

        .hero p {
            color: rgba(255,255,255,0.9);
            font-size: 1rem;
        }

        /* SECCIÓN ESPECIES */
        .section {
            padding: 50px 0;
        }

        .btn-crear {
            display: inline-block;
            background: var(--tierra);
            color: white;
            padding: 10px 24px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 30px;
            transition: background 0.2s;
        }

        .btn-crear:hover {
            background: #6b3410;
        }

        .especies-lista {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .especie-item {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            transition: transform 0.2s;
        }

        .especie-item:hover {
            transform: translateY(-3px);
        }

        .especie-foto {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .foto-placeholder {
            width: 100%;
            height: 180px;
            background: var(--verde-hoja);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            color: white;
        }

        .especie-nombre {
            padding: 16px 16px 8px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        .especie-nombre h3 {
            color: var(--verde-bosque);
            font-size: 1.3rem;
            margin-bottom: 4px;
        }

        .especie-info {
            padding: 12px 16px;
            border-bottom: 1px solid #f0f0f0;
        }

        .especie-info strong {
            color: var(--tierra);
            display: inline-block;
            min-width: 65px;
            font-size: 0.85rem;
        }

        .clima-badge, .tiempo-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .clima-badge {
            background: #e3f2fd;
            color: #1976d2;
        }

        .tiempo-badge {
            background: #fff3e0;
            color: #f57c00;
        }

        .beneficios {
            padding: 12px 16px;
            background: #e8f5e9;
            color: var(--verde-bosque);
            font-size: 0.85rem;
        }

        .acciones {
            padding: 16px;
            display: flex;
            gap: 12px;
            justify-content: center;
        }

        .btn-ver, .btn-eliminar {
            padding: 6px 18px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        .btn-ver {
            background: var(--verde-hoja);
            color: white;
            border: none;
        }

        .btn-eliminar {
            background: #c0392b;
            color: white;
            border: none;
        }

        .btn-ver:hover, .btn-eliminar:hover {
            opacity: 0.85;
        }

        .no-especies {
            text-align: center;
            padding: 60px;
            background: white;
            border-radius: 16px;
            color: var(--gris);
        }

        /* ALERTAS */
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

<section class="hero">
    <div class="container">
        <h1>Especies para Reforestar</h1>
        <p>Descubre las especies autóctonas que ayudamos a plantar</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div style="text-align: right;">
            <a href="{{ route('especies.create') }}" class="btn-crear">+ Crear Nueva Especie</a>
        </div>

        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert-error">{{ session('error') }}</div>
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
                        @if($especie->foto)
                            <img class="especie-foto" src="{{ asset('storage/' . $especie->foto) }}" alt="{{ $especie->nombre }}">
                        @else
                            <div class="foto-placeholder">🌿</div>
                        @endif

                        <div class="especie-nombre">
                            <h3>{{ $especie->nombre }}</h3>
                        </div>

                        <div class="especie-info">
                            <strong>Clima:</strong>
                            <span class="clima-badge">{{ $especie->clima }}</span>
                            <strong style="margin-left: 12px;">Tiempo:</strong>
                            <span class="tiempo-badge">{{ $especie->tiempo }}</span>
                        </div>

                        <div class="beneficios">
                            🌱 {{ $especie->beneficios }}
                        </div>

                        <div class="acciones">
                            <a href="{{ route('especies.show', $especie) }}" class="btn-ver">Ver detalles</a>
                            <form action="{{ route('especies.destroy', $especie) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-eliminar" onclick="return confirm('¿Eliminar {{ $especie->nombre }}?')">Eliminar</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
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