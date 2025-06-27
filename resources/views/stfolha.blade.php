@extends('mainLayout')

@section('link_css')
    <link rel="stylesheet" href="{{ asset('css/secundary_pages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
@endsection

@section('content')
<x-banner background="{{ asset('images/stfolha_background.jpg') }}">
    STFolha <br/> Folha de Pagamento para o Setor Público
</x-banner>

<section class="stfolha_section secundary">

    <div class="secundary_content">
        <div>
            <h1>iContracheque Online</h1>
                <p>Ferramenta da INFORTREAD que permite o acesso digital aos contracheques dos servidores. Integrado ao banco de dados do STFolha, proporciona autonomia aos colaboradores e reduz a demanda sobre o setor de RH, otimizando tempo e recursos.</p>
            <x-links-relacionados>
            </x-links-relacionados>
        </div>

        <div>
            <img src="{{ asset('images/sis_folha-pagamento.png') }}" alt="STFolha">
        </div>
    </div>
    <x-bot-venda>
        Contratar STFolha
    </x-bot-venda>

</section>
<div class="hr-sys"> Veja Também:</div>
<x-links-components></x-links-components>

<x-rodape>
</x-rodape>
@endsection
