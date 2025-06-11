{{-- Formulário de Contato --}}
<section id="contato" class="formulario_section">


    <h1 style="color: white; margin-top:23px; margin-bottom:14px">Entre em contato</h1>

    <div class="form_area">
        <form action="{{ route('contato.enviar') }}" method="POST">
            @csrf
            <div>
                <label for="nome">Nome / Empresa / Instituição</label>
                <input name="nome" type="text" required>
            </div>

            <div>
                <label for="email">E-mail</label>
                <input name="email" type="email" required>
            </div>

            <div>
                <label for="contato">Contato Whatsapp</label>
                <input name="contato" type="tel" required>
            </div>

            <div>
                <label for="mensagem">Mensagem</label>
                <textarea name="mensagem" required name="texto" id="mensagem" rows="5" style="padding-top: 15px; word-wrap:break-word; overflow-wrap:break-word"></textarea>
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
            <li>Início</li>
            <li>Sobre a Infortread</li>
            <li>Nossos Serviços</li>
            <li>Onde Atuamos</li>
            <li>Contatos</li>
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
