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
    <section id="orcamento">
        <div class="container">
            <div class="flex">
                <div class="col-lg-6 col-md-6">
                    <div class="form-wrapper mt-100">
                        <h2 style="color: var(--main)">ORÇAMENTO:</h2>
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
                                <input name="Local do Form" value="Formulário Orçamento: <?php echo $canonical; ?>" type="hidden">
                                <button type="submit"
                                    data-emailsReceberEnvio="<?php echo $emailContato; ?>"
                                    data-emailsReceberCopia=""
                                    data-emailsReceberCopiaOculta=""
                                    data-siteCliente="<?php echo $nome_empresa; ?>"
                                    data-ajax="Solicitação - Orçamento">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="info-wrapper mt-100">
                        <p>Bem-vindo à nossa página de orçamento para equipamentos elétricos, onde você pode dar o primeiro passo rumo a soluções elétricas confiáveis e eficientes. Como especialistas em fornecer equipamentos de alta qualidade, incluindo transformadores, estamos dedicados a atender às suas necessidades energéticas de maneira personalizada e econômica.</p>

                        <p>Com muito orgulho, representamos comercialmente uma seleção excepcional de parceiros de equipamentos elétricos que compartilham nossa visão de inovação e excelência. Esses parceiros são líderes em suas respectivas áreas, fornecendo soluções de alta qualidade que impulsionam a eficiência e a confiabilidade nos setores elétricos.</p>

                        <p>Para solicitar um orçamento ou tirar alguma dúvida, preencha o formulário, nós da Inova Equipamentos Elétricos estaremos a disposição para auxiliar da melhor maneira possível.</p>

                        <p>Você também pode entrar em contato conosco pelo e-mail ou no WhatsApp através dos links abaixo.</p>

                        <p>Caso esteja com urgência, ligue para a Inova Equipamentos Elétricos e fale com nossa equipe! Temos diversos atendentes prontos para atendê-lo(a) e ajudá-lo(a) com o máximo de agilidade e segurança.</p>

                        <p>Estamos comprometidos em fornecer soluções elétricas que atendam às suas expectativas e requisitos. Ao solicitar um orçamento conosco, você está dando o primeiro passo para garantir um fornecimento de energia eficaz e seguro para sua aplicação. Entre em contato conosco hoje mesmo e deixe-nos ajudar você a construir um sistema elétrico confiável e de alto desempenho.</p>

                        <h2>CONTATOS:</h2>
                        <p><strong>Telefone:</strong> (11) 1234-5678</p>
                        <p><strong>WhatsApp:</strong> (11) 98765-4321</p>
                        <p><strong>E-mail:</strong> contato@inovaequipamentos.com.br</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    </main>
    <script src="<?php echo $url; ?>assets/js/produto.js"></script>
    <script>
        document.querySelec