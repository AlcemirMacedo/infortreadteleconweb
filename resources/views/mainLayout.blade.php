<!DOCTYPE html>
<html lang="pt-br" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.6-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/banner-header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/locais.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/help.css') }}">
    <link rel="stylesheet" href="{{ asset('css/depoimentos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    @yield('link_css')
    <title>Infortread Telecom</title>
</head>
<body>
{{-- menu top --}}
<div class="menu_top">
    <div class="logo">
        <a href="/#home"><img src="{{ asset('img/logo.png') }}" alt="Infortread Telecom"></a>
    </div>
    <nav>
        <ul>
            <li><a href="/#home">Início</a></li>
            <li><a href="/#sobre">A Infortread</a></li>
            <li><a href="/#sistemas">Sistemas</a></li>
            <li><a href="/#services">Serviços</a></li>
            <li><a href="/#contato">Contatos</a></li>
        </ul>
    </nav>
    <div style="justify-content:center">
        <div class="login">
            Olá, {{ $name }}
        </div>
        {{-- <div class="cadastrar">
            Cadastrar
        </div> --}}
    </div>

</div>

    @yield('content')


    <script src="{{ asset('js/homeScript.js') }}" type="text/javascript"></script>

</body>
</html>
