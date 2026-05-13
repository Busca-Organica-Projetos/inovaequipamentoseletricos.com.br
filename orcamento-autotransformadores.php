<?php
$h1          = "Orçamento de Autotransformadores";
$title       = "Orçamento de Autotransformadores";
$description = "Solicite um orçamento de autotransformadores com a Inova Equipamentos Elétricos. Soluções eficientes para adequação de tensão em aplicações industriais e comerciais.";
$keywords    = $title;

include "includes/_configuracoes.php";
$borg->cssCompress(array(
    "paginas/orcamento"
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
                                            <option>Instalador</option>
                                            <option>Eletricista</option>
                                            <option>Proprietário</option>
                                            <option>Compras</option>
                                            <option>Outros</option>
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
                                            <option>Outros</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="Destino da Mercadoria" class="form-control">
                                            <option value="" disabled selected>O destino da mercadoria é para:</option>
                                            <option>Comercialização</option>
                                            <option>Consumidor final (uso - consumo ou ativo imobilizado)</option>
                                            <option>Consumidor final não contribuinte de ICMS</option>
                                            <option>Industrialização</option>
                                            <option>Outros</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row form-row--full">
                                    <div class="form-group">
                                        <select name="Potência" class="form-control">
                                            <option value="" disabled selected>Potência:</option>
                                            <option>15KVA</option>
                                            <option>30KVA</option>
                                            <option>45KVA</option>
                                            <option>75KVA</option>
                                            <option>112.5KVA</option>
                                            <option>150KVA</option>
                                            <option>225KVA</option>
                                            <option>300KVA</option>
                                            <option>500KVA</option>
                                            <option>750KVA</option>
                                            <option>1000KVA</option>
                                            <option>1500KVA</option>
                                            <option>2000KVA</option>
                                            <option>2500KVA</option>
                                            <option>3000KVA</option>
                                            <option>Outros</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <select name="Tensão Primária" class="form-control">
                                            <option value="" disabled selected>Tensão Primária:</option>
                                            <option>13.800V</option>
                                            <option>24.200V</option>
                                            <option>34.500V</option>
                                            <option>Outros</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="Tensão Secundária" class="form-control">
                                            <option value="" disabled selected>Tensão Secundária:</option>
                                            <option>220/127V</option>
                                            <option>380/220V</option>
                                            <option>440/254V</option>
                                            <option>Outros</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row form-row--full">
                                    <div class="form-group">
                                        <textarea name="Descrição do Equipamento" class="form-control" placeholder="Descrição do Equipamento:" rows="6"></textarea>
                                    </div>
                                </div>

                                <div class="form-row form-row--submit">
                                    <input name="Local do Form" value="Formulário Orçamento Autotransformador: <?php echo $canonical; ?>" type="hidden">
                                    <button type="submit"
                                        data-emailsReceberEnvio="<?php echo $emailContato; ?>"
                                        data-emailsReceberCopia=""
                                        data-emailsReceberCopiaOculta=""
                                        data-siteCliente="<?php echo $nome_empresa; ?>"
                                        data-ajax="Solicitação - Orçamento Autotransformador">Enviar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="info-wrapper">
                            <h2>AUTOTRANSFORMADOR COM 2 ANOS DE GARANTIA!</h2>
                            <p>Nós da Inova Equipamentos Elétricos estamos em constante evolução e desenvolvimento juntamente com nossos parceiros para entregar um AutoTransformador cada vez mais inovador, eficiente e com alta qualidade e durabilidade. Nossos parceiros investem em especialistas que otimizam constantemente nosso processo de produção de Autotransformador, aumentando sempre nossos padrões de qualidade.</p>
                            <p>Com muito orgulho, representamos comercialmente uma seleção excepcional de parceiros de equipamentos elétricos que compartilham nossa visão de inovação e excelência. Esses parceiros são líderes em suas respectivas áreas, fornecendo soluções de alta qualidade que impulsionam a eficiência e a confiabilidade nos setores elétricos.</p>
                            <p>Tudo pensando sempre em melhor atender a sua empresa e a sua necessidade de forma plena no que se tratar de energia. “Fabricamos Transformadores especiais que seja conforme a necessidade do cliente.”</p>
                            <p><span style="color: var(--main);">Autotransformador: </span> O modelo do AutoTransformador é feito para entender a tensão que a rede de energia está enviando para um equipamento e principalmente qual a tensão que este equipamento suporta.</p>
                            <p>Neste processo, ele entenderá qual a voltagem necessária para manter tudo funcionando sem sobrecarga e sem falta de energia. Protegendo todos os componentes do equipamento.</p>
                            <p>Entre em contato com nossos especialistas no formulário. Retornaremos o mais rápido possível sua solicitação.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="informacoes">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-6 col-md-6">
                        <div class="infos">

                            <h2>1 – INFORMAÇÕES TÉCNICA DO EQUIPAMENTO:</h2>
                            <p>+ Potência: AutoTransformador de 5 até 3000KVA (Outras potências sobre encomenda);</p>
                            <p>+ Tensões (Outras tensões sobre encomenda):</p>
                            <p>220-380/220V e 380-220/127V;</p>
                            <p>440-220/127V e 220-440/254V;</p>
                            <p>440-380/220V e 380-440/254V;</p>
                            <p>440-380-220V.</p>
                            <p>+ Frequência: 60 Hz;</p>
                            <p>+ Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</p>
                            <p>+ Fator: K1;</p>
                            <p>+ Classe de Temperatura: F (155°);</p>
                            <p>+ Número de Fases: Trifásico;</p>
                            <p>+ Grau de Proteção: IP00/IP21/IP54;</p>
                            <p>+ Refrigeração: Ar (A seco);</p>
                            <p>+ Enrolamento: Alumínio, com verniz impregnado;</p>
                            <p>+ 2 anos de garantia.</p>

                            <h2>GRAU DE PROTEÇÃO:</h2>
                            <p>+ IP00 – Uso Abrigado;</p>
                            <p>+ IP21 – Uso Abrigado;</p>
                            <p>+ IP54 – Uso Externo;</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <?php
                        $imagens = [
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 3 KVA",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 5 KVA",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 7,5 KVA",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 10 KVA",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 15 KVA",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 20 KVA",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 25 KVA",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 30 KVA",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 40 KVA",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 50 KVA",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 60 KVA",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 75 KVA",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 90 KVA",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 100 KVA",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 125 KVA",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 150 KVA - Vista Lateral",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 200 KVA - Vista Lateral",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 300 KVA - Vista Lateral",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 500 KVA - Vista Lateral",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 750 KVA - Vista Lateral",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 1000 KVA - Vista Lateral",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 1500 KVA - Vista Lateral",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 2000 KVA - Vista Lateral",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 2500 KVA - Vista Lateral",
                            ],
                            [
                                "imagem" => "transformador_isolador_5kva.webp",
                                "titulo" => "Autotransformador 3000 KVA - Vista Lateral",
                            ]
                        ];
                        ?>
                        <div class="bv-carrossel">
                            <div class="bv-carrossel__viewport">
                                <div class="bv-carrossel__track">
                                    <?php foreach ($imagens as $item): ?>
                                        <div class="bv-carrossel__slide">
                                            <img
                                                src="<?php echo $url; ?>imagens/main/produtos/<?= $item['imagem'] ?>"
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
                    </div>
                    <div class="box-info">
                        <div class="col-lg-6 col-md-6">
                            <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR:</h2>
                            <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                            <p>– Núcleo magnético composto de chapas de silício.</p>
                        </div>
                        <div class="col-lg-6 col-md-6">

                            <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR::</h2>
                            <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                        </div>
                        <div class="col-lg-6 col-md-6">

                            <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR:</h2>
                            <p>– Ar condicionado;</p>
                            <p>– Eletroeletrônicos em geral;</p>
                            <p>– Painéis;</p>
                            <p>– Máquinas;</p>
                            <p>– Entre outros.</p>

                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                            <p>– O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</p>
                            <p>– Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor. Portanto, as perdas no transformador são menores e aumentam a eficiência do transformador.</p>
                            <p>– A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</p>
                            <p>– AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</p>
                            <p>– Por conter uma estrutura simples e compacta, é de grande praticidade suas manutenções preventivas com longa periodicidade entre elas.</p>
                        </div>
                    </div>
                </div>
        </section>
    </main>
    <script src="<?php echo $url; ?>assets/js/orcamento.js"></script>
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