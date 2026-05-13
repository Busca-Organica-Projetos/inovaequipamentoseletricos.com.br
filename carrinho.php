<?php
$h1          = "Carrinho";
$title       = "Carrinho";
$description = "Veja os itens adicionados ao seu carrinho e finalize seu pedido.";
$keywords    = "carrinho, inova equipamentos elétricos";

include "includes/_configuracoes.php";
$borg->cssCompress(array(
    "paginas/carrinho"
));
?>
</head>

<body>
    <?php include "includes/_header.php"; ?>

    <main class="main-content">

        <section id="banner">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-box">
                            <h1>CARRINHO</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="carrinho">
            <div class="container">

                <!-- Carrinho vazio -->
                <div class="carrinho-vazio" id="carrinhoVazio" style="display:none;">
                    <div class="vazio-icone">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h2>Seu carrinho está vazio</h2>
                    <p>Adicione produtos à sua sacola para continuar.</p>
                    <a href="<?= $url ?>loja" class="btn-voltar-loja">Ir para a Loja</a>
                </div>

                <!-- Carrinho com itens -->
                <div class="carrinho-conteudo" id="carrinhoConteudo" style="display:none;">

                    <div class="carrinho-itens">
                        <table class="tabela-carrinho">
                            <thead>
                                <tr>
                                    <th class="col-produto">Produto</th>
                                    <th class="col-qtd">Quantidade</th>
                                    <th class="col-remover"></th>
                                </tr>
                            </thead>
                            <tbody id="tabelaCarrinhoBody">
                                <!-- preenchido via JS -->
                            </tbody>
                        </table>
                    </div>

                    <div class="carrinho-resumo">
                        <h3>Resumo do pedido</h3>
                        <div class="resumo-linha">
                            <span>Itens no carrinho</span>
                            <span id="resumoQtd">0</span>
                        </div>
                        <button type="button" class="btn-finalizar" id="btnFinalizar">
                            Finalizar pedido
                        </button>
                        <a href="<?= $url ?>loja" class="btn-continuar-comprando">
                            ← Continuar comprando
                        </a>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <script>
    (function () {
        const tbody     = document.getElementById('tabelaCarrinhoBody');
        const vazio     = document.getElementById('carrinhoVazio');
        const conteudo  = document.getElementById('carrinhoConteudo');
        const elQtd     = document.getElementById('resumoQtd');
        const btnFin    = document.getElementById('btnFinalizar');
        const URL_BASE  = '<?= $url ?>';

        function getCarrinho() {
            try {
                return JSON.parse(localStorage.getItem('carrinho_inova') || '[]');
            } catch (e) {
                return [];
            }
        }

        function setCarrinho(itens) {
            localStorage.setItem('carrinho_inova', JSON.stringify(itens));
        }

        function render() {
            const itens = getCarrinho();
            tbody.innerHTML = '';

            if (itens.length === 0) {
                vazio.style.display = '';
                conteudo.style.display = 'none';
                return;
            }

            vazio.style.display = 'none';
            conteudo.style.display = '';

            let totalQtd = 0;

            itens.forEach((item, idx) => {
                totalQtd += (item.qtd || 0);

                const opcoesHtml = Object.entries(item.opcoes || {})
                    .map(([k, v]) => `<small><strong>${k}:</strong> ${v}</small>`)
                    .join('<br>');

                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td class="col-produto">
                        <a href="${URL_BASE}produto/${item.slug}/" class="nome-link">${item.nome}</a>
                        <div class="opcoes-resumo">${opcoesHtml}</div>
                    </td>
                    <td class="col-qtd">
                        <div class="qtd-controle">
                            <button type="button" class="qtd-mini-btn" data-acao="menos" data-idx="${idx}">-</button>
                            <span class="qtd-mini-valor">${item.qtd}</span>
                            <button type="button" class="qtd-mini-btn" data-acao="mais" data-idx="${idx}">+</button>
                        </div>
                    </td>
                    <td class="col-remover">
                        <button type="button" class="btn-remover" data-idx="${idx}" aria-label="Remover item">
                            <i class="fas fa-times"></i>
                        </button>
                    </td>
                `;
                tbody.appendChild(tr);
            });

            elQtd.textContent = totalQtd;
        }

        // Delegação de eventos: quantidade ± e remover
        tbody.addEventListener('click', e => {
            const btn = e.target.closest('button');
            if (!btn) return;
            const idx = parseInt(btn.dataset.idx, 10);
            const itens = getCarrinho();

            if (btn.classList.contains('btn-remover')) {
                itens.splice(idx, 1);
                setCarrinho(itens);
                render();
            } else if (btn.dataset.acao === 'menos') {
                if (itens[idx].qtd > 1) {
                    itens[idx].qtd -= 1;
                    setCarrinho(itens);
                    render();
                }
            } else if (btn.dataset.acao === 'mais') {
                itens[idx].qtd += 1;
                setCarrinho(itens);
                render();
            }
        });

        btnFin.addEventListener('click', () => {
            window.location.href = URL_BASE + 'finalizacao-de-compra';
        });

        render();
    })();
    </script>

    <?php
    $borg->js_custom = array(
        "tools/scroll",
    );
    ?>
    <?php include "includes/_footer.php"; ?>

</body>

</html>
