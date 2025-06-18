@extends('mainLayout')

@section('link_css')
    <link rel="stylesheet" href="{{ asset('css/secundary_pages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
@endsection

@section('content')
    <x-banner background="{{ asset('images/contracheque.webp') }}">
        iLicitação<br/>Gestão de Licitações Públicas
    </x-banner>

    <section class="secundary">

        <div class="secundary_content" style="display: flex;">
            <div style="flex: 1">
                <h1>Gestão de Licitações Públicas com Integração ao E-Contas</h1>
                <p>Solução voltada ao gerenciamento de processos licitatórios, com funcionalidades que organizam e registram todas as etapas das licitações. Já integrada ao E-Contas, atende às exigências atuais dos tribunais de contas de forma prática e segura.</p>
                
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
