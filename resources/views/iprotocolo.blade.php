@extends('mainLayout')

@section('link_css')
    <link rel="stylesheet" href="{{ asset('css/secundary_pages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
@endsection

@section('content')
    <x-banner background="{{ asset('images/protocolo.jpg') }}">
        iProtocolo
    </x-banner>

    <section class="stfolha_section secundary">

        <div class="secundary_content">
            <div>
                <h1>Protocolo e Encaminhamento de Documentos Oficiais</h1>
                <p>Sistema destinado ao registro e acompanhamento de ofícios e documentos enviados entre setores. Garante
                    rastreabilidade, histórico de tramitações e organização eficiente dos processos administrativos
                    internos.</p>
                <x-links-relacionados>
                </x-links-relacionados>
            </div>

            <div>
                <img src="{{ asset('images/sis_folha-pagamento.png') }}" alt="STFolha">
            </div>
        </div>
        <x-bot-venda>
            Contratar iProtocolo
        </x-bot-venda>

    </section>
    <div class="hr-sys"> Veja Também:</div>
    <x-links-components></x-links-components>

    <x-rodape>
    </x-rodape>
@endsection
