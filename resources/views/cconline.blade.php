@extends('mainLayout')

@section('link_css')
    <link rel="stylesheet" href="{{ asset('css/secundary_pages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
@endsection

@section('content')
    <x-banner background="{{ asset('images/contracheque.webp') }}">
        iContracheque Online<br/>Consulta Online de Contracheques
    </x-banner>

    <section class="secundary">

        <div class="secundary_content" style="display: flex;">
            <div style="flex: 1">
                <h1>iContracheque Online</h1>
                <p>Ferramenta da INFORTREAD que permite o acesso digital aos contracheques dos servidores. Integrado ao banco de dados do STFolha, proporciona autonomia aos colaboradores e reduz a demanda sobre o setor de RH, otimizando tempo e recursos.</p>
                <x-links-relacionados>
                </x-links-relacionados>
            </div>

            <div style="flex: 1; text-align:center">
                <img src="{{ asset('images/sis_folha-pagamento.png') }}" alt="STFolha">
            </div>
        </div>
        <x-bot-venda>

        </x-bot-venda>
    </section>


    <x-rodape></x-rodape>
@endsection
