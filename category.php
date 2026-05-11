<?php
require_once "includes/array-blogs.php";

// ─── Mapa: slug da URL  ->  nome da categoria como aparece no array ───────
$mapaCategoria = [
    // ─── Manutenção/Serviços ───
    'manutencao-servicos'             => 'MANUTENÇÃO/SERVIÇOS',
    'manutencao-preventiva'           => 'MANUTENÇÃO PREVENTIVA',
    'manutencao-corretiva'            => 'MANUTENÇÃO CORRETIVA',
    'manutencao-preditiva'            => 'MANUTENÇÃO PREDITIVA',

    // ─── Energia ───
    'energia'                         => 'ENERGIA',
    'energia-solar'                   => 'ENERGIA SOLAR',
    'energia-eolica'                  => 'ENERGIA EÓLICA',
    'energia-hidreletrica'            => 'ENERGIA HIDRELÉTRICA',
    'energia-de-biomassa'             => 'ENERGIA DE BIOMASSA',
    'energia-geotermica'              => 'ENERGIA GEOTÉRMICA',
    'energia-oceanica'                => 'ENERGIA OCEÂNICA',
    'energia-nuclear'                 => 'ENERGIA NUCLEAR',

    // ─── Transformadores ───
    'transformadores'                 => 'TRANSFORMADORES',
    'transformador-a-oleo'            => 'TRANSFORMADOR A ÓLEO',
    'transformador-pedestal'          => 'TRANSFORMADOR PEDESTAL',
    'transformador-a-seco'            => 'TRANSFORMADOR A SECO',
    'autotransformador'               => 'AUTOTRANSFORMADOR',
    'transformador-isolador'          => 'TRANSFORMADOR ISOLADOR',
    'transformadores-inteligentes'    => 'TRANSFORMADORES INTELIGENTES',

    // ─── Outras ───
    'cabine-primaria'                 => 'CABINE PRIMÁRIA',
    'carros-eletricos'                => 'CARROS ELÉTRICOS',
];

$slug = $_GET['slug'] ?? '';

// Valida se o slug existe no mapa; se não, exibe 404
if (!$slug || !isset($mapaCategoria[$slug])) {
    http_response_code(404);
    echo '<h1>Categoria não encontrada</h1>';
    exit;
}

$nomeCategoria = $mapaCategoria[$slug];

// Filtra os posts cuja chave "categorias" contém a categoria pedida
$postsFiltrados = array_filter($blogs, function ($post) use ($nomeCategoria) {
    return in_array($nomeCategoria, $post['categorias'], true);
});

// ─── Meta tags dinâmicas ──────────────────────────────────────────────────
$h1          = $nomeCategoria;
$title       = "Categoria: $nomeCategoria – Blog – Inova Equipamentos Elétricos";
$description = "Artigos sobre $nomeCategoria no blog da Inova Equipamentos Elétricos.";
$keywords    = "$nomeCategoria, blog, transformadores, inova equipamentos elétricos";

include "includes/_configuracoes.php";
$borg->cssCompress(array(
    "paginas/blog"
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
                                CATEGORIA: <?= htmlspecialchars($nomeCategoria) ?>
                                <br>
                                <br>
                                ARTIGOS SOBRE <?= htmlspecialchars($nomeCategoria) ?> DA INOVA EQUIPAMENTOS ELÉTRICOS
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="blogs">
            <div class="container">
                <div class="flex">
                    <?php if (empty($postsFiltrados)) : ?>
                        <div class="col-lg-12 col-md-12">
                            <p style="text-align:center; padding:40px;">
                                Nenhum artigo encontrado nesta categoria.
                            </p>
                        </div>
                    <?php else : ?>
                        <?php foreach ($postsFiltrados as $slugPost => $post) : ?>
                            <div class="col-lg-4 col-md-4">
                                <div class="card-blog">
                                    <div class="card-blog-imagem">
                                        <img src="<?= $url ?>imagens/main/blog/<?= $post['imagem'] ?>" alt="<?= htmlspecialchars($post['titulo']) ?>" loading="lazy">
                                    </div>
                                    <div class="card-blog-conteudo">
                                        <a href="<?= $url ?>blog/<?= $slugPost ?>">
                                            <h3 class="card-blog-titulo"><?= $post['titulo'] ?></h3>
                                        </a>
                                        <div class="card-blog-categorias">
                                            <?php foreach ($post['categorias'] as $cat) : ?>
                                                <?php
                                                // Encontra o slug correspondente para construir o link
                                                $catSlug = array_search($cat, $mapaCategoria, true);
                                                ?>
                                                <span class="card-blog-categoria">
                                                    <?php if ($catSlug !== false) : ?>
                                                        <a href="<?= $url ?>category/<?= $catSlug ?>"><?= $cat ?></a>
                                                    <?php else : ?>
                                                        <?= $cat ?>
                                                    <?php endif; ?>
                                                </span>
                                            <?php endforeach; ?>
                                        </div>
                                        <p class="card-blog-excerpt"><?= $post['excerpt'] ?></p>
                                        <div class="card-blog-meta">
                                            <span class="card-blog-data"><?= $post['data'] ?></span>
                                            <span><a href="<?= $url ?>blog/<?= $slugPost ?>" class="card-blog-leia">Leia mais →</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
    <script src="<?php echo $url; ?>assets/js/produto.js"></script>
    <script>
        document.querySelector(".scroll-down")?.addEventListener("click", () => {
            window.scrollTo({
                top: window.innerHeight,
                behavior: "smooth"
            });
        });
    </script>
    <?php
    $borg->js_custom = array(
        "tools/scroll",
    );
    ?>
    <?php include "includes/_footer.php"; ?>

</body>

</html>
