<?php
$h1          = "Instalação e Desinstalação";
$title       = "Instalação e Desinstalação de Transformadores";
$description = "Serviços técnicos de instalação e desinstalação de transformadores a óleo, a seco e pedestal pela INOVA. Execução segura, ágil e em conformidade com normas ABNT.";
$keywords    = "instalação de transformadores, desinstalação transformador, montagem transformador, serviço técnico, transformador a óleo, a seco, pedestal";

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
                                INSTALAÇÃO E DESINSTALAÇÃO DE TRANSFORMADORES
                                <br><br>
                                UMA SOLUÇÃO ABRANGENTE PARA TODAS AS SUAS DEMANDAS!
                            </h1>
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
                                <div class="form-row form-row--full">
                                    <div class="form-group">
                                        <textarea name="Descrição do Equipamento" class="form-control" placeholder="Descrição do Equipamento:" rows="6"></textarea>
                                    </div>
                                </div>

                                <div class="form-row form-row--submit">
                                    <input name="Local do Form" value="Formulário Instalação/Desinstalação: <?php echo $canonical; ?>" type="hidden">
                                    <button type="submit"
                                        data-emailsReceberEnvio="<?php echo $emailContato; ?>"
                                        data-emailsReceberCopia=""
                                        data-emailsReceberCopiaOculta=""
                                        data-siteCliente="<?php echo $nome_empresa; ?>"
                                        data-ajax="Solicitação - Instalação/Desinstalação">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="info-wrapper">
                            <p>Transformadores são componentes fundamentais na distribuição de energia elétrica, usados tanto em áreas urbanas quanto rurais. Podem ser instalados no chão ou em postes, de acordo com as necessidades específicas da rede elétrica e características do local. Este texto aborda os procedimentos de instalação e desinstalação de transformadores em ambas as situações.</p>

                            <h2>INSTALAÇÃO E DESINSTALAÇÃO:</h2>
                            <p>Para a <span>instalação de transformadores no chão</span>, é necessário usar um guindaste, munck ou outro equipamento de elevação para posicionar o transformador na base previamente preparada, garantindo que esteja nivelado e firmemente posicionado. Em seguida, realizar a conexão dos cabos de entrada e saída conforme o esquema elétrico fornecido, certificando-se de que todas as conexões estão firmes e seguras. Verificar o nível de óleo, se aplicável, e completar caso necessário, utilizando o óleo isolante apropriado, além de inspecionar a vedação para evitar vazamentos. Por fim, energizar o transformador e monitorar o desempenho inicial.</p>

                            <p>Para a <span>instalação em postes</span>, deve-se utilizar um guindaste, munck ou outro equipamento de elevação para posicionar o transformador no local desejado no poste, fixando-o com suportes ou plataformas adequadas, usando parafusos e braçadeiras. Conectar os cabos de alta e baixa tensão conforme as especificações técnicas e verificar todas as conexões para garantir segurança. Se o transformador for a óleo, checar o nível e a vedação para evitar vazamentos. Após isso, energizar o equipamento e monitorar seu funcionamento inicial.</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="info-wrapper">
                            <p>Para a <span>desinstalação de transformadores no chão</span>, é necessário desconectar o transformador da rede elétrica, garantindo a ausência de tensão. Depois, remover os cabos de entrada e saída, etiquetando-os para referência futura, se necessário, e usar equipamentos de elevação para retirar o transformador da base.</p>

                            <p>Na <span>desinstalação em postes</span>, deve-se desconectar o transformador, verificar a ausência de tensão, remover as conexões elétricas, etiquetar os cabos para referência futura e utilizar um guindaste para descer o transformador do poste.</p>
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