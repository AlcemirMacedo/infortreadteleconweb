<style type="text/css">
    .banner{
        position: relative;
        height: 500px;
        width: 100%;
        background: url('{{ $background ?? asset("images/computer-sistem-hand.jpeg") }}');
        background-position: center;
        background-size: cover;
        border-bottom: 5px solid var(--blue-2);
    }

    @media (max-width: 600px) {

        .banner{
            height: 365px;
        }

    }
</style>

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

            <h1>
                {{ $slot }}
            </h1>

            <div class="area-cta">
                <div class="btn-cta" onclick="abrirWhatsapp()">
                    <p>Entrar em contato</p>
                </div>
            </div>
        </div>
    </div>
</section>
