<?php
require_once 'includes/array-produtos.php';

$slug = $_GET['produtos'] ?? '';

// Valida se o slug existe no array; se não, exibe 404
if (!$slug || !isset($produtos[$slug])) {
    http_response_code(404);
    echo '<h1>Produto não encontrado</h1>';
    exit;
}

$dados = $produtos[$slug];

// ─── Meta tags dinâmicas com base no produto ──────────────────────────────────
$h1          = $dados['nome'];
$title       = $dados['nome'] . ' – INOVA EQUIPAMENTOS ELÉTRICOS';
$description = $dados['description'] ?? ''; // Manter entre 130 a 160 caracteres
$keywords    = $dados['keywords'] ?? $dados['nome'];

include 'includes/_configuracoes.php';
$borg->cssCompress(array(
    'paginas/produto'
));
?>
</head>

<body>
    <?php include 'includes/_header.php'; ?>

    <main class="main-content">

        <section id="banner">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-box">
                            <h1>
                                INOVA EQUIPAMENTOS ELÉTRICOS
                                <br><br>
                                UMA SOLUÇÃO ABRANGENTE PARA TODAS AS SUAS DEMANDAS EM EQUIPAMENTOS ELÉTRICOS!
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php echo $dados['content']; ?>

    </main>

    <script src="<?php echo $url; ?>assets/js/produto.js"></script>
    <script>
        document.querySelector(".scroll-down").addEventListener("click", () => {
            window.scrollTo({ top: window.innerHeight, behavior: "smooth" });
        });
    </script>

    <?php
    $borg->js_custom = array(
        'tools/scroll',
    );
    ?>

    <?php include 'includes/_footer.php'; ?>

</body>
</html>