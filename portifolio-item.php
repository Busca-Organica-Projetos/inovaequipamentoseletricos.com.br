<?php
require_once 'includes/array-locacao.php';
require_once 'includes/array-produtos.php';

$slug = $_GET['slug'] ?? '';

// Valida se o slug existe no array; se não, exibe 404
if (!$slug || !isset($locacoes[$slug])) {
    http_response_code(404);
    echo '<h1>Página não encontrada</h1>';
    exit;
}



$dados = $locacoes[$slug];

// ─── Meta tags dinâmicas com base na locação ──────────────────────────────────
$h1          = $dados['titulo'];
$title       = $dados['titulo'] . ' – INOVA EQUIPAMENTOS ELÉTRICOS';
$description = $dados['description'] ?? ''; // Manter entre 130 a 160 caracteres
$keywords    = $dados['keywords'] ?? $dados['titulo'];

include "includes/_configuracoes.php";

$borg->cssCompress(array(
    "paginas/locacao",
    "paginas/loja"
    // "paginas/home"
    // "paginas/contato"
    // "ferramentas/fancybox"
    // "ferramentas/slick"
));
?>
</head>

<body>
    <?php include "includes/_header.php"; ?>
    <main class="main-content">
        <?= $dados['content'] ?>

        <div class="col-lg-6 col-md-6">
            <div class="form-wrapper">
                <h2>ORÇAMENTO:</h2>
                <form class="orcamento-form">

                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" name="Nome" class="form-control campo-obrigatorio" placeholder="Nome:*" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="E-mail" class="form-control campo-obrigatorio" placeholder="E-Mail:*" />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <input type="tel" name="Telefone" class="form-control campo-obrigatorio mask-phone" placeholder="Telefone:*" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="CNPJ ou CPF" class="form-control campo-obrigatorio" placeholder="CNPJ ou CPF:*" />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" name="Empresa" class="form-control" placeholder="Empresa:" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="Cidade" class="form-control" placeholder="Cidade:" />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <select name="Estado" class="form-control" aria-label="Estado">
                                <option value="" disabled selected>Estado:</option>
                                <option>AC</option>
                                <option>AL</option>
                                <option>AP</option>
                                <option>AM</option>
                                <option>BA</option>
                                <option>CE</option>
                                <option>DF</option>
                                <option>ES</option>
                                <option>GO</option>
                                <option>MA</option>
                                <option>MT</option>
                                <option>MS</option>
                                <option>MG</option>
                                <option>PA</option>
                                <option>PB</option>
                                <option>PR</option>
                                <option>PE</option>
                                <option>PI</option>
                                <option>RJ</option>
                                <option>RN</option>
                                <option>RS</option>
                                <option>RO</option>
                                <option>RR</option>
                                <option>SC</option>
                                <option>SP</option>
                                <option>SE</option>
                                <option>TO</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="Cargo" class="form-control" aria-label="Cargo">
                                <option value="" disabled selected>Cargo:</option>
                                <option>Instalador</option>
                                <option>Eletricista</option>
                                <option>Proprietário</option>
                                <option>Compras</option>
                                <option>Outros</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <select name="Regime de Tributação" class="form-control" aria-label="Regime de Tributação">
                                <option value="" disabled selected>Regime de Tributação:</option>
                                <option>Simples Nacional</option>
                                <option>Lucro Presumido</option>
                                <option>Lucro Real</option>
                                <option>Outros</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="Destino da Mercadoria" class="form-control" aria-label="Destino da Mercadoria">
                                <option value="" disabled selected>O destino da mercadoria é para:</option>
                                <option>Comercialização</option>
                                <option>Consumidor final (uso - consumo ou ativo imobilizado)</option>
                                <option>Consumidor final não contribuinte de ICMS</option>
                                <option>Industrialização</option>
                                <option>Outros</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row form-row--full">
                        <div class="form-group">
                            <select name="Potência" class="form-control" aria-label="Potência">
                                <option value="" disabled selected>Potência:</option>
                                <option>15KVA</option>
                                <option>30KVA</option>
                                <option>45KVA</option>
                                <option>75KVA</option>
                                <option>112.5KVA</option>
                                <option>150KVA</option>
                                <option>225KVA</option>
                                <option>300KVA</option>
                                <option>500KVA</option>
                                <option>750KVA</option>
                                <option>1000KVA</option>
                                <option>1500KVA</option>
                                <option>2000KVA</option>
                                <option>2500KVA</option>
                                <option>3000KVA</option>
                                <option>Outros</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <select name="Tensão Primária" class="form-control" aria-label="Tensão Primária">
                                <option value="" disabled selected>Tensão Primária:</option>
                                <option>13.800V</option>
                                <option>24.200V</option>
                                <option>34.500V</option>
                                <option>Outros</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="Tensão Secundária" class="form-control" aria-label="Tensão Secundária">
                                <option value="" disabled selected>Tensão Secundária:</option>
                                <option>220/127V</option>
                                <option>380/220V</option>
                                <option>440/254V</option>
                                <option>Outros</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row form-row--full">
                        <div class="form-group">
                            <textarea name="Descrição do Equipamento" class="form-control" placeholder="Descrição do Equipamento:" rows="6"></textarea>
                        </div>
                    </div>

                    <div class="form-row form-row--submit">
                        <input name="Local do Form" value="Formulário Portfolio Item: <?php echo $canonical; ?>" type="hidden">
                        <button type="submit"
                            data-emailsReceberEnvio="<?php echo $emailContato; ?>"
                            data-emailsReceberCopia=""
                            data-emailsReceberCopiaOculta=""
                            data-siteCliente="<?php echo $nome_empresa; ?>"
                            data-ajax="Solicitação - Portfolio Item">Enviar</button>
                    </div>

                </form>
            </div>
        </div>

        <section id="produtos">
            <div class="container">
                <div class="loja-wrapper">
                    <div class="loja-conteudo">
                        <?php
                        // ─── Filtra produtos por prefixo de slug derivado da locação ─────
                        // Ex.: "locacao-transformadores-a-oleo"  →  prefixo "transformador-a-oleo"
                        //      → casa com "transformador-a-oleo-15kva", "...-30kva", etc.
                        $prefixo = $slug;
                        $prefixo = preg_replace('/^locacao-/', '', $prefixo);
                        $prefixo = preg_replace('/^instalacao-e-desinstalacao-de-/', '', $prefixo);
                        $prefixo = strtr($prefixo, [
                            'autotransformadores' => 'autotransformador',
                            'transformadores'     => 'transformador',
                            'isoladores'          => 'isolador',
                        ]);

                        $produtosLocacao = [];
                        if (!empty($prefixo)) {
                            $produtosLocacao = array_filter(
                                $produtos,
                                fn($k) => str_starts_with($k, $prefixo),
                                ARRAY_FILTER_USE_KEY
                            );
                        }
                        ?>
                        <div class="loja-titulo-filtro">
                            <h2>Produtos para Locação: <?= htmlspecialchars($dados["titulo"] ?? '') ?></h2>
                            <span class="contagem-resultados">
                                <?= count($produtosLocacao) ?> produto<?= count($produtosLocacao) === 1 ? '' : 's' ?>
                            </span>
                        </div>

                        <div class="box-produtos">
                            <?php if (empty($produtosLocacao)): ?>
                                <p class="sem-produtos">Nenhum produto encontrado para esta locação.</p>
                            <?php else: ?>
                                <?php foreach ($produtosLocacao as $key => $value): ?>
                                    <div class="col-prod">
                                        <div class="card-produto">
                                            <img class="img-responsive"
                                                src="<?= $url ?>imagens/main/produtos/<?= $value['imagem'] ?>.webp"
                                                alt="<?= htmlspecialchars($value['nome']) ?>" loading="lazy">
                                            <p class="nome"><?= $value['nome'] ?></p>
                                            <a class="button" href="<?= $url ?>produto/<?= $key ?>"><i class="fa-solid fa-cart-shopping"></i>Ver Opções</a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="<?php echo $url; ?>assets/js/produto.js"></script>
    <script>
        document.querySelector(".scroll-down").addEventListener("click", () => {
            window.scrollTo({
                top: window.innerHeight,
                behavior: "smooth"
            });
        });
    </script>
    <?php
    $borg->js_custom = array(
        "tools/scroll",
        "tools/bootstrap.min",
        "tools/jquery.validate.min",
        "tools/jquery.mask.min",
        "tools/jquery.fancybox",
        "jquery.buscaorganica.contact"
    );
    ?>
    <?php include "includes/_footer.php"; ?>

</body>

</html>