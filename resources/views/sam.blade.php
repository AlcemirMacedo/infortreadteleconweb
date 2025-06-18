@extends('mainLayout')

@section('link_css')
    <link rel="stylesheet" href="{{ asset('css/secundary_pages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
@endsection

@section('content')
    <x-banner background="{{ asset('images/contracheque.webp') }}">
        SAM<br/>Sistema de Arrecadação Municipal
    </x-banner>

    <section class="secundary">

        <div class="secundary_content" style="display: flex;">
            <div style="flex: 1">
                <h1>Gestão Tributária e Emissão de DUAMs</h1>
                <p>Solução completa para arrecadação de tributos municipais, como alvarás, construção, notas avulsas, IPTU, ITBI e água. Permite a geração de DUAMs com pagamento via Pix, oferecendo agilidade tanto para o contribuinte quanto para a gestão pública.</p>

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
