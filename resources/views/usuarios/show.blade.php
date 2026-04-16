<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Usuario - Reforesta</title>
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

        .usuario-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            max-width: 700px;
            margin: 0 auto;
        }

        .usuario-header {
            background: var(--verde-bosque);
            padding: 30px;
            text-align: center;
        }

        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #ffd700;
            margin-bottom: 15px;
        }

        .avatar-placeholder {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: #ffd700;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            font-weight: bold;
            color: var(--verde-bosque);
            margin: 0 auto 15px;
            border: 4px solid white;
        }

        .usuario-header h3 {
            color: white;
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        .usuario-nick {
            color: #ffd700;
            font-size: 1rem;
        }

        .usuario-contenido {
            padding: 30px;
        }

        .usuario-info {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .usuario-info strong {
            color: var(--tierra);
            display: inline-block;
            min-width: 80px;
            font-weight: 600;
        }

        .karma-badge {
            display: inline-block;
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .karma-alto {
            background: #4CAF50;
            color: white;
        }

        .karma-medio {
            background: #FFC107;
            color: #333;
        }

        .karma-bajo {
            background: #f44336;
            color: white;
        }

        .eventos-count {
            background: #e8f5e9;
            padding: 12px 16px;
            border-radius: 12px;
            margin-bottom: 12px;
            color: var(--verde-bosque);
            font-weight: 600;
        }

        .acciones {
            margin-top: 25px;
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-editar {
            background: var(--tierra);
            color: white;
            padding: 10px 24px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
        }

        .btn-logout {
            background: #c0392b;
            color: white;
            padding: 10px 24px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
        }

        .btn-volver {
            background: var(--gris);
            color: white;
            padding: 10px 24px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
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
            .usuario-header h3 {
                font-size: 1.2rem;
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
        <div class="usuario-card">
            <div class="usuario-header">
                @if($usuario->avatar)
                    <img class="avatar" src="{{ asset('storage/' . $usuario->avatar) }}" alt="{{ $usuario->nick }}">
                @else
                    <div class="avatar-placeholder">
                        {{ strtoupper(substr($usuario->nombre, 0, 1)) }}
                    </div>
                @endif
                <h3>{{ $usuario->nombre }} {{ $usuario->apellidos }}</h3>
                <div class="usuario-nick">@ {{ $usuario->nick }}</div>
            </div>

            <div class="usuario-contenido">
                <div class="usuario-info">
                    <strong>📧 Email:</strong> {{ $usuario->email }}
                </div>

                <div class="usuario-info">
                    <strong>⭐ Karma:</strong>
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

                <div class="acciones">
                    <a href="{{ route('usuarios.edit', $usuario) }}" class="btn-editar">✏️ Editar perfil</a>
                    
                    <a href="{{ route('usuarios.logout') }}" class="btn-logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">🚪 Cerrar sesión</a>
                    <form id="logout-form" action="{{ route('usuarios.logout') }}" method="GET" style="display: none;">
                        @csrf
                    </form>

                    <a href="{{ route('usuarios.index') }}" class="btn-volver">← Volver</a>
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