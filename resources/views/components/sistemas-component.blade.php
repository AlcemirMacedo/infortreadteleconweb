<div id="services" class="services">
    {{-- <img src="{{ asset('images/services_icon.png') }} "alt="Serviços"> --}}


    <div class="service_card_area"">
        <div class="service_card second_card">
            <h1 class="title_main">Internet Fibra Óptica</h1>
            <hr>
            <div class="title">
                <h2>Internet de Fibra óptica a partir de <span>R$ 89,90</span></h2>
            </div>
            <div class="area-content">
                <div class="content-text">
                    <span>10<br>MEGA</span>
                    <p>Plano Básico</p>
                </div>
                <div class="separador"><span> >> </span></div>
                <div class="content-text">
                    <span>100<br>MEGA</span>
                    <p>Plano Padrão</p>
                </div>
                <div class="separador"><span> >> </span></div>
                <div class="content-text">
                    <span>200<br>MEGA</span>
                    <p>Plano Rápido</p>
                </div>
                <div class="separador"><span> >> </span></div>
                <div class="content-text">
                    <span>300<br>MEGA</span>
                    <p>Plano Ultra</p>
                </div>
            </div>
        </div>

        {{-- Sessão de Locais de Atuação --}}
        <section class="locais_section">

            <h1>Internet disponível nos municípios:</h1>

            <div class="container_mapa">
                <div class="mapa_area">
                    <div class="mapa-container">
                        <!-- SVG com linhas pontilhadas -->
                        <svg class="linhas" width="100%" height="100%">

                            <!-- Manaquiri -->
                            <path d="M 20 60 V 180 H 170" stroke="#666" stroke-dasharray="1.5,2" fill="none"
                                stroke-width="1" />
                            <circle cx="170" cy="180" r="4" fill="#E36600" />
                            <circle cx="20" cy="60" r="4" fill="#E36600" />

                            <!-- Careiro Várteza -->
                            <path d="M 340 80 V 200 H 180" stroke="#666" stroke-dasharray="1.5,2" fill="none"
                                stroke-width="1" />
                            <circle cx="340" cy="80" r="4" fill="#E36600" />
                            <circle cx="180" cy="200" r="4" fill="#E36600" />

                            <!-- Careiro Castanho -->
                            <path d="M 150 210 H 10 V 340" stroke="#666" stroke-dasharray="1.5,2" fill="none"
                                stroke-width="1" />
                            <circle cx="150" cy="210" r="4" fill="#E36600" />
                            <circle cx="10" cy="340" r="4" fill="#E36600" />

                            <!-- Urucurituba -->
                            <path d="M 200 220 H 330 V 340" stroke="#666" stroke-dasharray="1.5,2" fill="none"
                                stroke-width="1" />
                            <circle cx="200" cy="220" r="4" fill="#E36600" />
                            <circle cx="330" cy="340" r="4" fill="#E36600" />
                        </svg>

                        <div class="text_map" style="left: 30px; top: 50px;">
                            <span>Manaquiri</span>
                        </div>

                        <div class="text_map" style="text-align:right; top: 70px; right:20px">
                            <span>Careiro Várteza</span>
                        </div>

                        <div class="text_map" style="text-align:left; top: 330px; left:20px">
                            <span>Careiro Castanho</span>
                        </div>

                        <div class="text_map" style="text-align:right; top: 330px; right:30px">
                            <span>Urucurituba</span>
                        </div>
                    </div>
                </div>

                <div class="text_mapa">
                    <p>
                        Hoje levamos internet banda larga para várias cidades do interior do Amazonas, tornando possível
                        o acesso à informação, à educação, à saúde digital e a novas oportunidades de desenvolvimento
                        para quem vive em comunidades isoladas. A conexão faz a diferença: transforma histórias,
                        aproxima pessoas e permite que, mesmo a muitos quilômetros dos grandes centros, todos estejam
                        ligados ao mundo.<br><br>
                        Atualmente, já atendemos Manaquiri, Careiro Castanho, Careiro da Várzea e Urucurituba — e vem
                        mais por aí! Em breve, estaremos também em Autazes e em outras regiões estratégicas, sempre com
                        o propósito de diminuir a desigualdade digital na Amazônia e incentivar a inclusão tecnológica
                        de forma sustentável e contínua.
                    </p>
                </div>
            </div>

        </section>

        <div class="service_card dev-sis">
            <h3>Desenvolvimento de Sistemas</h3>
            <div>
                <p>Na Infortread Telecom, desenvolvemos sistemas personalizados - tanto desktop quanto online -
                    utilizando tecnologia de ponta e as melhores práticas do mercado.<br>
                    <br>
                    Contamos com uma equipe dedicada de programadores e designers que trabalha em conjunto para criar
                    soluções funcionais, modernas e com interfaces intuitivas, sempre alinhadas às necessidades do seu
                    negócio.
                    <br>
                    <br>
                    Seja para automatizar processos, otimizar operações ou criar sistemas sob medida, oferecemos
                    soluções eficientes, seguras e escaláveis que acompanham o crescimento da sua empresa.
                </p>

                <img src="{{ asset('images/dev-sys.png') }}" alt="Devensolvimento de Sistemas">
            </div>

        </div>


        <div class="service_card dev-sis consultoria">
            <h3>Consultoria em E-Social para Entidades Públicas</h3>
            <div>
                <p><span>Apoio Técnico para Conformidade Trabalhista</span><br><br> Serviço de consultoria especializada para prefeituras, câmaras e órgãos públicos que necessitam atender às exigências do E-Social. Auxiliamos na adequação de processos e fluxos de dados, garantindo conformidade legal e evitando sanções.
                    
                </p>

                <img src="{{ asset('images/esocial-croped.jpeg') }}" alt="Devensolvimento de Sistemas">
            </div>

        </div>


    </div>
</div>
