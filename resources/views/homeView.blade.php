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
<section class="about_section">

    <div class="container">
        <h1>Sobre a Infortread</h1>
        <p>
            Fundada em 2009, a Infortread atua no setor de tecnologia da informação, com especialização no desenvolvimento de sistemas e na distribuição de internet, tendo como principal foco os municípios do Estado do Amazonas.
        </p>
        <p>
            Atualmente, é reconhecida como uma das maiores empresas do Estado em suas áreas de atuação, com um número crescente de clientes e serviços prestados.        </p>
        <p>
            Sua infraestrutura é moderna e bem organizada, localizada na cidade de Manaus, onde são armazenados e processados todos os serviços oferecidos. A empresa conta com uma equipe comprometida, que trabalha diariamente para entregar um serviço de alta qualidade.
        </p>
    </div>

    <div class="paralax">
    </div>

    <div class="container img_float">
        <p>
            A Infortread também oferece capacitação completa para a utilização de seus sistemas, além de suporte técnico eficiente para todos os serviços fornecidos. Seu objetivo é oferecer soluções rápidas e eficazes para os desafios enfrentados pelos clientes.
        </p>
        <figure>
            <img src={{ asset('images/data-center.png') }} alt="Data Center">
            <figcaption>Datacenter Infortread - Manaus-AM</figcaption>
        </figure>
        <p>
            Um dos grandes diferenciais da empresa é o suporte direto e personalizado. Essa comunicação ágil permite que eventuais problemas sejam resolvidos com rapidez e eficiência, garantindo a satisfação dos clientes.
        </p>
    </div>

    <div class="mvv missao">
        <h2>Missão</h2>
        <p>
            Proporcionar a melhor experiência aos clientes, atendendo de forma completa às necessidades de internet e redes nas cidades do interior do Estado do Amazonas, promovendo o desenvolvimento social e tecnológico das comunidades atendidas.
        </p>
    </div>
    <div class="mvv visao">
        <h2>Visão</h2>
        <p>
            Proporcionar a melhor experiência aos clientes, atendendo de forma completa às necessidades de internet e redes nas cidades do interior do Estado do Amazonas, promovendo o desenvolvimento social e tecnológico das comunidades atendidas.
        </p>
    </div>
    <div class="mvv valores">
        <div>
            <h2>VALORES</h2>
            <p>
                Satisfação completa do cliente;  com o crescimento da  organização; autonomia com responsabilidade e integridade; agilidade na  tomada de decisões simplicidade e qualidade; valorização e respeito  pelas relações.
            </p>
        </div>
        <img src={{ asset('images/valores-img.jpeg') }} alt="Valores" style="margin-bottom: 10px">
    </div>
</section>

<section class="locais_section">
    {{--
    <div class="mapa">
        <img src={{ asset('images/mapa.png') }} alt="Amazonas" >
    </div> --}}
    <h1>Locais de atuação</h1>
    <div class="mapa-container">
    <!-- SVG com linhas pontilhadas -->
        <svg class="linhas" width="100%" height="100%">

            <!-- Coari -->
            <path d="M 20 20 V 180 H 170" stroke="#666" stroke-dasharray="1.5,2" fill="none" stroke-width="1" />
            <circle cx="170" cy="180" r="4" fill="#E36600" />
            <circle cx="20" cy="20" r="4" fill="#E36600" />

            <!-- Tefé -->
            <path d="M 340 50 V 200 H 180" stroke="#666" stroke-dasharray="1.5,2" fill="none" stroke-width="1" />
            <circle cx="340" cy="50" r="4" fill="#E36600" />
            <circle cx="180" cy="200" r="4" fill="#E36600" />

            <!-- Canutama -->
            <path d="M 150 210 H 10 V 380" stroke="#666" stroke-dasharray="1.5,2" fill="none" stroke-width="1" />
            <circle cx="150" cy="210" r="4" fill="#E36600" />
            <circle cx="10" cy="380" r="4" fill="#E36600" />

            <!-- Beruri -->
            <path d="M 200 220 H 330 V 350" stroke="#666" stroke-dasharray="1.5,2" fill="none" stroke-width="1" />
            <circle cx="200" cy="220" r="4" fill="#E36600" />
            <circle cx="330" cy="350" r="4" fill="#E36600" />
        </svg>
        <div class="text_map" style="left: 30px; top: 18px;">
            <span>Coari</span> - dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
        </div>
        <div class="text_map" style="text-align:right; top: 47px; right:20px">
            <span>Tefé</span> - dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
        </div>

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
