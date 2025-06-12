@extends('mainLayout')

@section('link_css')
    <link rel="stylesheet" href="{{ asset('css/secundary_pages.css') }}">
@endsection

@section('content')
    <x-banner background="{{ asset('images/contracheque.webp') }}">
        iContracheque Online<br/>Consulta Online de Contracheques
    </x-banner>

    <section class="stfolha_section secundary">

        <div class="secundary_content">
            <div>
                <h1>iContracheque Online</h1>
                <p>Sistema desenvolvido para o processamento da folha de pagamento dos servidores públicos, com integração direta ao E-Contas (TCE) e ao E-Social (Receita Federal). Automatiza rotinas, garante conformidade legal e simplifica a prestação de contas para prefeituras, câmaras e fundos públicos.</p>
            </div>

            <div>
                <img src="{{ asset('images/sis_folha-pagamento.png') }}" alt="STFolha">
            </div>
        </div>
        <x-bot-venda>

        </x-bot-venda>
    </section>


    <x-rodape></x-rodape>
@endsection
