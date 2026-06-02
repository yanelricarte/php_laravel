<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Sitio web con Laravel</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #222;
        }

        header {
            background: #1f2937;
            color: white;
            padding: 28px;
            text-align: center;
        }

        nav {
            background: #111827;
            padding: 14px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 12px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            max-width: 900px;
            margin: 32px auto;
            background: white;
            padding: 32px;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
        }

        h1 {
            color: #1f2937;
        }

        .card {
            background: #f9fafb;
            border-left: 5px solid #2563eb;
            padding: 16px;
            margin: 16px 0;
            border-radius: 8px;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #666;
        }
    </style>
</head>
<body>

    <header>
        <h1>Sitio web con Laravel</h1>
        <p>Primer proyecto con rutas, controladores y vistas</p>
    </header>

    <nav>
        <a href="/">Inicio</a>
        <a href="/materias">Materias</a>
        <a href="/contacto">Contacto</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Proyecto desarrollado con Laravel</p>
    </footer>

</body>
</html>