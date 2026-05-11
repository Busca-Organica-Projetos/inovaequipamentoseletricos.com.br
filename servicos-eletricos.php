<?php
$h1           = "Loja";
$title         = "Loja";
$description = ""; // Manter entre 130 a 160 caracteres
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
                                SERVIÇOS ELÉTRICOS
                                <br><br>
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
                            <div class="filtros">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/produtos/transformador_pedestal_3000kva.webp" alt="">
                                <!-- <svg class="card-seta" viewBox="0 0 100 12" preserveAspectRatio="none">
                                    <polygon points="0,12 45,12 50,0 55,12 100,12" fill="#f4f6f4" />
                                </svg> -->
                                <h2>Transformadores Pedestal</h2>
                            </div>
                            <div class="filtros">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/produtos/transformador_isolador_5kva.webp" alt="">
                                <!-- <svg class="card-seta" viewBox="0 0 100 12" preserveAspectRatio="none">
                                    <polygon points="0,12 45,12 50,0 55,12 100,12" fill="#f4f6f4" />
                                </svg> -->
                                <h2>Transformadores Isoladores</h2>
                            </div>
                            <div class="filtros">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/produtos/transformador_isolador_5kva.webp" alt="">
                                <!-- <svg class="card-seta" viewBox="0 0 100 12" preserveAspectRatio="none">
                                    <polygon points="0,12 45,12 50,0 55,12 100,12" fill="#f4f6f4" />
                                </svg> -->
                                <h2>Autotransformadores</h2>
                            </div>
                            <div class="filtros">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/produtos/transformador_a_seco_1250kva.webp" alt="">
                                <!-- <svg class="card-seta" viewBox="0 0 100 12" preserveAspectRatio="none">
                                    <polygon points="0,12 45,12 50,0 55,12 100,12" fill="#f4f6f4" />
                                </svg> -->
                                <h2>Transformadores a Seco</h2>
                            </div>
                            <div class="filtros">
                                <img class="img-responsive" src="<?php $url ?>imagens/main/produtos/transformador_a_oleo_150kva.webp" alt="">
                                <!-- <svg class="card-seta" viewBox="0 0 100 12" preserveAspectRatio="none">
                                    <polygon points="0,12 45,12 50,0 55,12 100,12" fill="#f4f6f4" />
                                </svg> -->
                                <h2>Transformadores a Óleo</h2>
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
                                    <input name="Local do Form" value="Formulário Serviços Elétricos: <?php echo $canonical; ?>" type="hidden">
                                    <button type="submit"
                                        data-emailsReceberEnvio="<?php echo $emailContato; ?>"
                                        data-emailsReceberCopia=""
                                        data-emailsReceberCopiaOculta=""
                                        data-siteCliente="<?php echo $nome_empresa; ?>"
                                        data-ajax="Solicitação - Serviços Elétricos">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="info-wrapper">
                            <h2>LOCAÇÃO DE TRANSFORMADORES E EQUIPAMENTOS ELÉTRICOS:</h2>
                            <p>Seja para um projeto de construção, evento temporário ou uma demanda sazonal, a locação de transformadores e equipamentos elétricos oferece uma solução versátil e conveniente para suprir suas necessidades de energia. Na nossa empresa, entendemos a importância vital de contar com recursos elétricos confiáveis e eficientes para manter suas operações em pleno funcionamento. É por isso que em conjunto com nossos parceiros oferecemos um amplo espectro de equipamentos prontos para atender às suas demandas específicas.</p>

                            <h2>NOSSOS SERVIÇOS:</h2>
                            <ul>
                                <li>Manutenção Preventiva e Corretiva de Cabine Primárias (Convencional, Simplificada e Blindada);</li>
                                <li>Instalação de Acessórios para Cabine Primária;</li>
                                <li>Instalação de Transformadores a Óleo, Pedestal e a Seco;</li>
                                <li>Manutenção Preventiva de Transformadores a Óleo, Pedestal e a Seco;</li>
                                <li>Análise Físico-Químico, Cromatográfica, Teor de PCB;</li>
                                <li>Filtragem de Óleo, Troca de Óleo;</li>
                                <li>Instalação de Relé de Temperatura e Sistema de Ventilação Forçada;</li>
                                <li>Parametrização de Relé de Proteção para Disjuntor e Transformador a Seco;</li>
                                <li>Serviço de Testes de HIPOT e MEGGER;</li>
                                <li>Instalação de Disjuntor de Média Tensão;</li>
                                <li>Manutenção de Disjuntor de Média e Baixa Tensão;</li>
                                <li>Manutenção e Limpeza de Painéis Solares;</li>
                                <li>Visita Técnica.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="info-wrapper">
                            <h2>O QUE NOS DIFERENCIA:</h2>
                            <p><span>Experiência e Conhecimento:</span> Nossos parceiros contam com equipes compostas por profissionais experientes que possuem amplo conhecimento no campo elétrico, garantindo que cada projeto seja executado com maestria.</p>

                            <p><span>Qualidade e Segurança:</span> Priorizamos a qualidade em cada serviço que oferecemos. Seguimos as melhores práticas do setor para garantir a segurança de nossos clientes e suas propriedades.</p>

                            <p><span>Compromisso com o Cliente:</span> Sua satisfação é nossa prioridade máxima. Estamos empenhados em oferecer um atendimento personalizado, soluções eficazes e resultados duradouros.</p>

                            <p>Em resumo, os serviços elétricos são projetados para atender às suas necessidades, independentemente da complexidade do projeto. Conte conosco para cuidar de seus sistemas elétricos de maneira confiável, eficiente e profissional. Entre em contato para saber mais sobre como podemos ser seus parceiros de confiança no mundo dos serviços elétricos.</p>
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