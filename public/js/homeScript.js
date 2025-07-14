//{{-- Script do Contato de Whatsapp --}}

    function abrirWhatsapp(){
        const mensagem = encodeURIComponent("Gostaria de falar com um atendente");
        const telefone = "92984126978";
        const url = `https://wa.me/${telefone}?text=${mensagem}`;
        window.location.href = url;
    }


//{{-- Script do smooth screen --}}

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


//{{-- Script do carrossel --}}

    document.addEventListener("DOMContentLoaded", function () {
        const carrossel = document.querySelector('.depoimento_carrossel');
        const totalSlides = document.querySelectorAll('.move_carrossel').length;
        let currentSlide = 0;

        function updateSlide() {
            const newTranslateX = -(currentSlide * 100);
            carrossel.style.transform = `translateX(${newTranslateX}%)`;
        }

        function moveLeft() {
            currentSlide = currentSlide > 0 ? currentSlide - 1 : totalSlides - 1;
            updateSlide();
        }

        function moveRight() {
            currentSlide = currentSlide < totalSlides - 1 ? currentSlide + 1 : 0;
            updateSlide();
        }

        document.getElementById('left_btn').addEventListener('click', moveLeft);
        document.getElementById('right_btn').addEventListener('click', moveRight);

        // Auto slide (opcional)
        setInterval(moveRight, 5000);
    });



//{{-- Mostrar Menu --}}

    function mostramenu(){
        document.querySelector(".menu_top").classList.toggle("active");
    }


//{{-- Sharing page --}}

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

//{{-- Script da confirmação de mensagem --}}

    setTimeout(function(){
        var successMsg = document.querySelector('.successMsg');
        if(successMsg){
            successMsg.style.display = 'none';
        }
    }, 3000);


//{{-- Anima números --}}

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



//{{-- Script para animação do mvv e cards --}}

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

