<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu Ragnarok</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<header>
    <h2>Meu Ragnarok Online</h2>
    <nav>
        <a href="home">Home</a>
        <a href="/download">Download</a>
        <a href="/ranking">Ranking</a>
    </nav>
</header>

<hr>

@yield('content')

</body>
</html>
