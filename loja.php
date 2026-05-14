<?php
$h1          = "Loja";
$title       = "Loja – Transformadores e Equipamentos Elétricos";
$description = "Loja online de transformadores a óleo, a seco, pedestal, autotransformadores e isoladores. Compre direto da INOVA equipamentos elétricos com suporte técnico especializado.";
$keywords    = "loja transformadores, comprar transformador, transformador a óleo, transformador a seco, autotransformador, isolador, pedestal, equipamentos elétricos";

require_once 'includes/array-produtos.php';

// ─── Mapa: slug-da-URL  ->  Nome legível da categoria ────────────────
$categoriasMap = [
    'autotransformador'       => 'AUTOTRANSFORMADOR',
    'transformador-a-oleo'    => 'TRANSFORMADOR A ÓLEO',
    'transformador-a-seco'    => 'TRANSFORMADOR A SECO',
    'transformador-isolador'  => 'TRANSFORMADOR ISOLADOR',
    'transformador-pedestal'  => 'TRANSFORMADOR PEDESTAL',
    'transformadores'         => 'TRANSFORMADORES',
];
$nomeParaSlug = array_flip($categoriasMap);

// ─── Helper: deduz categorias do produto a partir do slug ────────────
function categoriasDoProduto(string $slugProduto): array
{
    $cats = ['TRANSFORMADORES']; // todo produto está na categoria pai
    if (str_starts_with($slugProduto, 'transformador-a-oleo'))      $cats[] = 'TRANSFORMADOR A ÓLEO';
    elseif (str_starts_with($slugProduto, 'transformador-a-seco'))  $cats[] = 'TRANSFORMADOR A SECO';
    elseif (str_starts_with($slugProduto, 'transformador-isolador')) $cats[] = 'TRANSFORMADOR ISOLADOR';
    elseif (str_starts_with($slugProduto, 'transformador-pedestal')) $cats[] = 'TRANSFORMADOR PEDESTAL';
    elseif (str_starts_with($slugProduto, 'autotransformador'))     $cats[] = 'AUTOTRANSFORMADOR';
    return $cats;
}

// ─── Conta produtos por categoria (dinâmico) ─────────────────────────
$contagem = array_fill_keys(array_values($categoriasMap), 0);
foreach ($produtos as $slugP => $p) {
    foreach (categoriasDoProduto($slugP) as $cat) {
        if (isset($contagem[$cat])) $contagem[$cat]++;
    }
}
$totalProdutos = count($produtos);

// ─── Filtro ativo (via GET) ──────────────────────────────────────────
$categoriaAtiva     = $_GET['categoria'] ?? '';            // slug
$categoriaAtivaNome = $categoriasMap[$categoriaAtiva] ?? null;

// ─── Aplica filtro ───────────────────────────────────────────────────
if ($categoriaAtivaNome) {
    $produtosFiltrados = array_filter($produtos, function ($p, $slugP) use ($categoriaAtivaNome) {
        return in_array($categoriaAtivaNome, categoriasDoProduto($slugP), true);
    }, ARRAY_FILTER_USE_BOTH);
} else {
    $produtosFiltrados = $produtos;
}

// ─── Pesquisa textual (campo search no aside) ────────────────────────
$busca = trim($_GET['q'] ?? '');
if ($busca !== '') {
    $produtosFiltrados = array_filter($produtosFiltrados, function ($p) use ($busca) {
        return stripos($p['nome'], $busca) !== false;
    });
}

// ─── Últimos 5 produtos pra exibir no aside "Produtos" ───────────────
$ultimosProdutos = array_slice($produtos, 0, 5, true);

