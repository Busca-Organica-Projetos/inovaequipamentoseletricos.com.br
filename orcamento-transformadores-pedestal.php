<?php
$h1          = "Orçamento de Transformadores Pedestal";
$title       = "Orçamento de Transformadores Pedestal";
$description = "Solicite um orçamento de transformadores pedestal com a Inova Equipamentos Elétricos. Equipamentos seguros, eficientes e ideais para aplicações industriais e comerciais.";
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
                                    <input name="Local do Form" value="Formulário Orçamento Transformador Pedestal: <?php echo $canonical; ?>" type="hidden">
                                    <button type="submit"
                                        data-emailsReceberEnvio="<?php echo $emailContato; ?>"
                                        data-emailsReceberCopia=""
                                        data-emailsReceberCopiaOculta=""
                                        data-siteCliente="<?php echo $nome_empresa; ?>"
                                        data-ajax="Solicitação - Orçamento Transformador Pedestal">Enviar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="info-wrapper">
                            <h2>TRANSFORMADOR PEDESTAL COM 2 ANOS DE GARANTIA!</h2>
                            <p>Nós da Inova Equipamentos Elétricos estamos em constante evolução e desenvolvimento juntamente com nossos parceiros para entregar um Transformador Pedestal cada vez mais inovador, eficiente e com alta qualidade e durabilidade. Nossos parceiros investem em especialistas que otimizam constantemente nosso processo de produção de Transformador Pedestal, aumentando sempre nossos padrões de qualidade.</p>
                            <p>Com muito orgulho, representamos comercialmente uma seleção excepcional de parceiros de equipamentos elétricos que compartilham nossa visão de inovação e excelência. Esses parceiros são líderes em suas respectivas áreas, fornecendo soluções de alta qualidade que impulsionam a eficiência e a confiabilidade nos setores elétricos.</p>
                            <p>Tudo pensando sempre em melhor atender a sua empresa e a sua necessidade de forma plena no que se tratar de energia. “Fabricamos Transformadores especiais que seja conforme a necessidade do cliente.”</p>
                            <p><span style="color: var(--main);">Transformador Pedestal: </span> Um transformador pedestal é um dispositivo elétrico que converte a tensão da eletricidade, geralmente de alta para baixa voltagem. Ele é montado em um suporte elevado (pedestal) para protegê-lo de condições ambientais adversas e para evitar contato direto com o solo. Esses transformadores são comumente usados em áreas urbanas e rurais para distribuição de energia elétrica de forma segura e eficiente para residências e empresas.</p>
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
                            <p>+ Transformador Trifásico PAD-MOUNTED a Óleo de  45 até 1500KVA (Outras potências sobre encomenda);</p>
                            <p>+ Classe de Tensão Primária: 15KV, 25KV e 36,2KV;</p>
                            <p>+ Opções de Tensão do Primário (Outras tensões sobre encomenda);</p>
                            <p>15KV: 13800/13200/12600/12000/11400V;</p>
                            <p>25KV: 24200/23100/22000/20900/19800V;</p>
                            <p>36,2KV: 36000/34500/33000/31500/30000V;</p>
                            <p>(Transformador com Tap’s além destes, informar na solicitação do orçamento).</p>
                            <p>+ 220/127V, 380/220V e 440/254V (Outras tensões sobre encomenda);</p>
                            <p>+ Grau de Proteção IP54;</p>
                            <p>+ Grupo de Ligação Dyn1;</p>
                            <p>+ Frequência 60Hz;</p>
                            <p>+ Fator: K1;</p>
                            <p>+ Material dos condutores de AT/BT: Aluminio/Aluminio;</p>
                            <p>+ Método de resfriamento: ONAN (Óleo Isolante Mineral);</p>
                            <p>+ Produzido e ensaiado conforme Norma ABNT NBR 5356</p>
                            <p>+ 2 anos de garantia.</p>

                            <h2>ACESSÓRIOS:</h2>
                            <p>+ Orelhas de suspensão;</p>
                            <p>+ Placa de Identificação;</p>
                            <p>+ Meios de Aterramento;</p>
                            <p>+ Nível de Óleo tipo coluna;</p>
                            <p>+ Registro Inferior;</p>
                            <p>+ Registro Superior;</p>
                            <p>+ Válvula de alívio de pressão sem contato;</p>
                            <p>+ Pintura de acabamento na cor Verde Munsell;</p>
                            <p>+ Terminais de BT;</p>
                            <p>+ Base de Fixação;</p>
                            <p>+ Porta de AT com trava na BT;</p>
                            <p>+ Porta de BT com chave;</p>
                            <p>+ Fusível Baioneta;</p>
                            <p>+ Chave Comutadora com acionamento externo;</p>
                            <p>+ Fusível Limitador de corrente;</p>
                            <p>+ Fusível de expulsão em Baioneta;</p>
                            <p>+ Apoio para macacos;</p>
                            <p>+ Dispositivo para enchimento de Gás.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <?php
                        $imagens = [
                            [
                                "imagem" => "transformador_pedestal_30kva.webp",
                                "titulo" => "Transformador Pedestal 30 KVA",
                            ],
                            [
                                "imagem" => "transformador_pedestal_45kva.webp",
                                "titulo" => "Transformador Pedestal 45 KVA",
                            ],
                            [
                                "imagem" => "transformador_pedestal_75kva.webp",
                                "titulo" => "Transformador Pedestal 75 KVA",
                            ],
                            [
                                "imagem" => "transformador_pedestal_112kva.webp",
                                "titulo" => "Transformador Pedestal 112,5 KVA",
                            ],
                            [
                                "imagem" => "transformador_pedestal_150kva.webp",
                                "titulo" => "Transformador Pedestal 150 KVA",
                            ],
                            [
                                "imagem" => "transformador_pedestal_225kva.webp",
                                "titulo" => "Transformador Pedestal 225 KVA",
                            ],
                            [
                                "imagem" => "transformador_pedestal_300kva.webp",
                                "titulo" => "Transformador Pedestal 300 KVA",
                            ],
                            [
                                "imagem" => "transformador_pedestal_500kva.webp",
                                "titulo" => "Transformador Pedestal 500 KVA",
                            ],
                            [
                                "imagem" => "transformador_pedestal_750kva.webp",
                                "titulo" => "Transformador Pedestal 750 KVA",
                            ],
                            [
                                "imagem" => "transformador_pedestal_30kva.webp",
                                "titulo" => "Transformador Pedestal 1000 KVA",
                            ],
                            [
                                "imagem" => "transformador_pedestal_1500kva.webp",
                                "titulo" => "Transformador Pedestal 1500 KVA",
                            ],
                            [
                                "imagem" => "transformador_pedestal_500kva.webp",
                                "titulo" => "Transformador Pedestal 2000 KVA",
                            ],
                            [
                                "imagem" => "transformador_pedestal_750kva.webp",
                                "titulo" => "Transformador Pedestal 2500 KVA",
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
                            <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL</h2>
                            <p>A construção de um transformador pedestal envolve a montagem de um transformador elétrico em um suporte elevado, geralmente feito de metal resistente à corrosão, como aço galvanizado. O transformador em si consiste em bobinas de fios condutores isolados, enrolados em um núcleo de ferro laminado, que ajuda a efetuar a transformação da voltagem. O conjunto é alojado em um invólucro resistente às intempéries e seguro, que é fixado ao suporte.</p>

                            <p>O invólucro é projetado para proteger o transformador de condições climáticas adversas, umidade e poeira, além de garantir a segurança dos operadores e do público em geral. Possui aberturas para ventilação e dissipação de calor, garantindo que o transformador opere de maneira eficiente. A construção do transformador pedestal é cuidadosamente planejada para garantir a distribuição segura e confiável de energia elétrica às áreas circundantes.</p>

                        </div>
                        <div class="col-lg-6 col-md-6">

                            <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL:</h2>
                            <p>O transformador pedestal é aplicado como uma solução de distribuição de energia elétrica em áreas urbanas e rurais. Ele é instalado em um suporte elevado, evitando o contato direto com o solo e oferecendo proteção contra condições climáticas adversas. Geralmente feito de metal resistente à corrosão, o suporte sustenta o transformador, que consiste em bobinas de fios condutores isolados enrolados em um núcleo de ferro laminado. Um invólucro seguro e resistente às intempéries protege o transformador e assegura a eficiência do seu funcionamento. O transformador pedestal é essencial para distribuir energia elétrica de forma segura e confiável para residências, empresas e instalações públicas.</p>

                        </div>
                        <div class="col-lg-6 col-md-6">

                            <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL PODE SER APLICADO:</h2>
                            <p>O transformador pedestal pode ser utilizado em diversas situações e locais, onde é necessário distribuir energia elétrica de maneira segura e eficiente. Alguns dos lugares onde o transformador pedestal pode ser utilizado incluem: Áreas Residenciais, Áreas Comerciais, Áreas Rurais, Parques e Espaços Públicos, Condomínios e Complexos Residenciais, Instalações Industriais, Escolas e Hospitais, Áreas Recreativas, Construções Temporárias, Eventos e Feiras.</p>

                        </div>
                        <div class="col-lg-6 col-md-6">

                            <h2>5 – ACESSÓRIOS OPICIONAIS:</h2>
                            <p>– Termômetro;</p>
                            <p>– Relé térmico;</p>
                            <p>– Válvula de alívio;</p>
                            <p>– Indicador de nível de óleo (relé).</p>

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