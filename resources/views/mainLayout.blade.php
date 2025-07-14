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
            <li><a href="/#home" onclick="mostramenu()">Início</a></li>
            <li><a href="/#sobre" onclick="mostramenu()">A Infortread</a></li>
            <li><a href="/#sistemas" onclick="mostramenu()">Sistemas</a></li>
            <li><a href="/#services" onclick="mostramenu()">Serviços</a></li>
            <li><a href="/#contato" onclick="mostramenu()">Contatos</a></li>
        </ul>
    </nav>
    <div style="justify-content:center">
        <div class="login">
            {{-- Olá, {{ $name }} --}}
            {{-- {{ date('d/m/Y | H:i:s') }} --}}
            <a href="https://clienteweb.infortread.com.br/central_assinante_web/login" target="_blanck">Central do Assinante</a>
        </div>
        {{-- <div class="cadastrar">
            Cadastrar
        </div> --}}
    </div>

</div>

    @yield('content')


    <script src="{{ asset('js/homeScript.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
