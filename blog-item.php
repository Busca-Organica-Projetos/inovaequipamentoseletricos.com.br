<?php
require_once "includes/array-blogs.php";
require_once "includes/array-blog-item.php";

$slug = $_GET['slug'] ?? '';

// Valida se o slug existe nos dois arrays
if (!$slug || !isset($blogs[$slug]) || !isset($blogItem[$slug])) {
    http_response_code(404);
    echo '<h1>Artigo não encontrado</h1>';
    exit;
}

$post     = $blogs[$slug];
$dadosPost = $blogItem[$slug];

// ─── Meta tags dinâmicas ─────────────────────────────────────
$h1          = $dadosPost['title'];
$title       = $dadosPost['title'] . ' – Inova Equipamentos Elétricos';
$description = $post['excerpt'] ?? $dadosPost['title'];
$keywords    = implode(', ', $post['categorias']) . ', blog, inova equipamentos elétricos';

// ─── Mapa de categoria -> slug (para links do aside) ────────
$mapaCategoria = [
    'manutencao-servicos'             => 'MANUTENÇÃO/SERVIÇOS',
    'manutencao-preventiva'           => 'MANUTENÇÃO PREVENTIVA',
    'manutencao-corretiva'            => 'MANUTENÇÃO CORRETIVA',
    'manutencao-preditiva'            => 'MANUTENÇÃO PREDITIVA',
    'energia'                         => 'ENERGIA',
    'energia-solar'                   => 'ENERGIA SOLAR',
    'energia-eolica'                  => 'ENERGIA EÓLICA',
    'energia-hidreletrica'            => 'ENERGIA HIDRELÉTRICA',
    'energia-de-biomassa'             => 'ENERGIA DE BIOMASSA',
    'energia-geotermica'              => 'ENERGIA GEOTÉRMICA',
    'energia-oceanica'                => 'ENERGIA OCEÂNICA',
    'energia-nuclear'                 => 'ENERGIA NUCLEAR',
    'transformadores'                 => 'TRANSFORMADORES',
    'transformador-a-oleo'            => 'TRANSFORMADOR A ÓLEO',
    'transformador-pedestal'          => 'TRANSFORMADOR PEDESTAL',
    'transformador-a-seco'            => 'TRANSFORMADOR A SECO',
    'autotransformador'               => 'AUTOTRANSFORMADOR',
    'transformador-isolador'          => 'TRANSFORMADOR ISOLADOR',
    'transformadores-inteligentes'    => 'TRANSFORMADORES INTELIGENTES',
    'cabine-primaria'                 => 'CABINE PRIMÁRIA',
    'carros-eletricos'                => 'CARROS ELÉTRICOS',
];

// Inverte o mapa para lookup nome -> slug
$nomeParaSlug = array_flip($mapaCategoria);

// ─── Conta posts por categoria (dinâmico, sempre atualizado) ─
$contagemCategorias = [];
foreach ($blogs as $b) {
    foreach ($b['categorias'] as $cat) {
        $contagemCategorias[$cat] = ($contagemCategorias[$cat] ?? 0) + 1;
    }
}
// Ordena alfabeticamente
ksort($contagemCategorias);

// ─── Últimos 5 artigos (o array já está em ordem desc) ──────
$ultimosArtigos = array_slice($blogs, 0, 5, true);

include "includes/_configuracoes.php";
$borg->cssCompress(array(
    "paginas/blog",
    "paginas/blog-item",
));
?>
</head>

<body>
    <?php include "includes/_header.php"; ?>
    <main class="main-content">
        <div class="blog-item-wrapper">

            <!-- ─── COLUNA ESQUERDA: CONTEÚDO DO POST ──────────── -->
            <article class="blog-item-content">
                <?php
                // Substitui placeholders dentro da string do content pelo valor real de $url.
                // OBS: Os tokens são montados via concatenação ('<' . '?...' . '>')
                // para o parser do PHP não confundir com tags de abertura/fechamento.
                $abre = '<' . '?';
                $fecha = '?' . '>';
                $placeholders = [
                    $abre . 'php echo $url ' . $fecha,
                    $abre . 'php echo $url; ' . $fecha,
                    $abre . '= $url ' . $fecha,
                    $abre . '= $url; ' . $fecha,
                ];
                echo str_replace($placeholders, $url, $dadosPost['content']);
                ?>
            </article>

            <!-- ─── COLUNA DIREITA: ASIDE ─────────────────────── -->
            <aside class="blog-item-aside">

                <!-- Categorias com contagem -->
                <div class="aside-box aside-categorias">
                    <h3>CATEGORIA DE ARTIGOS:</h3>
                    <ul>
                        <?php foreach ($contagemCategorias as $catNome => $count) : ?>
                            <?php $catSlug = $nomeParaSlug[$catNome] ?? null; ?>
                            <li>
                                <?php if ($catSlug) : ?>
                                    <a href="<?= $url ?>category/<?= $catSlug ?>">
                                        <span><?= $catNome ?></span>
                                        <span class="count">(<?= $count ?>)</span>
                                    </a>
                                <?php else : ?>
                                    <a href="#">
                                        <span><?= $catNome ?></span>
                                        <span class="count">(<?= $count ?>)</span>
                                    </a>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Últimos artigos -->
                <div class="aside-box aside-ultimos">
                    <h3>ÚLTIMOS ARTIGOS:</h3>
                    <ul>
                        <?php foreach ($ultimosArtigos as $slugUlt => $postUlt) : ?>
                            <li>
                                <a href="<?= $url ?>blog/<?= $slugUlt ?>"><?= $postUlt['titulo'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </aside>

        </div>
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
