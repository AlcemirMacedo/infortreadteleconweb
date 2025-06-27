<style>
    .bot_venda_style{
        width: 100%;
        border-radius: 10px;
        padding-top: 20px;
        padding-bottom: 20px;
        background-color: var(--green-contact);
        margin-bottom: 50px;
        text-align: center;
        cursor: pointer;
        color: var(--white);
        transition: all 0.3s ease-in-out;
    }
</style>

<div class="bot_venda_style" onclick="abrirWhatsapp()">
    {{ $slot }}
</div>

<script>
    function abrirWhatsapp(){
        const mensagem = encodeURIComponent("Gostaria de falar com um atendente");
        const telefone ="92984126978";
        const url = `https://wa.me/${telefone}?text=${mensagem}`;
        window.location.href = url;
    }
</script>
