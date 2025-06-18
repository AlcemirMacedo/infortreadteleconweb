@extends('mainLayout')

@section('link_css')
    <link rel="stylesheet" href="{{ asset('css/secundary_pages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
@endsection

@section('content')
    <x-banner background="{{ asset('images/contracheque.webp') }}">
        Consultoria em E-Social<br/>para Entidades Públicas
    </x-banner>

    <section class="secundary">

        <div class="secundary_content" style="display: flex;">
            
            <div style="flex: 1">
                <h1>Apoio Técnico para Conformidade Trabalhista</h1>
                <p>Serviço de consultoria especializada para prefeituras, câmaras e órgãos públicos que necessitam atender às exigências do E-Social. Auxiliamos na adequação de processos e fluxos de dados, garantindo conformidade legal e evitando sanções.</p>

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
