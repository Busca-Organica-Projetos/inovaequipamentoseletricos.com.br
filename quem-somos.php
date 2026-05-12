<?php
$h1           = "Quem Somos";
$title         = "Quem Somos";
$description = ""; // Manter entre 130 a 160 caracteres
$keywords    = $title;

include "includes/_configuracoes.php";
$borg->cssCompress(array(
    "paginas/quem-somos"
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
        <section id="bem-vindo">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-6 col-md-6">
                        <h2>BEM-VINDO À INOVA EQUIPAMENTOS ELÉTRICOS: EXCELÊNCIA EM TRANSFORMADORES E EQUIPAMENTOS ELÉTRICOS</h2>
                        <p>Na Inova Equipamentos Elétricos, nossa paixão pela qualidade, inovação e desempenho é o que nos impulsiona a liderar o mercado como representantes das melhores marcas de transformadores e equipamentos elétricos no Brasil. Com um compromisso incansável com a excelência, estamos aqui para atender todas as suas necessidades energéticas com soluções confiáveis e de alto desempenho.</p>
                        <br>
                        <h2>O QUE NOS DISTINGUE:</h2>
                        <p><span style="color: var(--main);">Seleção Abrangente de Produtos:</span> Colocamos à sua disposição uma variedade diversificada de transformadores e equipamentos elétricos, cuidadosamente selecionados para atender às suas demandas únicas. Seja qual for a aplicação, desde distribuição de energia até processos industriais avançados, temos o equipamento certo para você.</p>

                        <p><span style="color: var(--main);">Marcas de Renome:</span> Trabalhamos em parceria com as principais marcas do setor, garantindo que você tenha acesso aos produtos mais confiáveis e tecnologicamente avançados disponíveis no mercado. Nossas parcerias são uma garantia de qualidade e desempenho superior.</p>

                        <p><span style="color: var(--main);">Compromisso com a Qualidade:</span> A qualidade é o pilar da nossa atuação. Cada produto que representamos passa por rigorosos padrões de seleção e testes para garantir que ele atenda aos mais altos padrões de qualidade e confiabilidade.</p>

                        <p><span style="color: var(--main);">Assessoria Especializada:</span> Nossa equipe de especialistas em equipamentos elétricos está pronta para oferecer consultoria personalizada. Compreendemos suas necessidades e objetivos para fornecer orientações sólidas e ajudá-lo a tomar decisões informadas.</p>

                        <p><span style="color: var(--main);">Soluções Personalizadas:</span> Reconhecemos que cada projeto é único. Trabalhamos lado a lado com você para desenvolver soluções personalizadas que atendam exatamente às suas necessidades, independentemente do tamanho ou complexidade do projeto.</p>

                        <div class="botoes">
                            <a class="button" href="<?= $url ?>loja.php"><i class="fa-solid fa-cart-shopping"></i>CONHEÇA NOSSOS PRODUTOS</a>
                            <a class="button" href="<?= $url ?>orcamento.php"><i class="fa-solid fa-envelope"></i>FAÇA UM ORÇAMENTO</a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <?php
                        $imagens = [

                            // Transformadores a Óleo
                            [
                                "imagem" => "transformador_a_oleo_15kva_shopping_1_1x.webp",
                                "titulo" => "Transformador a Óleo 15 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_45kva_shopping_1_1x.webp",
                                "titulo" => "Transformador a Óleo 45 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_150kva_2_1x.webp",
                                "titulo" => "Transformador a Óleo 150 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_500kva_shopping_1_1x.webp",
                                "titulo" => "Transformador a Óleo 500 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_1000kva_shopping_1_1x.webp",
                                "titulo" => "Transformador a Óleo 1000 KVA",
                            ],

                            // Transformadores a Seco
                            [
                                "imagem" => "transformador_a_seco_30kva_shopping_1_1x.webp",
                                "titulo" => "Transformador a Seco 30 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_225kva_shopping_1_1x.webp",
                                "titulo" => "Transformador a Seco 225 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_300kva_shopping_1_1x.webp",
                                "titulo" => "Transformador a Seco 300 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_750kva_shopping_1_1x.webp",
                                "titulo" => "Transformador a Seco 750 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_1250kva_2_1x.webp",
                                "titulo" => "Transformador a Seco 1250 KVA",
                            ],

                            // Transformadores Isoladores
                            [
                                "imagem" => "transformador_isolador_5kva_shopping_1_2_1x.webp",
                                "titulo" => "Transformador Isolador 5 KVA",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva_shopping_1_3_1x.webp",
                                "titulo" => "Transformador Isolador 5 KVA - Vista Lateral",
                            ],

                            // Transformadores Pedestal
                            [
                                "imagem" => "transformador_pedestal_15kva_shopping_1_1x.webp",
                                "titulo" => "Transformador Pedestal 15 KVA",
                            ],
                            [
                                "imagem" => "transformador_pedestal_45kva_shopping_1_1x.webp",
                                "titulo" => "Transformador Pedestal 45 KVA",
                            ],
                            [
                                "imagem" => "transformador_pedestal_500kva_shopping_1_1x.webp",
                                "titulo" => "Transformador Pedestal 500 KVA",
                            ],
                            [
                                "imagem" => "transformador_pedestal_1125kva_shopping_1_1x.webp",
                                "titulo" => "Transformador Pedestal 1125 KVA",
                            ],
                            [
                                "imagem" => "transformador_pedestal_3000kva_2_1x.webp",
                                "titulo" => "Transformador Pedestal 3000 KVA",
                            ],

                        ];
                        ?>
                        <div class="bv-carrossel">
                            <div class="bv-carrossel__viewport">
                                <div class="bv-carrossel__track">
                                    <?php foreach ($imagens as $item): ?>
                                        <div class="bv-carrossel__slide">
                                            <img
                                                src="<?php echo $url; ?>imagens/main/quem-somos/<?= $item['imagem'] ?>"
                                                alt="<?= htmlspecialchars($item['titulo']) ?>"
                                                loading="lazy" />
                                            <p class="bv-carrossel__titulo"><?= htmlspecialchars($item['titulo']) ?></p>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                                <button class="bv-carrossel__prev" aria-label="Anterior">&#8249;</button>
                                <button class="bv-carrossel__next" aria-label="Próximo">&#8250;</button>
        
                                <div class="bv-carrossel__rodape">
                                    <div class="bv-carrossel__dots"></div>
                                    <span class="bv-carrossel__contador">
                                        <strong class="bv-cc-atual">1</strong> / <?= count($imagens) ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <h2>NOSSO COMPROMISSO:</h2>
                        <p>Na Inova Equipamentos Elétricos, não estamos apenas fornecendo equipamentos, mas também estamos contribuindo para o sucesso e crescimento contínuo dos seus projetos. Nossa dedicação à inovação e qualidade impulsiona nossa busca incessante por oferecer produtos que alcancem os mais altos padrões de desempenho e confiabilidade.</p>
                        <p>Estamos ansiosos para ser seu parceiro confiável em sua jornada elétrica. Explore nossa ampla gama de transformadores e equipamentos elétricos representados por marcas líderes. Entre em contato conosco para obter consultoria personalizada, solicitar informações detalhadas ou discutir como podemos contribuir para a excelência do seu projeto. A Inova Equipamentos Elétricos é o seu destino final para equipamentos elétricos de primeira classe.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="pilares">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12">
                        <div class="raio-separador">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h2>MISSÃO:</h2>
                        <p>Na Inova Equipamentos Elétricos, nossa missão é fornecer soluções elétricas excepcionais, representando as melhores marcas de transformadores e equipamentos do Brasil. Buscamos capacitar nossos clientes com produtos de qualidade superior e serviços personalizados, assegurando eficiência energética, confiabilidade e segurança em todas as aplicações. Nossa dedicação à excelência impulsiona nossa jornada para liderar o setor e oferecer valor excepcional aos nossos parceiros.</p>

                        <h2>VISÃO:</h2>
                        <p>Nossa visão é ser reconhecidos como o parceiro preferencial no fornecimento de transformadores e equipamentos elétricos de alto desempenho. Almejamos ser líderes em inovação, atendendo às necessidades em constante evolução do mercado elétrico, enquanto mantemos nosso compromisso inabalável com a qualidade, ética e satisfação do cliente. Como agentes de transformação, aspiramos a contribuir para o avanço da infraestrutura elétrica do Brasil, impulsionando o crescimento sustentável e a excelência em todos os setores.</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h2>VALORES:</h2>
                        <p><span style="color:var(--main);">Excelência:</span> Buscamos a excelência em tudo o que fazemos, desde a seleção dos produtos que representamos até a assistência personalizada que oferecemos aos nossos clientes.</p>
                        <p><span style="color:var(--main);">Integridade:</span> Atuamos com honestidade, transparência e responsabilidade, mantendo relações de confiança com nossos clientes, parceiros e colaboradores.</p>
                        <p><span style="color:var(--main);">Inovação:</span> Abraçamos a inovação como motor de progresso, adotando soluções criativas e tecnologicamente avançadas para atender às necessidades em constante mudança do mercado.</p>
                        <p><span style="color:var(--main);">Colaboração:</span> Valorizamos parcerias sólidas e colaborativas, trabalhando em conjunto com nossos clientes e fornecedores para alcançar resultados excepcionais.</p>
                        <p><span style="color:var(--main);">Respeito:</span> Respeitamos a diversidade, a segurança e o meio ambiente, agindo com consideração e cuidado em todas as nossas interações.
                        </p>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <p>Nossa missão, visão e valores são a base sólida que guia nossas ações diárias, nos inspirando a superar desafios, entregar resultados excepcionais e contribuir positivamente para a indústria elétrica do Brasil. Com uma equipe apaixonada e dedicada, estamos comprometidos em oferecer o melhor em equipamentos elétricos e serviços, estabelecendo padrões elevados de qualidade e confiabilidade.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="<?php echo $url; ?>assets/js/quem-somos.js"></script>
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