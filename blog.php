<?php
$h1          = "Blog";
$title       = "Blog";
$description = "Artigos sobre transformadores, manutenção elétrica, energia solar, cabines primárias e tendências do setor de equipamentos elétricos. Confira no blog da INOVA."; // Manter entre 130 a 160 caracteres
$keywords    = "blog inova, transformadores, energia, manutenção elétrica, artigos setor elétrico, energia solar, cabine primária";

require_once "includes/array-blogs.php";
include "includes/_configuracoes.php";
$borg->cssCompress(array(
    "paginas/blog"
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
        <section id="banner">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-box">
                            <h1>
                                INOVA EQUIPAMENTOS ELÉTRICOS
                                <br>
                                <br>
                                UMA SOLUÇÃO ABRANGENTE PARA TODAS AS SUAS DEMANDAS EM EQUIPAMENTOS ELÉTRICOS!
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="text">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="text-box">
                            <p>Bem-vindo à empolgante jornada de descoberta e aprendizado na seção de blog da Inova Equipamentos Elétricos, dedicada a desvendar os segredos e complexidades por trás dos transformadores e equipamentos elétricos. Nesta plataforma dedicada ao conhecimento, convidamos você a explorar um vasto universo de informações que abrange desde os conceitos mais elementares até as mais recentes inovações no campo da engenharia elétrica. Prepare-se para adentrar um domínio onde a energia ganha forma, utilidade e eficiência.</p>

                            </p>Nossos artigos são meticulosamente elaborados para oferecer a você uma visão abrangente desse universo energético. Desde os conceitos fundamentais da transformação de tensão e corrente até a aplicação desses princípios em contextos industriais complexos, nosso objetivo é fornecer uma compreensão sólida dos componentes que moldam a infraestrutura elétrica moderna.<p>

                            <p>A Inova Equipamentos Elétricos acredita no poder do conhecimento para impulsionar a inovação e o progresso. Convidamos você a mergulhar em nossos artigos, aprofundar seu entendimento e descobrir como os transformadores e equipamentos elétricos desempenham um papel crucial na construção do mundo eletrificado em que vivemos. Este é mais do que um mergulho no mundo dos circuitos e correntes; é uma jornada rumo à compreensão das engrenagens que mantêm nossa sociedade em movimento.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="blogs">
            <div class="container">
                <div class="flex">
                    <?php foreach ($blogs as $slug => $post) : ?>
                        <div class="col-lg-4 col-md-4">
                            <div class="card-blog">
                                <div class="card-blog-imagem">
                                    <img src="<?= $url ?>imagens/main/blog/<?= $post['imagem'] ?>" alt="<?= htmlspecialchars($post['titulo']) ?>" loading="lazy">
                                </div>
                                <div class="card-blog-conteudo">
                                    <a href="<?= $url ?>blog/<?= $slug ?>">
                                        <h3 class="card-blog-titulo"><?= $post['titulo'] ?></h3>
                                    </a>
                                    <div class="card-blog-categorias">
                                        <?php foreach ($post['categorias'] as $cat) : ?>
                                            <span class="card-blog-categoria"><a href="<?= $url ?>blog/categoria/<?= urlencode($cat) ?>"><?= $cat ?></a></span>
                                        <?php endforeach; ?>
                                    </div>
                                    <p class="card-blog-excerpt"><?= $post['excerpt'] ?></p>
                                    <div class="card-blog-meta">
                                        <span class="card-blog-data"><?= $post['data'] ?></span>
                                        <span><a href="<?= $url ?>blog/<?= $slug ?>" class="card-blog-leia">Leia mais →</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
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
        // 'tools/jquery.fancybox',
        // 'tools/jquery.slick',
        // 
        // 'tools/bootstrap.min',
        // 'tools/jquery.validate.min',
        // 'tools/jquery.mask.min',
        // 'tools/jquery.fancybox',
        // 'jquery.buscaorganica.contact'
    );
    ?>
    <?php include "includes/_footer.php"; ?>

</body>

</html>