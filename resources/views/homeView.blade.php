@extends('mainLayout')

@section('content')

{{-- Banner e Menu --}}
{{-- menu top --}}


<div class="menu_top">
    <div class="logo">
        <a href="/#home"><img src="{{ asset('img/logo.png') }}" alt="Infortread Telecom"></a>
    </div>
    <nav>
        <ul>
            <li><a href="/#home">Início</a></li>
            <li><a href="/#sobre">A Infortread</a></li>
            <li><a href="/#sistemas">Sistemas</a></li>
            <li><a href="/#services">Serviços</a></li>
            <li><a href="/#contato">Contatos</a></li>
        </ul>
    </nav>
    <div style="justify-content:center">
        <div class="login">
            Acesso
        </div>
        {{-- <div class="cadastrar">
            Cadastrar
        </div> --}}
    </div>

</div>


<section id="home" class="banner">

    <div class="fade-bg">
        <header class="bots_fixed">
            <div class="menu-toggle" onclick="mostramenu()">
                <div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            {{-- Fim do menu Toggle --}}


            <div class="share" style="display: none" onclick="compartilharPagina()">
                <div>
                    <img src="{{ asset('images/share-bgt.png') }}" height="20" width="20" alt="Compartilhar">
                </div>
            </div>
        </header>
        {{-- Logo e frase inicial --}}
        <div class="banner-content">
            @if(session('success'))
                <div class="successMsg" style="position: fixed; bottom: 15px; z-index:5000; padding: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 20px;">
                    {{ session('success') }}
                </div>
            @endif
            <img src="{{ asset('images/logo-w.png') }}" alt="Infortread Telecom">
            <h2>A melhor solução para sua <br/>empresa ou instituição</h2>

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
<section id="sobre" class="about_section">

    <div class="about_p1">

        <div style="flex:1">
            <h1 style="margin-top: 20px; margin-bottom:15px">Sobre a Infortread</h1>
            <p>
                Fundada em 2009, a Infortread atua no setor de tecnologia da informação, com especialização no desenvolvimento de sistemas e na distribuição de internet, tendo como principal foco os municípios do Estado do Amazonas.
            </p>
            <p>
                Atualmente, é reconhecida como uma das maiores empresas do Estado em suas áreas de atuação, com um número crescente de clientes e serviços prestados.        </p>
            <p>
                Sua infraestrutura é moderna e bem organizada, localizada na cidade de Manaus, onde são armazenados e processados todos os serviços oferecidos. A empresa conta com uma equipe comprometida, que trabalha diariamente para entregar um serviço de alta qualidade.
            </p>
            <p>
                A Infortread também oferece capacitação completa para a utilização de seus sistemas, além de suporte técnico eficiente para todos os serviços fornecidos. Seu objetivo é oferecer soluções rápidas e eficazes para os desafios enfrentados pelos clientes.
            </p>
        </div>
        <div class="paralax">
        </div>

    </div>



    <div class="img_float">

        {{-- <figure>
            <img src="{{ asset('images/data-center.png') }}" alt="Data Center">
            <figcaption>Datacenter Infortread - Manaus-AM</figcaption>
        </figure> --}}
        <p>
            Um dos grandes diferenciais da empresa é o suporte direto e personalizado. Essa comunicação ágil permite que eventuais problemas sejam resolvidos com rapidez e eficiência, garantindo a satisfação dos clientes.
        </p>
    </div>

    <div class="mvv_container">
        <div class="mvv missao">
            <h2>Missão</h2>
            <p>
                Proporcionar a melhor experiência aos clientes, atendendo de forma completa às necessidades de internet e redes nas cidades do interior do Estado do Amazonas, promovendo o desenvolvimento social e tecnológico das comunidades atendidas.
            </p>
            <div class="circ1"></div>
        </div>
        <div class="mvv visao" style="margin-bottom: 0">
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
                <div class="circ2"></div>
            </div>
            <img src="{{ asset('images/valores-img.jpeg') }}" alt="Valores" style="margin-bottom: 10px">
        </div>
    </div>


</section>


{{-- Sessão de Sistemas e serviços --}}
<section id="sistemas" class="services_section">
    <img src="{{ asset('images/system_infortread_services.png') }}" alt="Sistemas">
    <h1 class="title_main">Nossos Sistemas</h1>

    <div class="cards_area">
        <div class="sistems_card">
            <h1>STFolha</h1>
            <h4>Folha de Pagamento para o Setor Público</h4>
            <p>Sistema desenvolvido para o processamento da folha de pagamento dos servidores públicos, com integração direta ao E-Contas (TCE) e ao E-Social (Receita Federal). Automatiza rotinas, garante conformidade legal e simplifica a prestação de contas para prefeituras, câmaras fundos públicos.</p>
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

    </div>

    <div id="services" class="services">
        <img src="{{ asset('images/services_icon.png') }} "alt="Serviços">
        <h1 class="title_main">Nossos Serviços</h1>

        <div class="service_card_area">
            <div class="service_card">
                <div>
                    <img src="{{ asset('images/developer_icon.png') }}" alt="Desenvolvimento de Sistemas">
                </div>
                <div>
                    <h3>Desenvolvimento de Sisemas</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco <span>...  <a href="#">Saiba mais</a></span></p>
                </div>
            </div>

            <div class="service_card second_card">
                <div>
                    <img src="{{ asset('images/fiber_net.png') }}" alt="Desenvolvimento de Sistemas">
                </div>
                <div>
                    <h3>Internet Fibra Óptica</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco <span>...  <a href="#">Saiba mais</a></span></p>
                </div>

            </div>
        </div>
    </div>

</section>



