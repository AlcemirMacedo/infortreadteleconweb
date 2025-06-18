@extends('mainLayout')

@section('link_css')
    <link rel="stylesheet" href="{{ asset('css/secundary_pages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
@endsection

@section('content')
    <x-banner background="{{ asset('images/contracheque.webp') }}">
        iCE<br/>Compras e Estoque
    </x-banner>

    <section class="secundary">

        <div class="secundary_content" style="display: flex;">
            <div style="flex: 1">
                <h1>Controle de Almoxarifado e Compras Públicas</h1>
                <p>Sistema completo para emissão de requisições, ordens de compra, entradas e saídas de materiais. Permite gestão por setor e garante maior organização e rastreabilidade dos recursos físicos da administração pública.</p>

                <x-links-relacionados>
                </x-links-relacionados>

            </div>

            <div style="flex: 1; text-align:center">
                <img src="{{ asset('images/sis_folha-pagamento.png') }}" alt="STFolha">
            </div>
        </div>
        <x-bot-venda>

        </x-bot-venda>
        <x-sistemas-component></x-sistemas-component>
    </section>


    <x-rodape></x-rodape>
@endsection
