<?php
$h1          = "Orçamento de Transformadores a Seco";
$title       = "Orçamento de Transformadores a Seco";
$description = "Solicite um orçamento de transformadores a seco com a Inova Equipamentos Elétricos. Soluções seguras, eficientes e indicadas para aplicações industriais e comerciais.";
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
                                    <input name="Local do Form" value="Formulário Orçamento Transformador a Seco: <?php echo $canonical; ?>" type="hidden">
                                    <button type="submit"
                                        data-emailsReceberEnvio="<?php echo $emailContato; ?>"
                                        data-emailsReceberCopia=""
                                        data-emailsReceberCopiaOculta=""
                                        data-siteCliente="<?php echo $nome_empresa; ?>"
                                        data-ajax="Solicitação - Orçamento Transformador a Seco">Enviar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="info-wrapper">
                            <h2>TRANSFORMADOR A SECO COM 2 ANOS DE GARANTIA!</h2>
                            <p>Nós da Inova Equipamentos Elétricos estamos em constante evolução e desenvolvimento juntamente com nossos parceiros para entregar um Transformador a Seco cada vez mais inovador, eficiente e com alta qualidade e durabilidade. Nossos parceiros investem em especialistas que otimizam constantemente nosso processo de produção de Transformador a Seco, aumentando sempre nossos padrões de qualidade</p>
                            <p>Com muito orgulho, representamos comercialmente uma seleção excepcional de parceiros de equipamentos elétricos que compartilham nossa visão de inovação e excelência. Esses parceiros são líderes em suas respectivas áreas, fornecendo soluções de alta qualidade que impulsionam a eficiência e a confiabilidade nos setores elétricos.</p>
                            <p>Tudo pensando sempre em melhor atender a sua empresa e a sua necessidade de forma plena no que se tratar de energia. “Fabricamos Transformadores especiais que seja conforme a necessidade do cliente.”</p>
                            <p><span style="color: var(--main);">Transformador a Seco: </span> O transformador à seco é um produto que não necessita da refrigeração e isolação à óleo, igual nos casos dos transformadores encontrados em postes de iluminação. As principais vantagens são a baixa manutenção no equipamento e a ausência do risco de vazamentos de óleo, causando danos ao meio ambiente;</p>
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
                            <P>+ Potência: Transformadores a Seco de 15 até 5000KVA (Outras potências sobre encomenda);</p>
                            <P>+ Classe de Tensão Primária: 15KV, 25KV e 36,2KV;</p>
                            <P>+ Opções de Tensão do Primário (Outras tensões sobre encomenda);</p>
                            <P>15KV: 13800/13200/12600/12000/11400V;</p>
                            <P>25KV: 24200/23100/22000/20900/19800V;</p>
                            <P>36,2KV: 36000/34500/33000/31500/30000V;</p>
                            <P>(Transformador com Tap’s além destes, informar na solicitação do orçamento).</p>
                            <P>+ Opções de Tensão do Secundário:</p>
                            <P>220/127V, 380/220V e 440/254V (Outras tensões sobre encomenda);</p>
                            <P>+ Grau de Proteção: IP00/IP21/IP54;</p>
                            <P>+ Frequência: 60 Hz;</p>
                            <P>+ Grupo ligação: Dyn1;</p>
                            <P>+ Número de Fases: 3 (Trifásico);</p>
                            <P>+ Refrigeração: AN (Ar Natural);</p>
                            <P>+ Meio Isolante: Epóxi;</p>
                            <P>+ Fator: K1;</p>
                            <P>+ Painel de Comutação controlador de temperatura;</p>
                            <P>+ Elevação temperatura: 100 °C;</p>
                            <P>+ Classe térmica: F 155 °C;</p>
                            <P>+ Material dos condutores: AT/BT – Alumínio/Alumínio;</p>
                            <P>+ Barramento primários e secundários;</p>
                            <P>+ Terminais de Aterramento;</p>
                            <P>+ Orelhas para suspensão;</p>
                            <P>+ Placa de identificação do Transformador;</p>
                            <P>+ Rodas bidirecionais;</p>
                            <P>+ 2 anos de garantia.</p>

                            <h2>GRAU DE PROTEÇÃO:</h2>
                            <P>+ IP00 – Uso Abrigado;</p>
                            <P>+ IP21 – Uso Abrigado;</p>
                            <P>+ IP54 – Uso Externo;</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <?php
                        $imagens = [
                            [
                                "imagem" => "transformador_a_seco_15kva.webp",
                                "titulo" => "Transformador a Seco 15 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_45kva.webp",
                                "titulo" => "Transformador a Seco 30 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_45kva.webp",
                                "titulo" => "Transformador a Seco 45 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_45kva.webp",
                                "titulo" => "Transformador a Seco 75 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_45kva.webp",
                                "titulo" => "Transformador a Seco 112,5 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_45kva.webp",
                                "titulo" => "Transformador a Seco 150 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_225kva.webp",
                                "titulo" => "Transformador a Seco 225 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_300kva.webp",
                                "titulo" => "Transformador a Seco 300 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_500kva.webp",
                                "titulo" => "Transformador a Seco 500 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_750kva.webp",
                                "titulo" => "Transformador a Seco 750 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_1250kva.webp",
                                "titulo" => "Transformador a Seco 1250 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_1500kva.webp",
                                "titulo" => "Transformador a Seco 1500 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_2000kva.webp",
                                "titulo" => "Transformador a Seco 2000 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_2500kva.webp",
                                "titulo" => "Transformador a Seco 2500 KVA",
                            ],
                            [
                                "imagem" => "transformador_a_seco_3000kva.webp",
                                "titulo" => "Transformador a Seco 3000 KVA",
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
                            <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A SECO</h2>
                            <p>A construção do transformador a seco envolve etapas como projetar e definir as especificações do transformador, construir o núcleo usando lâminas de aço silicioso para reduzir perdas, criar os enrolamentos primário e secundário com fios isolados, aplicar isolamento entre os enrolamentos e o núcleo, impregnar com resina para reforço, projetar ventilação adequada para dissipação de calor, realizar testes rigorosos para garantir a qualidade e a segurança do transformador e, finalmente, instalar o transformador no local apropriado e realizar manutenções regulares para manter seu desempenho.</p>
                        </div>
                        <div class="col-lg-6 col-md-6">

                            <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A SECO:</h2>
                            <p>O transformador à seco é destinados para sistemas de distribuição e iluminações industriais e comerciais, alimentação de painéis, motores elétricos, isolação de circuitos elétricos, podendo também serem aplicados em cargas não lineares, subestações de entrada de energia, cabines secundarias, datacenters entre outros.</p>

                            <p>São aplicados também no setor residencial, como na adequação da tensão para eletrodomésticos, no funcionamento de sistemas de geração fotovoltaica (energia solar), correção dos níveis de tensão fornecidos pela concessionária de energia, entre outros.</p>

                        </div>
                        <div class="col-lg-6 col-md-6">

                            <h2>4 – ACESSÓRIOS (OPCIONAIS):</h2>
                            <p>– Relé de proteção térmica;</p>
                            <p>– Para-raios acoplado;</p>
                            <p>– Involucro para grau de proteção conforme necessidade;</p>
                            <p>– Ventilação forçada;</p>
                            <p>– Outros acessórios possíveis</p>

                        </div>
                        <div class="col-lg-6 col-md-6">

                            <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                            <p><span>Seguro: </span> de descargas parciais, suportabilidade às tensões de impulso e aplicada, capacidade de sobrecarga, resistente a umidade, alta suportabilidade à curtos circuitos.</p>
                            <p><span>Econômico: </span> Instalado nos centros de carga permite otimização do projeto de instalação, maior simplicidade nas eventuais mudanças de lay-out das instalações, torna desnecessária a construção de obras civis ou proteções especiais</p>
                            <p><span>Ecológico: </span> Sem líquidos isolantes, resistente a chamas e auto-extinguível, não emite gases tóxicos, totalmente reciclável, isento de manutenção.</p>
                            <p><span>Adaptável: </span> A potência pode ser aumentada em até 40% com a simples instalação de ventilação forçada, facilidade no posicionamento de terminais, menor área requerida para instalação.</p>
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