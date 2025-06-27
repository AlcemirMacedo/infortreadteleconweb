{{-- Formulário de Contato --}}

{{-- Validation error --}}
@if ($errors->any())
    <div class="container">
        <div class="row">
            <div class="alert alert-danger alert-dismissible fade show text-center fixed-bottom" role="alert">
                Preencha todos os campos do formulário
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
            </div>

        </div>
    </div>
@endif

<section id="contato" class="formulario_section">

    <h1 style="color: white; margin-top:23px; margin-bottom:14px">Entre em contato</h1>

    <div class="form_area">
        <form action="{{ route('contato.enviar') }}" method="POST">
            @csrf

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="nome">Nome / Empresa / Instituição</label>
                    <input type="text" name="nome" class="form-control" value="{{ old('nome')}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="contato" class="form-control" value="{{ old('telefone') }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="mensagem">Telefone</label>
                    <textarea name="mensagem" id="mensagem" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div style="display: flex; text-align: center; width:100%; justify-content:space-between; grid-column: span 2;">
                <button type="submit" class="button_1"  style="margin-bottom: 20px">Enviar</button>
                <button type="reset" class="button_1">Limpar</button>
            </div>
        </form>
    </div>

</section>

<footer>
    <div class="footer-content">
        <div class="footer-links">
            <ul>
                <li><a href="/#home">Início</a></li>
                <li><a href="/#sobre">A Infortread</a></li>
                <li><a href="/#sistemas">Sistemas</a></li>
                <li><a href="/#services">Serviços</a></li>
                <li><a href="/#contato">Contatos</a></li>
            </ul>
        </div>
        <div class="footer-info">
            Rua Djalma Dutra, nº 44, N. Sra das Graças<br/>
            (92) 3303-8200 | (92) 3016-7542<br/>
            (92) 98189-8765 | (92) 99367-6238<br/>
            contato@infortread.com.br | infortread@infortread.com.br<br/>
            facebook.com/infortread<br/>
            infortread.com.br
        </div>
    </div>
    <div class="footer-bottom">
        Desenvolvido por Infortread Telecom
    </div>
</footer>
@if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const section = document.getElementById('contato');
            if (section) {
                section.scrollIntoView({ behavior: 'smooth' });
            }
        });
    </script>
@endif