{{-- Sessão de Locais de Atuação --}}
<section class="locais_section">

    <h1>Locais de atuação</h1>

    <div class="mapa_area">
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

        <div class="locais_list" style="height: 100%">
            <h3>Outras Localidades onde a Infortread atua:</h3>
            <ul>
                <div>
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

    </div>

</section>



{{-- Helpe Desk section --}}
<section class="help_section">

    <section class="numbers">
        <div>
            <pre data-target="250">+0</pre>
            <p>Usuários de Sistemas em prefeituras</p>
        </div>
        <div>
            <pre data-target="800">+0</pre>
            <p>Clientes de internet banda larga ativos</p>
        </div>
    </section>

    <section class="help_desk">
        <h1>Helpe Desk Especializado</h1>

        <div class="help_content">
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ullamco laboris nis.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ullamco laboris nis....  Saiba mais</p>
                <button class="button_1">Pedir Suporte</button>
            </div>
            <div class="help_img">
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
<section id="contato" class="formulario_section">


        <h1 style="color: white; margin-top:23px; margin-bottom:14px">Pedido de Orçamento</h1>

    <div>
        <form action="{{ route('contato.enviar') }}" method="POST">
            @csrf
            <label for="nome">Nome / Empresa / Instituição</label>
            <input name="nome" type="text" required>

            <label for="email">E-mail</label>
            <input name="email" type="email" required>

            <label for="contato">Contato Whatsapp</label>
            <input name="contato" type="tel" required>

            <label for="mensagem">Mensagem</label>
            <textarea name="mensagem" required name="texto" id="mensagem" rows="10" style="padding-top: 15px; word-wrap:break-word; overflow-wrap:break-word"></textarea>

            <div style="display: flex; text-align: center; width:100%; justify-content:space-between">
                <button type="submit" class="button_1"  style="margin-bottom: 20px">Enviar</button>
                <button type="reset" class="button_1">Limpar</button>
            </div>
        </form>
        <div class="form_logo">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
    </div>


</section>

<footer>
    <div>
        <div>
            <ul style="margin-top: 0; margin-left:18px">
                <li>Inicio</li>
                <li>Sobre a Infortread</li>
                <li>Nossos Serviços</li>
                <li>Onde Atuamos</li>
                <li>Contatos</li>
            </ul>
        </div>
        <div style="text-align: right; margin-right: 18px">
            Rua Djalma Dutra, nº 44, N. Sra das Graças<br/>
            (92) 3303-8200 | (92) 3016-7542<br/>
            (92) 98189-8765 | (92) 99367-6238<br/>
            contato@infortread.com.br | infortread@infortread.com.br<br/>
            facebook.com/infortread<br/>
            infortread.com.br<br/>
        </div>
    </div>
    <div style="text-align: center; justify-content: center">Desenvolvido por Infortread Telecom</div>
</footer>


{{-- Script do Contato de Whatsapp --}}
<script>
    function abrirWhatsapp(){
        const mensagem = encodeURIComponent("Gostaria de falar com um atendente");
        const telefone = "92985565323";
        const url = `https://wa.me/${telefone}?text=${mensagem}`;
        window.location.href = url;
    }
</script>

{{-- Script do smooth screen --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener("click", function (e) {
                const target = document.querySelector(this.getAttribute("href"));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });
                }
            });
        });
    });
</script>

{{-- Script do carrossel --}}
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

{{-- Mostrar Menu --}}
<script>
    function mostramenu(){
        document.querySelector(".menu_top").classList.toggle("active");
    }
</script>

{{-- Sharing page --}}
<script>
    function compartilharPagina() {
        if (navigator.share) {
            navigator.share({
                title: document.title,
                url: window.location.href
            })
            .then(() => console.log("Página compartilhada com sucesso!"))
            .catch((error) => console.error("Erro ao compartilhar:", error));
        } else {
            alert("Seu navegador não suporta o compartilhamento.");
        }
    }
</script>

{{-- Script da confirmação de mensagem --}}
<script>
    setTimeout(function(){
        var successMsg = document.querySelector('.successMsg');
        if(successMsg){
            successMsg.style.display = 'none';
        }
    }, 3000);
</script>

{{-- Anima números --}}
<script>
    function animarNumero(preElement) {
        if (preElement.dataset.animado === "true") return;
        preElement.dataset.animado = "true";
        const target = +preElement.getAttribute('data-target');
        let valorAtual = 0;
        const duracao = 2500; // 1.5 segundos
        const incremento = Math.ceil(target / (duracao / 40)); // passo baseado no tempo

        function atualizar() {
            valorAtual += incremento;
            if (valorAtual >= target) {
            preElement.textContent = `+${target}`;
            } else {
            preElement.textContent = `+${valorAtual}`;
            requestAnimationFrame(atualizar);
        }
    }

    preElement.textContent = '+0';
    atualizar();
    }

    // Observer para animar sempre que a seção estiver visível
    const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
        const numeros = entry.target.querySelectorAll('pre[data-target]');
        numeros.forEach(animarNumero);
        }
    });
    }, { threshold: 0.5 });

    const numbersSection = document.querySelector('.numbers');
    observer.observe(numbersSection);

</script>

{{-- Script para animação do mvv e cards --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Seleciona os dois tipos de elementos
        const mvvParagraphs = document.querySelectorAll('.mvv p');
        const systemCards = document.querySelectorAll('.sistems_card');

        const observerOptions = {
            threshold: 0.2 // tanto para parágrafos quanto para os cards
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                } else {
                    entry.target.classList.remove('visible');
                }
            });
        }, observerOptions);

        // Observa todos os elementos desejados
        mvvParagraphs.forEach(el => observer.observe(el));
        systemCards.forEach(el => observer.observe(el));
    });
</script>




@endsection
