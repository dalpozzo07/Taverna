<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taverna do Meio Goblin - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- se for criar CSS -->
</head>
<body>
    <header style="background:#333;color:#fff;padding:10px;">
        <h1><a href="{{ route('home') }}" style="color:white;text-decoration:none;">Taverna do Meio Goblin</a></h1>
        <nav>
            @auth
                <a href="{{ route('dashboard') }}" style="color:white;margin-right:10px;">Dashboard</a>
                <form style="display:inline;" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" style="background:none;color:white;border:none;cursor:pointer;">Sair</button>
                </form>
            @else
                <a href="{{ route('login.form') }}" style="color:white;margin-right:10px;">Login</a>
                <a href="{{ route('register.form') }}" style="color:white;">Registrar</a>
            @endauth
        </nav>
    </header>

    <main style="padding:20px;">
        @yield('content')
    </main>

    <footer style="background:#333;color:white;text-align:center;padding:10px;">
        &copy; {{ date('Y') }} Taverna do Meio Goblin
    </footer>
</body>
</html>
