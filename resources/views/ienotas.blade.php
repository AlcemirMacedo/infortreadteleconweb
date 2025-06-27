@extends('mainLayout')

@section('link_css')
    <link rel="stylesheet" href="{{ asset('css/secundary_pages.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
@endsection

@section('content')
<x-banner background="{{ asset('images/nota-fiscal0eletronica.png') }}">
    iE-Notas
</x-banner>

<section class="stfolha_section secundary">

    <div class="secundary_content">
        <div>
           <h1>iE-Notas</h1>
            <p>Sistema da INFORTREAD para emissão e gerenciamento de notas fiscais eletrônicas, com geração e validação de arquivos XML. Facilita o controle fiscal e garante conformidade com os padrões exigidos por órgãos reguladores.</p>
            <x-links-relacionados>
            </x-links-relacionados>
        </div>

        <div>
            <img src="{{ asset('images/sis_folha-pagamento.png') }}" alt="STFolha">
        </div>
    </div>
    <x-bot-venda>
        Contratar iENotas
    </x-bot-venda>

</section>
<div class="hr-sys"> Veja Também:</div>
<x-links-components></x-links-components>

<x-rodape>
</x-rodape>
@endsection


