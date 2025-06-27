@extends('mainLayout')

@section('link_css')
    <link rel="stylesheet" href="{{ asset('css/secundary_pages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
@endsection

@section('content')
    <x-banner background="{{ asset('images/licitacao.jpg') }}">
        iLicitação<br/>Gestão de Licitações Públicas
    </x-banner>

    <section class="stfolha_section secundary">

        <div class="secundary_content">
            <div>
           <h1>Gestão de Licitações Públicas com Integração ao E-Contas</h1>
            <p>Solução voltada ao gerenciamento de processos licitatórios, com funcionalidades que organizam e registram todas as etapas das licitações. Já integrada ao E-Contas, atende às exigências atuais dos tribunais de contas de forma prática e segura.</p>
            <x-links-relacionados>
            </x-links-relacionados>
            </div>

            <div>
                <img src="{{ asset('images/sis_folha-pagamento.png') }}" alt="STFolha">
            </div>
        </div>
        <x-bot-venda>
            Contratar iLicitação
        </x-bot-venda>

    </section>
<div class="hr-sys"> Veja Também:</div>
<x-links-components></x-links-components>

<x-rodape>
</x-rodape>
@endsection
