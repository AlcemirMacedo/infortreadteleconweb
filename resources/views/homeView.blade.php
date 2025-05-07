@extends('mainLayout')

@section('content')
    <section class="banner">
        <div class="fade-bg">
            {{-- Logo e frase inicial --}}
            <img src={{ asset('images/logo-w.png') }} alt="Infortread Telecom">
            <h2>A melhor solução para sua empresa ou instituição</h2>

            {{-- Botão do CTA --}}
            <div class="area-cta">
                <div class="btn-cta">
                    <p>entrar em contato</p>
                    <img src={{ asset('images/wsppIco.png') }} alt="Contato Whatsapp">
                </div>
            </div>
        </div>
    </section>
@endsection
