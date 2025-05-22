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
                    <img src="{{ asset('images/share-bgt.png') }}" height="20" width="20" alt="Compartilhar">
                </div>
            </div>
        </header>
        {{-- Logo e frase inicial --}}
        <div class="banner-content">
            <img src="{{ asset('images/logo-w.png') }}" alt="Infortread Telecom">
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
        <h1 style="margin-top: 10px">Sobre a Infortread</h1>
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
            <img src="{{ asset('images/data-center.png') }}" alt="Data Center">
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
        <img src="{{ asset('images/valores-img.jpeg') }}" alt="Valores" style="margin-bottom: 10px">
    </div>
</section>

{{-- Sessão de Sistemas e serviços --}}
<section class="services_section">
    <img src="{{ asset('images/system_infortread_services.png') }}" alt="Sistemas">
    <h1 style="margin-bottom: 10px">Nossos Sistemas</h1>

    <div class="sistems_card">
        <h1>E-notas</h1>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem  accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt  explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut  odit aut fugit<span>...Saiba mais</span></p>
        <button>Contratar</button>
    </div>

    <div class="sistems_card">
        <h1>E-social</h1>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem  accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt  explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut  odit aut fugit<span>...Saiba mais</span></p>
        <button>Contratar</button>
    </div>

    <div class="sistems_card">
        <h1>E-contas</h1>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem  accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt  explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut  odit aut fugit<span>...Saiba mais</span></p>
        <button>Contratar</button>
    </div>

    <div class="sistems_card">
        <h1>Contra-cheque Online</h1>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem  accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt  explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut  odit aut fugit<span>...Saiba mais</span></p>
        <button>Contratar</button>
    </div>

    <div class="sistems_card">
        <h1>Compras e Estoque</h1>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem  accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt  explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut  odit aut fugit<span>...Saiba mais</span></p>
        <button>Contratar</button>
    </div>

    <div class="sistems_card">
        <h1>Cidade Digital</h1>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem  accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt  explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut  odit aut fugit<span>...Saiba mais</span></p>
        <button>Contratar</button>
    </div>

    <div class="services">
        <img src="{{ asset('images/services_icon.png') }} "alt="Serviços">
        <h1 style="margin-bottom: 15px">Nossos Serviços</h1>

        <div class="service_card">
            <div>
                <img src="{{ asset('images/developer_icon.png') }}" alt="Desenvolvimento de Sistemas">
            </div>
            <div style="margin-left: 15px">
                <h3 style="line-height:21px">Desenvolvimento de Sistemas</h3>
                <p style="margin-top: -10px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco <span>...  Saiba mais</span></p>
            </div>
        </div>

        <div class="service_card">
            <div style="text-align: right; margin-right: 15px">
                <h3 style="line-height:21px">Internet Fibra Óptica</h3>
                <p style="margin-top: -10px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco <span>...  Saiba mais</span></p>
            </div>
            <div>
                <img src="{{ asset('images/fiber_net.png') }}" alt="Desenvolvimento de Sistemas">
            </div>
        </div>
    </div>

</section>

{{-- Sessão de Locais de Atuação --}}
<section class="locais_section">
    {{--
    <div class="mapa">
        <img src={{ asset('images/mapa.png') }} alt="Amazonas" >
    </div>
    --}}

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
            <path d="M 150 210 H 10 V 320" stroke="#666" stroke-dasharray="1.5,2" fill="none" stroke-width="1" />
            <circle cx="150" cy="210" r="4" fill="#E36600" />
            <circle cx="10" cy="320" r="4" fill="#E36600" />

            <!-- Beruri -->
            <path d="M 200 220 H 330 V 350" stroke="#666" stroke-dasharray="1.5,2" fill="none" stroke-width="1" />
            <circle cx="200" cy="220" r="4" fill="#E36600" />
            <circle cx="330" cy="360" r="4" fill="#E36600" />
        </svg>

        <div class="text_map" style="left: 30px; top: 18px;">
            <span>Coari</span> - dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
        </div>
        <div class="text_map" style="text-align:right; top: 47px; right:20px">
            <span>Tefé</span> - dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
        </div>
        <div class="text_map" style="text-align:left; top: 295px; left:20px">
            <span>Canutama</span> - dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
        </div>
        <div class="text_map" style="text-align:right; top: 335px; right:30px">
            <span>Beruri</span> - Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.
        </div>
    </div>

    <div class=" container locais_list">
        <h3>Outras Localidades onde a Infortread atua:</h3>
        <ul>
            <div style="display: flex; flex-wraP: wrap; font-size:9px; text-align: left">
                <li>Boa do Acre</li>
                <li>Anamã</li>
                <li>Tefé</li>
                <li>Borba</li>
                <li>Careiro</li>
                <li>Manacapuru</li>
                <li>Itacoatiara</li>
                <li>Borba</li>
                <li>Cacau Pireira</li>
                <li>Urucurituba</li>
                <li>Careiro Castanho</li>
                <li>Canutama</li>
            </div>
        </ul>
    </div>

