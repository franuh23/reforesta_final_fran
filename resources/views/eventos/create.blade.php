<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Evento - Reforesta</title>
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
            max-width: 800px;
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

        .especie-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
            flex-wrap: wrap;
        }

        .especie-item label {
            margin-bottom: 0;
            min-width: 120px;
        }

        .especie-item input[type="checkbox"] {
            width: auto;
            margin: 0;
        }

        .especie-item input[type="number"] {
            width: 80px;
            padding: 6px;
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
            font-size: 0.75rem;
            color: var(--gris);
            margin-top: 4px;
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
            .especie-item {
                flex-direction: column;
                align-items: flex-start;
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
                <h1>🌱 Crear Nuevo Evento</h1>
            </div>

            <div class="form-contenido">
                @if ($errors->any())
                    <ul class="error-list">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form action="{{ route('eventos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="nombre">Nombre del evento *</label>
                        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripción *</label>
                        <textarea id="descripcion" name="descripcion" rows="4" required>{{ old('descripcion') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="ubicacion">Ubicación *</label>
                        <input type="text" id="ubicacion" name="ubicacion" value="{{ old('ubicacion') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="tipo_terreno">Tipo de terreno *</label>
                        <input type="text" id="tipo_terreno" name="tipo_terreno" value="{{ old('tipo_terreno') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="tipo_evento">Tipo de evento *</label>
                        <input type="text" id="tipo_evento" name="tipo_evento" value="{{ old('tipo_evento') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="fecha">Fecha del evento *</label>
                        <input type="date" id="fecha" name="fecha" value="{{ old('fecha') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="id_usuario">ID del organizador *</label>
                        <input type="text" id="id_usuario" name="id_usuario" value="{{ old('id_usuario') }}" required>
                        <p class="help-text">Introduce el ID del usuario que organiza este evento</p>
                    </div>

                    <div class="form-group">
                        <label>Especies a plantar</label>
                        @foreach($especies as $especie)
                            <div class="especie-item">
                                <input type="checkbox" name="especies[{{ $especie->id }}][id]" value="{{ $especie->id }}">
                                <label style="margin-bottom: 0;">{{ $especie->nombre }}</label>
                                <input type="number" name="especies[{{ $especie->id }}][cantidad]" placeholder="Cantidad" min="1" value="1">
                            </div>
                        @endforeach
                    </div>

                    <div class="form-group">
                        <label for="imagen">Imagen (opcional)</label>
                        <input type="file" id="imagen" name="imagen" accept="image/*">
                    </div>

                    <div class="form-group">
                        <label for="pdf">Documento PDF (opcional)</label>
                        <input type="file" id="pdf" name="pdf" accept=".pdf">
                        <p class="help-text">Sube un archivo PDF con información adicional del evento</p>
                    </div>

                    <div style="margin-top: 30px;">
                        <button type="submit" class="btn-submit">🌿 Crear Evento</button>
                        <a href="{{ route('eventos.index') }}" class="btn-cancelar">Cancelar</a>
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