<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario - Reforesta</title>
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

        /* FORMULARIO */
        .section {
            padding: 50px 0;
        }

        .form-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            max-width: 700px;
            margin: 0 auto;
            overflow: hidden;
        }

        .form-header {
            background: var(--verde-bosque);
            color: white;
            padding: 20px 24px;
        }

        .form-header h1 {
            font-size: 1.6rem;
        }

        .form-contenido {
            padding: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            color: var(--verde-bosque);
            margin-bottom: 6px;
            font-size: 0.9rem;
        }

        .form-group input:not([type="checkbox"]),
        .form-group textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: 'Open Sans', sans-serif;
            font-size: 0.9rem;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--verde-hoja);
        }

        .error-list {
            background: #f8d7da;
            color: #721c24;
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            list-style: none;
        }

        .error-list li {
            margin-left: 20px;
        }

        .btn-submit {
            background: var(--verde-hoja);
            color: white;
            padding: 12px 28px;
            border: none;
            border-radius: 40px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-submit:hover {
            background: var(--verde-bosque);
        }

        .btn-cancelar {
            background: var(--gris);
            color: white;
            padding: 12px 28px;
            border: none;
            border-radius: 40px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            margin-left: 12px;
        }

        .help-text {
            font-size: 0.7rem;
            color: var(--gris);
            margin-top: 4px;
        }

        .imagen-actual {
            margin-top: 8px;
            font-size: 0.85rem;
        }

        .imagen-actual img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-top: 8px;
            border: 2px solid var(--verde-hoja);
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

<section class="section">
    <div class="container">
        <div class="form-card">
            <div class="form-header">
                <h1>✏️ Editar Usuario</h1>
            </div>

            <div class="form-contenido">
                @if ($errors->any())
                    <ul class="error-list">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form action="{{ route('usuarios.update', $usuario) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nick">Nick *</label>
                        <input type="text" id="nick" name="nick" value="{{ old('nick', $usuario->nick) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre *</label>
                        <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $usuario->nombre) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="apellidos">Apellidos *</label>
                        <input type="text" id="apellidos" name="apellidos" value="{{ old('apellidos', $usuario->apellidos) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $usuario->email) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Nueva contraseña (opcional)</label>
                        <input type="password" id="password" name="password" placeholder="Deja vacío para mantener la actual">
                        <p class="help-text">Solo si quieres cambiar la contraseña</p>
                    </div>

                    <div class="form-group">
                        <label for="avatar">Avatar (opcional)</label>
                        <input type="file" id="avatar" name="avatar" accept="image/*">
                        @if($usuario->avatar)
                            <div class="imagen-actual">
                                <strong>Avatar actual:</strong><br>
                                <img src="{{ asset('storage/' . $usuario->avatar) }}" alt="{{ $usuario->nick }}">
                            </div>
                        @endif
                    </div>

                    <div style="margin-top: 30px;">
                        <button type="submit" class="btn-submit">💾 Guardar cambios</button>
                        <a href="{{ route('usuarios.show', $usuario) }}" class="btn-cancelar">Cancelar</a>
                    </div>
                </form>
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