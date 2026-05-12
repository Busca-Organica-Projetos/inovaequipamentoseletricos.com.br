<?php
$h1          = "Finalização de compra";
$title       = "Finalização de compra – INOVA EQUIPAMENTOS ELÉTRICOS";
$description = "Finalize seu pedido informando os seus dados. O envio é feito direto pelo WhatsApp.";
$keywords    = "finalização, checkout, pedido, inova equipamentos elétricos";

include "includes/_configuracoes.php";
$borg->cssCompress(array(
    "paginas/finalizacao"
));

// Estados brasileiros
$estados = [
    'AC' => 'Acre', 'AL' => 'Alagoas', 'AP' => 'Amapá', 'AM' => 'Amazonas',
    'BA' => 'Bahia', 'CE' => 'Ceará', 'DF' => 'Distrito Federal', 'ES' => 'Espírito Santo',
    'GO' => 'Goiás', 'MA' => 'Maranhão', 'MT' => 'Mato Grosso', 'MS' => 'Mato Grosso do Sul',
    'MG' => 'Minas Gerais', 'PA' => 'Pará', 'PB' => 'Paraíba', 'PR' => 'Paraná',
    'PE' => 'Pernambuco', 'PI' => 'Piauí', 'RJ' => 'Rio de Janeiro', 'RN' => 'Rio Grande do Norte',
    'RS' => 'Rio Grande do Sul', 'RO' => 'Rondônia', 'RR' => 'Roraima', 'SC' => 'Santa Catarina',
    'SP' => 'São Paulo', 'SE' => 'Sergipe', 'TO' => 'Tocantins',
];
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
                            <h1>FINALIZAÇÃO DE COMPRA</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="checkout">
            <div class="container">

                <div class="top-msg">
                    Você tem um cupom de desconto?
                    <a href="#" id="toggleCupom">Clique aqui e informe o código do seu cupom de desconto</a>
                    <div class="cupom-box" id="cupomBox" style="display:none;">
                        <input type="text" placeholder="Código do cupom" id="cupomInput">
                        <button type="button" id="aplicarCupom">Aplicar cupom</button>
                    </div>
                </div>

                <form id="formFinalizacao" novalidate>

                    <div class="checkout-grid">

                        <!-- ESQUERDA -->
                        <div class="coluna-esquerda">

                            <h3>Detalhes de cobrança</h3>

                            <div class="row-2col">
                                <div class="form-group">
                                    <label>Nome <span class="req">*</span></label>
                                    <input type="text" name="nome" required>
                                </div>
                                <div class="form-group">
                                    <label>Sobrenome <span class="req">*</span></label>
                                    <input type="text" name="sobrenome" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Nome da empresa (opcional)</label>
                                <input type="text" name="empresa">
                            </div>

                            <div class="form-group">
                                <label>País <span class="req">*</span></label>
                                <div class="pais-fixo">Brasil</div>
                                <input type="hidden" name="pais" value="Brasil">
                            </div>

                            <div class="form-group">
                                <label>Endereço <span class="req">*</span></label>
                                <input type="text" name="endereco" placeholder="Nome da rua e número da casa" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="apartamento" placeholder="Apartamento, suíte, sala, etc. (opcional)">
                            </div>

                            <div class="form-group">
                                <label>Cidade <span class="req">*</span></label>
                                <input type="text" name="cidade" required>
                            </div>

                            <div class="form-group">
                                <label>Estado <span class="req">*</span></label>
                                <select name="estado" required>
                                    <?php foreach ($estados as $sigla => $nome): ?>
                                        <option value="<?= $nome ?>" <?= $sigla === 'SP' ? 'selected' : '' ?>><?= $nome ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>CEP <span class="req">*</span></label>
                                <input type="text" name="cep" required maxlength="9" placeholder="00000-000">
                            </div>

                            <div class="form-group">
                                <label>Telefone <span class="req">*</span></label>
                                <input type="tel" name="telefone" required placeholder="(11) 99999-9999">
                            </div>

                            <div class="form-group">
                                <label>Endereço de e-mail <span class="req">*</span></label>
                                <input type="email" name="email" required>
                            </div>

                        </div>

                        <!-- DIREITA -->
                        <div class="coluna-direita">

                            <h3>Informação adicional</h3>

                            <div class="form-group">
                                <label>Observações do pedido (opcional)</label>
                                <textarea name="observacoes" rows="6" placeholder="Observações sobre seu pedido, ex: notas especiais de entrega."></textarea>
                            </div>

                        </div>

                    </div>

                    <!-- =========================
                         SEU PEDIDO
                         ========================= -->
                    <div class="seu-pedido">
                        <h3>Seu pedido</h3>

                        <table class="tabela-pedido">
                            <thead>
                                <tr>
                                    <th>PRODUTO</th>
                                </tr>
                            </thead>
                            <tbody id="pedidoBody">
                                <!-- preenchido via JS -->
                            </tbody>
                        </table>

                        <div class="pagamento-info">
                            <div class="pagamento-titulo">
                                <i class="fas fa-circle-dot"></i> Transferência Bancária
                            </div>
                            <div class="pagamento-texto">
                                Efetue o seu pagamento por transferência bancária ou depósito direto na nossa conta.
                                Por favor indique o n.º de encomenda como referência da transferência ou depósito.
                                A sua encomenda não será enviada até confirmação do montante na nossa conta.
                            </div>
                        </div>

                        <div class="privacidade">
                            Os seus dados pessoais serão utilizados para processar a sua encomenda, para melhorar a sua experiência em todo o site e para os propósitos descritos na nossa
                            <a href="#">política de privacidade</a>.
                        </div>

                        <button type="button" class="btn-finalizar-wa" id="btnFinalizarWA">
                            Finalizar pedido
                        </button>

                        <!-- Carrinho vazio -->
                        <div class="pedido-vazio" id="pedidoVazio" style="display:none;">
                            <p>Seu carrinho está vazio.</p>
                            <a href="<?= $url ?>loja" class="btn-voltar-loja">Ir para a Loja</a>
                        </div>

                    </div>

                </form>

            </div>
        </section>

    </main>

    <script>
    (function () {
        const URL_BASE = '<?= $url ?>';
        const WHATSAPP = '5511976149957';

        function getCarrinho() {
            try { return JSON.parse(localStorage.getItem('carrinho_inova') || '[]'); }
            catch (e) { return []; }
        }

        function opcoesInline(opcoes) {
            return Object.entries(opcoes || {}).map(([, v]) => v).join(', ');
        }

        function renderPedido() {
            const itens = getCarrinho();
            const body  = document.getElementById('pedidoBody');
            const vazio = document.getElementById('pedidoVazio');
            const btn   = document.getElementById('btnFinalizarWA');

            body.innerHTML = '';

            if (itens.length === 0) {
                vazio.style.display = '';
                btn.style.display   = 'none';
                document.querySelector('.tabela-pedido').style.display = 'none';
                document.querySelector('.pagamento-info').style.display = 'none';
                document.querySelector('.privacidade').style.display = 'none';
                return { itens: [] };
            }

            itens.forEach(item => {
                const opStr = opcoesInline(item.opcoes);
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td class="produto">
                        ${item.nome}${opStr ? ' - ' + opStr : ''}
                        <span class="qtd-x">× ${item.qtd}</span>
                    </td>
                `;
                body.appendChild(tr);
            });

            return { itens };
        }

        renderPedido();

        // Cupom toggle (só visual — sem desconto aplicado)
        document.getElementById('toggleCupom').addEventListener('click', e => {
            e.preventDefault();
            const box = document.getElementById('cupomBox');
            box.style.display = (box.style.display === 'none' || !box.style.display) ? 'flex' : 'none';
        });

        // Máscaras simples
        const cepInput = document.querySelector('input[name=cep]');
        if (cepInput) {
            cepInput.addEventListener('input', e => {
                let v = e.target.value.replace(/\D/g, '').slice(0, 8);
                if (v.length > 5) v = v.slice(0, 5) + '-' + v.slice(5);
                e.target.value = v;
            });
        }
        const telInput = document.querySelector('input[name=telefone]');
        if (telInput) {
            telInput.addEventListener('input', e => {
                let v = e.target.value.replace(/\D/g, '').slice(0, 11);
                if (v.length >= 11)      v = `(${v.slice(0,2)}) ${v.slice(2,7)}-${v.slice(7)}`;
                else if (v.length >= 7)  v = `(${v.slice(0,2)}) ${v.slice(2,6)}-${v.slice(6)}`;
                else if (v.length >= 3)  v = `(${v.slice(0,2)}) ${v.slice(2)}`;
                e.target.value = v;
            });
        }

        // Envio via WhatsApp
        document.getElementById('btnFinalizarWA').addEventListener('click', () => {
            const form = document.getElementById('formFinalizacao');
            if (!form.checkValidity()) { form.reportValidity(); return; }

            const fd = new FormData(form);
            const dados = renderPedido();
            if (dados.itens.length === 0) {
                alert('Seu carrinho está vazio.');
                return;
            }

            let msg = '*Novo pedido — INOVA Equipamentos Elétricos*\n\n';
            msg += '*Detalhes de cobrança:*\n';
            msg += `• Nome: ${fd.get('nome')} ${fd.get('sobrenome')}\n`;
            if (fd.get('empresa')) msg += `• Empresa: ${fd.get('empresa')}\n`;
            msg += `• País: ${fd.get('pais')}\n`;
            msg += `• Endereço: ${fd.get('endereco')}`;
            if (fd.get('apartamento')) msg += `, ${fd.get('apartamento')}`;
            msg += '\n';
            msg += `• Cidade: ${fd.get('cidade')}\n`;
            msg += `• Estado: ${fd.get('estado')}\n`;
            msg += `• CEP: ${fd.get('cep')}\n`;
            msg += `• Telefone: ${fd.get('telefone')}\n`;
            msg += `• E-mail: ${fd.get('email')}\n`;

            if (fd.get('observacoes')) {
                msg += `\n*Observações:*\n${fd.get('observacoes')}\n`;
            }

            msg += '\n*Seu pedido:*\n';
            dados.itens.forEach(item => {
                const opStr = Object.entries(item.opcoes || {}).map(([k,v]) => `${k}: ${v}`).join(' | ');
                msg += `• ${item.nome}`;
                if (opStr) msg += ` (${opStr})`;
                msg += ` × ${item.qtd}\n`;
            });
            msg += '\n_Aguardando orçamento — Pagamento: Transferência Bancária._';

            const link = 'https://wa.me/' + WHATSAPP + '?text=' + encodeURIComponent(msg);
            window.open(link, '_blank');
        });
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
