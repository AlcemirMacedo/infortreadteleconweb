@extends('mainLayout')

@section('link_css')
    <link rel="stylesheet" href="{{ asset('css/secundary_pages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
@endsection

@section('content')
    <x-banner background="{{ asset('images/compras-estoque.jpg') }}">
        ICE <br /> iCompras e Estoque
    </x-banner>

    <section class="stfolha_section secundary">

        <div class="secundary_content">
            <div>
                <h1>Controle de Almoxarifado e Compras Públicasyou</h1>
                <p>Sistema completo para emissão de requisições, ordens de compra, entradas e saídas de materiais. Permite gestão por setor e garante maior organização e rastreabilidade dos recursos físicos da administração pública.</p>

                <x-links-relacionados>
                </x-links-relacionados>
            </div>

            <div>
                <img src="{{ asset('images/sis_folha-pagamento.png') }}" alt="STFolha">
            </div>
        </div>
        <x-bot-venda>
            Contratar iCE
        </x-bot-venda>

    </section>
    <div class="hr-sys"> Veja Também:</div>
    <x-links-components></x-links-components>

    <x-rodape>
    </x-rodape>
@endsection
