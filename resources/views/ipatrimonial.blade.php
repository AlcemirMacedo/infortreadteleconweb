@extends('mainLayout')

@section('link_css')
    <link rel="stylesheet" href="{{ asset('css/secundary_pages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
@endsection

@section('content')
    <x-banner background="{{ asset('images/contracheque.webp') }}">
        iPatrimonial
    </x-banner>

    <section class="secundary">

        <div class="secundary_content" style="display: flex;">
            <div style="flex: 1">
                <h1>Gestão e Controle de Patrimônio Público</h1>
                <p>Sistema que realiza o registro e controle dos bens patrimoniais de uma entidade, abrangendo desde móveis até imóveis. Permite auditorias eficazes, evita perdas e oferece total visibilidade sobre o patrimônio público.</p>

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
