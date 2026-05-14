<?php
$h1          = "Manutenção em Cabine Primária";
$title       = "Manutenção Preventiva e Corretiva em Cabine Primária";
$description = "Manutenção preventiva e corretiva de cabines primárias pela INOVA. Inspeção, ensaios, limpeza e reparos para segurança, desempenho e confiabilidade da sua subestação.";
$keywords    = "manutenção cabine primária, manutenção preventiva, manutenção corretiva, subestação, ensaios elétricos, transformador, inspeção";

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
        <section id="banner" style="background:
    linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
    url(imagens/main/portifolio-items/banner-manutencao-preventiva-corretiva.webp)!important; background-size: cover!important; background-position: center!important;">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-box">
                            <h1>
                                MANUTENÇÃO PREVENTIVA E CORRETIVA EM CABINE PRIMÁRIA
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
                        <div class="info-wrapper">
                            <p>A manutenção na cabine primária é crucial para garantir a segurança, a eficiência e a continuidade do fornecimento de energia elétrica. Essa prática envolve uma série de ações e procedimentos que visam manter os equipamentos em perfeito estado de funcionamento, prevenindo falhas e otimizando a performance.</p>
                            <h2>PRINCIPAIS RAZÕES PARA A MANUTENÇÃO EM CABINE PRIMÁRIA:</h2>

                            <ol>
                                <li><span>Segurança:</span> A manutenção adequada previne falhas que podem resultar em incêndios, explosões ou outros acidentes graves, protegendo os trabalhadores e as instalações.</li>

                                <li><span>Confiabilidade:</span> Manter os equipamentos em boas condições reduz a probabilidade de interrupções no fornecimento de energia, o que é vital para operações industriais e comerciais.</li>

                                <li><span>Eficiência Operacional:</span> Equipamentos bem preservados operam de forma mais eficiente, reduzindo perdas de energia e custos operacionais.</li>

                                <li><span>Vida Útil dos Equipamentos:</span> A manutenção regular prolonga a vida útil dos componentes da cabine primária, adiando a necessidade de investimentos em novos equipamentos.</li>

                                <li><span>Conformidade com Normas e Regulamentações:</span> A manutenção garante que a instalação esteja em conformidade com as normas de segurança e regulamentações aplicáveis, evitando penalidades legais.</li>

                                <li><span>Prevenção de Avarias e Desgastes:</span> Inspeções e manutenções regulares ajudam a identificar e corrigir problemas antes que causem falhas significativas ou danifiquem permanentemente os equipamentos.</li>
                            </ol>

                            <p>Portanto, a manutenção é essencial para assegurar um fornecimento de energia estável, seguro e econômico. Realizar manutenções regulares ajuda a prevenir falhas, evitar interrupções no fornecimento e reduzir custos operacionais. Além disso, garante a conformidade com normas de segurança, prolonga a vida útil dos equipamentos e assegura um funcionamento eficiente do sistema.</p>
                        </div>
                    </div>
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
                                    <input name="Local do Form" value="Formulário Manutenção Cabine Primária: <?php echo $canonical; ?>" type="hidden">
                                    <button type="submit"
                                        data-emailsReceberEnvio="<?php echo $emailContato; ?>"
                                        data-emailsReceberCopia=""
                                        data-emailsReceberCopiaOculta=""
                                        data-siteCliente="<?php echo $nome_empresa; ?>"
                                        data-ajax="Solicitação - Manutenção Cabine Primária">Enviar</button>
                                </div>
                            </form>
                            <div class="box-buttons mt-40">
                                <a href="<?php echo $url; ?>loja" class="button">PRODUTOS</a>
                                <a href="<?php echo $url; ?>blog" class="button">BLOG</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
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