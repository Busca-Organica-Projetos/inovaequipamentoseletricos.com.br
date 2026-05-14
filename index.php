<?php
require_once "includes/array-blogs.php";

$h1          = "INOVA Equipamentos Elétricos";
$title       = "INOVA Equipamentos Elétricos – Transformadores e Soluções em Energia";
$description = "Representação e venda de transformadores a óleo, a seco, pedestal, autotransformadores e isoladores. Soluções completas em equipamentos elétricos para indústria e comércio."; // Manter entre 130 a 160 caracteres
$keywords    = "transformadores, transformador a óleo, transformador a seco, transformador pedestal, autotransformador, transformador isolador, equipamentos elétricos, inova";

// ─── Mapa nome-da-categoria  ->  slug (para gerar links das categorias) ─────
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
$nomeParaSlug = array_flip($mapaCategoria);

include "includes/_configuracoes.php";
$borg->cssCompress(array(
    "paginas/home"
    // "paginas/contato"
    // "ferramentas/fancybox"
    // "ferramentas/slick"
));
?>
</head>

<body>
    <?php include "includes/_header.php"; ?>
    <main class="main-content">
        <section id="banner-home">
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
        <div class="scroll-down">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <section id="transformadores" class="mt-40">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12">
                        <div class="transformadores-titulo">
                            <h2>TRANSFORMADORES DE MÉDIA TENSÃO:</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="raio-separador">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                    </div>
                    <div class="transformadores-box">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 pd-0">
                            <div class="card">
                                <h2>TRANSFORMADOR A SECO:</h2>
                                <img src="<?php $url ?>imagens/main/home/transformador_a_seco.webp" alt="" loading="lazy">
                                <p>Os transformadores a seco são soluções modernas e ambientalmente amigável para atender às necessidades de distribuição de energia elétrica. Diferentemente dos transformadores tradicionais a óleo, esses transformadores não utilizam líquidos isolantes, o que os torna uma opção mais segura e sustentável.</p>
                                <a href="<?= $url ?>portfolio-item/transformadores-a-seco/">SAIBA MAIS</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 pd-0">
                            <div class="card card-mid">
                                <h2>TRANSFORMADOR A ÓLEO:</h2>
                                <img src="<?php $url ?>imagens/main/home/transformador_a_oleo.webp" alt="" loading="lazy">
                                <p>Transformadores a óleo são peças fundamentais no sistema de distribuição de energia elétrica. Ele desempenha o papel crucial de converter tensões elétricas, permitindo a transferência eficiente de eletricidade entre diferentes níveis de tensão. Este tipo de transformador utiliza óleo isolante como meio de resfriamento e isolamento elétrico, garantindo a operação segura e estável do equipamento.</p>
                                <a href="<?php $url ?>portfolio-item/transformadores-a-oleo/">SAIBA MAIS</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 pd-0">
                            <div class="card">
                                <h2>TRANSFORMADOR PEDESTAL:</h2>
                                <img src="<?php $url ?>imagens/main/home/transformador_pedestal_3000kva.webp" alt="" loading="lazy">
                                <p>Os transformadores pedestal são soluções versáteis e eficientes para atender às necessidades de distribuição de energia elétrica. Projetado para ser montado em pedestais elevados, este tipo de transformador oferece inúmeras vantagens em termos de instalação, manutenção e operação confiável.</p>
                                <a href="<?php $url ?>portfolio-item/transformadores-pedestal/">SAIBA MAIS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="servicos">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="transformadores-titulo">
                            <h2>NOSSOS SERVIÇOS:</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="raio-separador">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="card-flip-1 card-flip">
                            <div class="card-inner">
                                <div class="card-front">
                                    <i class="fas fa-tools"></i>
                                    <h2>Instalação e Manutenção:</h2>
                                    <p>O serviço de instalação elétrica adequada é a base para um sistema eficiente e seguro.</p>
                                </div>
                                <div class="card-back">
                                    <p>O serviço de instalação elétrica adequada é a base para um sistema eficiente e seguro. Nossa equipe de técnicos altamente qualificados está pronta para projetar e instalar sistemas elétricos que atendam às suas necessidades específicas. Além disso, oferecemos serviços de manutenção preventiva e corretiva para garantir que seu sistema opere sem problemas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="card-flip-2 card-flip">
                            <div class="card-inner">
                                <div class="card-front">
                                    <i class="fa-solid fa-toolbox"></i>
                                    <h2>Diagnósticos e Reparos</h2>
                                    <p>Problemas elétricos podem surgir sem aviso prévio, interrompendo suas operações e representando riscos à segurança.</p>
                                </div>
                                <div class="card-back">
                                    <p>Problemas elétricos podem surgir sem aviso prévio, interrompendo suas operações e representando riscos à segurança. Nossos especialistas em diagnóstico identificarão rapidamente a origem do problema e realizarão os reparos necessários, minimizando o tempo de inatividade.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="card-flip-3 card-flip">
                            <div class="card-inner">
                                <div class="card-front">
                                    <i class="fa-solid fa-lightbulb"></i>
                                    <h2>Soluções Personalizadas</h2>
                                    <p>Reconhecemos que cada cliente tem requisitos únicos.</p>
                                </div>
                                <div class="card-back">
                                    <p>Reconhecemos que cada cliente tem requisitos únicos. Trabalhamos de perto com você para entender suas necessidades específicas e oferecer soluções personalizadas que se alinhem perfeitamente aos seus objetivos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="baixa-tensao">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="transformadores-titulo">
                            <h2>TRANSFORMADORES DE BAIXA TENSÃO:</h2>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="raio-separador">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                    </div>
                    <div class="box-card">
                        <div class="card">
                            <h2>AUTOTRANSFORAMADOR:</h2>
                            <img class="img-responsive" src="<?php $url ?>imagens/main/home/transformador_isolador_5kva.webp" alt="tranformador isolador 5kva" loading="lazy">
                            <p>Os autotransformadores são uma solução engenhosa para efetuar a conversão de tensão elétrica com eficiência e economia. Sua característica única de compartilhar enrolamentos entre a entrada e a saída resulta em um design compacto e eficaz, reduzindo perdas e custos.</p>
                            <a href="<?= $url ?>portfolio-item/autotransformadores/">SAIBA MAIS</a>
                        </div>
                        <div class="card">
                            <h2>TRANSFORMADOR ISOLADOR:</h2>
                            <img class="img-responsive" src="<?php $url ?>imagens/main/home/transformador_isolador_5kva.webp" alt="transformador isolador" loading="lazy">
                            <p>Os transformadores isoladores desempenham um papel essencial na proteção de sistemas elétricos e equipamentos sensíveis. Projetado para isolar circuitos e prevenir a passagem de corrente entre eles, ele oferece segurança e estabilidade em diversas aplicações.</p>
                            <a href="<?= $url ?>portfolio-item/transformadores-isoladores/">SAIBA MAIS</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="eletricos">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="box-text">
                            <h2>INOVA EQUIPAMENTOS ELÉTRICOS</h2>
                            <p>Na Inova Equipamentos Elétricos, nossa paixão pela qualidade, inovação e desempenho é o que nos impulsiona a liderar o mercado como representantes das melhores marcas de transformadores e equipamentos elétricos no Brasil. Com um compromisso incansável com a excelência, estamos aqui para atender todas as suas necessidades energéticas com soluções confiáveis e de alto desempenho.</p>
                            <a href="<?= $url ?>quem-somos.php">SAIBA MAIS</a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img class="img-responsive" src="<?php $url ?>imagens/main/home/transformadores.webp" alt="transformadores elétricos" loading="lazy">
                    </div>
                </div>
            </div>
        </section>
        <section id="atuacao">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                        <div class="box-text">
                            <h2>NOSSO MODO DE ATUAR:</h2>
                            <p>A Inova Equipamentos Elétricos é uma empresa dedicada à representação comercial de equipamentos elétricos, com foco especial em transformadores. Fundada com a visão de fornecer soluções elétricas de alta qualidade para uma ampla gama de clientes, a empresa se destaca por seu compromisso com a inovação, qualidade e excelência no atendimento ao cliente.
                            </p>

                            <p>Nosso modo de atuar é profundamente enraizado em princípios fundamentais que guiam todas as suas operações.
                            </p>
                            <p>Levamos muito a sério a seleção de parceiros fabricantes para os produtos elétricos que representa. Essas parcerias estratégicas são fundamentais para garantir que a empresa possa oferecer produtos de alta qualidade e atender às diversas necessidades de seus clientes. Aqui estão algumas informações adicionais sobre os parceiros fabricantes que a Inova Equipamentos Elétricos representa:
                            </p>
                            <p><span style="color: var(--main);">Reputação e Experiência:</span> A Inova Equipamentos Elétricos colabora com fabricantes que têm uma sólida reputação e anos de experiência na indústria elétrica. Essa experiência é crucial para garantir a confiabilidade e a qualidade dos produtos oferecidos aos clientes.
                            </p>
                            <p><span style="color: var(--main);">Certificações e Normas:</span> Os parceiros fabricantes são cuidadosamente selecionados com base em suas certificações e conformidade com normas de qualidade e segurança rigorosas. Isso assegura que os produtos atendam a padrões internacionais reconhecidos.
                            </p>
                            <p><span style="color: var(--main);">Diversidade de Produtos:</span> A Inova Equipamentos Elétricos trabalha com uma rede de parceiros fabricantes que oferecem uma ampla gama de equipamentos elétricos. Isso inclui transsformadores de potência, transformadores de distribuição, transformadores especiais e outros tipos de equipamentos elétricos, adaptados às diferentes necessidades de clientes nos setores industrial, comercial e de infraestrutura.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <img class="img-responsive" src="<?php $url ?>imagens/main/home/backdrop_team.webp" alt="transformadores elétricos" loading="lazy">
                    </div>
                </div>
            </div>
        </section>
        <section id="orcamento">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-wrapper">
                            <h2>SOLICITE O ORÇAMENTO DO SEU TRANSFORMADOR:</h2>
                            <form class="orcamento-form">

                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="text" name="Nome" class="form-control campo-obrigatorio" placeholder="Nome:*" >
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="E-mail" class="form-control campo-obrigatorio" placeholder="E-Mail:*" >
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="tel" name="Telefone" class="form-control campo-obrigatorio mask-phone" placeholder="Telefone:*" >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="CNPJ ou CPF" class="form-control campo-obrigatorio" placeholder="CNPJ ou CPF:*" >
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="text" name="Empresa" class="form-control" placeholder="Empresa:" >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="Cidade" class="form-control" placeholder="Cidade:" >
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <select name="Estado" class="form-control">
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
                                        <select name="Cargo" class="form-control">
                                            <option value="" disabled selected>Cargo:</option>
                                            <option>Proprietário</option>
                                            <option>Diretor</option>
                                            <option>Gerente</option>
                                            <option>Engenheiro</option>
                                            <option>Técnico</option>
                                            <option>Comprador</option>
                                            <option>Outro</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <select name="Regime de Tributação" class="form-control">
                                            <option value="" disabled selected>Regime de Tributação:</option>
                                            <option>Simples Nacional</option>
                                            <option>Lucro Presumido</option>
                                            <option>Lucro Real</option>
                                            <option>MEI</option>
                                            <option>Pessoa Física</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="Destino da Mercadoria" class="form-control">
                                            <option value="" disabled selected>O destino da mercadoria é para:</option>
                                            <option>Uso próprio</option>
                                            <option>Revenda</option>
                                            <option>Industrialização</option>
                                            <option>Exportação</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row form-row--full">
                                    <div class="form-group">
                                        <select name="Equipamento" class="form-control">
                                            <option value="" disabled selected>Equipamento:</option>
                                            <option>Transformador a Óleo</option>
                                            <option>Transformador Pedestal</option>
                                            <option>Transformador a Seco</option>
                                            <option>Autotransformador</option>
                                            <option>Transformador Isolador</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row form-row--full">
                                    <div class="form-group">
                                        <textarea name="Descrição do Equipamento" class="form-control" placeholder="Descrição do Equipamento:" rows="6"></textarea>
                                    </div>
                                </div>

                                <div class="form-row form-row--submit">
                                    <input name="Local do Form" value="Formulário Home: <?php echo $canonical; ?>" type="hidden">
                                    <button type="submit"
                                        data-emailsReceberEnvio="<?php echo $emailContato; ?>"
                                        data-emailsReceberCopia=""
                                        data-emailsReceberCopiaOculta=""
                                        data-siteCliente="<?php echo $nome_empresa; ?>"
                                        data-ajax="Solicitação de orçamento - Home">Enviar</button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="artigos">
            <div class="container">
                <div class="flex">

                    <div class="col-lg-12 col-md-12">
                        <div class="artigos-titulo">
                            <h2>NOSSOS ARTIGOS:</h2>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="raio-separador">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                    </div>

                    <div class="box-artigos">

                        <!-- viewport: overflow:hidden — os botões ficam fora daqui -->
                        <div class="carrossel-viewport">
                            <div class="carrossel-track">

                                <?php foreach ($blogs as $slugPost => $post) : ?>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="card">
                                            <a href="<?= $url ?>blog/<?= $slugPost ?>">
                                                <img class="img-responsive"
                                                    src="<?= $url ?>imagens/main/blog/<?= $post['imagem'] ?>"
                                                    alt="<?= htmlspecialchars($post['titulo']) ?>" loading="lazy">
                                            </a>
                                            <a href="<?= $url ?>blog/<?= $slugPost ?>">
                                                <h2><?= $post['titulo'] ?></h2>
                                            </a>
                                            <p>
                                                <?php foreach ($post['categorias'] as $cat) : ?>
                                                    <?php $catSlug = $nomeParaSlug[$cat] ?? null; ?>
                                                    <?php if ($catSlug) : ?>
                                                        <a class="meta" href="<?= $url ?>category/<?= $catSlug ?>"><?= $cat ?></a>,
                                                    <?php else : ?>
                                                        <a class="meta" href="#"><?= $cat ?></a>,
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </p>
                                            <p class="paragrafo"><?= $post['excerpt'] ?></p>
                                            <div>
                                                <span class="data"><?= $post['data'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                            <!-- /carrossel-track -->
                        </div>
                        <!-- /carrossel-viewport -->

                        <button class="prev" title="Artigo anterior"><i class="fas fa-caret-left"></i></button>
                        <button class="next" title="Próximo artigo"><i class="fas fa-caret-right"></i></button>

                    </div>
                    <!-- /box-artigos -->

                </div>
            </div>
        </section>
        <section id="clientes">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12">
                        <div class="artigos-titulo">
                            <h2>NOSSOS CLIENTES:</h2>
                            <br>
                            <p>Ótimas empresas com quem trabalhamos!</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="box-clientes">
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/home/clientes/cliente-1.webp" alt="Petrobras" loading="lazy" >
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/home/clientes/cliente-2.webp" alt="Construtoras Entre Rios" loading="lazy" >
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/home/clientes/cliente-3.webp" alt="Vertical Parts" loading="lazy" >
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/home/clientes/cliente-4.webp" alt="RMB Soluções Industriais" loading="lazy" >
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/home/clientes/cliente-5.webp" alt="Olivia Azul" loading="lazy" >
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/home/clientes/cliente-6.webp" alt="Frigosaj" loading="lazy" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="<?php $url ?>assets/js/artigos.js"></script>
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