@extends('mainLayout')

@section('link_css')
    <link rel="stylesheet" href="{{ asset('css/secundary_pages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
@endsection

@section('content')
<x-banner background="{{ asset('images/stfolha_background.jpg') }}">
    iContracheque<br>Online
</x-banner>

<section class="stfolha_section secundary">

    <div class="secundary_content">
        <div>
            <h1>STFolha</h1>
            <p>Sistema desenvolvido para o processamento da folha de pagamento dos servidores públicos, com integração direta ao E-Contas (TCE) e ao E-Social (Receita Federal). Automatiza rotinas, garante conformidade legal e simplifica a prestação de contas para prefeituras, câmaras e fundos públicos.</p>
            <x-links-relacionados>
            </x-links-relacionados>
        </div>

        <div>
            <img src="{{ asset('images/sis_folha-pagamento.png') }}" alt="STFolha">
        </div>
    </div>
    <x-bot-venda>
        Contratar iContracheque Online
    </x-bot-venda>

</section>
<div class="hr-sys"> Veja Também:</div>
<x-links-components></x-links-components>

<x-rodape>
</x-rodape>
@endsection
