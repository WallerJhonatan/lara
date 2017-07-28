<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>{{ $title ?? 'Iniciando com Laravel' }}</title>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="">
                <span class="sr-only"> Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/admin">Laravel Iniciante</a>
        </div>
    </nav>
    <main>
        <section class="container">
            {{ $slot }}
        </section>
    </main>
<script src="/js/app.js"></script>
</body>
</html>