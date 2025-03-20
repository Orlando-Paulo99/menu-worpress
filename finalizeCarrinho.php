add_action('wp_footer', function() { ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const botaoWhatsApp = document.querySelector('.elementor-button-link');

            if (botaoWhatsApp) {
                botaoWhatsApp.addEventListener('click', function (event) {
                    event.preventDefault(); // Impede o link padrão

                    // Número do WhatsApp (adicione o DDD sem espaços ou caracteres especiais)
                    const numeroWhatsapp = "5522992590656";

                    // Captura o nome do produto na página
                    const nomeProduto = document.querySelector('.product_title')?.innerText.trim() || "Produto";

                    // Monta a mensagem
                    const mensagem = `Desejo finalizar essa compra: ${nomeProduto}`;

                    // Monta a URL do WhatsApp corretamente
                    const urlWhatsApp = `https://wa.me/${numeroWhatsapp}?text=${encodeURIComponent(mensagem)}`;

                    // Redireciona para o WhatsApp
                    window.location.href = urlWhatsApp;
                });
            }
        });
    </script>
<?php });
