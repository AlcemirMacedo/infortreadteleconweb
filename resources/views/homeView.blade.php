@extends('mainLayout')

@section('content')

{{-- Banner e Menu --}}

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

    <div>
        <h1 class="title_main">Nossos Sistemas</h1>
    </div>

    <div class="cards_area">
        <div class="sistems_card">
            <h1>STFolha</h1>
            <h4>Folha de Pagamento para o Setor Público</h4>
            <p>Sistema desenvolvido para o processamento da folha de pagamento dos servidores públicos, com integração
                direta ao E-Contas (TCE) e ao E-Social (Receita Federal). Automatiza rotinas, garante conformidade legal
                e simplifica a prestação de contas para prefeituras, câmaras e fundos públicos.</p>
            <a href="/stfolha"><button>Contratar</button></a>
        </div>

        <div class="sistems_card">
            <h1>iContracheque Online</h1>
            <h4>Consulta Online de Contracheques</h4>
            <p>Ferramenta da INFORTREAD que permite o acesso digital aos contracheques dos servidores. Integrado ao
                banco de dados do STFolha, proporciona autonomia aos colaboradores e reduz a demanda sobre o setor de
                RH, otimizando tempo e recursos.</p>
            <a href="/cconline"><button>Contratar</button></a>
        </div>

        <div class="sistems_card">
            <h1>SAM - Sistema de Arrecadação Municipal</h1>
            <h4>Gestão Tributária e Emissão de DUAMs</h4>
            <p>Solução completa para arrecadação de tributos municipais, como alvarás, construção, notas avulsas, IPTU,
                ITBI e água. Permite a geração de DUAMs com pagamento via Pix, oferecendo agilidade tanto para o
                contribuinte quanto para a gestão pública.</p>
            <a href="/sam"><button>Contratar</button></a>
        </div>

        <div class="sistems_card">
            <h1>iE-Notas</h1>
            <h4>Emissão de Notas Fiscais Eletrônicas</h4>
            <p>Sistema da INFORTREAD para emissão e gerenciamento de notas fiscais eletrônicas, com geração e validação
                de arquivos XML. Facilita o controle fiscal e garante conformidade com os padrões exigidos por órgãos
                reguladores.</p>
            <a href="/ienotas"><button>Contratar</button></a>
        </div>

        <div class="sistems_card">
            <h1>iLicitação</h1>
            <h4>Gestão de Licitações Públicas com Integração ao E-Contas</h4>
            <p>Solução voltada ao gerenciamento de processos licitatórios, com funcionalidades que organizam e registram
                todas as etapas das licitações. Já integrada ao E-Contas, atende às exigências atuais dos tribunais de
                contas de forma prática e segura.</p>
            <a href="/ilicitacao"><button>Contratar</button></a>
        </div>

        <div class="sistems_card">
            <h1>iCE - Compras e Estoque</h1>
            <h4>Controle de Almoxarifado e Compras Públicas</h4>
            <p>Sistema completo para emissão de requisições, ordens de compra, entradas e saídas de materiais. Permite
                gestão por setor e garante maior organização e rastreabilidade dos recursos físicos da administração
                pública.</p>
            <a href="/ice"><button>Contratar</button></a>
        </div>

        <div class="sistems_card">
            <h1>iPatrimonial</h1>
            <h4>Gestão e Controle de Patrimônio Público</h4>
            <p>Sistema que realiza o registro e controle dos bens patrimoniais de uma entidade, abrangendo desde móveis
                até imóveis. Permite auditorias eficazes, evita perdas e oferece total visibilidade sobre o patrimônio
                público.</p>
            <a href="/ipatrimonial"><button>Contratar</button></a>
        </div>

        <div class="sistems_card">
            <h1>iProtocolo</h1>
            <h4>Protocolo e Encaminhamento de Documentos Oficiais</h4>
            <p>Sistema destinado ao registro e acompanhamento de ofícios e documentos enviados entre setores. Garante
                rastreabilidade, histórico de tramitações e organização eficiente dos processos administrativos
                internos.</p>
            <a href="/iprotocolo"><button>Contratar</button></a>
        </div>

        {{-- <div class="sistems_card last_card">
            <img src="{{ asset('images/torre-internet.jpg') }}" alt="">
        </div> --}}

    </div>

</section>

<x-sistemas-component>
</x-sistemas-component>




{{-- Helpe Desk section --}}
<section class="help_section">

    <section class="numbers">
        <div>
            <pre data-target="800">+0</pre>
            <p>Clientes de internet banda larga ativos</p>
        </div>
        <div>
            <pre data-target="250">+0</pre>
            <p>Usuários de Sistemas em prefeituras</p>
        </div>

    </section>

    <section class="help_desk">
        <h1>Helpe Desk Especializado</h1>

        <div class="help_content">
            <div>
                <p>Na INFORTREAD, oferecemos um suporte técnico ágil e humanizado para todos os nossos sistemas. Por meio do “Meu James”, o atendimento é iniciado de forma imediata via WhatsApp, com direcionamento direto para nossa equipe de especialistas.<br><br>Sempre que necessário, realizamos acesso remoto via AnyDesk para correções, orientações ou manutenções nos sistemas. Todos os atendimentos são registrados com segurança no sistema IXC, garantindo rastreabilidade e histórico completo.</p>
                <x-bot-venda>
                    Pedir Suporte
                </x-bot-venda>
                {{-- <button class="button_1">Pedir Suporte</button> --}}
            </div>
            <div class="help_img">
                <img src="{{ asset('images/help-desk-2.png') }}" alt="Help Desk">
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
