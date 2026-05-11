<?php
$h1           = "Loja";
$title         = "Loja";
$description = ""; // Manter entre 130 a 160 caracteres
$keywords    = $title;

require_once 'includes/array-produtos.php';
include "includes/_configuracoes.php";
$borg->cssCompress(array(
    "paginas/finalizacao"
));

$produtos = [
    [
        "imagem" => "imagens/main/produtos/transformador_a_oleo_75kva.webp",
        "nome" => "Transformador a Óleo 75KVA - 13.800V - 7 Tap's, Alumínio",
        "preco" => 13812.00,
        "quantidade" => 1
    ],
    [
        "imagem" => "imagens/main/produtos/transformador_a_oleo_45kva.webp",
        "nome" => "Transformador a Óleo 45KVA - 13.800V - 7 Tap's, Alumínio",
        "preco" => 11346.00,
        "quantidade" => 1
    ]
];

$produto = [
    "nome" => "Transformador a Óleo 45KVA - 13.800V - 7 Tap's, Alumínio",
    "preco" => 11346.00,
    "quantidade" => 1
];

function moeda($valor)
{
    return 'R$' . number_format($valor, 2, ',', '.');
}

$total = $produto['preco'] * $produto['quantidade'];
?>


</head>

<body>
    <?php include "includes/_header.php"; ?>
    <main class="main-content">
        <div class="checkout">

            <div class="top-msg">
                Você tem um cupom de desconto?
                <a href="#">Clique aqui e informe o código do seu cupom de desconto</a>
            </div>

            <div class="flex">

                <!-- =====================================
             ESQUERDA
        ====================================== -->

                <div class="left">

                    <h3>Detalhes de cobrança</h3>

                    <form>

                        <div class="row">

                            <div class="form-group">
                                <label>Nome *</label>
                                <input type="text">
                            </div>

                            <div class="form-group">
                                <label>Sobrenome *</label>
                                <input type="text">
                            </div>

                        </div>

                        <div class="form-group">
                            <label>Nome da empresa (opcional)</label>
                            <input type="text">
                        </div>

                        <div class="form-group">
                            <label>País *</label>

                            <select>
                                <option>Brasil</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Endereço *</label>
                            <input type="text" placeholder="Nome da rua e número da casa">
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Apartamento, suíte, sala, etc. (opcional)">
                        </div>

                        <div class="form-group">
                            <label>Cidade *</label>
                            <input type="text">
                        </div>

                        <div class="form-group">
                            <label>Estado *</label>

                            <select>
                                <option>São Paulo</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>CEP *</label>
                            <input type="text">
                        </div>

                        <div class="form-group">
                            <label>Telefone *</label>
                            <input type="text">
                        </div>

                        <div class="form-group">
                            <label>Endereço de e-mail *</label>
                            <input type="email">
                        </div>

                    </form>

                </div>

                <!-- =====================================
             DIREITA
        ====================================== -->

                <div class="right">

                    <h3>Informação adicional</h3>

                    <div class="form-group">
                        <label>Observações do pedido (opcional)</label>

                        <textarea placeholder="Observações sobre seu pedido, ex: notas especiais de entrega."></textarea>
                    </div>

                    <h3>Seu pedido</h3>

                    <table>

                        <thead>

                            <tr>
                                <th>PRODUTO</th>
                                <th>SUBTOTAL</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td class="produto">
                                    <?= $produto['nome']; ?>
                                    × <?= $produto['quantidade']; ?>
                                </td>

                                <td>
                                    <?= moeda($total); ?>
                                </td>

                            </tr>

                            <tr>

                                <td>
                                    <strong>SUBTOTAL</strong>
                                </td>

                                <td>
                                    <?= moeda($total); ?>
                                </td>

                            </tr>

                            <tr>

                                <td>
                                    <strong>TOTAL</strong>
                                </td>

                                <td class="valor-total">
                                    <?= moeda($total); ?>
                                </td>

                            </tr>

                        </tbody>

                    </table>

                    <div class="pagamento">

                        <div>
                            <input type="radio" checked id="pix">

                            <label for="pix">
                                Transferência Bancária
                            </label>
                        </div>

                        <div class="pagamento-texto">

                            Efetue o seu pagamento por transferência bancária ou depósito direto em nossa conta.
                            Por favor indique o N° do encomenda como referência da transferência ou depósito.
                            A sua encomenda não será enviada até confirmarmos o recebimento do montante.

                        </div>

                    </div>

                    <div class="privacidade">

                        Os seus dados pessoais serão utilizados para processar a sua encomenda,
                        para melhorar a sua experiência neste site e para os propósitos descritos na nossa
                        <a href="#">política de privacidade</a>.

                    </div>

                    <button class="button">
                        Finalizar pedido
                    </button>

                </div>

            </div>

        </div>
    </main>
    <script src="<?php echo $url; ?>assets/js/produto.js"></script>
    <?php
    $borg->js_custom = array(
        "tools/scroll",
    );
    ?>
    <?php include "includes/_footer.php"; ?>

</body>

</html>