<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Turismo') }}</title>

    {{-- Bootstrap desde CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">

    <div class="container text-center">
        <h1 class="display-4 mb-4">{{ config('app.name', 'Turismo') }}</h1>
        <p class="lead text-secondary">Bienvenido a tu aplicación de turismo</p>

        <div class="mt-4">
            @if (Route::has('login'))
            <a href="{{ route('login') }}" class="btn btn-primary me-2">Iniciar Sesión</a>
            @else
            <button class="btn btn-primary me-2" disabled>Iniciar Sesión</button>
            @endif

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-outline-secondary">Registrarse</a>
            @else
            <button class="btn btn-outline-secondary" disabled>Registrarse</button>
            @endif
        </div>
    </div>

</body>

</html>