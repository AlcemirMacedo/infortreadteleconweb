@extends('mainLayout')

@section('content')
{{-- Banner e Menu --}}
<section class="banner">
    <div class="fade-bg">
        <header>
            <div class="menu-toggle">
                <div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="share">
                <div>
                    <img src={{ asset('images/share-bgt.png') }} height="20" width="20" alt="Compartilhar">
                </div>
            </div>
        </header>
        {{-- Logo e frase inicial --}}
        <div class="banner-content">
            <img src={{ asset('images/logo-w.png') }} alt="Infortread Telecom">
            <h2>A melhor solução para sua empresa ou instituição</h2>

            {{-- Botão do CTA --}}
            <div class="area-cta">
                <div class="btn-cta" onclick="abrirWhatsapp()">
                    <p>Entrar em contato</p>
                    <img src="{{ asset('images/wsppIco.png') }}" alt="Contato Whatsapp">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Sessão Sobre a Infortread --}}
<section class="about-section">
    <div class="container">
        <h1>Sobre a Infortread</h1>
        <p>
            Fundada em 2009, a Infortread atua no setor de tecnologia da informação, com especialização no desenvolvimento de sistemas e na distribuição de internet, tendo como principal foco os municípios do Estado do Amazonas.
        </p>
        <p>
            Atualmente, é reconhecida como uma das maiores empresas do Estado em suas áreas de atuação, com um número crescente de clientes e serviços prestados.
        </p>
        <p>
            Sua infraestrutura é moderna e bem organizada, localizada na cidade de Manaus, onde são armazenados e processados todos os serviços oferecidos. A empresa conta com uma equipe comprometida, que trabalha diariamente para entregar um serviço de alta qualidade.
        </p>
    </div>
</section>

<script>
    function abrirWhatsapp(){
        const mensagem = encodeURIComponent("Gostaria de falar com um atendente");
        const telefone = "92985565323";
        const url = `https://wa.me/${telefone}?text=${mensagem}`;
        window.location.href = url;
    }
</script>
