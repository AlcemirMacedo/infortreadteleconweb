@extends('mainLayout')

@section('content')

{{-- Banner e Menu --}}
{{-- <section id="home" class="banner">
    <div class="fade-bg">
        <header class="bots_fixed">
            <div class="menu-toggle" onclick="mostramenu()">
                <div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>



            <div class="share" style="display: none" onclick="compartilharPagina()">
                <div>
                    <img src="{{ asset('images/share-bgt.png') }}" height="20" width="20" alt="Compartilhar">
                </div>
            </div>
        </header>

        <div class="banner-content">
            @if(session('success'))
                <div class="successMsg" style="position: fixed; bottom: 15px; z-index:5000; padding: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 20px;">
                    {{ session('success') }}
                </div>
            @endif
            <img src="{{ asset('images/logo-w.png') }}" alt="Infortread Telecom">
            <h2>A melhor solução para sua <br/>empresa ou instituição</h2>


            <div class="area-cta">
                <div class="btn-cta" onclick="abrirWhatsapp()">
                    <p>Entrar em contato</p>
                    <img src="{{ asset('images/wsppIco.png') }}" alt="Contato Whatsapp">
                </div>
            </div>
        </div>
    </div>
</section> --}}
<x-banner>
    a melhor solução para <br/>sua empresa ou instituição
</x-banner>

{{-- Sessão Sobre a Infortread --}}
<section id="sobre" class="about_section">

    <div class="about_p1">

        <div style="flex:1">
            <h1 style="margin-top: 30px; margin-bottom:15px">Sobre a Infortread</h1>
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
            <p>Sistema desenvolvido para o processamento da folha de pagamento dos servidores públicos, com integração direta ao E-Contas (TCE) e ao E-Social (Receita Federal). Automatiza rotinas, garante conformidade legal e simplifica a prestação de contas para prefeituras, câmaras e fundos públicos.</p>
            <a href="/stfolha"><button>Contratar</button></a>
        </div>

        <div class="sistems_card">
            <h1>iContracheque Online</h1>
            <h4>Consulta Online de Contracheques</h4>
            <p>Ferramenta da INFORTREAD que permite o acesso digital aos contracheques dos servidores. Integrado ao banco de dados do STFolha, proporciona autonomia aos colaboradores e reduz a demanda sobre o setor de RH, otimizando tempo e recursos.</p>
            <button>Contratar</button>
        </div>

        <div class="sistems_card">
            <h1>SAM - Sistema de Arrecadação Municipal</h1>
            <h4>Gestão Tributária e Emissão de DUAMs</h4>
            <p>Solução completa para arrecadação de tributos municipais, como alvarás, construção, notas avulsas, IPTU, ITBI e água. Permite a geração de DUAMs com pagamento via Pix, oferecendo agilidade tanto para o contribuinte quanto para a gestão pública.</p>
            <button>Contratar</button>
        </div>

        <div class="sistems_card">
            <h1>iE-Notas</h1>
            <h4>Emissão de Notas Fiscais Eletrônicas</h4>
            <p>Sistema da INFORTREAD para emissão e gerenciamento de notas fiscais eletrônicas, com geração e validação de arquivos XML. Facilita o controle fiscal e garante conformidade com os padrões exigidos por órgãos reguladores.</p>
            <button>Contratar</button>
        </div>

        <div class="sistems_card">
            <h1>iLicitação</h1>
            <h4>Gestão de Licitações Públicas com Integração ao E-Contas</h4>
            <p>Solução voltada ao gerenciamento de processos licitatórios, com funcionalidades que organizam e registram todas as etapas das licitações. Já integrada ao E-Contas, atende às exigências atuais dos tribunais de contas de forma prática e segura.</p>
            <button>Contratar</button>
        </div>

        <div class="sistems_card">
            <h1>iCE - Compras e Estoque</h1>
            <h4>Controle de Almoxarifado e Compras Públicas</h4>
            <p>Sistema completo para emissão de requisições, ordens de compra, entradas e saídas de materiais. Permite gestão por setor e garante maior organização e rastreabilidade dos recursos físicos da administração pública.</p>
            <button>Contratar</button>
        </div>

        <div class="sistems_card">
            <h1>iPatrimonial</h1>
            <h4>Gestão e Controle de Patrimônio Público</h4>
            <p>Sistema que realiza o registro e controle dos bens patrimoniais de uma entidade, abrangendo desde móveis até imóveis. Permite auditorias eficazes, evita perdas e oferece total visibilidade sobre o patrimônio público.</p>
            <button>Contratar</button>
        </div>

        <div class="sistems_card">
            <h1>iProtocolo</h1>
            <h4>Protocolo e Encaminhamento de Documentos Oficiais</h4>
            <p>Sistema destinado ao registro e acompanhamento de ofícios e documentos enviados entre setores. Garante rastreabilidade, histórico de tramitações e organização eficiente dos processos administrativos internos.</p>
            <button>Contratar</button>
        </div>

        <div class="sistems_card">
            <h1>Consultoria em E-Social para Entidades Públicas</h1>
            <h4>Apoio Técnico para Conformidade Trabalhista</h4>
            <p>Serviço de consultoria especializada para prefeituras, câmaras e órgãos públicos que necessitam atender às exigências do E-Social. Auxiliamos na adequação de processos e fluxos de dados, garantindo conformidade legal e evitando sanções.</p>
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

    <div class="carrossel_container">
        <div class="depoimento_carrossel">
            <!-- Slide 1 -->
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

            <!-- Slide 2 -->
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

            <!-- Slide 3 -->
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

            <!-- Slide 4 -->
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
    </div>
</section>


{{-- Nomeei o fomrulário e o rodapé como Rodapé --}}
<x-rodape>
</x-rodape>



@endsection