include "includes/_configuracoes.php";
$borg->cssCompress(array(
    "paginas/loja"
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
                            <h1>
                                LOJA: UMA SOLUÇÃO ABRANGENTE PARA TODAS AS SUAS DEMANDAS EM EQUIPAMENTOS ELÉTRICOS!
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── FILTROS DE CATEGORIA (estilo breadcrumb) ─────────────── -->
        <section id="filtros-categoria">
            <div class="container">
                <ul class="filtros-lista">
                    <li class="<?= $categoriaAtiva === '' ? 'ativo' : '' ?>">
                        <a href="<?= $url ?>loja">Todos <span class="count"><?= $totalProdutos ?></span></a>
                    </li>
                    <?php foreach ($categoriasMap as $slugCat => $nomeCat): ?>
                        <li class="<?= $categoriaAtiva === $slugCat ? 'ativo' : '' ?>">
                            <a href="<?= $url ?>loja?categoria=<?= $slugCat ?>">
                                <?= $nomeCat ?> <span class="count"><?= $contagem[$nomeCat] ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <!-- ─── CARDS DAS CATEGORIAS (visual) ────────────────────────── -->
        <section id="filtros">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12">
                        <div class="box-filtros">
                            <a href="<?= $url ?>loja?categoria=transformador-pedestal" class="filtros">
                                <img class="img-responsive" src="<?= $url ?>imagens/main/produtos/transformador-pedestal-3000kva.webp" alt="Transformadores Pedestal">
                                <h2>Transformadores Pedestal</h2>
                            </a>
                            <a href="<?= $url ?>loja?categoria=transformador-isolador" class="filtros">
                                <img class="img-responsive" src="<?= $url ?>imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformadores Isoladores">
                                <h2>Transformadores Isoladores</h2>
                            </a>
                            <a href="<?= $url ?>loja?categoria=autotransformador" class="filtros">
                                <img class="img-responsive" src="<?= $url ?>imagens/main/produtos/transformador_isolador_5kva.webp" alt="Autotransformadores">
                                <h2>Autotransformadores</h2>
                            </a>
                            <a href="<?= $url ?>loja?categoria=transformador-a-seco" class="filtros">
                                <img class="img-responsive" src="<?= $url ?>imagens/main/produtos/transformador_a_seco_1250kva.webp" alt="Transformadores a Seco">
                                <h2>Transformadores a Seco</h2>
                            </a>
                            <a href="<?= $url ?>loja?categoria=transformador-a-oleo" class="filtros">
                                <img class="img-responsive" src="<?= $url ?>imagens/main/produtos/transformador_a_oleo_150kva.webp" alt="Transformadores a Óleo">
                                <h2>Transformadores a Óleo</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ─── PRODUTOS + ASIDE ─────────────────────────────────────── -->
        <section id="produtos">
            <div class="container">
                <div class="loja-wrapper">

                    <!-- COLUNA ESQUERDA: produtos -->
                    <div class="loja-conteudo">
                        <?php if ($categoriaAtivaNome || $busca !== ''): ?>
                            <div class="loja-titulo-filtro">
                                <h2>
                                    <?php if ($categoriaAtivaNome): ?>
                                        Categoria: <?= htmlspecialchars($categoriaAtivaNome) ?>
                                    <?php endif; ?>
                                    <?php if ($busca !== ''): ?>
                                        — Resultados para "<?= htmlspecialchars($busca) ?>"
                                    <?php endif; ?>
                                </h2>
                                <span class="contagem-resultados">
                                    <?= count($produtosFiltrados) ?> produto<?= count($produtosFiltrados) === 1 ? '' : 's' ?>
                                </span>
                            </div>
                        <?php endif; ?>

                        <div class="box-produtos">
                            <?php if (empty($produtosFiltrados)): ?>
                                <p class="sem-produtos">Nenhum produto encontrado nesta categoria.</p>
                            <?php else: ?>
                                <?php foreach ($produtosFiltrados as $slugP => $value): ?>
                                    <div class="col-prod">
                                        <div class="card-produto">
                                            <img class="img-responsive"
                                                src="<?= $url ?>imagens/main/produtos/<?= $value['imagem'] ?>.webp"
                                                alt="<?= htmlspecialchars($value['nome']) ?>" loading="lazy">
                                            <p class="nome"><?= $value['nome'] ?></p>
                                            <p class="preco"><?= $value['preco'] ?></p>
                                            <a class="button" href="<?= $url ?>produto/<?= $slugP ?>/"><i class="fa-solid fa-cart-shopping"></i>Ver Opções</a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- COLUNA DIREITA: aside -->
                    <aside class="loja-aside">

                        <!-- Produtos (últimos 5) -->
                        <div class="aside-box aside-produtos">
                            <h3>PRODUTOS:</h3>
                            <ul>
                                <?php foreach ($ultimosProdutos as $slugP => $p): ?>
                                    <li>
                                        <a href="<?= $url ?>produto/<?= $slugP ?>/">
                                            <img src="<?= $url ?>imagens/main/produtos/<?= $p['imagem'] ?>.webp" alt="<?= htmlspecialchars($p['nome']) ?>" loading="lazy">
                                            <div class="info">
                                                <span class="nome"><?= $p['nome'] ?></span>
                                                <span class="preco"><?= $p['preco'] ?></span>
                                            </div>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <!-- Categorias com contagem -->
                        <div class="aside-box aside-categorias">
                            <h3>CATEGORIAS DE PRODUTOS:</h3>
                            <ul>
                                <li class="<?= $categoriaAtiva === '' ? 'ativo' : '' ?>">
                                    <a href="<?= $url ?>loja">
                                        <span>TODOS</span>
                                        <span class="count">(<?= $totalProdutos ?>)</span>
                                    </a>
                                </li>
                                <?php foreach ($categoriasMap as $slugCat => $nomeCat): ?>
                                    <li class="<?= $categoriaAtiva === $slugCat ? 'ativo' : '' ?>">
                                        <a href="<?= $url ?>loja?categoria=<?= $slugCat ?>">
                                            <span><?= $nomeCat ?></span>
                                            <span class="count">(<?= $contagem[$nomeCat] ?>)</span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                    </aside>

                </div>
            </div>
        </section>

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