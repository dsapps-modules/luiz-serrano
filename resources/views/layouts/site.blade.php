<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#0f1f1b">
        <meta
            name="description"
            content="Site em Laravel para Luiz Serrano, síndico profissional, com apresentação institucional e uma referência especial aos 80 anos de história."
        >

        <title>@yield('title', config('app.name', 'Luiz Serrano'))</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="site-nav">
            <div class="site-nav__inner">
                <a class="site-nav__brand" href="#inicio" aria-label="Ir para o início">
                    <span class="site-nav__mark" aria-hidden="true">
                        <img class="site-nav__logo" src="{{ asset('img/logo.png') }}" alt="">
                    </span>
                    <span class="site-nav__brand-text">
                        <strong>Luiz Serrano</strong>
                        <small>Síndico Profissional</small>
                    </span>
                </a>

                <nav class="site-nav__links" aria-label="Navegação principal">
                    <a href="#inicio">Início</a>
                    <a href="#consultoria">Consultoria</a>
                    <a href="#servicos">Serviços</a>
                    <a href="#atuacao">Atuação</a>
                    <a href="#contato">Contato</a>
                </nav>

                <a class="site-nav__cta" href="#contato">Falar agora</a>
            </div>
        </header>

        @yield('content')
    </body>
</html>
