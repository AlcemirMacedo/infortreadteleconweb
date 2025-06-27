@extends('mainLayout')

@section('link_css')
    <link rel="stylesheet" href="{{ asset('css/secundary_pages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
@endsection

@section('content')
    <x-banner background="{{ asset('images/patrimonial.jpg') }}">
        iPatrimonial
    </x-banner>

    <section class="stfolha_section secundary">

        <div class="secundary_content">
            <div>
                <h1>Gestão e Controle de Patrimônio Público</h1>
                <p>Sistema que realiza o registro e controle dos bens patrimoniais de uma entidade, abrangendo desde móveis
                    até imóveis. Permite auditorias eficazes, evita perdas e oferece total visibilidade sobre o patrimônio
                    público.</p>
                <x-links-relacionados>
                </x-links-relacionados>
            </div>

            <div>
                <img src="{{ asset('images/sis_folha-pagamento.png') }}" alt="STFolha">
            </div>
        </div>
        <x-bot-venda>
            Contratar iPatrimonial
        </x-bot-venda>

    </section>
    <div class="hr-sys"> Veja Também:</div>
    <x-links-components></x-links-components>

    <x-rodape>
    </x-rodape>
@endsection
