<?php
$h1          = "Locação";
$title       = "Locação";
$description = "A Inova Equipamentos Elétricos oferece locação de transformadores e equipamentos elétricos com qualidade, segurança e suporte para aplicações industriais e comerciais.";
$keywords    = $title;

include "includes/_configuracoes.php";
$borg->cssCompress(array(
    "paginas/locacao"
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
                                LOCAÇÃO DE TRANSFORMADORES!
                                <br>
                                <br>
                                UMA SOLUÇÃO ABRANGENTE PARA TODAS AS SUAS DEMANDAS!
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">TODOS</a></li>
                        <li class="breadcrumb-item"><a href="#">Loja</a></li>
                        <li class="breadcrumb-item"><a href="#">Transformador a Óleo</a></li>
                        <li class="breadcrumb-item active" aria-current="page"></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section id="filtros">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12">
                        <div class="box-filtros">
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="filtros">
                                    <a href="<?= $url ?>portfolio-item/locacao-transformadores-pedestal/">
                                        <img class="img-responsive" src="<?php $url ?>imagens/main/produtos/transformador-pedestal-3000kva.webp" alt="">
                                    </a>
                                    <!-- <svg class="card-seta" viewBox="0 0 100 12" preserveAspectRatio="none">
                                        <polygon points="0,12 45,12 50,0 55,12 100,12" fill="#f4f6f4" />
                                    </svg> -->
                                    <h2>Transformadores Pedestal</h2>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="filtros">
                                    <a href="<?php $url ?>portfolio-item/locacao-transformadores-isoladores/">
                                        <img class="img-responsive" src="<?php $url ?>imagens/main/produtos/transformador_isolador_5kva.webp" alt="">
                                    </a>
                                    <!-- <svg class="card-seta" viewBox="0 0 100 12" preserveAspectRatio="none">
                                        <polygon points="0,12 45,12 50,0 55,12 100,12" fill="#f4f6f4" />
                                    </svg> -->
                                    <h2>Transformadores Isoladores</h2>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="filtros">
                                    <a href="<?php $url ?>portfolio-item/locacao-autotransformadores/">
                                        <img class="img-responsive" src="<?php $url ?>imagens/main/produtos/transformador_isolador_5kva.webp" alt="" loading="lazy">
                                    </a>
                                    <!-- <svg class="card-seta" viewBox="0 0 100 12" preserveAspectRatio="none">
                                        <polygon points="0,12 45,12 50,0 55,12 100,12" fill="#f4f6f4" />
                                    </svg> -->
                                    <h2>Autotransformadores</h2>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="filtros">
                                    <a href="<?php $url ?>portfolio-item/locacao-transformadores-a-seco/">
                                        <img class="img-responsive" src="<?php $url ?>imagens/main/produtos/transformador_a_seco_1250kva.webp" alt="" loading="lazy">
                                    </a>
                                    <!-- <svg class="card-seta" viewBox="0 0 100 12" preserveAspectRatio="none">
                                        <polygon points="0,12 45,12 50,0 55,12 100,12" fill="#f4f6f4" />
                                    </svg> -->
                                    <h2>Transformadores a Seco</h2>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="filtros">
                                    <a href="<?php $url ?>portfolio-item/locacao-transformadores-a-oleo/">
                                        <img class="img-responsive" src="<?php $url ?>imagens/main/produtos/transformador_a_oleo_150kva.webp" alt="" loading="lazy">
                                    </a>
                                    <!-- <svg class="card-seta" viewBox="0 0 100 12" preserveAspectRatio="none">
                                        <polygon points="0,12 45,12 50,0 55,12 100,12" fill="#f4f6f4" />
                                    </svg> -->
                                    <h2>Transformadores a Óleo</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="orcamento">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-wrapper">
                            <h2>ORÇAMENTO:</h2>
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
                                    <input name="Local do Form" value="Formulário Locação: <?php echo $canonical; ?>" type="hidden">
                                    <button type="submit"
                                        data-emailsReceberEnvio="<?php echo $emailContato; ?>"
                                        data-emailsReceberCopia=""
                                        data-emailsReceberCopiaOculta=""
                                        data-siteCliente="<?php echo $nome_empresa; ?>"
                                        data-ajax="Solicitação - Locação">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="info-wrapper">
                            <h2>LOCAÇÃO DE TRANSFORMADORES E EQUIPAMENTOS ELÉTRICOS:</h2>
                            <p>Seja para um projeto de construção, evento temporário ou uma demanda sazonal, a locação de transformadores e equipamentos elétricos oferece uma solução versátil e conveniente para suprir suas necessidades de energia. Na nossa empresa, entendemos a importância vital de contar com recursos elétricos confiáveis e eficientes para manter suas operações em pleno funcionamento. É por isso que em conjunto com nossos parceiros oferecemos um amplo espectro de equipamentos prontos para atender às suas demandas específicas.</p>

                            <h2>VANTAGENS:</h2>
                            <p><span>Adaptação à Demanda:</span> Cada projeto tem suas próprias características e requisitos de energia. Com nossa locação de equipamentos elétricos, você pode ajustar a capacidade de transformadores, geradores e painéis de distribuição de acordo com suas necessidades, evitando desperdícios de recursos.</p>
                            <p><span>Economia de Custos:</span> Investir em equipamentos elétricos permanentes pode ser uma despesa significativa, especialmente para projetos de curto prazo. A locação oferece uma alternativa econômica, eliminando os custos iniciais elevados e permitindo que você pague apenas pelo período de uso.</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="info-wrapper">
                            <p><span>Manutenção Simplificada:</span> Manter e reparar equipamentos elétricos pode ser complexo e dispendioso. Com a locação, a responsabilidade pela manutenção, inspeções regulares e eventuais reparos fica por nossa conta, liberando você para se concentrar em seu projeto principal.</p>
                            <p><span>Flexibilidade Operacional:</span> A dinâmica de projetos varia, e a locação oferece a flexibilidade de aumentar ou reduzir sua capacidade elétrica conforme necessário. Isso é especialmente valioso em setores onde as demandas de energia podem mudar rapidamente.</p>
                            <p><span>Suporte Técnico Especializado:</span> Nossa equipe de especialistas está à disposição para oferecer orientações técnicas, suporte durante a instalação e soluções para quaisquer desafios que possam surgir. Garantimos que você esteja bem assistido ao longo de todo o processo.</p>
                            <p><span>Soluções Personalizadas:</span> Não importa se você está lidando com uma construção, um evento ou uma situação emergencial, estamos prontos para adaptar nossos serviços de locação de acordo com suas necessidades específicas.</p>
                            <p><span>Confiança e Excelência:</span> Nosso compromisso é fornecer equipamentos elétricos de qualidade superior, manutenção confiável e atendimento excepcional ao cliente. Seja qual for o tamanho ou a natureza de sua demanda elétrica, estamos prontos para oferecer soluções de locação que impulsionam a eficiência e a produtividade de seus empreendimentos. Entre em contato conosco para explorar nossas opções de locação, solicitar um orçamento ou discutir como podemos ajudar a energizar o sucesso de seus projetos.</p>
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