</section>

{{-- Helpe Desk section --}}
<section class="help_section">

    <section class="numbers">
        <div>
            <pre>+100</pre>
            <p>Clientes em todo estado do Amazonas</p>
        </div>
        <div>
            <pre>+250</pre>
            <p>Sistemas Ativos em nuvens e desktop</p>
        </div>
    </section>

    <section class="help_desk">
        <h1 style="color: white; font-size:20px; margin-left: 18px; margin-top:18px">Helpe Desk Especializado</h1>
        <div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ullamco laboris nis....  Saiba mais</p>
            <button class="button_1" style="margin-left: 18px; margin-bottom: 18px">Pedir Suporte</button>
            </div>
            <div>
                <img src="{{ asset('images/help_desk_img.png') }}" alt="Help Desk">
            </div>
        </div>
    </section>

</section>

{{-- Depoimentos Section --}}
<section class="depoimentos_section">
    <div class="title_depoimentos">
        <h2>Depoimentos</h2>
    </div>

    <div class="arrows">
        <img id="left_btn" src="{{ asset('images/arrow_left.png') }}" alt="Anterior">
        <img id="right_btn" src="{{ asset('images/arrow_right.png') }}" alt="Próximo">
    </div>

    <div class="depoimento_carrossel">

        <div class="move_carrossel">
            <div class="cotes">
                <img src="{{ asset('images/left_cote.png') }}">
                <img src="{{ asset('images/right_cote.png') }}">
            </div>
            <div class="depoimentos_photo">
                <img src="{{ asset('images/avatar_depoiments.jpeg') }}" alt="Depoente">
            </div>
            <p>Lorem ipsum dolor sit amet<br><span>Humberto Kraven</span></p>
        </div>

        <div class="move_carrossel">
            <div class="cotes">
                <img src="{{ asset('images/left_cote.png') }}">
                <img src="{{ asset('images/right_cote.png') }}">
            </div>
            <div class="depoimentos_photo">
                <img src="{{ asset('images/avatar_fake.png') }}" alt="Depoente">
            </div>
            <p>Depoimento 2<br><span>Humberto Kraven</span></p>
        </div>

        <div class="move_carrossel">
            <div class="cotes">
                <img src="{{ asset('images/left_cote.png') }}">
                <img src="{{ asset('images/right_cote.png') }}">
            </div>
            <div class="depoimentos_photo">
                <img src="{{ asset('images/avatar_fake3.png') }}" alt="Depoente">
            </div>
            <p>Depoimento 3<br><span>Humberto Kraven</span></p>
        </div>

        <div class="move_carrossel">
            <div class="cotes">
                <img src="{{ asset('images/left_cote.png') }}">
                <img src="{{ asset('images/right_cote.png') }}">
            </div>
            <div class="depoimentos_photo">
                <img src="{{ asset('images/avatar_fake2.png') }}" alt="Depoente">
            </div>
            <p>Depoimento 4<br><span>Humberto Kraven</span></p>
        </div>

    </div>
</section>


{{-- Formulário de Contato --}}
<section class="formulario_section">
    <h1 style="color: white; margin-top:23px">Pedido de Orçamento</h1>
    <form action="">
        <label for="nome">Nome / Empresa / Instiruição</label>
        <input type="text">

        <label for="email">E-mail</label>
        <input type="email">

        <label for="nome">Contato Whatsapp</label>
        <input type="text">

        <label for="nome">Mensagem</label>
        <input type="text">
    </form>
</section>

<script>
    function abrirWhatsapp(){
        const mensagem = encodeURIComponent("Gostaria de falar com um atendente");
        const telefone = "92985565323";
        const url = `https://wa.me/${telefone}?text=${mensagem}`;
        window.location.href = url;
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const carrossel = document.querySelector('.depoimento_carrossel');
        const totalSlides = document.querySelectorAll('.move_carrossel').length;
        let currentSlide = 0;

        function updateSlide() {
            const newLeft = -(currentSlide * 100);
            carrossel.style.left = `${newLeft}vw`;
        }

        function moveLeft() {
            if (currentSlide > 0) {
                currentSlide--;
            } else {
                currentSlide = totalSlides - 1; // vai para o último slide se estiver no primeiro
            }
            updateSlide();
        }

        function moveRight() {
            if (currentSlide < totalSlides - 1) {
                currentSlide++;
            } else {
                currentSlide = 0; // volta pro primeiro
            }
            updateSlide();
        }

        // Eventos dos botões
        document.getElementById('left_btn').addEventListener('click', moveLeft);
        document.getElementById('right_btn').addEventListener('click', moveRight);

        // Auto slide a cada 2 segundos
        setInterval(moveRight, 5000);
    });
</script>


