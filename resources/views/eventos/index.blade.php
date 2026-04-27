<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos - Reforesta</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">
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

        h1,
        h2,
        h3,
        .logo-text {
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

        .btn-outline,
        a.btn-outline {
            background: transparent;
            border: 2px solid #ffd700;
            color: #ffd700;
            padding: 6px 18px;
            border-radius: 40px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary,
        a.btn-primary {
            background: var(--tierra);
            color: white;
            padding: 6px 20px;
            border-radius: 40px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary:hover,
        a.btn-primary:hover {
            background: #6b3410;
        }

        .btn-outline:hover,
        a.btn-outline:hover {
            background: #ffd700;
            color: var(--verde-bosque);
        }

        /* HERO / SLIDER simplificado */
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
            color: rgba(255, 255, 255, 0.9);
            font-size: 1rem;
        }

        /* SECCIÓN EVENTOS */
        .section {
            padding: 50px 0;
        }

        .section-title {
            text-align: center;
            font-size: 1.8rem;
            color: var(--verde-bosque);
            margin-bottom: 40px;
        }

        .eventos-lista {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .evento-item {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            transition: transform 0.2s;
        }

        .evento-item:hover {
            transform: translateY(-3px);
        }

        .evento-item h3 {
            background: var(--verde-bosque);
            color: white;
            padding: 12px 16px;
            font-size: 1.1rem;
            margin: 0;
        }

        .evento-info {
            padding: 8px 16px;
            font-size: 0.9rem;
            border-bottom: 1px solid #eee;
        }

        .evento-info strong {
            color: var(--tierra);
            font-weight: 600;
        }

        .evento-info p {
            display: inline;
            color: #555;
        }

        .evento-imagen {
            width: 100%;
            height: 160px;
            object-fit: cover;
            margin: 0;
        }

        .evento-acciones {
            padding: 12px 16px;
            display: flex;
            gap: 12px;
            align-items: center;
            flex-wrap: wrap;
        }

        .btn-ver {
            background: var(--verde-hoja);
            color: white;
            padding: 6px 14px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .btn-eliminar {
            background: #c0392b;
            color: white;
            padding: 6px 14px;
            border-radius: 20px;
            border: none;
            font-size: 0.8rem;
            cursor: pointer;
        }

        .no-eventos {
            text-align: center;
            padding: 60px;
            background: white;
            border-radius: 12px;
            color: var(--gris);
        }

        /* CALENDARIO */
        .calendario-resumen {
            background: white;
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 40px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .calendario-resumen h3 {
            color: var(--verde-bosque);
            margin-bottom: 20px;
            font-size: 1.3rem;
        }

        .meses-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .mes-card {
            background: var(--crema);
            border-radius: 12px;
            padding: 15px;
            border: 1px solid #e0e0e0;
        }

        .mes-card h4 {
            color: var(--tierra);
            margin-bottom: 12px;
            font-size: 1.1rem;
            border-bottom: 2px solid var(--verde-hoja);
            padding-bottom: 8px;
        }

        .mes-card ul {
            list-style: none;
            padding: 0;
        }

        .mes-card li {
            padding: 5px 0;
            border-bottom: 1px solid #eee;
        }

        .mes-card li a {
            color: var(--verde-bosque);
            text-decoration: none;
            font-size: 0.85rem;
        }

        .mes-card li a:hover {
            color: var(--tierra);
            text-decoration: underline;
        }

        .mes-card p {
            color: var(--gris);
            font-size: 0.85rem;
            font-style: italic;
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
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            font-size: 0.8rem;
            margin-bottom: 6px;
        }

        .copyright {
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            font-size: 0.7rem;
            color: rgba(255, 255, 255, 0.5);
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
                    <a href="{{ route('showLogin') }}" class="btn-outline">Iniciar sesión</a>
                    <a href="{{ route('usuarios.create') }}" class="btn-primary">Registrarse</a>
                </div>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h1>Eventos de Reforestación</h1>
            <p>Participa, organiza y ayuda a recuperar nuestros bosques</p>
        </div>
    </section>

    <section class="section">
        <div class="container">

            <div class="calendario-resumen">
                <h3>📅 Próximos eventos</h3>
                <div class="meses-container">
                    @php
                        $fechas = [
                            now()->startOfMonth()->format('Y-m') => now()->isoFormat('MMMM'),
                            now()->addMonth()->startOfMonth()->format('Y-m') => now()->addMonth()->isoFormat('MMMM'),
                            now()->addMonths(2)->startOfMonth()->format('Y-m') => now()
                                ->addMonths(2)
                                ->isoFormat('MMMM'),
                        ];
                    @endphp

                    @foreach ($fechas as $mesNum => $mesNombre)
                        @php
                            $eventosMes = $eventos->filter(function ($evento) use ($mesNum) {
                                return \Carbon\Carbon::parse($evento->fecha)->format('Y-m') == $mesNum;
                            });
                        @endphp
                        <div class="mes-card">
                            <h4>{{ ucfirst($mesNombre) }}</h4>
                            @if ($eventosMes->count() > 0)
                                <ul>
                                    @foreach ($eventosMes as $evento)
                                        <li>
                                            <a href="{{ route('eventos.show', $evento) }}">
                                                {{ \Carbon\Carbon::parse($evento->fecha)->format('d') }} -
                                                {{ $evento->nombre }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>No hay eventos este mes</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            <div style="text-align: right; margin-bottom: 20px;">
                <a href="{{ route('eventos.create') }}" class="btn-primary">+ Crear nuevo evento</a>
            </div>

            @if ($eventos->isEmpty())
                <div class="no-eventos">
                    <p>No hay eventos disponibles en este momento.</p>
                    <p>¡Crea tu primer evento!</p>
                </div>
            @else
                <div class="eventos-lista">
                    @foreach ($eventos as $evento)
                        <div class="evento-item">
                            <h3>{{ $evento->nombre }}</h3>

                            @if ($evento->imagen)
                                <img class="evento-imagen" src="{{ asset('storage/' . $evento->imagen) }}"
                                    alt="{{ $evento->nombre }}">
                            @endif

                            <div class="evento-info">
                                <strong>📍 Ubicación:</strong> {{ $evento->ubicacion }}
                            </div>

                            <div class="evento-info">
                                <strong>📅 Fecha:</strong> {{ \Carbon\Carbon::parse($evento->fecha)->isoFormat('LL') }}
                            </div>

                            <div class="evento-info">
                                <strong>🌱 Tipo:</strong> {{ $evento->tipo_evento }}
                            </div>

                            <div class="evento-info">
                                <strong>🗺️ Terreno:</strong> {{ $evento->tipo_terreno }}
                            </div>

                            <div class="evento-acciones">
                                <a href="{{ route('eventos.show', $evento) }}" class="btn-ver">Ver detalles</a>
                                <form action="{{ route('eventos.destroy', $evento) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-eliminar"
                                        onclick="return confirm('¿Eliminar {{ $evento->nombre }}?')">Borrar</button>
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
