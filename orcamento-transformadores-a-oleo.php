<?php
$h1           = "Loja";
$title         = "Loja";
$description = ""; // Manter entre 130 a 160 caracteres
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
                                    <input name="Local do Form" value="Formulário Orçamento Transformador a Óleo: <?php echo $canonical; ?>" type="hidden">
                                    <button type="submit"
                                        data-emailsReceberEnvio="<?php echo $emailContato; ?>"
                                        data-emailsReceberCopia=""
                                        data-emailsReceberCopiaOculta=""
                                        data-siteCliente="<?php echo $nome_empresa; ?>"
                                        data-ajax="Solicitação - Orçamento Transformador a Óleo">Enviar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="info-wrapper">
                            <h2>TRANSFORMADOR A ÓLEO COM 2 ANOS DE GARANTIA!</h2>
                            <p>Nós da Inova Equipamentos Elétricos estamos em constante evolução e desenvolvimento juntamente com nossos parceiros para entregar um Transformador a Óleo cada vez mais inovador, eficiente e com alta qualidade e durabilidade. Nossos parceiros investem em especialistas que otimizam constantemente nosso processo de produção de Transformador a Óleo, aumentando sempre nossos padrões de qualidade.</p>
                            <p>Com muito orgulho, representamos comercialmente uma seleção excepcional de parceiros de equipamentos elétricos que compartilham nossa visão de inovação e excelência. Esses parceiros são líderes em suas respectivas áreas, fornecendo soluções de alta qualidade que impulsionam a eficiência e a confiabilidade nos setores elétricos.</p>
                            <p>Tudo pensando sempre em melhor atender a sua empresa e a sua necessidade de forma plena no que se tratar de energia. “Fabricamos Transformadores especiais que seja conforme a necessidade do cliente.”</p>
                            <p><span style="color: var(--main);">Transformador a Óleo: </span> Os transformadores a óleo são equipamentos com grande aplicabilidade. Nos sistemas de distribuição de energia, por exemplo, são usados transformadores elevadores de tensão, para haver menos perdas na transmissão de energia</p>
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
                            <p>+ Potência: Transformadores a Óleo de 15 até 5000KVA (Outras potências sobre encomenda);</p>
                            <p>+ Classe de Tensão Primária: 15KV, 25KV e 36,2KV;</p>
                            <p>+ Opções de Tensão do Primário (Outras tensões sobre encomenda);</p>
                            <p>15KV: 13800/13200/12600/12000/11400V;</p>
                            <p>25KV: 24200/23100/22000/20900/19800V;</p>
                            <p>36,2KV: 36000/34500/33000/31500/30000/V;</p>
                            <p>(Transformador com Tap’s além destes, informar na solicitação do orçamento).</p>
                            <p>+ Opções de Tensão do Secundário:</p>
                            <p>220/127V, 380/220V e 440/254V (Outras tensões sobre encomenda);</p>
                            <p>+ Grupo de Ligação Dyn1;</p>
                            <p>+ Frequência: 60 Hz;</p>
                            <p>+ Número de Fases: 3 (Trifásico);</p>
                            <p>+ Método de resfriamento: ONAN (Óleo Isolante Mineral);</p>
                            <p>+ Fator: K1;</p>
                            <p>+ Elevação de Temperatura: 55°;</p>
                            <p>+ Classe térmica: 105 ºC;</p>
                            <p>+ Tipo Comutação: Comutação de derivação sem carga e com acionamento externo;</p>
                            <p>+ Grau de Proteção: IP54;</p>
                            <p>+ Instalação: Ao Tempo;</p>
                            <p>+ Pintura: Cor munsel N6,5;</p>
                            <p>+ Material dos condutores de AT/BT: Aluminio/Aluminio;</p>
                            <p>+ Buchas primárias e secundárias e Terminais;</p>
                            <p>+ Terminais de Aterramento;</p>
                            <p>+ Orelhas para suspensão;</p>
                            <p>+ Suporte de fixação para poste;</p>
                            <p>+ Dispositivo de alívio de pressão;</p>
                            <p>+ Registro Inferior;</p>
                            <p>+ Registro Superior;</p>
                            <p>+ Placa de identificação do Transformador;</p>
                            <p>+ Norma ABNT NBR 5440;</p>
                            <p>+ Normas das Concessionárias de Energia Elétrica;</p>
                            <p>+ Outras características por solicitação.</p>
                            <p>+ 2 anos de garantia.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <?php
                        $imagens = [

                            // Transformadores a Óleo
                            [
                                "imagem" => "transformador_a_oleo_15kva.webp",
                                "titulo" => "Transformador a Óleo 15 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_30kva.webp",
                                "titulo" => "Transformador a Óleo 30 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_45kva.webp",
                                "titulo" => "Transformador a Óleo 45 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_75kva.webp",
                                "titulo" => "Transformador a Óleo 75 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_112kva.webp",
                                "titulo" => "Transformador a Óleo 112,5 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_150kva.webp",
                                "titulo" => "Transformador a Óleo 150 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_225kva.webp",
                                "titulo" => "Transformador a Óleo 225 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_300kva.webp",
                                "titulo" => "Transformador a Óleo 300 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_500kva.webp",
                                "titulo" => "Transformador a Óleo 500 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_750kva.webp",
                                "titulo" => "Transformador a Óleo 750 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_1000kva.webp",
                                "titulo" => "Transformador a Óleo 1000 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_1500kva.webp",
                                "titulo" => "Transformador a Óleo 1500 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_2000kva.webp",
                                "titulo" => "Transformador a Óleo 2000 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_2500kva.webp",
                                "titulo" => "Transformador a Óleo 2500 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_oleo_3000kva.webp",
                                "titulo" => "Transformador a Óleo 3000 KVA",
                            ],
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
                            <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A ÓLEO</h2>
                            <p>As bobinas dos Transformadores a óleo são fabricadas em alumínio, revestidas por material isolante, imerso em óleo isolante mineral e confeccionadas em ambiente controlado e apropriado.</p>
                            <p>Nossos núcleos magnéticos são compostos de chapas de aço silício da mais alta qualidade. Por fim, os radiadores são imprescindíveis para melhor desempenho dos Transformadores a óleo na dissipação do calor, assim sendo possível fazer com que o transformador consiga trabalhar com temperaturas inferiores aos transformadores a seco.</p>
                            <p>Todos os insumos aplicados na construção de nossos transformadores a óleo contam com o mais alto padrão de qualidade, selo e certificação que são rigorosamente seguidos em nossos processos.</p>

                        </div>
                        <div class="col-lg-6 col-md-6">

                            <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A ÓLEO:</h2>
                            <p>Dentro de nossos modelos contamos com transformadores a óleo para atender todas as suas necessidades como cliente.</p>
                            <p>Realizamos instalação de cabines simplificadas e convencionais onde necessita de uma grande potência, assim como também atendemos com estudo e orientação sobre instalação em locais onde nossos transformadores podem ser instalados com segurança, não apresentando risco ao fluxo de pessoas próximas, distribuição, geração e consumo de energia.</p>

                        </div>
                        <div class="col-lg-6 col-md-6">

                            <h2>4 – LUGARES ONDE O TRANSFORMADOR A ÓLEO PODE SER APLICADO:</h2>
                            <p>Transformadores para comércio, indústrias, cooperativas, instaladoras, empreiteiras, subestações indústrias, maquinas elétricas, instalações onde há grande movimentação de pessoas e área pública, próximo de centros de carga, calçadas, praças, escolas, e onde há necessidade de transformadores.</p>

                        </div>
                        <div class="col-lg-6 col-md-6">

                            <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                            <p>No nossos diferenciais estão destacados a alta durabilidade dos nossos equipamentos, instalação facilitada interna ou externa, o baixo custo de fabricação e falta na necessidade de manutenção constantes como substituição de óleo isolante, juntas, guarnições e acessórios e mesmo assim sendo simples a execução.</p>

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