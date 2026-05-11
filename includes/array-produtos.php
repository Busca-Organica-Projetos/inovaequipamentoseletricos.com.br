<?php

$url = "http://localhost/_Dev/inovaequipamentoseletricos.com.br/";
// $url = "https://aprov.buscaorganica.com.br/inovaequipamentoseletricos.com.br/";

$produtos = [

    "transformador-a-oleo-15kva" => [
        "imagem" => "transformador_a_oleo_15kva",
        "nome" => "Transformador a Óleo 15KVA",
        "preco" => "R$7.398,00 – R$8.316,00",
        'content' => '<section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Loja</a></li>
                        <li class="breadcrumb-item"><a href="#">Transformador a Óleo</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($produtos["transformador-a-oleo-15kva"]["nome"]) ?></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_oleo_15kva.webp" alt="Transformador a Óleo 15KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Óleo 15KVA</h1>

                <div class="produto-preco">
                    R$7.398,00 – R$8.316,00
                </div>

                <p class="produto-descricao-curta">Apresentamos o nosso Transformador de Distribuição de 15KVA, um equipamento de excelência com isolamento imerso em óleo mineral, assegurando um desempenho confiável e duradouro. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="produto-compra-area">
    
                    <div class="produto-preco-dinamico">
                        <span class="preco-valor">R$ —</span>
                    </div>

                    <div class="produto-estoque">
                        1 em estoque (pode ser encomendado)
                    </div>

                    <div class="produto-acoes">
                        <div class="quantidade-wrapper">
                            <button type="button" id="qtd-menos" class="qtd-btn">-</button>
                            <input type="number" class="qtd-input" value="1" min="1" step="1" readonly>
                            <button type="button" id="qtd-mais" class="qtd-btn">+</button>
                        </div>

                        <button type="button" class="btn-add-carrinho button" disable>
                            <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                        </button>
                    </div>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAO-15KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A ÓLEO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-seco-2500kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-seco-2500kva">Informação adicional</button>
                </div>

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-oleo-15kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-oleo-15kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-oleo-15kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Óleo de 15KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Gancho de suspensão: Sim;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de poste: Opcional;</li>
                        <li>Suporte de para raio: Opcional;</li>
                        <li>Comutador de Tap\\\'s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Regime de serviço: Contínuo 100%;</li>
                        <li>Instalação: Ao Tempo;</li>
                        <li>Pintura: Cor cinza munsell N6,5;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Ensaio de tipo valores: Não incluso;</li>
                        <li>Fabricado e ensaiado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A ÓLEO 15KVA:</h2>
                    <p>– Os enrolamentos são produzidos utilizando alumínio e revestidos com material isolante. Eles são imersos em óleo isolante mineral e fabricados em um ambiente controlado e apropriado.</p>
                    <p>– O núcleo magnético é composto por lâminas de aço silício, o que contribui para o desempenho eficiente do transformador.</p>
                    <p>– Para otimizar a dissipação de calor, são incorporados radiadores. Isso permite ao transformador operar em temperaturas mais baixas em comparação com transformadores a seco.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A ÓLEO 15KVA:</h2>
                    <p>Existem transformadores a óleo disponíveis para atender uma ampla variedade de necessidades. Eles são ideais para instalações que variam desde cabines simplificadas até configurações convencionais que demandam alta potência. Além disso, esses transformadores são ideais para locais onde a segurança é uma prioridade, assegurando que não haja riscos para pessoas que estejam nas proximidades. Esses transformadores são empregados em diversos cenários, incluindo distribuição, geração e consumo de energia.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A ÓLEO 15KVA PODE SER APLICADO:</h2>
                    <p>Nossos transformadores são projetados para atender uma ampla gama de setores, incluindo comércio, indústrias, cooperativas, instaladoras, empreiteiras, subestações industriais, máquinas elétricas e locais de grande circulação de pessoas e áreas públicas. Eles são ideais para locais próximos a centros de carga, calçadas, praças, escolas e em qualquer cenário onde a demanda por transformadores seja essencial.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A ÓLEO 15KVA:</h2>
                    <p>Apresenta uma longevidade notável, sendo altamente durável ao longo do tempo. Sua versatilidade permite uma instalação interna ou externa com extrema facilidade. Este transformador é caracterizado por um baixo custo de fabricação, o que o torna uma escolha econômica. Além disso, demanda uma quantidade reduzida de manutenção, a qual é de execução simples, englobando a substituição do óleo isolante, juntas, guarnições e acessórios.</p>
                    <p>A acessibilidade eficiente às partes ativas do transformador simplifica a realização de manutenções necessárias, contribuindo significativamente para a extensão de sua vida útil de forma eficaz.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-oleo-15kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-oleo-30kva" => [
        "imagem" => "transformador_a_oleo_30kva",
        "nome" => "Transformador a Óleo 30KVA",
        "preco" => "R$9.372,00 – R$10.530,00",
        'content' => '<section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Loja</a></li>
                        <li class="breadcrumb-item"><a href="#">Transformador a Óleo</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($produtos["transformador-a-oleo-15kva"]["nome"]) ?></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_oleo_30kva.webp" alt="Transformador a Óleo 30KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Óleo 30KVA</h1>

                <div class="produto-preco">
                    R$9.372,00 – R$10.530,00
                </div>

                <p class="produto-descricao-curta">Transformador de Distribuição de 30KVA com isolamento imerso em óleo mineral, assegurando desempenho confiável e duradouro. Fabricado em conformidade com as normas ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAO-30KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A ÓLEO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-oleo-30kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-oleo-30kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-oleo-30kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Óleo de 30KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Gancho de suspensão: Sim;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de poste: Opcional;</li>
                        <li>Suporte de para raio: Opcional;</li>
                        <li>Comutador de Tap\\\'s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Regime de serviço: Contínuo 100%;</li>
                        <li>Instalação: Ao Tempo;</li>
                        <li>Pintura: Cor cinza munsell N6,5;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Ensaio de tipo valores: Não incluso;</li>
                        <li>Fabricado e ensaiado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A ÓLEO 30KVA:</h2>
                    <p>– Os enrolamentos são produzidos utilizando alumínio e revestidos com material isolante. Eles são imersos em óleo isolante mineral e fabricados em um ambiente controlado e apropriado.</p>
                    <p>– O núcleo magnético é composto por lâminas de aço silício, o que contribui para o desempenho eficiente do transformador.</p>
                    <p>– Para otimizar a dissipação de calor, são incorporados radiadores. Isso permite ao transformador operar em temperaturas mais baixas em comparação com transformadores a seco.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A ÓLEO 30KVA:</h2>
                    <p>Existem transformadores a óleo disponíveis para atender uma ampla variedade de necessidades. Eles são ideais para instalações que variam desde cabines simplificadas até configurações convencionais que demandam alta potência. Além disso, esses transformadores são ideais para locais onde a segurança é uma prioridade, assegurando que não haja riscos para pessoas que estejam nas proximidades. Esses transformadores são empregados em diversos cenários, incluindo distribuição, geração e consumo de energia.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A ÓLEO 30KVA PODE SER APLICADO:</h2>
                    <p>Nossos transformadores são projetados para atender uma ampla gama de setores, incluindo comércio, indústrias, cooperativas, instaladoras, empreiteiras, subestações industriais, máquinas elétricas e locais de grande circulação de pessoas e áreas públicas. Eles são ideais para locais próximos a centros de carga, calçadas, praças, escolas e em qualquer cenário onde a demanda por transformadores seja essencial.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A ÓLEO 30KVA:</h2>
                    <p>Apresenta uma longevidade notável, sendo altamente durável ao longo do tempo. Sua versatilidade permite uma instalação interna ou externa com extrema facilidade. Este transformador é caracterizado por um baixo custo de fabricação, o que o torna uma escolha econômica. Além disso, demanda uma quantidade reduzida de manutenção, a qual é de execução simples, englobando a substituição do óleo isolante, juntas, guarnições e acessórios.</p>
                    <p>A acessibilidade eficiente às partes ativas do transformador simplifica a realização de manutenções necessárias, contribuindo significativamente para a extensão de sua vida útil de forma eficaz.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-oleo-30kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-oleo-45kva" => [
        "imagem" => "transformador_a_oleo_45kva",
        "nome" => "Transformador a Óleo 45KVA",
        "preco" => "R$11.346,00 – R$12.750,00",
        'content' => '
        <section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Loja</a></li>
                        <li class="breadcrumb-item"><a href="#">Transformador a Óleo</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($produtos["transformador-a-oleo-45kva"]["nome"]) ?></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_oleo_45kva.webp" alt="Transformador a Óleo 45KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Óleo 45KVA</h1>

                <div class="produto-preco">
                    R$11.346,00 – R$12.750,00
                </div>

                <p class="produto-descricao-curta">Transformador de Distribuição de 45KVA com isolamento imerso em óleo mineral. Fabricado em conformidade com as normas ABNT-NBR, garantindo qualidade e segurança operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAO-45KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A ÓLEO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-oleo-45kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-oleo-45kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-oleo-45kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Óleo de 45KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Gancho de suspensão: Sim;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de poste: Opcional;</li>
                        <li>Suporte de para raio: Opcional;</li>
                        <li>Comutador de Tap\\\'s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Regime de serviço: Contínuo 100%;</li>
                        <li>Instalação: Ao Tempo;</li>
                        <li>Pintura: Cor cinza munsell N6,5;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Ensaio de tipo valores: Não incluso;</li>
                        <li>Fabricado e ensaiado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A ÓLEO 45KVA:</h2>
                    <p>– Os enrolamentos são produzidos utilizando alumínio e revestidos com material isolante. Eles são imersos em óleo isolante mineral e fabricados em um ambiente controlado e apropriado.</p>
                    <p>– O núcleo magnético é composto por lâminas de aço silício, o que contribui para o desempenho eficiente do transformador.</p>
                    <p>– Para otimizar a dissipação de calor, são incorporados radiadores. Isso permite ao transformador operar em temperaturas mais baixas em comparação com transformadores a seco.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A ÓLEO 45KVA:</h2>
                    <p>Existem transformadores a óleo disponíveis para atender uma ampla variedade de necessidades. Eles são ideais para instalações que variam desde cabines simplificadas até configurações convencionais que demandam alta potência. Além disso, esses transformadores são ideais para locais onde a segurança é uma prioridade, assegurando que não haja riscos para pessoas que estejam nas proximidades. Esses transformadores são empregados em diversos cenários, incluindo distribuição, geração e consumo de energia.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A ÓLEO 45KVA PODE SER APLICADO:</h2>
                    <p>Nossos transformadores são projetados para atender uma ampla gama de setores, incluindo comércio, indústrias, cooperativas, instaladoras, empreiteiras, subestações industriais, máquinas elétricas e locais de grande circulação de pessoas e áreas públicas. Eles são ideais para locais próximos a centros de carga, calçadas, praças, escolas e em qualquer cenário onde a demanda por transformadores seja essencial.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A ÓLEO 45KVA:</h2>
                    <p>Apresenta uma longevidade notável, sendo altamente durável ao longo do tempo. Sua versatilidade permite uma instalação interna ou externa com extrema facilidade. Este transformador é caracterizado por um baixo custo de fabricação, o que o torna uma escolha econômica. Além disso, demanda uma quantidade reduzida de manutenção, a qual é de execução simples, englobando a substituição do óleo isolante, juntas, guarnições e acessórios.</p>
                    <p>A acessibilidade eficiente às partes ativas do transformador simplifica a realização de manutenções necessárias, contribuindo significativamente para a extensão de sua vida útil de forma eficaz.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-oleo-45kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-oleo-75kva" => [
        "imagem" => "transformador_a_oleo_75kva",
        "nome" => "Transformador a Óleo 75KVA",
        "preco" => "R$13.812,00 – R$15.522,00",
        'content' => '
        <section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Loja</a></li>
                        <li class="breadcrumb-item"><a href="#">Transformador a Óleo</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($produtos["transformador-a-oleo-75kva"]["nome"]) ?></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_oleo_75kva.webp" alt="Transformador a Óleo 75KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Óleo 75KVA</h1>

                <div class="produto-preco">
                    R$13.812,00 – R$15.522,00
                </div>

                <p class="produto-descricao-curta">Transformador de Distribuição de 75KVA com isolamento imerso em óleo mineral. Fabricado em conformidade com as normas ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAO-75KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A ÓLEO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-oleo-75kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-oleo-75kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-oleo-75kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Óleo de 75KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Gancho de suspensão: Sim;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de poste: Opcional;</li>
                        <li>Suporte de para raio: Opcional;</li>
                        <li>Comutador de Tap\\\'s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Regime de serviço: Contínuo 100%;</li>
                        <li>Instalação: Ao Tempo;</li>
                        <li>Pintura: Cor cinza munsell N6,5;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Ensaio de tipo valores: Não incluso;</li>
                        <li>Fabricado e ensaiado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A ÓLEO 75KVA:</h2>
                    <p>– Os enrolamentos são produzidos utilizando alumínio e revestidos com material isolante. Eles são imersos em óleo isolante mineral e fabricados em um ambiente controlado e apropriado.</p>
                    <p>– O núcleo magnético é composto por lâminas de aço silício, o que contribui para o desempenho eficiente do transformador.</p>
                    <p>– Para otimizar a dissipação de calor, são incorporados radiadores. Isso permite ao transformador operar em temperaturas mais baixas em comparação com transformadores a seco.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A ÓLEO 75KVA:</h2>
                    <p>Existem transformadores a óleo disponíveis para atender uma ampla variedade de necessidades. Eles são ideais para instalações que variam desde cabines simplificadas até configurações convencionais que demandam alta potência. Além disso, esses transformadores são ideais para locais onde a segurança é uma prioridade, assegurando que não haja riscos para pessoas que estejam nas proximidades. Esses transformadores são empregados em diversos cenários, incluindo distribuição, geração e consumo de energia.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A ÓLEO 75KVA PODE SER APLICADO:</h2>
                    <p>Nossos transformadores são projetados para atender uma ampla gama de setores, incluindo comércio, indústrias, cooperativas, instaladoras, empreiteiras, subestações industriais, máquinas elétricas e locais de grande circulação de pessoas e áreas públicas. Eles são ideais para locais próximos a centros de carga, calçadas, praças, escolas e em qualquer cenário onde a demanda por transformadores seja essencial.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A ÓLEO 75KVA:</h2>
                    <p>Apresenta uma longevidade notável, sendo altamente durável ao longo do tempo. Sua versatilidade permite uma instalação interna ou externa com extrema facilidade. Este transformador é caracterizado por um baixo custo de fabricação, o que o torna uma escolha econômica. Além disso, demanda uma quantidade reduzida de manutenção, a qual é de execução simples, englobando a substituição do óleo isolante, juntas, guarnições e acessórios.</p>
                    <p>A acessibilidade eficiente às partes ativas do transformador simplifica a realização de manutenções necessárias, contribuindo significativamente para a extensão de sua vida útil de forma eficaz.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-oleo-75kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-oleo-112-5kva" => [
        "imagem" => "transformador_a_oleo_112kva",
        "nome" => "Transformador a Óleo 112,5KVA",
        "preco" => "R$18.954,00 – R$21.336,00",
        'content' => '
        <section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Loja</a></li>
                        <li class="breadcrumb-item"><a href="#">Transformador a Óleo</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($produtos["transformador-a-oleo-112-5kva"]["nome"]) ?></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_oleo_112kva.webp" alt="Transformador a Óleo 112,5KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Óleo 112,5KVA</h1>

                <div class="produto-preco">
                    R$18.954,00 – R$21.336,00
                </div>

                <p class="produto-descricao-curta">Transformador de Distribuição de 112,5KVA com isolamento imerso em óleo mineral. Fabricado em conformidade com as normas ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAO-112.5KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A ÓLEO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-oleo-112-5kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-oleo-112-5kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-oleo-112-5kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Óleo de 112,5KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Gancho de suspensão: Sim;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de poste: Opcional;</li>
                        <li>Suporte de para raio: Opcional;</li>
                        <li>Comutador de Tap\\\'s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Regime de serviço: Contínuo 100%;</li>
                        <li>Instalação: Ao Tempo;</li>
                        <li>Pintura: Cor cinza munsell N6,5;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Ensaio de tipo valores: Não incluso;</li>
                        <li>Fabricado e ensaiado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A ÓLEO 112,5KVA:</h2>
                    <p>– Os enrolamentos são produzidos utilizando alumínio e revestidos com material isolante. Eles são imersos em óleo isolante mineral e fabricados em um ambiente controlado e apropriado.</p>
                    <p>– O núcleo magnético é composto por lâminas de aço silício, o que contribui para o desempenho eficiente do transformador.</p>
                    <p>– Para otimizar a dissipação de calor, são incorporados radiadores. Isso permite ao transformador operar em temperaturas mais baixas em comparação com transformadores a seco.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A ÓLEO 112,5KVA:</h2>
                    <p>Existem transformadores a óleo disponíveis para atender uma ampla variedade de necessidades. Eles são ideais para instalações que variam desde cabines simplificadas até configurações convencionais que demandam alta potência. Além disso, esses transformadores são ideais para locais onde a segurança é uma prioridade, assegurando que não haja riscos para pessoas que estejam nas proximidades. Esses transformadores são empregados em diversos cenários, incluindo distribuição, geração e consumo de energia.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A ÓLEO 112,5KVA PODE SER APLICADO:</h2>
                    <p>Nossos transformadores são projetados para atender uma ampla gama de setores, incluindo comércio, indústrias, cooperativas, instaladoras, empreiteiras, subestações industriais, máquinas elétricas e locais de grande circulação de pessoas e áreas públicas. Eles são ideais para locais próximos a centros de carga, calçadas, praças, escolas e em qualquer cenário onde a demanda por transformadores seja essencial.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A ÓLEO 112,5KVA:</h2>
                    <p>Apresenta uma longevidade notável, sendo altamente durável ao longo do tempo. Sua versatilidade permite uma instalação interna ou externa com extrema facilidade. Este transformador é caracterizado por um baixo custo de fabricação, o que o torna uma escolha econômica. Além disso, demanda uma quantidade reduzida de manutenção, a qual é de execução simples, englobando a substituição do óleo isolante, juntas, guarnições e acessórios.</p>
                    <p>A acessibilidade eficiente às partes ativas do transformador simplifica a realização de manutenções necessárias, contribuindo significativamente para a extensão de sua vida útil de forma eficaz.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-oleo-112-5kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-oleo-150kva" => [
        "imagem" => "transformador_a_oleo_150kva",
        "nome" => "Transformador a Óleo 150KVA",
        "preco" => "R$21.280,00 – R$25.483,00",
        'content' => '
        <section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Loja</a></li>
                        <li class="breadcrumb-item"><a href="#">Transformador a Óleo</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($produtos["transformador-a-oleo-150kva"]["nome"]) ?></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_oleo_150kva.webp" alt="Transformador a Óleo 150KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Óleo 150KVA</h1>

                <div class="produto-preco">
                    R$21.280,00 – R$25.483,00
                </div>

                <p class="produto-descricao-curta">Transformador de Distribuição de 150KVA com isolamento imerso em óleo mineral. Fabricado em conformidade com as normas ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAO-150KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A ÓLEO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-oleo-150kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-oleo-150kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-oleo-150kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Óleo de 150KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Gancho de suspensão: Sim;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de poste: Opcional;</li>
                        <li>Suporte de para raio: Opcional;</li>
                        <li>Comutador de Tap\\\'s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Regime de serviço: Contínuo 100%;</li>
                        <li>Instalação: Ao Tempo;</li>
                        <li>Pintura: Cor cinza munsell N6,5;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Ensaio de tipo valores: Não incluso;</li>
                        <li>Fabricado e ensaiado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A ÓLEO 150KVA:</h2>
                    <p>– Os enrolamentos são produzidos utilizando alumínio e revestidos com material isolante. Eles são imersos em óleo isolante mineral e fabricados em um ambiente controlado e apropriado.</p>
                    <p>– O núcleo magnético é composto por lâminas de aço silício, o que contribui para o desempenho eficiente do transformador.</p>
                    <p>– Para otimizar a dissipação de calor, são incorporados radiadores. Isso permite ao transformador operar em temperaturas mais baixas em comparação com transformadores a seco.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A ÓLEO 150KVA:</h2>
                    <p>Existem transformadores a óleo disponíveis para atender uma ampla variedade de necessidades. Eles são ideais para instalações que variam desde cabines simplificadas até configurações convencionais que demandam alta potência. Além disso, esses transformadores são ideais para locais onde a segurança é uma prioridade, assegurando que não haja riscos para pessoas que estejam nas proximidades. Esses transformadores são empregados em diversos cenários, incluindo distribuição, geração e consumo de energia.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A ÓLEO 150KVA PODE SER APLICADO:</h2>
                    <p>Nossos transformadores são projetados para atender uma ampla gama de setores, incluindo comércio, indústrias, cooperativas, instaladoras, empreiteiras, subestações industriais, máquinas elétricas e locais de grande circulação de pessoas e áreas públicas. Eles são ideais para locais próximos a centros de carga, calçadas, praças, escolas e em qualquer cenário onde a demanda por transformadores seja essencial.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A ÓLEO 150KVA:</h2>
                    <p>Apresenta uma longevidade notável, sendo altamente durável ao longo do tempo. Sua versatilidade permite uma instalação interna ou externa com extrema facilidade. Este transformador é caracterizado por um baixo custo de fabricação, o que o torna uma escolha econômica. Além disso, demanda uma quantidade reduzida de manutenção, a qual é de execução simples, englobando a substituição do óleo isolante, juntas, guarnições e acessórios.</p>
                    <p>A acessibilidade eficiente às partes ativas do transformador simplifica a realização de manutenções necessárias, contribuindo significativamente para a extensão de sua vida útil de forma eficaz.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-oleo-150kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-oleo-225kva" => [
        "imagem" => "transformador_a_oleo_225kva",
        "nome" => "Transformador a Óleo 225KVA",
        "preco" => "R$30.804,00 – R$34.668,00",
        'content' => '
        <section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Loja</a></li>
                        <li class="breadcrumb-item"><a href="#">Transformador a Óleo</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($produtos["transformador-a-oleo-225kva"]["nome"]) ?></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_oleo_225kva.webp" alt="Transformador a Óleo 225KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Óleo 225KVA</h1>

                <div class="produto-preco">
                    R$30.804,00 – R$34.668,00
                </div>

                <p class="produto-descricao-curta">Transformador de Distribuição de 225KVA com isolamento imerso em óleo mineral. Fabricado em conformidade com as normas ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAO-225KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A ÓLEO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-oleo-225kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-oleo-225kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-oleo-225kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Óleo de 225KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Gancho de suspensão: Sim;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de poste: Opcional;</li>
                        <li>Suporte de para raio: Opcional;</li>
                        <li>Comutador de Tap\\\'s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Regime de serviço: Contínuo 100%;</li>
                        <li>Instalação: Ao Tempo;</li>
                        <li>Pintura: Cor cinza munsell N6,5;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Ensaio de tipo valores: Não incluso;</li>
                        <li>Fabricado e ensaiado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A ÓLEO 225KVA:</h2>
                    <p>– Os enrolamentos são produzidos utilizando alumínio e revestidos com material isolante. Eles são imersos em óleo isolante mineral e fabricados em um ambiente controlado e apropriado.</p>
                    <p>– O núcleo magnético é composto por lâminas de aço silício, o que contribui para o desempenho eficiente do transformador.</p>
                    <p>– Para otimizar a dissipação de calor, são incorporados radiadores. Isso permite ao transformador operar em temperaturas mais baixas em comparação com transformadores a seco.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A ÓLEO 225KVA:</h2>
                    <p>Existem transformadores a óleo disponíveis para atender uma ampla variedade de necessidades. Eles são ideais para instalações que variam desde cabines simplificadas até configurações convencionais que demandam alta potência. Além disso, esses transformadores são ideais para locais onde a segurança é uma prioridade, assegurando que não haja riscos para pessoas que estejam nas proximidades. Esses transformadores são empregados em diversos cenários, incluindo distribuição, geração e consumo de energia.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A ÓLEO 225KVA PODE SER APLICADO:</h2>
                    <p>Nossos transformadores são projetados para atender uma ampla gama de setores, incluindo comércio, indústrias, cooperativas, instaladoras, empreiteiras, subestações industriais, máquinas elétricas e locais de grande circulação de pessoas e áreas públicas. Eles são ideais para locais próximos a centros de carga, calçadas, praças, escolas e em qualquer cenário onde a demanda por transformadores seja essencial.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A ÓLEO 225KVA:</h2>
                    <p>Apresenta uma longevidade notável, sendo altamente durável ao longo do tempo. Sua versatilidade permite uma instalação interna ou externa com extrema facilidade. Este transformador é caracterizado por um baixo custo de fabricação, o que o torna uma escolha econômica. Além disso, demanda uma quantidade reduzida de manutenção, a qual é de execução simples, englobando a substituição do óleo isolante, juntas, guarnições e acessórios.</p>
                    <p>A acessibilidade eficiente às partes ativas do transformador simplifica a realização de manutenções necessárias, contribuindo significativamente para a extensão de sua vida útil de forma eficaz.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-oleo-225kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-oleo-300kva" => [
        "imagem" => "transformador_a_oleo_300kva",
        "nome" => "Transformador a Óleo 300KVA",
        "preco" => "R$34.714,00 – R$40.894,00",
        'content' => '
        <section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Loja</a></li>
                        <li class="breadcrumb-item"><a href="#">Transformador a Óleo</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($produtos["transformador-a-oleo-300kva"]["nome"]) ?></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_oleo_300kva.webp" alt="Transformador a Óleo 300KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Óleo 300KVA</h1>

                <div class="produto-preco">
                    R$34.714,00 – R$40.894,00
                </div>

                <p class="produto-descricao-curta">Transformador de Distribuição de 300KVA com isolamento imerso em óleo mineral. Fabricado em conformidade com as normas ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAO-300KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A ÓLEO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-oleo-300kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-oleo-300kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-oleo-300kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Óleo de 300KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Gancho de suspensão: Sim;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de poste: Opcional;</li>
                        <li>Suporte de para raio: Opcional;</li>
                        <li>Comutador de Tap\\\'s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Regime de serviço: Contínuo 100%;</li>
                        <li>Instalação: Ao Tempo;</li>
                        <li>Pintura: Cor cinza munsell N6,5;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Ensaio de tipo valores: Não incluso;</li>
                        <li>Fabricado e ensaiado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A ÓLEO 300KVA:</h2>
                    <p>– Os enrolamentos são produzidos utilizando alumínio e revestidos com material isolante. Eles são imersos em óleo isolante mineral e fabricados em um ambiente controlado e apropriado.</p>
                    <p>– O núcleo magnético é composto por lâminas de aço silício, o que contribui para o desempenho eficiente do transformador.</p>
                    <p>– Para otimizar a dissipação de calor, são incorporados radiadores. Isso permite ao transformador operar em temperaturas mais baixas em comparação com transformadores a seco.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A ÓLEO 300KVA:</h2>
                    <p>Existem transformadores a óleo disponíveis para atender uma ampla variedade de necessidades. Eles são ideais para instalações que variam desde cabines simplificadas até configurações convencionais que demandam alta potência. Além disso, esses transformadores são ideais para locais onde a segurança é uma prioridade, assegurando que não haja riscos para pessoas que estejam nas proximidades. Esses transformadores são empregados em diversos cenários, incluindo distribuição, geração e consumo de energia.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A ÓLEO 300KVA PODE SER APLICADO:</h2>
                    <p>Nossos transformadores são projetados para atender uma ampla gama de setores, incluindo comércio, indústrias, cooperativas, instaladoras, empreiteiras, subestações industriais, máquinas elétricas e locais de grande circulação de pessoas e áreas públicas. Eles são ideais para locais próximos a centros de carga, calçadas, praças, escolas e em qualquer cenário onde a demanda por transformadores seja essencial.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A ÓLEO 300KVA:</h2>
                    <p>Apresenta uma longevidade notável, sendo altamente durável ao longo do tempo. Sua versatilidade permite uma instalação interna ou externa com extrema facilidade. Este transformador é caracterizado por um baixo custo de fabricação, o que o torna uma escolha econômica. Além disso, demanda uma quantidade reduzida de manutenção, a qual é de execução simples, englobando a substituição do óleo isolante, juntas, guarnições e acessórios.</p>
                    <p>A acessibilidade eficiente às partes ativas do transformador simplifica a realização de manutenções necessárias, contribuindo significativamente para a extensão de sua vida útil de forma eficaz.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-oleo-300kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-oleo-500kva" => [
        "imagem" => "transformador_a_oleo_500kva",
        "nome" => "Transformador a Óleo 500KVA",
        "preco" => "R$54.418,00 – R$63.674,00",
        'content' => '
        <section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Loja</a></li>
                        <li class="breadcrumb-item"><a href="#">Transformador a Óleo</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($produtos["transformador-a-oleo-500kva"]["nome"]) ?></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_oleo_500kva.webp" alt="Transformador a Óleo 500KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Óleo 500KVA</h1>

                <div class="produto-preco">
                    R$54.418,00 – R$63.674,00
                </div>

                <p class="produto-descricao-curta">Transformador de Distribuição de 500KVA com isolamento imerso em óleo mineral. Equipamento robusto para alta demanda industrial. Fabricado conforme normas ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAO-500KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A ÓLEO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-oleo-500kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-oleo-500kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-oleo-500kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Óleo de 500KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Gancho de suspensão: Sim;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de poste: Opcional;</li>
                        <li>Suporte de para raio: Opcional;</li>
                        <li>Comutador de Tap\\\'s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Regime de serviço: Contínuo 100%;</li>
                        <li>Instalação: Ao Tempo;</li>
                        <li>Pintura: Cor cinza munsell N6,5;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Ensaio de tipo valores: Não incluso;</li>
                        <li>Fabricado e ensaiado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A ÓLEO 500KVA:</h2>
                    <p>– Os enrolamentos são produzidos utilizando alumínio e revestidos com material isolante. Eles são imersos em óleo isolante mineral e fabricados em um ambiente controlado e apropriado.</p>
                    <p>– O núcleo magnético é composto por lâminas de aço silício, o que contribui para o desempenho eficiente do transformador.</p>
                    <p>– Para otimizar a dissipação de calor, são incorporados radiadores. Isso permite ao transformador operar em temperaturas mais baixas em comparação com transformadores a seco.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A ÓLEO 500KVA:</h2>
                    <p>Existem transformadores a óleo disponíveis para atender uma ampla variedade de necessidades. Eles são ideais para instalações que variam desde cabines simplificadas até configurações convencionais que demandam alta potência. Além disso, esses transformadores são ideais para locais onde a segurança é uma prioridade, assegurando que não haja riscos para pessoas que estejam nas proximidades. Esses transformadores são empregados em diversos cenários, incluindo distribuição, geração e consumo de energia.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A ÓLEO 500KVA PODE SER APLICADO:</h2>
                    <p>Nossos transformadores são projetados para atender uma ampla gama de setores, incluindo comércio, indústrias, cooperativas, instaladoras, empreiteiras, subestações industriais, máquinas elétricas e locais de grande circulação de pessoas e áreas públicas. Eles são ideais para locais próximos a centros de carga, calçadas, praças, escolas e em qualquer cenário onde a demanda por transformadores seja essencial.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A ÓLEO 500KVA:</h2>
                    <p>Apresenta uma longevidade notável, sendo altamente durável ao longo do tempo. Sua versatilidade permite uma instalação interna ou externa com extrema facilidade. Este transformador é caracterizado por um baixo custo de fabricação, o que o torna uma escolha econômica. Além disso, demanda uma quantidade reduzida de manutenção, a qual é de execução simples, englobando a substituição do óleo isolante, juntas, guarnições e acessórios.</p>
                    <p>A acessibilidade eficiente às partes ativas do transformador simplifica a realização de manutenções necessárias, contribuindo significativamente para a extensão de sua vida útil de forma eficaz.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-oleo-500kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-oleo-750kva" => [
        "imagem" => "transformador_a_oleo_750kva",
        "nome" => "Transformador a Óleo 750KVA",
        "preco" => "R$65.108,00 – R$79.454,00",
        'content' => '
        <section id="breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Loja</a></li>
                        <li class="breadcrumb-item"><a href="#">Transformador a Óleo</a></li>x
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($produtos["transformador-a-oleo-750kva"]["nome"]) ?></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_oleo_750kva.webp" alt="Transformador a Óleo 750KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Óleo 750KVA</h1>

                <div class="produto-preco">
                    R$65.108,00 – R$79.454,00
                </div>

                <p class="produto-descricao-curta">Transformador de Distribuição de 750KVA com isolamento imerso em óleo mineral. Fabricado conforme normas ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAO-750KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A ÓLEO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-oleo-750kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-oleo-750kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-oleo-750kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Óleo de 750KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Gancho de suspensão: Sim;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de poste: Opcional;</li>
                        <li>Suporte de para raio: Opcional;</li>
                        <li>Comutador de Tap\\\'s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Regime de serviço: Contínuo 100%;</li>
                        <li>Instalação: Ao Tempo;</li>
                        <li>Pintura: Cor cinza munsell N6,5;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Ensaio de tipo valores: Não incluso;</li>
                        <li>Fabricado e ensaiado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A ÓLEO 750KVA:</h2>
                    <p>– Os enrolamentos são produzidos utilizando alumínio e revestidos com material isolante. Eles são imersos em óleo isolante mineral e fabricados em um ambiente controlado e apropriado.</p>
                    <p>– O núcleo magnético é composto por lâminas de aço silício, o que contribui para o desempenho eficiente do transformador.</p>
                    <p>– Para otimizar a dissipação de calor, são incorporados radiadores. Isso permite ao transformador operar em temperaturas mais baixas em comparação com transformadores a seco.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A ÓLEO 750KVA:</h2>
                    <p>Existem transformadores a óleo disponíveis para atender uma ampla variedade de necessidades. Eles são ideais para instalações que variam desde cabines simplificadas até configurações convencionais que demandam alta potência. Além disso, esses transformadores são ideais para locais onde a segurança é uma prioridade, assegurando que não haja riscos para pessoas que estejam nas proximidades. Esses transformadores são empregados em diversos cenários, incluindo distribuição, geração e consumo de energia.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A ÓLEO 750KVA PODE SER APLICADO:</h2>
                    <p>Nossos transformadores são projetados para atender uma ampla gama de setores, incluindo comércio, indústrias, cooperativas, instaladoras, empreiteiras, subestações industriais, máquinas elétricas e locais de grande circulação de pessoas e áreas públicas. Eles são ideais para locais próximos a centros de carga, calçadas, praças, escolas e em qualquer cenário onde a demanda por transformadores seja essencial.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A ÓLEO 750KVA:</h2>
                    <p>Apresenta uma longevidade notável, sendo altamente durável ao longo do tempo. Sua versatilidade permite uma instalação interna ou externa com extrema facilidade. Este transformador é caracterizado por um baixo custo de fabricação, o que o torna uma escolha econômica. Além disso, demanda uma quantidade reduzida de manutenção, a qual é de execução simples, englobando a substituição do óleo isolante, juntas, guarnições e acessórios.</p>
                    <p>A acessibilidade eficiente às partes ativas do transformador simplifica a realização de manutenções necessárias, contribuindo significativamente para a extensão de sua vida útil de forma eficaz.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-oleo-750kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-oleo-1000kva" => [
        "imagem" => "transformador_a_oleo_1000kva",
        "nome" => "Transformador a Óleo 1000KVA",
        "preco" => "R$92.606,00 – R$111.421,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_oleo_1000kva.webp" alt="Transformador a Óleo 1000KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Óleo 1000KVA</h1>

                <div class="produto-preco">
                    R$92.606,00 – R$111.421,00
                </div>

                <p class="produto-descricao-curta">Transformador de Distribuição de 1000KVA com isolamento imerso em óleo mineral. Alta potência para grandes demandas industriais. Fabricado conforme normas ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAO-1000KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A ÓLEO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-oleo-1000kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-oleo-1000kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-oleo-1000kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Óleo de 1000KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Gancho de suspensão: Sim;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de poste: Opcional;</li>
                        <li>Suporte de para raio: Opcional;</li>
                        <li>Comutador de Tap\\\'s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Regime de serviço: Contínuo 100%;</li>
                        <li>Instalação: Ao Tempo;</li>
                        <li>Pintura: Cor cinza munsell N6,5;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Ensaio de tipo valores: Não incluso;</li>
                        <li>Fabricado e ensaiado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A ÓLEO 1000KVA:</h2>
                    <p>– Os enrolamentos são produzidos utilizando alumínio e revestidos com material isolante. Eles são imersos em óleo isolante mineral e fabricados em um ambiente controlado e apropriado.</p>
                    <p>– O núcleo magnético é composto por lâminas de aço silício, o que contribui para o desempenho eficiente do transformador.</p>
                    <p>– Para otimizar a dissipação de calor, são incorporados radiadores. Isso permite ao transformador operar em temperaturas mais baixas em comparação com transformadores a seco.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A ÓLEO 1000KVA:</h2>
                    <p>Existem transformadores a óleo disponíveis para atender uma ampla variedade de necessidades. Eles são ideais para instalações que variam desde cabines simplificadas até configurações convencionais que demandam alta potência. Além disso, esses transformadores são ideais para locais onde a segurança é uma prioridade, assegurando que não haja riscos para pessoas que estejam nas proximidades. Esses transformadores são empregados em diversos cenários, incluindo distribuição, geração e consumo de energia.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A ÓLEO 1000KVA PODE SER APLICADO:</h2>
                    <p>Nossos transformadores são projetados para atender uma ampla gama de setores, incluindo comércio, indústrias, cooperativas, instaladoras, empreiteiras, subestações industriais, máquinas elétricas e locais de grande circulação de pessoas e áreas públicas. Eles são ideais para locais próximos a centros de carga, calçadas, praças, escolas e em qualquer cenário onde a demanda por transformadores seja essencial.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A ÓLEO 1000KVA:</h2>
                    <p>Apresenta uma longevidade notável, sendo altamente durável ao longo do tempo. Sua versatilidade permite uma instalação interna ou externa com extrema facilidade. Este transformador é caracterizado por um baixo custo de fabricação, o que o torna uma escolha econômica. Além disso, demanda uma quantidade reduzida de manutenção, a qual é de execução simples, englobando a substituição do óleo isolante, juntas, guarnições e acessórios.</p>
                    <p>A acessibilidade eficiente às partes ativas do transformador simplifica a realização de manutenções necessárias, contribuindo significativamente para a extensão de sua vida útil de forma eficaz.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-oleo-1000kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-oleo-1500kva" => [
        "imagem" => "transformador_a_oleo_1500kva",
        "nome" => "Transformador a Óleo 1500KVA",
        "preco" => "R$111.623,00 – R$136.852,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_oleo_1500kva.webp" alt="Transformador a Óleo 1500KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Óleo 1500KVA</h1>

                <div class="produto-preco">
                    R$111.623,00 – R$136.852,00
                </div>

                <p class="produto-descricao-curta">Transformador de Distribuição de 1500KVA com isolamento imerso em óleo mineral. Fabricado conforme normas ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAO-1500KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A ÓLEO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-oleo-1500kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-oleo-1500kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-oleo-1500kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Óleo de 1500KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Gancho de suspensão: Sim;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de poste: Opcional;</li>
                        <li>Suporte de para raio: Opcional;</li>
                        <li>Comutador de Tap\\\'s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Regime de serviço: Contínuo 100%;</li>
                        <li>Instalação: Ao Tempo;</li>
                        <li>Pintura: Cor cinza munsell N6,5;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Ensaio de tipo valores: Não incluso;</li>
                        <li>Fabricado e ensaiado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A ÓLEO 1500KVA:</h2>
                    <p>– Os enrolamentos são produzidos utilizando alumínio e revestidos com material isolante. Eles são imersos em óleo isolante mineral e fabricados em um ambiente controlado e apropriado.</p>
                    <p>– O núcleo magnético é composto por lâminas de aço silício, o que contribui para o desempenho eficiente do transformador.</p>
                    <p>– Para otimizar a dissipação de calor, são incorporados radiadores. Isso permite ao transformador operar em temperaturas mais baixas em comparação com transformadores a seco.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A ÓLEO 1500KVA:</h2>
                    <p>Existem transformadores a óleo disponíveis para atender uma ampla variedade de necessidades. Eles são ideais para instalações que variam desde cabines simplificadas até configurações convencionais que demandam alta potência. Além disso, esses transformadores são ideais para locais onde a segurança é uma prioridade, assegurando que não haja riscos para pessoas que estejam nas proximidades. Esses transformadores são empregados em diversos cenários, incluindo distribuição, geração e consumo de energia.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A ÓLEO 1500KVA PODE SER APLICADO:</h2>
                    <p>Nossos transformadores são projetados para atender uma ampla gama de setores, incluindo comércio, indústrias, cooperativas, instaladoras, empreiteiras, subestações industriais, máquinas elétricas e locais de grande circulação de pessoas e áreas públicas. Eles são ideais para locais próximos a centros de carga, calçadas, praças, escolas e em qualquer cenário onde a demanda por transformadores seja essencial.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A ÓLEO 1500KVA:</h2>
                    <p>Apresenta uma longevidade notável, sendo altamente durável ao longo do tempo. Sua versatilidade permite uma instalação interna ou externa com extrema facilidade. Este transformador é caracterizado por um baixo custo de fabricação, o que o torna uma escolha econômica. Além disso, demanda uma quantidade reduzida de manutenção, a qual é de execução simples, englobando a substituição do óleo isolante, juntas, guarnições e acessórios.</p>
                    <p>A acessibilidade eficiente às partes ativas do transformador simplifica a realização de manutenções necessárias, contribuindo significativamente para a extensão de sua vida útil de forma eficaz.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-oleo-1500kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-oleo-2000kva" => [
        "imagem" => "transformador_a_oleo_2000kva",
        "nome" => "Transformador a Óleo 2000KVA",
        "preco" => "R$142.332,00 – R$178.284,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_oleo_2000kva.webp" alt="Transformador a Óleo 2000KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Óleo 2000KVA</h1>

                <div class="produto-preco">
                    R$142.332,00 – R$178.284,00
                </div>

                <p class="produto-descricao-curta">Transformador de Distribuição de 2000KVA com isolamento imerso em óleo mineral. Fabricado conforme normas ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAO-2000KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A ÓLEO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-oleo-2000kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-oleo-2000kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-oleo-2000kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Óleo de 2000KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Gancho de suspensão: Sim;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de poste: Opcional;</li>
                        <li>Suporte de para raio: Opcional;</li>
                        <li>Comutador de Tap\\\'s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Regime de serviço: Contínuo 100%;</li>
                        <li>Instalação: Ao Tempo;</li>
                        <li>Pintura: Cor cinza munsell N6,5;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Ensaio de tipo valores: Não incluso;</li>
                        <li>Fabricado e ensaiado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A ÓLEO 2000KVA:</h2>
                    <p>– Os enrolamentos são produzidos utilizando alumínio e revestidos com material isolante. Eles são imersos em óleo isolante mineral e fabricados em um ambiente controlado e apropriado.</p>
                    <p>– O núcleo magnético é composto por lâminas de aço silício, o que contribui para o desempenho eficiente do transformador.</p>
                    <p>– Para otimizar a dissipação de calor, são incorporados radiadores. Isso permite ao transformador operar em temperaturas mais baixas em comparação com transformadores a seco.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A ÓLEO 2000KVA:</h2>
                    <p>Existem transformadores a óleo disponíveis para atender uma ampla variedade de necessidades. Eles são ideais para instalações que variam desde cabines simplificadas até configurações convencionais que demandam alta potência. Além disso, esses transformadores são ideais para locais onde a segurança é uma prioridade, assegurando que não haja riscos para pessoas que estejam nas proximidades. Esses transformadores são empregados em diversos cenários, incluindo distribuição, geração e consumo de energia.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A ÓLEO 2000KVA PODE SER APLICADO:</h2>
                    <p>Nossos transformadores são projetados para atender uma ampla gama de setores, incluindo comércio, indústrias, cooperativas, instaladoras, empreiteiras, subestações industriais, máquinas elétricas e locais de grande circulação de pessoas e áreas públicas. Eles são ideais para locais próximos a centros de carga, calçadas, praças, escolas e em qualquer cenário onde a demanda por transformadores seja essencial.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A ÓLEO 2000KVA:</h2>
                    <p>Apresenta uma longevidade notável, sendo altamente durável ao longo do tempo. Sua versatilidade permite uma instalação interna ou externa com extrema facilidade. Este transformador é caracterizado por um baixo custo de fabricação, o que o torna uma escolha econômica. Além disso, demanda uma quantidade reduzida de manutenção, a qual é de execução simples, englobando a substituição do óleo isolante, juntas, guarnições e acessórios.</p>
                    <p>A acessibilidade eficiente às partes ativas do transformador simplifica a realização de manutenções necessárias, contribuindo significativamente para a extensão de sua vida útil de forma eficaz.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-oleo-2000kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-oleo-2500kva" => [
        "imagem" => "transformador_a_oleo_2500kva",
        "nome" => "Transformador a Óleo 2500KVA",
        "preco" => "R$167.901,00 – R$198.372,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_oleo_2500kva.webp" alt="Transformador a Óleo 2500KVA" id="img-principal" >
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Óleo 2500KVA</h1>

                <div class="produto-preco">
                    R$167.901,00 – R$198.372,00
                </div>

                <p class="produto-descricao-curta">Transformador de Distribuição de 2500KVA com isolamento imerso em óleo mineral. Fabricado conforme normas ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAO-2500KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A ÓLEO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-oleo-2500kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-oleo-2500kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-oleo-2500kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Óleo de 2500KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Gancho de suspensão: Sim;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de poste: Opcional;</li>
                        <li>Suporte de para raio: Opcional;</li>
                        <li>Comutador de Tap\\\'s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Regime de serviço: Contínuo 100%;</li>
                        <li>Instalação: Ao Tempo;</li>
                        <li>Pintura: Cor cinza munsell N6,5;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Ensaio de tipo valores: Não incluso;</li>
                        <li>Fabricado e ensaiado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A ÓLEO 2500KVA:</h2>
                    <p>– Os enrolamentos são produzidos utilizando alumínio e revestidos com material isolante. Eles são imersos em óleo isolante mineral e fabricados em um ambiente controlado e apropriado.</p>
                    <p>– O núcleo magnético é composto por lâminas de aço silício, o que contribui para o desempenho eficiente do transformador.</p>
                    <p>– Para otimizar a dissipação de calor, são incorporados radiadores. Isso permite ao transformador operar em temperaturas mais baixas em comparação com transformadores a seco.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A ÓLEO 2500KVA:</h2>
                    <p>Existem transformadores a óleo disponíveis para atender uma ampla variedade de necessidades. Eles são ideais para instalações que variam desde cabines simplificadas até configurações convencionais que demandam alta potência. Além disso, esses transformadores são ideais para locais onde a segurança é uma prioridade, assegurando que não haja riscos para pessoas que estejam nas proximidades. Esses transformadores são empregados em diversos cenários, incluindo distribuição, geração e consumo de energia.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A ÓLEO 2500KVA PODE SER APLICADO:</h2>
                    <p>Nossos transformadores são projetados para atender uma ampla gama de setores, incluindo comércio, indústrias, cooperativas, instaladoras, empreiteiras, subestações industriais, máquinas elétricas e locais de grande circulação de pessoas e áreas públicas. Eles são ideais para locais próximos a centros de carga, calçadas, praças, escolas e em qualquer cenário onde a demanda por transformadores seja essencial.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A ÓLEO 2500KVA:</h2>
                    <p>Apresenta uma longevidade notável, sendo altamente durável ao longo do tempo. Sua versatilidade permite uma instalação interna ou externa com extrema facilidade. Este transformador é caracterizado por um baixo custo de fabricação, o que o torna uma escolha econômica. Além disso, demanda uma quantidade reduzida de manutenção, a qual é de execução simples, englobando a substituição do óleo isolante, juntas, guarnições e acessórios.</p>
                    <p>A acessibilidade eficiente às partes ativas do transformador simplifica a realização de manutenções necessárias, contribuindo significativamente para a extensão de sua vida útil de forma eficaz.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-oleo-2500kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-oleo-3000kva" => [
        "imagem" => "transformador_a_oleo_3000kva",
        "nome" => "Transformador a Óleo 3000KVA",
        "preco" => "R$217.443,00 – R$257.382,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_oleo_3000kva.webp" alt="Transformador a Óleo 3000KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Óleo 3000KVA</h1>

                <div class="produto-preco">
                    R$217.443,00 – R$257.382,00
                </div>

                <p class="produto-descricao-curta">Transformador de Distribuição de 3000KVA com isolamento imerso em óleo mineral. Fabricado conforme normas ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAO-3000KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A ÓLEO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-oleo-3000kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-oleo-3000kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-oleo-3000kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Óleo de 3000KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Gancho de suspensão: Sim;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de poste: Opcional;</li>
                        <li>Suporte de para raio: Opcional;</li>
                        <li>Comutador de Tap\\\'s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Regime de serviço: Contínuo 100%;</li>
                        <li>Instalação: Ao Tempo;</li>
                        <li>Pintura: Cor cinza munsell N6,5;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Ensaio de tipo valores: Não incluso;</li>
                        <li>Fabricado e ensaiado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A ÓLEO 3000KVA:</h2>
                    <p>– Os enrolamentos são produzidos utilizando alumínio e revestidos com material isolante. Eles são imersos em óleo isolante mineral e fabricados em um ambiente controlado e apropriado.</p>
                    <p>– O núcleo magnético é composto por lâminas de aço silício, o que contribui para o desempenho eficiente do transformador.</p>
                    <p>– Para otimizar a dissipação de calor, são incorporados radiadores. Isso permite ao transformador operar em temperaturas mais baixas em comparação com transformadores a seco.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A ÓLEO 3000KVA:</h2>
                    <p>Existem transformadores a óleo disponíveis para atender uma ampla variedade de necessidades. Eles são ideais para instalações que variam desde cabines simplificadas até configurações convencionais que demandam alta potência. Além disso, esses transformadores são ideais para locais onde a segurança é uma prioridade, assegurando que não haja riscos para pessoas que estejam nas proximidades. Esses transformadores são empregados em diversos cenários, incluindo distribuição, geração e consumo de energia.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A ÓLEO 3000KVA PODE SER APLICADO:</h2>
                    <p>Nossos transformadores são projetados para atender uma ampla gama de setores, incluindo comércio, indústrias, cooperativas, instaladoras, empreiteiras, subestações industriais, máquinas elétricas e locais de grande circulação de pessoas e áreas públicas. Eles são ideais para locais próximos a centros de carga, calçadas, praças, escolas e em qualquer cenário onde a demanda por transformadores seja essencial.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A ÓLEO 3000KVA:</h2>
                    <p>Apresenta uma longevidade notável, sendo altamente durável ao longo do tempo. Sua versatilidade permite uma instalação interna ou externa com extrema facilidade. Este transformador é caracterizado por um baixo custo de fabricação, o que o torna uma escolha econômica. Além disso, demanda uma quantidade reduzida de manutenção, a qual é de execução simples, englobando a substituição do óleo isolante, juntas, guarnições e acessórios.</p>
                    <p>A acessibilidade eficiente às partes ativas do transformador simplifica a realização de manutenções necessárias, contribuindo significativamente para a extensão de sua vida útil de forma eficaz.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-oleo-3000kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-seco-30kva" => [
        "imagem" => "transformador_a_seco_45kva",
        "nome" => "Transformador a Seco 30KVA",
        "preco" => "R$20.642,00 – R$31.707,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src=" ' . $url . 'imagens/main/produtos/transformador_a_seco_45kva.webp" alt="Transformador a Seco 30KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Seco 30KVA</h1>

                <div class="produto-preco">
                    R$20.642,00 – R$31.707,00
                </div>

                <p class="produto-descricao-curta">Transformador a Seco de 30KVA com isolamento em resina epóxi. Ideal para hospitais, edifícios comerciais e data centers. Seguro, sem risco de vazamentos, baixíssima manutenção. Fabricado conforme ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAS-30KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A SECO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-seco-30kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-seco-30kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-seco-30kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Seco de 30KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 36,2KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Classe de Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de fases: 3 (Trifásico);</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Sistema de Refrigeração: Natural (AN);</li>
                        <li>Enrolamento AT e BT: Alumínio;</li>
                        <li>Meio Isolante: Resina Epóxi;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Tipo Comutação: Painel de comutação;</li>
                        <li>Classe térmica: F (155 ºC);</li>
                        <li>Elevação temperatura: 100,0 °C;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de Para-Raio: Opcional;</li>
                        <li>Meio de Suspenção: Sim;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Ensaio de tipo: Não Incluso;</li>
                        <li>Fabricado e ensaios conforme as normas: ABNT-5356/11;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A SECO 30KVA:</h2>
                    <p>A construção do transformador a seco envolve a montagem de bobinas primárias e secundárias com isolantes de alta qualidade, posicionadas dentro de um núcleo de ferro laminado. Em vez de usar óleo, esse tipo de transformador usa materiais isolantes sólidos, como resinas epóxi, para proteção. O conjunto é encapsulado em resina epóxi, formando um invólucro hermético que protege contra fatores ambientais. Essa construção elimina riscos de vazamentos e incêndios, resultando em segurança, menor manutenção e impacto ambiental reduzido.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A SECO 30KVA:</h2>
                    <p>O transformador a seco é utilizado em diversas aplicações de distribuição de energia, como em edifícios comerciais e residenciais, indústrias, hospitais e infraestruturas urbanas. Sua construção inovadora, que utiliza isolantes sólidos em vez de fluidos líquidos, o torna ideal para ambientes internos e externos. Isso elimina o risco de vazamentos, tornando-o mais seguro. Além disso, seu design hermético reduz a manutenção, resultando em custos operacionais mais baixos ao longo do tempo.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A SECO 30KVA PODE SER APLICADO:</h2>
                    <p>O transformador a seco encontra aplicação em diversas áreas, como edifícios comerciais, escolas, pequenas indústrias, hospitais, centros recreativos e locais de eventos. Ele é adequado para fornecer energia confiável em locais de carga moderada, como centros de dados, condomínios, estabelecimentos comerciais menores e infraestrutura urbana. Sua versatilidade e segurança fazem dele uma escolha ideal para diversas instalações.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A SECO 30KVA:</h2>
                    <p>Seguro: Isento de descargas parciais, suportabilidade às tensões de impulso e aplicada, capacidade de sobrecarga, resistente a umidade, alta suportabilidade à curtos circuitos;</p>
                    <p>Econômico: Instalado nos centros de carga permite otimização do projeto de instalação, maior simplicidade nas eventuais mudanças de lay-out das instalações, torna desnecessária a construção de obras civis ou proteções especiais;</p>
                    <p>Ecológico: Sem líquidos isolantes, resistente a chamas e auto-extinguível, não emite gases tóxicos, totalmente reciclável, isento de manutenção;</p>
                    <p>Adaptável: A potência pode ser aumentada em até 40% com a simples instalação de ventilação forçada, facilidade no posicionamento de terminais, menor área requerida para instalação.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-seco-30kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-seco-45kva" => [
        "imagem" => "transformador_a_seco_45kva",
        "nome" => "Transformador a Seco 45KVA",
        "preco" => "R$22.238,00 – R$36.814,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_seco_45kva.webp" alt="Transformador a Seco 45KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Seco 45KVA</h1>

                <div class="produto-preco">
                    R$22.238,00 – R$36.814,00
                </div>

                <p class="produto-descricao-curta">Transformador a Seco de 45KVA com isolamento em resina epóxi. Ideal para ambientes internos com alta segurança. Fabricado conforme ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAS-45KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A SECO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-seco-45kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-seco-45kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-seco-45kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Seco de 45KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 36,2KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Classe de Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de fases: 3 (Trifásico);</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Sistema de Refrigeração: Natural (AN);</li>
                        <li>Enrolamento AT e BT: Alumínio;</li>
                        <li>Meio Isolante: Resina Epóxi;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Tipo Comutação: Painel de comutação;</li>
                        <li>Classe térmica: F (155 ºC);</li>
                        <li>Elevação temperatura: 100,0 °C;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de Para-Raio: Opcional;</li>
                        <li>Meio de Suspenção: Sim;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Ensaio de tipo: Não Incluso;</li>
                        <li>Fabricado e ensaios conforme as normas: ABNT-5356/11;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A SECO 45KVA:</h2>
                    <p>A construção do transformador a seco envolve a montagem de bobinas primárias e secundárias com isolantes de alta qualidade, posicionadas dentro de um núcleo de ferro laminado. Em vez de usar óleo, esse tipo de transformador usa materiais isolantes sólidos, como resinas epóxi, para proteção. O conjunto é encapsulado em resina epóxi, formando um invólucro hermético que protege contra fatores ambientais. Essa construção elimina riscos de vazamentos e incêndios, resultando em segurança, menor manutenção e impacto ambiental reduzido.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A SECO 45KVA:</h2>
                    <p>O transformador a seco é utilizado em diversas aplicações de distribuição de energia, como em edifícios comerciais e residenciais, indústrias, hospitais e infraestruturas urbanas. Sua construção inovadora, que utiliza isolantes sólidos em vez de fluidos líquidos, o torna ideal para ambientes internos e externos. Isso elimina o risco de vazamentos, tornando-o mais seguro. Além disso, seu design hermético reduz a manutenção, resultando em custos operacionais mais baixos ao longo do tempo.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A SECO 45KVA PODE SER APLICADO:</h2>
                    <p>O transformador a seco encontra aplicação em diversas áreas, como edifícios comerciais, escolas, pequenas indústrias, hospitais, centros recreativos e locais de eventos. Ele é adequado para fornecer energia confiável em locais de carga moderada, como centros de dados, condomínios, estabelecimentos comerciais menores e infraestrutura urbana. Sua versatilidade e segurança fazem dele uma escolha ideal para diversas instalações.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A SECO 45KVA:</h2>
                    <p>Seguro: Isento de descargas parciais, suportabilidade às tensões de impulso e aplicada, capacidade de sobrecarga, resistente a umidade, alta suportabilidade à curtos circuitos;</p>
                    <p>Econômico: Instalado nos centros de carga permite otimização do projeto de instalação, maior simplicidade nas eventuais mudanças de lay-out das instalações, torna desnecessária a construção de obras civis ou proteções especiais;</p>
                    <p>Ecológico: Sem líquidos isolantes, resistente a chamas e auto-extinguível, não emite gases tóxicos, totalmente reciclável, isento de manutenção;</p>
                    <p>Adaptável: A potência pode ser aumentada em até 40% com a simples instalação de ventilação forçada, facilidade no posicionamento de terminais, menor área requerida para instalação.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-seco-45kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-seco-75kva" => [
        "imagem" => "transformador_a_seco_15kva",
        "nome" => "Transformador a Seco 75KVA",
        "preco" => "R$23.195,00 – R$40.219,00",
        'content' =>
        '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_seco_75kva.webp" alt="Transformador a Seco 75KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Seco 75KVA</h1>

                <div class="produto-preco">
                    R$23.195,00 – R$40.219,00
                </div>

                <p class="produto-descricao-curta">Transformador a Seco de 75KVA com isolamento em resina epóxi. Ideal para ambientes internos que exigem alta segurança. Fabricado conforme ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAS-75KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A SECO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-seco-75kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-seco-75kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-seco-75kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Seco de 75KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 36,2KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Classe de Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de fases: 3 (Trifásico);</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Sistema de Refrigeração: Natural (AN);</li>
                        <li>Enrolamento AT e BT: Alumínio;</li>
                        <li>Meio Isolante: Resina Epóxi;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Tipo Comutação: Painel de comutação;</li>
                        <li>Classe térmica: F (155 ºC);</li>
                        <li>Elevação temperatura: 100,0 °C;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de Para-Raio: Opcional;</li>
                        <li>Meio de Suspenção: Sim;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Ensaio de tipo: Não Incluso;</li>
                        <li>Fabricado e ensaios conforme as normas: ABNT-5356/11;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A SECO 75KVA:</h2>
                    <p>A construção do transformador a seco envolve a montagem de bobinas primárias e secundárias com isolantes de alta qualidade, posicionadas dentro de um núcleo de ferro laminado. Em vez de usar óleo, esse tipo de transformador usa materiais isolantes sólidos, como resinas epóxi, para proteção. O conjunto é encapsulado em resina epóxi, formando um invólucro hermético que protege contra fatores ambientais. Essa construção elimina riscos de vazamentos e incêndios, resultando em segurança, menor manutenção e impacto ambiental reduzido.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A SECO 75KVA:</h2>
                    <p>O transformador a seco é utilizado em diversas aplicações de distribuição de energia, como em edifícios comerciais e residenciais, indústrias, hospitais e infraestruturas urbanas. Sua construção inovadora, que utiliza isolantes sólidos em vez de fluidos líquidos, o torna ideal para ambientes internos e externos. Isso elimina o risco de vazamentos, tornando-o mais seguro. Além disso, seu design hermético reduz a manutenção, resultando em custos operacionais mais baixos ao longo do tempo.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A SECO 75KVA PODE SER APLICADO:</h2>
                    <p>O transformador a seco encontra aplicação em diversas áreas, como edifícios comerciais, escolas, pequenas indústrias, hospitais, centros recreativos e locais de eventos. Ele é adequado para fornecer energia confiável em locais de carga moderada, como centros de dados, condomínios, estabelecimentos comerciais menores e infraestrutura urbana. Sua versatilidade e segurança fazem dele uma escolha ideal para diversas instalações.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A SECO 75KVA:</h2>
                    <p>Seguro: Isento de descargas parciais, suportabilidade às tensões de impulso e aplicada, capacidade de sobrecarga, resistente a umidade, alta suportabilidade à curtos circuitos;</p>
                    <p>Econômico: Instalado nos centros de carga permite otimização do projeto de instalação, maior simplicidade nas eventuais mudanças de lay-out das instalações, torna desnecessária a construção de obras civis ou proteções especiais;</p>
                    <p>Ecológico: Sem líquidos isolantes, resistente a chamas e auto-extinguível, não emite gases tóxicos, totalmente reciclável, isento de manutenção;</p>
                    <p>Adaptável: A potência pode ser aumentada em até 40% com a simples instalação de ventilação forçada, facilidade no posicionamento de terminais, menor área requerida para instalação.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-seco-75kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-seco-112-5kva" => [
        "imagem" => "transformador_a_seco_45kva",
        "nome" => "Transformador a Seco 112,5KVA",
        "preco" => "R$27.664,00 – R$45.220,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_seco_45kva.webp" alt="Transformador a Seco 112,5KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Seco 112,5KVA</h1>

                <div class="produto-preco">
                    R$27.664,00 – R$45.220,00
                </div>

                <p class="produto-descricao-curta">Transformador a Seco de 112,5KVA com isolamento em resina epóxi. Seguro e eficiente para ambientes internos. Fabricado conforme ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAS-112.5KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A SECO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-seco-112-5kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-seco-112-5kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-seco-112-5kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Seco de 112,5KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 36,2KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Classe de Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de fases: 3 (Trifásico);</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Sistema de Refrigeração: Natural (AN);</li>
                        <li>Enrolamento AT e BT: Alumínio;</li>
                        <li>Meio Isolante: Resina Epóxi;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Tipo Comutação: Painel de comutação;</li>
                        <li>Classe térmica: F (155 ºC);</li>
                        <li>Elevação temperatura: 100,0 °C;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de Para-Raio: Opcional;</li>
                        <li>Meio de Suspenção: Sim;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Ensaio de tipo: Não Incluso;</li>
                        <li>Fabricado e ensaios conforme as normas: ABNT-5356/11;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A SECO 112,5KVA:</h2>
                    <p>A construção do transformador a seco envolve a montagem de bobinas primárias e secundárias com isolantes de alta qualidade, posicionadas dentro de um núcleo de ferro laminado. Em vez de usar óleo, esse tipo de transformador usa materiais isolantes sólidos, como resinas epóxi, para proteção. O conjunto é encapsulado em resina epóxi, formando um invólucro hermético que protege contra fatores ambientais. Essa construção elimina riscos de vazamentos e incêndios, resultando em segurança, menor manutenção e impacto ambiental reduzido.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A SECO 112,5KVA:</h2>
                    <p>O transformador a seco é utilizado em diversas aplicações de distribuição de energia, como em edifícios comerciais e residenciais, indústrias, hospitais e infraestruturas urbanas. Sua construção inovadora, que utiliza isolantes sólidos em vez de fluidos líquidos, o torna ideal para ambientes internos e externos. Isso elimina o risco de vazamentos, tornando-o mais seguro. Além disso, seu design hermético reduz a manutenção, resultando em custos operacionais mais baixos ao longo do tempo.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A SECO 112,5KVA PODE SER APLICADO:</h2>
                    <p>O transformador a seco encontra aplicação em diversas áreas, como edifícios comerciais, escolas, pequenas indústrias, hospitais, centros recreativos e locais de eventos. Ele é adequado para fornecer energia confiável em locais de carga moderada, como centros de dados, condomínios, estabelecimentos comerciais menores e infraestrutura urbana. Sua versatilidade e segurança fazem dele uma escolha ideal para diversas instalações.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A SECO 112,5KVA:</h2>
                    <p>Seguro: Isento de descargas parciais, suportabilidade às tensões de impulso e aplicada, capacidade de sobrecarga, resistente a umidade, alta suportabilidade à curtos circuitos;</p>
                    <p>Econômico: Instalado nos centros de carga permite otimização do projeto de instalação, maior simplicidade nas eventuais mudanças de lay-out das instalações, torna desnecessária a construção de obras civis ou proteções especiais;</p>
                    <p>Ecológico: Sem líquidos isolantes, resistente a chamas e auto-extinguível, não emite gases tóxicos, totalmente reciclável, isento de manutenção;</p>
                    <p>Adaptável: A potência pode ser aumentada em até 40% com a simples instalação de ventilação forçada, facilidade no posicionamento de terminais, menor área requerida para instalação.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-seco-112-5kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-seco-150kva" => [
        "imagem" => "transformador_a_seco_15kva",
        "nome" => "Transformador a Seco 150KVA",
        "preco" => "R$31.494,00 – R$52.881,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_seco_150kva.webp" alt="Transformador a Seco 150KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Seco 150KVA</h1>

                <div class="produto-preco">
                    R$30.690,00 – R$53.898,00
                </div>

                <p class="produto-descricao-curta">Transformador a Seco de 150KVA com isolamento em resina epóxi para ambientes internos de médio porte. Fabricado conforme ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAS-150KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A SECO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-seco-150kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-seco-150kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-seco-150kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Seco de 150KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 36,2KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Classe de Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de fases: 3 (Trifásico);</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Sistema de Refrigeração: Natural (AN);</li>
                        <li>Enrolamento AT e BT: Alumínio;</li>
                        <li>Meio Isolante: Resina Epóxi;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Tipo Comutação: Painel de comutação;</li>
                        <li>Classe térmica: F (155 ºC);</li>
                        <li>Elevação temperatura: 100,0 °C;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de Para-Raio: Opcional;</li>
                        <li>Meio de Suspenção: Sim;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Ensaio de tipo: Não Incluso;</li>
                        <li>Fabricado e ensaios conforme as normas: ABNT-5356/11;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A SECO 150KVA:</h2>
                    <p>A construção do transformador a seco envolve a montagem de bobinas primárias e secundárias com isolantes de alta qualidade, posicionadas dentro de um núcleo de ferro laminado. Em vez de usar óleo, esse tipo de transformador usa materiais isolantes sólidos, como resinas epóxi, para proteção. O conjunto é encapsulado em resina epóxi, formando um invólucro hermético que protege contra fatores ambientais. Essa construção elimina riscos de vazamentos e incêndios, resultando em segurança, menor manutenção e impacto ambiental reduzido.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A SECO 150KVA:</h2>
                    <p>O transformador a seco é utilizado em diversas aplicações de distribuição de energia, como em edifícios comerciais e residenciais, indústrias, hospitais e infraestruturas urbanas. Sua construção inovadora, que utiliza isolantes sólidos em vez de fluidos líquidos, o torna ideal para ambientes internos e externos. Isso elimina o risco de vazamentos, tornando-o mais seguro. Além disso, seu design hermético reduz a manutenção, resultando em custos operacionais mais baixos ao longo do tempo.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A SECO 150KVA PODE SER APLICADO:</h2>
                    <p>O transformador a seco encontra aplicação em diversas áreas, como edifícios comerciais, escolas, pequenas indústrias, hospitais, centros recreativos e locais de eventos. Ele é adequado para fornecer energia confiável em locais de carga moderada, como centros de dados, condomínios, estabelecimentos comerciais menores e infraestrutura urbana. Sua versatilidade e segurança fazem dele uma escolha ideal para diversas instalações.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A SECO 150KVA:</h2>
                    <p>Seguro: Isento de descargas parciais, suportabilidade às tensões de impulso e aplicada, capacidade de sobrecarga, resistente a umidade, alta suportabilidade à curtos circuitos;</p>
                    <p>Econômico: Instalado nos centros de carga permite otimização do projeto de instalação, maior simplicidade nas eventuais mudanças de lay-out das instalações, torna desnecessária a construção de obras civis ou proteções especiais;</p>
                    <p>Ecológico: Sem líquidos isolantes, resistente a chamas e auto-extinguível, não emite gases tóxicos, totalmente reciclável, isento de manutenção;</p>
                    <p>Adaptável: A potência pode ser aumentada em até 40% com a simples instalação de ventilação forçada, facilidade no posicionamento de terminais, menor área requerida para instalação.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-seco-150kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-seco-225kva" => [
        "imagem" => "transformador_a_seco_225kva",
        "nome" => "Transformador a Seco 225KVA",
        "preco" => "R$39.262,00 – R$63.095,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_seco_225kva.webp" alt="Transformador a Seco 225KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Seco 225KVA</h1>

                <div class="produto-preco">
                    R$39.030,00 – R$64.394,00
                </div>

                <p class="produto-descricao-curta">Transformador a Seco de 225KVA com isolamento em resina epóxi para grandes aplicações internas. Fabricado conforme ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAS-225KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A SECO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-seco-225kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-seco-225kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-seco-225kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Seco de 225KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 36,2KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Classe de Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de fases: 3 (Trifásico);</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Sistema de Refrigeração: Natural (AN);</li>
                        <li>Enrolamento AT e BT: Alumínio;</li>
                        <li>Meio Isolante: Resina Epóxi;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Tipo Comutação: Painel de comutação;</li>
                        <li>Classe térmica: F (155 ºC);</li>
                        <li>Elevação temperatura: 100,0 °C;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de Para-Raio: Opcional;</li>
                        <li>Meio de Suspenção: Sim;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Ensaio de tipo: Não Incluso;</li>
                        <li>Fabricado e ensaios conforme as normas: ABNT-5356/11;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A SECO 225KVA:</h2>
                    <p>A construção do transformador a seco envolve a montagem de bobinas primárias e secundárias com isolantes de alta qualidade, posicionadas dentro de um núcleo de ferro laminado. Em vez de usar óleo, esse tipo de transformador usa materiais isolantes sólidos, como resinas epóxi, para proteção. O conjunto é encapsulado em resina epóxi, formando um invólucro hermético que protege contra fatores ambientais. Essa construção elimina riscos de vazamentos e incêndios, resultando em segurança, menor manutenção e impacto ambiental reduzido.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A SECO 225KVA:</h2>
                    <p>O transformador a seco é utilizado em diversas aplicações de distribuição de energia, como em edifícios comerciais e residenciais, indústrias, hospitais e infraestruturas urbanas. Sua construção inovadora, que utiliza isolantes sólidos em vez de fluidos líquidos, o torna ideal para ambientes internos e externos. Isso elimina o risco de vazamentos, tornando-o mais seguro. Além disso, seu design hermético reduz a manutenção, resultando em custos operacionais mais baixos ao longo do tempo.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A SECO 225KVA PODE SER APLICADO:</h2>
                    <p>O transformador a seco encontra aplicação em diversas áreas, como edifícios comerciais, escolas, pequenas indústrias, hospitais, centros recreativos e locais de eventos. Ele é adequado para fornecer energia confiável em locais de carga moderada, como centros de dados, condomínios, estabelecimentos comerciais menores e infraestrutura urbana. Sua versatilidade e segurança fazem dele uma escolha ideal para diversas instalações.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A SECO 225KVA:</h2>
                    <p>Seguro: Isento de descargas parciais, suportabilidade às tensões de impulso e aplicada, capacidade de sobrecarga, resistente a umidade, alta suportabilidade à curtos circuitos;</p>
                    <p>Econômico: Instalado nos centros de carga permite otimização do projeto de instalação, maior simplicidade nas eventuais mudanças de lay-out das instalações, torna desnecessária a construção de obras civis ou proteções especiais;</p>
                    <p>Ecológico: Sem líquidos isolantes, resistente a chamas e auto-extinguível, não emite gases tóxicos, totalmente reciclável, isento de manutenção;</p>
                    <p>Adaptável: A potência pode ser aumentada em até 40% com a simples instalação de ventilação forçada, facilidade no posicionamento de terminais, menor área requerida para instalação.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-seco-225kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-seco-300kva" => [
        "imagem" => "transformador_a_seco_300kva",
        "nome" => "Transformador a Seco 300KVA",
        "preco" => "R$47.454,00 – R$74.799,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_seco_300kva.webp" alt="Transformador a Seco 300KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Seco 300KVA</h1>

                <div class="produto-preco">
                    R$46.768,00 – R$80.836,00
                </div>

                <p class="produto-descricao-curta">Transformador a Seco de 300KVA com isolamento em resina epóxi para grandes demandas industriais internas. Fabricado conforme ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAS-300KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A SECO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-seco-300kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-seco-300kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-seco-300kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Seco de 300KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 36,2KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Classe de Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de fases: 3 (Trifásico);</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Sistema de Refrigeração: Natural (AN);</li>
                        <li>Enrolamento AT e BT: Alumínio;</li>
                        <li>Meio Isolante: Resina Epóxi;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Tipo Comutação: Painel de comutação;</li>
                        <li>Classe térmica: F (155 ºC);</li>
                        <li>Elevação temperatura: 100,0 °C;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de Para-Raio: Opcional;</li>
                        <li>Meio de Suspenção: Sim;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Ensaio de tipo: Não Incluso;</li>
                        <li>Fabricado e ensaios conforme as normas: ABNT-5356/11;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A SECO 300KVA:</h2>
                    <p>A construção do transformador a seco envolve a montagem de bobinas primárias e secundárias com isolantes de alta qualidade, posicionadas dentro de um núcleo de ferro laminado. Em vez de usar óleo, esse tipo de transformador usa materiais isolantes sólidos, como resinas epóxi, para proteção. O conjunto é encapsulado em resina epóxi, formando um invólucro hermético que protege contra fatores ambientais. Essa construção elimina riscos de vazamentos e incêndios, resultando em segurança, menor manutenção e impacto ambiental reduzido.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A SECO 300KVA:</h2>
                    <p>O transformador a seco é utilizado em diversas aplicações de distribuição de energia, como em edifícios comerciais e residenciais, indústrias, hospitais e infraestruturas urbanas. Sua construção inovadora, que utiliza isolantes sólidos em vez de fluidos líquidos, o torna ideal para ambientes internos e externos. Isso elimina o risco de vazamentos, tornando-o mais seguro. Além disso, seu design hermético reduz a manutenção, resultando em custos operacionais mais baixos ao longo do tempo.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A SECO 300KVA PODE SER APLICADO:</h2>
                    <p>O transformador a seco encontra aplicação em diversas áreas, como edifícios comerciais, escolas, pequenas indústrias, hospitais, centros recreativos e locais de eventos. Ele é adequado para fornecer energia confiável em locais de carga moderada, como centros de dados, condomínios, estabelecimentos comerciais menores e infraestrutura urbana. Sua versatilidade e segurança fazem dele uma escolha ideal para diversas instalações.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A SECO 300KVA:</h2>
                    <p>Seguro: Isento de descargas parciais, suportabilidade às tensões de impulso e aplicada, capacidade de sobrecarga, resistente a umidade, alta suportabilidade à curtos circuitos;</p>
                    <p>Econômico: Instalado nos centros de carga permite otimização do projeto de instalação, maior simplicidade nas eventuais mudanças de lay-out das instalações, torna desnecessária a construção de obras civis ou proteções especiais;</p>
                    <p>Ecológico: Sem líquidos isolantes, resistente a chamas e auto-extinguível, não emite gases tóxicos, totalmente reciclável, isento de manutenção;</p>
                    <p>Adaptável: A potência pode ser aumentada em até 40% com a simples instalação de ventilação forçada, facilidade no posicionamento de terminais, menor área requerida para instalação.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-seco-300kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-a-seco-500kva" => [
        "imagem" => "transformador_a_seco_500kva",
        "nome" => "Transformador a Seco 500KVA",
        "preco" => "R$60,967.00 – R$95,654.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_seco_300kva.webp" alt="Transformador a Seco 300KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Seco 300KVA</h1>

                <div class="produto-preco">
                    R$60,967.00 – R$95,654.00
                </div>

                <p class="produto-descricao-curta">Apresentamos o nosso Transformador a Seco de 500KVA, um equipamento de excelência com isolantes sólidos de resinas epóxi, assegurando um desempenho confiável e duradouro. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAS-300KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A SECO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-seco-300kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-seco-300kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-seco-500kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: Transformador a Seco de 500KVA</li>
                        <li>– Classe de Tensão Primária: 15KV, 25KV e 36,2KV</li>
                        <li>– Classe de Tensão Secundária: 0,6/1,2KV</li>
                        <li>– Classe de Tensão do Secundário: 220/127V, 380/220V e 440/254V</li>
                        <li>– Frequência: 60 Hz</li>
                        <li>– Ligação do Primário: Delta</li>
                        <li>– Ligação do Secundário: Estrela com Neutro acessível</li>
                        <li>– Número de fases: 3 (Trifásico)
                        <li>– Grau de Proteção: IP00/IP21/IP54</li>
                        <li>– Altitude de utilização máxima: 1000M</li>
                        <li>– Instalação: Abrigada/Interna</li>
                        <li>– Sistema de Refrigeração: Natural (AN)</li>
                        <li>– Enrolamento AT e BT: Alumínio</li>
                        <li>– Meio Isolante: Resina Epóxi</li>
                        <li>– Núcleo: Chapa de Silício</li>
                        <li>– Fator: K1</li>
                        <li>– Tipo Comutação: Painel de comutação</li>
                        <li>– Classe térmica: F (155 ºC)</li>
                        <li>– Elevação temperatura: 100.0 °C</li>
                        <li>– Rodas: Sim</li>
                        <li>– Suporte de Para-Raio: Opcional</li>
                        <li>– Meio de Suspenção: Sim</li>
                        <li>– Pintura: Padrão</li>
                        <li>– Placa de Características: Sim</li>
                        <li>– Identificação do aterramento: Sim</li>
                        <li>– Ensaio de tipo: Não Incluso</li>
                        <li>– Fabricado e ensaios conforme as normas: ABNT-5356/11</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A SECO 500KVA:</h2>
                    <p>A construção do transformador a seco envolve a montagem de bobinas primárias e secundárias com isolantes de alta qualidade, posicionadas dentro de um núcleo de ferro laminado. Em vez de usar óleo, esse tipo de transformador usa materiais isolantes sólidos, como resinas epóxi, para proteção.</p>
                    <p>O conjunto é encapsulado em resina epóxi, formando um invólucro hermético que protege contra fatores ambientais. Essa construção elimina riscos de vazamentos e incêndios, resultando em segurança, menor manutenção e impacto ambiental reduzido.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A SECO 300KVA:</h2>
                    <p>O transformador a seco é utilizado em diversas aplicações de distribuição de energia, como em edifícios comerciais e residenciais, indústrias, hospitais e infraestruturas urbanas. Sua construção inovadora, que utiliza isolantes sólidos em vez de fluidos líquidos, o torna ideal para ambientes internos e externos. Isso elimina o risco de vazamentos, tornando-o mais seguro.</p>

                    <p>Além disso, seu design hermético reduz a manutenção, resultando em custos operacionais mais baixos ao longo do tempo. Seu impacto ambiental reduzido e eficiência o tornam uma escolha inteligente para uma distribuição de energia mais confiável e sustentável.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A SECO 300KVA PODE SER APLICADO:</h2>
                    <p>O transformador a seco encontra aplicação em diversas áreas, como edifícios comerciais, escolas, pequenas indústrias, hospitais, centros recreativos e locais de eventos. Ele é adequado para fornecer energia confiável em locais de carga moderada, como centros de dados, condomínios, estabelecimentos comerciais menores e infraestrutura urbana. Sua versatilidade e segurança fazem dele uma escolha ideal para diversas instalações</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A SECO 500KVA:</h2>
                    <p>Seguro: Isento de descargas parciais, suportabilidade às tensões de impulso e aplicada, capacidade de sobrecarga, resistente a umidade, alta suportabilidade à curtos circuitos;</p>
                    <p>Econômico: Instalado nos centros de carga permite otimização do projeto de instalação, maior simplicidade nas eventuais mudanças de lay-out das instalações, torna desnecessária a construção de obras civis ou proteções especiais;</p>
                    <p>Ecológico: Sem líquidos isolantes, resistente a chamas e auto-extinguível, não emite gases tóxicos, totalmente reciclável, isento de manutenção;</p>
                    <p>Adaptável: A potência pode ser aumentada em até 40% com a simples instalação de ventilação forçada, facilidade no posicionamento de terminais, menor área requerida para instalação.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-seco-300kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-seco-750kva" => [
        "imagem" => "transformador_a_seco_750kva",
        "nome" => "Transformador a Seco 750KVA",
        "preco" => "R$77.140,00 – R$125.765,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_seco_750kva.webp" alt="Transformador a Seco 750KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Seco 750KVA</h1>

                <div class="produto-preco">
                    R$88.440,00 – R$168.034,00
                </div>

                <p class="produto-descricao-curta">Transformador a Seco de 750KVA com isolamento em resina epóxi para grandes plantas industriais. Fabricado conforme ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAS-750KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A SECO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-seco-750kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-seco-750kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-seco-750kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Seco de 750KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 36,2KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Classe de Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de fases: 3 (Trifásico);</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Sistema de Refrigeração: Natural (AN);</li>
                        <li>Enrolamento AT e BT: Alumínio;</li>
                        <li>Meio Isolante: Resina Epóxi;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Tipo Comutação: Painel de comutação;</li>
                        <li>Classe térmica: F (155 ºC);</li>
                        <li>Elevação temperatura: 100,0 °C;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de Para-Raio: Opcional;</li>
                        <li>Meio de Suspenção: Sim;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Ensaio de tipo: Não Incluso;</li>
                        <li>Fabricado e ensaios conforme as normas: ABNT-5356/11;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A SECO 750KVA:</h2>
                    <p>A construção do transformador a seco envolve a montagem de bobinas primárias e secundárias com isolantes de alta qualidade, posicionadas dentro de um núcleo de ferro laminado. Em vez de usar óleo, esse tipo de transformador usa materiais isolantes sólidos, como resinas epóxi, para proteção. O conjunto é encapsulado em resina epóxi, formando um invólucro hermético que protege contra fatores ambientais. Essa construção elimina riscos de vazamentos e incêndios, resultando em segurança, menor manutenção e impacto ambiental reduzido.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A SECO 750KVA:</h2>
                    <p>O transformador a seco é utilizado em diversas aplicações de distribuição de energia, como em edifícios comerciais e residenciais, indústrias, hospitais e infraestruturas urbanas. Sua construção inovadora, que utiliza isolantes sólidos em vez de fluidos líquidos, o torna ideal para ambientes internos e externos. Isso elimina o risco de vazamentos, tornando-o mais seguro. Além disso, seu design hermético reduz a manutenção, resultando em custos operacionais mais baixos ao longo do tempo.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A SECO 750KVA PODE SER APLICADO:</h2>
                    <p>O transformador a seco encontra aplicação em diversas áreas, como edifícios comerciais, escolas, pequenas indústrias, hospitais, centros recreativos e locais de eventos. Ele é adequado para fornecer energia confiável em locais de carga moderada, como centros de dados, condomínios, estabelecimentos comerciais menores e infraestrutura urbana. Sua versatilidade e segurança fazem dele uma escolha ideal para diversas instalações.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A SECO 750KVA:</h2>
                    <p>Seguro: Isento de descargas parciais, suportabilidade às tensões de impulso e aplicada, capacidade de sobrecarga, resistente a umidade, alta suportabilidade à curtos circuitos;</p>
                    <p>Econômico: Instalado nos centros de carga permite otimização do projeto de instalação, maior simplicidade nas eventuais mudanças de lay-out das instalações, torna desnecessária a construção de obras civis ou proteções especiais;</p>
                    <p>Ecológico: Sem líquidos isolantes, resistente a chamas e auto-extinguível, não emite gases tóxicos, totalmente reciclável, isento de manutenção;</p>
                    <p>Adaptável: A potência pode ser aumentada em até 40% com a simples instalação de ventilação forçada, facilidade no posicionamento de terminais, menor área requerida para instalação.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-seco-750kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-a-seco-1000kva" => [
        "imagem" => "transformador_a_seco_1000kva",
        "nome" => "Transformador a Seco 1250KVA",
        "preco" => "R$96,398.00 – R$148,109.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_seco_1000kva.webp" alt="Transformador a Seco 1000KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Seco 1000KVA</h1>

                <div class="produto-preco">
                    R$96,398.00 – R$148,109.00
                </div>

                <p class="produto-descricao-curta">Apresentamos o nosso Transformador a Seco de 1000KVA, um equipamento de excelência com isolantes sólidos de resinas epóxi, assegurando um desempenho confiável e duradouro. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAS-1000KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A SECO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-seco-1000kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-seco-1000kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-seco-1000kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: Transformador a Seco de 1000KVA;</li>
                        <li>– Classe de Tensão Primária: 15KV, 25KV e 36,2KV;</li>
                        <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>– Classe de Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Ligação do Primário: Delta;</li>
                        <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>– Número de fases: 3 (Trifásico)
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Altitude de utilização máxima: 1000M;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Sistema de Refrigeração: Natural (AN);</li>
                        <li>– Enrolamento AT e BT: Alumínio;</li>
                        <li>– Meio Isolante: Resina Epóxi;</li>
                        <li>– Núcleo: Chapa de Silício;</li>
                        <li>– Fator: K1;</li>
                        <li>– Tipo Comutação: Painel de comutação;</li>
                        <li>– Classe térmica: F (155 ºC);</li>
                        <li>– Elevação temperatura: 100.0 °C;</li>
                        <li>– Rodas: Sim;</li>
                        <li>– Suporte de Para-Raio: Opcional;</li>
                        <li>– Meio de Suspenção: Sim;</li>
                        <li>– Pintura: Padrão;</li>
                        <li>– Placa de Características: Sim;</li>
                        <li>– Identificação do aterramento: Sim;</li>
                        <li>– Ensaio de tipo: Não Incluso;</li>
                        <li>– Fabricado e ensaios conforme as normas: ABNT-5356/11;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A SECO 1000KVA:</h2>
                    <p>A construção do transformador a seco envolve a montagem de bobinas primárias e secundárias com isolantes de alta qualidade, posicionadas dentro de um núcleo de ferro laminado. Em vez de usar óleo, esse tipo de transformador usa materiais isolantes sólidos, como resinas epóxi, para proteção</p>
                    <p>O conjunto é encapsulado em resina epóxi, formando um invólucro hermético que protege contra fatores ambientais. Essa construção elimina riscos de vazamentos e incêndios, resultando em segurança, menor manutenção e impacto ambiental reduzido.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A SECO 1000KVA:</h2>
                    <p>O transformador a seco é utilizado em diversas aplicações de distribuição de energia, como em edifícios comerciais e residenciais, indústrias, hospitais e infraestruturas urbanas. Sua construção inovadora, que utiliza isolantes sólidos em vez de fluidos líquidos, o torna ideal para ambientes internos e externos. Isso elimina o risco de vazamentos, tornando-o mais seguro.</p>
                    <p>Além disso, seu design hermético reduz a manutenção, resultando em custos operacionais mais baixos ao longo do tempo. Seu impacto ambiental reduzido e eficiência o tornam uma escolha inteligente para uma distribuição de energia mais confiável e sustentável.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A SECO 1000KVA PODE SER APLICADO:</h2>
                    <p>O transformador a seco encontra aplicação em diversas áreas, como edifícios comerciais, escolas, pequenas indústrias, hospitais, centros recreativos e locais de eventos. Ele é adequado para fornecer energia confiável em locais de carga moderada, como centros de dados, condomínios, estabelecimentos comerciais menores e infraestrutura urbana. Sua versatilidade e segurança fazem dele uma escolha ideal para diversas instalações.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A SECO 1000KVA:</h2>
                    <p>Seguro: Isento de descargas parciais, suportabilidade às tensões de impulso e aplicada, capacidade de sobrecarga, resistente a umidade, alta suportabilidade à curtos circuitos;</p>
                    <p>Econômico: Instalado nos centros de carga permite otimização do projeto de instalação, maior simplicidade nas eventuais mudanças de lay-out das instalações, torna desnecessária a construção de obras civis ou proteções especiais;</p>
                    <p>Ecológico: Sem líquidos isolantes, resistente a chamas e auto-extinguível, não emite gases tóxicos, totalmente reciclável, isento de manutenção;</p>
                    <p>Adaptável: A potência pode ser aumentada em até 40% com a simples instalação de ventilação forçada, facilidade no posicionamento de terminais, menor área requerida para instalação.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-seco-1000kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-a-seco-1250kva" => [
        "imagem" => "transformador_a_seco_1250kva",
        "nome" => "Transformador a Seco 1250KVA",
        "preco" => "R$114.593,00 – R$183.646,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_seco_1250kva.webp" alt="Transformador a Seco 1250KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Seco 1250KVA</h1>

                <div class="produto-preco">
                    R$136.226,00 – R$258.566,00
                </div>

                <p class="produto-descricao-curta">Transformador a Seco de 1250KVA com isolamento em resina epóxi. Máxima potência da linha a seco para demandas industriais de altíssima potência. Fabricado conforme ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAS-1250KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A SECO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-seco-1250kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-seco-1250kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-seco-1250kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador a Seco de 1250KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 36,2KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Classe de Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de fases: 3 (Trifásico);</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Sistema de Refrigeração: Natural (AN);</li>
                        <li>Enrolamento AT e BT: Alumínio;</li>
                        <li>Meio Isolante: Resina Epóxi;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Tipo Comutação: Painel de comutação;</li>
                        <li>Classe térmica: F (155 ºC);</li>
                        <li>Elevação temperatura: 100,0 °C;</li>
                        <li>Rodas: Sim;</li>
                        <li>Suporte de Para-Raio: Opcional;</li>
                        <li>Meio de Suspenção: Sim;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Ensaio de tipo: Não Incluso;</li>
                        <li>Fabricado e ensaios conforme as normas: ABNT-5356/11;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A SECO 1250KVA:</h2>
                    <p>A construção do transformador a seco envolve a montagem de bobinas primárias e secundárias com isolantes de alta qualidade, posicionadas dentro de um núcleo de ferro laminado. Em vez de usar óleo, esse tipo de transformador usa materiais isolantes sólidos, como resinas epóxi, para proteção. O conjunto é encapsulado em resina epóxi, formando um invólucro hermético que protege contra fatores ambientais. Essa construção elimina riscos de vazamentos e incêndios, resultando em segurança, menor manutenção e impacto ambiental reduzido.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A SECO 1250KVA:</h2>
                    <p>O transformador a seco é utilizado em diversas aplicações de distribuição de energia, como em edifícios comerciais e residenciais, indústrias, hospitais e infraestruturas urbanas. Sua construção inovadora, que utiliza isolantes sólidos em vez de fluidos líquidos, o torna ideal para ambientes internos e externos. Isso elimina o risco de vazamentos, tornando-o mais seguro. Além disso, seu design hermético reduz a manutenção, resultando em custos operacionais mais baixos ao longo do tempo.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A SECO 1250KVA PODE SER APLICADO:</h2>
                    <p>O transformador a seco encontra aplicação em diversas áreas, como edifícios comerciais, escolas, pequenas indústrias, hospitais, centros recreativos e locais de eventos. Ele é adequado para fornecer energia confiável em locais de carga moderada, como centros de dados, condomínios, estabelecimentos comerciais menores e infraestrutura urbana. Sua versatilidade e segurança fazem dele uma escolha ideal para diversas instalações.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A SECO 1250KVA:</h2>
                    <p>Seguro: Isento de descargas parciais, suportabilidade às tensões de impulso e aplicada, capacidade de sobrecarga, resistente a umidade, alta suportabilidade à curtos circuitos;</p>
                    <p>Econômico: Instalado nos centros de carga permite otimização do projeto de instalação, maior simplicidade nas eventuais mudanças de lay-out das instalações, torna desnecessária a construção de obras civis ou proteções especiais;</p>
                    <p>Ecológico: Sem líquidos isolantes, resistente a chamas e auto-extinguível, não emite gases tóxicos, totalmente reciclável, isento de manutenção;</p>
                    <p>Adaptável: A potência pode ser aumentada em até 40% com a simples instalação de ventilação forçada, facilidade no posicionamento de terminais, menor área requerida para instalação.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-seco-1250kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-a-seco-1500kva" => [
        "imagem" => "transformador_a_seco_1500kva",
        "nome" => "Transformador a Seco 1500KVA",
        "preco" => "R$139,065.00 – R$219,184.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_seco_1500kva.webp" alt="Transformador a Seco 1500KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Seco 1500KVA</h1>

                <div class="produto-preco">
                    R$139,065.00 – R$219,184.00
                </div>

                <p class="produto-descricao-curta">Apresentamos o nosso Transformador a Seco de 1500KVA, um equipamento de excelência com isolantes sólidos de resinas epóxi, assegurando um desempenho confiável e duradouro. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAS-1500KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A SECO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-seco-1500kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-seco-1500kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-seco-1500kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                       <li>– Potência: Transformador a Seco de 1500KVA;</li>
                        <li>– Classe de Tensão Primária: 15KV, 25KV e 36,2KV;</li>
                        <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>– Classe de Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Ligação do Primário: Delta;</li>
                        <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>– Número de fases: 3 (Trifásico)
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Altitude de utilização máxima: 1000M;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Sistema de Refrigeração: Natural (AN);</li>
                        <li>– Enrolamento AT e BT: Alumínio;</li>
                        <li>– Meio Isolante: Resina Epóxi;</li>
                        <li>– Núcleo: Chapa de Silício;</li>
                        <li>– Fator: K1;</li>
                        <li>– Tipo Comutação: Painel de comutação;</li>
                        <li>– Classe térmica: F (155 ºC);</li>
                        <li>– Elevação temperatura: 100.0 °C;</li>
                        <li>– Rodas: Sim;</li>
                        <li>– Suporte de Para-Raio: Opcional;</li>
                        <li>– Meio de Suspenção: Sim;</li>
                        <li>– Pintura: Padrão;</li>
                        <li>– Placa de Características: Sim;</li>
                        <li>– Identificação do aterramento: Sim;</li>
                        <li>– Ensaio de tipo: Não Incluso;</li>
                        <li>– Fabricado e ensaios conforme as normas: ABNT-5356/11;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A SECO 1500KVA:</h2>
                    <p>A construção do transformador a seco envolve a montagem de bobinas primárias e secundárias com isolantes de alta qualidade, posicionadas dentro de um núcleo de ferro laminado. Em vez de usar óleo, esse tipo de transformador usa materiais isolantes sólidos, como resinas epóxi, para proteção. O conjunto é encapsulado em resina epóxi, formando um invólucro hermético que protege contra fatores ambientais. Essa construção elimina riscos de vazamentos e incêndios, resultando em segurança, menor manutenção e impacto ambiental reduzido.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A SECO 1500KVA:</h2>
                    <p>O transformador a seco é utilizado em diversas aplicações de distribuição de energia, como em edifícios comerciais e residenciais, indústrias, hospitais e infraestruturas urbanas. Sua construção inovadora, que utiliza isolantes sólidos em vez de fluidos líquidos, o torna ideal para ambientes internos e externos. Isso elimina o risco de vazamentos, tornando-o mais seguro. Além disso, seu design hermético reduz a manutenção, resultando em custos operacionais mais baixos ao longo do tempo.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A SECO 1250KVA PODE SER APLICADO:</h2>
                    <p>O transformador a seco encontra aplicação em diversas áreas, como edifícios comerciais, escolas, pequenas indústrias, hospitais, centros recreativos e locais de eventos. Ele é adequado para fornecer energia confiável em locais de carga moderada, como centros de dados, condomínios, estabelecimentos comerciais menores e infraestrutura urbana. Sua versatilidade e segurança fazem dele uma escolha ideal para diversas instalações.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A SECO 1250KVA:</h2>
                    <p>Seguro: Isento de descargas parciais, suportabilidade às tensões de impulso e aplicada, capacidade de sobrecarga, resistente a umidade, alta suportabilidade à curtos circuitos;</p>
                    <p>Econômico: Instalado nos centros de carga permite otimização do projeto de instalação, maior simplicidade nas eventuais mudanças de lay-out das instalações, torna desnecessária a construção de obras civis ou proteções especiais;</p>
                    <p>Ecológico: Sem líquidos isolantes, resistente a chamas e auto-extinguível, não emite gases tóxicos, totalmente reciclável, isento de manutenção;</p>
                    <p>Adaptável: A potência pode ser aumentada em até 40% com a simples instalação de ventilação forçada, facilidade no posicionamento de terminais, menor área requerida para instalação.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-seco-1500kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-a-seco-2000kva" => [
        "imagem" => "transformador_a_seco_2000kva",
        "nome" => "Transformador a Seco 2000KVA",
        "preco" => "R$189,392.00 – R$289,834.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_seco_2000kva.webp" alt="Transformador a Seco 2000KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Seco 1500KVA</h1>

                <div class="produto-preco">
                    R$189,392.00 – R$289,834.00
                </div>

                <p class="produto-descricao-curta">Apresentamos o nosso Transformador a Seco de 2000KVA, um equipamento de excelência com isolantes sólidos de resinas epóxi, assegurando um desempenho confiável e duradouro. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> <TAS-20></TAS-20>00KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A SECO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-seco-2000kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-seco-2000kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-seco-2000kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                       <li>– Potência: Transformador a Seco de 2000KVA;</li>
                        <li>– Classe de Tensão Primária: 15KV, 25KV e 36,2KV;</li>
                        <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>– Classe de Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Ligação do Primário: Delta;</li>
                        <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>– Número de fases: 3 (Trifásico)
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Altitude de utilização máxima: 1000M;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Sistema de Refrigeração: Natural (AN);</li>
                        <li>– Enrolamento AT e BT: Alumínio;</li>
                        <li>– Meio Isolante: Resina Epóxi;</li>
                        <li>– Núcleo: Chapa de Silício;</li>
                        <li>– Fator: K1;</li>
                        <li>– Tipo Comutação: Painel de comutação;</li>
                        <li>– Classe térmica: F (155 ºC);</li>
                        <li>– Elevação temperatura: 100.0 °C;</li>
                        <li>– Rodas: Sim;</li>
                        <li>– Suporte de Para-Raio: Opcional;</li>
                        <li>– Meio de Suspenção: Sim;</li>
                        <li>– Pintura: Padrão;</li>
                        <li>– Placa de Características: Sim;</li>
                        <li>– Identificação do aterramento: Sim;</li>
                        <li>– Ensaio de tipo: Não Incluso;</li>
                        <li>– Fabricado e ensaios conforme as normas: ABNT-5356/11;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A SECO 2000KVA:</h2>
                    <pA construção do transformador a seco envolve a montagem de bobinas primárias e secundárias com isolantes de alta qualidade, posicionadas dentro de um núcleo de ferro laminado. Em vez de usar óleo, esse tipo de transformador usa materiais isolantes sólidos, como resinas epóxi, para proteção.</p>
                    <p>O conjunto é encapsulado em resina epóxi, formando um invólucro hermético que protege contra fatores ambientais. Essa construção elimina riscos de vazamentos e incêndios, resultando em segurança, menor manutenção e impacto ambiental reduzido.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A SECO 2000KVA:</h2>
                    <p>O transformador a seco é utilizado em diversas aplicações de distribuição de energia, como em edifícios comerciais e residenciais, indústrias, hospitais e infraestruturas urbanas. Sua construção inovadora, que utiliza isolantes sólidos em vez de fluidos líquidos, o torna ideal para ambientes internos e externos. Isso elimina o risco de vazamentos, tornando-o mais seguro.</p>
                    <p>Além disso, seu design hermético reduz a manutenção, resultando em custos operacionais mais baixos ao longo do tempo. Seu impacto ambiental reduzido e eficiência o tornam uma escolha inteligente para uma distribuição de energia mais confiável e sustentável.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A SECO 2000KVA PODE SER APLICADO:</h2>
                    <p>O transformador a seco encontra aplicação em diversas áreas, como edifícios comerciais, escolas, pequenas indústrias, hospitais, centros recreativos e locais de eventos. Ele é adequado para fornecer energia confiável em locais de carga moderada, como centros de dados, condomínios, estabelecimentos comerciais menores e infraestrutura urbana. Sua versatilidade e segurança fazem dele uma escolha ideal para diversas instalações.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A SECO 2000KVA:</h2>
                    <p>Seguro: Isento de descargas parciais, suportabilidade às tensões de impulso e aplicada, capacidade de sobrecarga, resistente a umidade, alta suportabilidade à curtos circuitos;</p>
                    <p>Econômico: Instalado nos centros de carga permite otimização do projeto de instalação, maior simplicidade nas eventuais mudanças de lay-out das instalações, torna desnecessária a construção de obras civis ou proteções especiais;</p>
                    <p>Ecológico: Sem líquidos isolantes, resistente a chamas e auto-extinguível, não emite gases tóxicos, totalmente reciclável, isento de manutenção;</p>
                    <p>Adaptável: A potência pode ser aumentada em até 40% com a simples instalação de ventilação forçada, facilidade no posicionamento de terminais, menor área requerida para instalação.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-seco-2000kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-a-seco-2500kva" => [
        "imagem" => "transformador_a_seco_2500kva",
        "nome" => "Transformador a Seco 2500KVA",
        "preco" => "R$200,245.00 – R$312,178.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_seco_2500kva.webp" alt="Transformador a Seco 2500KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Seco 1500KVA</h1>

                <div class="produto-preco">
                    R$200,245.00 – R$312,178.00
                </div>

                <p class="produto-descricao-curta">Apresentamos o nosso Transformador a Seco de 2500KVA, um equipamento de excelência com isolantes sólidos de resinas epóxi, assegurando um desempenho confiável e duradouro. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> <TAS-20></TAS-20>00KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A SECO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-seco-2500kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-seco-2500kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-seco-2500kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                       <li>– Potência: Transformador a Seco de 2500KVA;</li>
                        <li>– Classe de Tensão Primária: 15KV, 25KV e 36,2KV;</li>
                        <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>– Classe de Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Ligação do Primário: Delta;</li>
                        <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>– Número de fases: 3 (Trifásico)
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Altitude de utilização máxima: 1000M;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Sistema de Refrigeração: Natural (AN);</li>
                        <li>– Enrolamento AT e BT: Alumínio;</li>
                        <li>– Meio Isolante: Resina Epóxi;</li>
                        <li>– Núcleo: Chapa de Silício;</li>
                        <li>– Fator: K1;</li>
                        <li>– Tipo Comutação: Painel de comutação;</li>
                        <li>– Classe térmica: F (155 ºC);</li>
                        <li>– Elevação temperatura: 100.0 °C;</li>
                        <li>– Rodas: Sim;</li>
                        <li>– Suporte de Para-Raio: Opcional;</li>
                        <li>– Meio de Suspenção: Sim;</li>
                        <li>– Pintura: Padrão;</li>
                        <li>– Placa de Características: Sim;</li>
                        <li>– Identificação do aterramento: Sim;</li>
                        <li>– Ensaio de tipo: Não Incluso;</li>
                        <li>– Fabricado e ensaios conforme as normas: ABNT-5356/11;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A SECO 2500KVA:</h2>
                    <pA construção do transformador a seco envolve a montagem de bobinas primárias e secundárias com isolantes de alta qualidade, posicionadas dentro de um núcleo de ferro laminado. Em vez de usar óleo, esse tipo de transformador usa materiais isolantes sólidos, como resinas epóxi, para proteção.</p>
                    <p>O conjunto é encapsulado em resina epóxi, formando um invólucro hermético que protege contra fatores ambientais. Essa construção elimina riscos de vazamentos e incêndios, resultando em segurança, menor manutenção e impacto ambiental reduzido.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A SECO 2500KVA:</h2>
                    <p>O transformador a seco é utilizado em diversas aplicações de distribuição de energia, como em edifícios comerciais e residenciais, indústrias, hospitais e infraestruturas urbanas. Sua construção inovadora, que utiliza isolantes sólidos em vez de fluidos líquidos, o torna ideal para ambientes internos e externos. Isso elimina o risco de vazamentos, tornando-o mais seguro.</p>
                    <p>Além disso, seu design hermético reduz a manutenção, resultando em custos operacionais mais baixos ao longo do tempo. Seu impacto ambiental reduzido e eficiência o tornam uma escolha inteligente para uma distribuição de energia mais confiável e sustentável.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A SECO 2500KVA PODE SER APLICADO:</h2>
                    <p>O transformador a seco encontra aplicação em diversas áreas, como edifícios comerciais, escolas, pequenas indústrias, hospitais, centros recreativos e locais de eventos. Ele é adequado para fornecer energia confiável em locais de carga moderada, como centros de dados, condomínios, estabelecimentos comerciais menores e infraestrutura urbana. Sua versatilidade e segurança fazem dele uma escolha ideal para diversas instalações.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A SECO 2500KVA:</h2>
                    <p>Seguro: Isento de descargas parciais, suportabilidade às tensões de impulso e aplicada, capacidade de sobrecarga, resistente a umidade, alta suportabilidade à curtos circuitos;</p>
                    <p>Econômico: Instalado nos centros de carga permite otimização do projeto de instalação, maior simplicidade nas eventuais mudanças de lay-out das instalações, torna desnecessária a construção de obras civis ou proteções especiais;</p>
                    <p>Ecológico: Sem líquidos isolantes, resistente a chamas e auto-extinguível, não emite gases tóxicos, totalmente reciclável, isento de manutenção;</p>
                    <p>Adaptável: A potência pode ser aumentada em até 40% com a simples instalação de ventilação forçada, facilidade no posicionamento de terminais, menor área requerida para instalação.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-seco-2500kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-a-seco-3000kva" => [
        "imagem" => "transformador_a_seco_3000kva",
        "nome" => "Transformador a Seco 3000KVA",
        "preco" => "R$244,401.00 – R$369,314.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_a_seco_3000kva.webp" alt="Transformador a Seco 3000KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador a Seco 1500KVA</h1>

                <div class="produto-preco">
                    R$244,401.00 – R$369,314.00
                </div>

                <p class="produto-descricao-curta">Apresentamos o nosso Transformador a Seco de 3000KVA, um equipamento de excelência com isolantes sólidos de resinas epóxi, assegurando um desempenho confiável e duradouro. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> <TAS-20></TAS-20>00KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR A SECO</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-a-seco-3000kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-a-seco-3000kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-a-seco-3000kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                       <li>– Potência: Transformador a Seco de 3000KVA;</li>
                        <li>– Classe de Tensão Primária: 15KV, 25KV e 36,2KV;</li>
                        <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>– Classe de Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Ligação do Primário: Delta;</li>
                        <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>– Número de fases: 3 (Trifásico)
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Altitude de utilização máxima: 1000M;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Sistema de Refrigeração: Natural (AN);</li>
                        <li>– Enrolamento AT e BT: Alumínio;</li>
                        <li>– Meio Isolante: Resina Epóxi;</li>
                        <li>– Núcleo: Chapa de Silício;</li>
                        <li>– Fator: K1;</li>
                        <li>– Tipo Comutação: Painel de comutação;</li>
                        <li>– Classe térmica: F (155 ºC);</li>
                        <li>– Elevação temperatura: 100.0 °C;</li>
                        <li>– Rodas: Sim;</li>
                        <li>– Suporte de Para-Raio: Opcional;</li>
                        <li>– Meio de Suspenção: Sim;</li>
                        <li>– Pintura: Padrão;</li>
                        <li>– Placa de Características: Sim;</li>
                        <li>– Identificação do aterramento: Sim;</li>
                        <li>– Ensaio de tipo: Não Incluso;</li>
                        <li>– Fabricado e ensaios conforme as normas: ABNT-5356/11;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR A SECO 3000KVA:</h2>
                    <pA construção do transformador a seco envolve a montagem de bobinas primárias e secundárias com isolantes de alta qualidade, posicionadas dentro de um núcleo de ferro laminado. Em vez de usar óleo, esse tipo de transformador usa materiais isolantes sólidos, como resinas epóxi, para proteção.</p>
                    <p>O conjunto é encapsulado em resina epóxi, formando um invólucro hermético que protege contra fatores ambientais. Essa construção elimina riscos de vazamentos e incêndios, resultando em segurança, menor manutenção e impacto ambiental reduzido.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR A SECO 3000KVA:</h2>
                    <p>O transformador a seco é utilizado em diversas aplicações de distribuição de energia, como em edifícios comerciais e residenciais, indústrias, hospitais e infraestruturas urbanas. Sua construção inovadora, que utiliza isolantes sólidos em vez de fluidos líquidos, o torna ideal para ambientes internos e externos. Isso elimina o risco de vazamentos, tornando-o mais seguro.</p>
                    <p>Além disso, seu design hermético reduz a manutenção, resultando em custos operacionais mais baixos ao longo do tempo. Seu impacto ambiental reduzido e eficiência o tornam uma escolha inteligente para uma distribuição de energia mais confiável e sustentável.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR A SECO 3000KVA PODE SER APLICADO:</h2>
                    <p>O transformador a seco encontra aplicação em diversas áreas, como edifícios comerciais, escolas, pequenas indústrias, hospitais, centros recreativos e locais de eventos. Ele é adequado para fornecer energia confiável em locais de carga moderada, como centros de dados, condomínios, estabelecimentos comerciais menores e infraestrutura urbana. Sua versatilidade e segurança fazem dele uma escolha ideal para diversas instalações.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR A SECO 3000KVA:</h2>
                    <p>Seguro: Isento de descargas parciais, suportabilidade às tensões de impulso e aplicada, capacidade de sobrecarga, resistente a umidade, alta suportabilidade à curtos circuitos;</p>
                    <p>Econômico: Instalado nos centros de carga permite otimização do projeto de instalação, maior simplicidade nas eventuais mudanças de lay-out das instalações, torna desnecessária a construção de obras civis ou proteções especiais;</p>
                    <p>Ecológico: Sem líquidos isolantes, resistente a chamas e auto-extinguível, não emite gases tóxicos, totalmente reciclável, isento de manutenção;</p>
                    <p>Adaptável: A potência pode ser aumentada em até 40% com a simples instalação de ventilação forçada, facilidade no posicionamento de terminais, menor área requerida para instalação.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-a-seco-3000kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-pedestal-30kva" => [
        "imagem" => "transformador_pedestal_112kva",
        "nome" => "Transformador Pedestal 30KVA",
        "preco" => "R$18,641.00 – R$25,166.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Pedestal 30KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Pedestal 30KVA</h1>

                <div class="produto-preco">
                    R$18,641.00 – R$25,166.00
                </div>

                <p class="produto-descricao-curta">Apresentamos o nosso Transformador de Pedestal (Pad-Mounted) de 30KVA, solução eficiente e segura para distribuição de energia. Proteção contra condições ambientais, acesso facilitado para manutenção e versatilidade de aplicação. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TP-30KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-30kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-pedestal-30kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-30kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>- Potência: Transformador Pedestal de 30KVA;</li>
                        <li>- Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>- Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>- Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>- Frequência: 60 Hz;</li>
                        <li>- Ligação do Primário: Delta;</li>
                        <li>- Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>– Método de resfriamento: ONAN;</li>
                        <li>– Grau de Proteção: IP54;</li>
                        <li>– Regime de serviço: Continuo 100%;</li>
                        <li>– Instalação: Ao Tempo;</li>
                        <li>– Pintura de acabamento na cor Verde Munsell;</li>
                        <li>– Orelhas de suspensão;</li>
                        <li>– Placa de Identificação;</li>
                        <li>– Meios de Aterramento;</li>
                        <li>– Nível de Óleo tipo coluna;</li>
                        <li>– Registro Inferior e Superior;</li>
                        <li>– Válvula de alívio de pressão sem contato;</li>
                        <li>– Terminais de BT;</li>
                        <li>– Base de Fixação;</li>
                        <li>– Porta de AT com trava na BT;</li>
                        <li>– Porta de BT com chave;</li>
                        <li>– Fusível Baioneta;</li>
                        <li>– Chave Comutadora com acionamento externo;</li>
                        <li>– Fusível Limitador de corrente;</li>
                        <li>– Fusível de expulsão em Baioneta;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 30KVA</h2>
                    <p>A construção do transformador pedestal envolve a montagem de um transformador elétrico sobre uma base elevada, conhecida como pedestal. O transformador, composto por bobinas primárias e secundárias, é instalado em um invólucro resistente a intempéries.</p>
                    <p>Essa configuração elevada protege o transformador contra fatores ambientais, como umidade e poeira, além de permitir fácil acesso para manutenção e inspeções.</p>
                    <p>O transformador pedestal é uma solução prática para distribuição de energia em áreas urbanas e locais onde o espaço é limitado. Sua construção visa a eficiência, segurança e durabilidade, garantindo um fornecimento de energia confiável.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 30KVA:</h2>
                    <p>O transformador pedestal é aplicado em diversas situações onde é necessário distribuir energia elétrica de maneira confiável e eficiente. Ele é comumente usado em áreas urbanas, parques, praças, condomínios, edifícios comerciais e residenciais, entre outros. Sua configuração elevada oferece proteção contra fatores ambientais e facilita a manutenção. Com sua versatilidade, o transformador pedestal é uma solução prática e segura para distribuição de energia em locais de diferentes tamanhos e necessidades.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 30KVA PODE SER APLICADO:</h2>
                    <p>O transformador pedestal encontra aplicação em várias áreas onde a distribuição de energia elétrica é necessária. Ele é comumente utilizado em ambientes urbanos, parques, praças, áreas residenciais e comerciais, condomínios, instalações industriais e locais de eventos.</p>

                    <p>O transformador pedestal encontra aplicação em várias áreas onde a distribuição de energia elétrica é necessária. Ele é comumente utilizado em ambientes urbanos, parques, praças, áreas residenciais e comerciais, condomínios, instalações industriais e locais de eventos.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL 15KVA:</h2>
                    <p>O transformador pedestal possui várias características notáveis:</p>

                    <p><strong>Proteção Ambiental:</strong> Sua configuração elevada o protege contra umidade, poeira e outros elementos ambientais, garantindo a integridade das partes internas.</p>

                    <p><strong>Acesso Fácil:</strong> A instalação em um pedestal facilita o acesso para manutenção, inspeção e reparos, reduzindo o tempo de inatividade.</p>

                    <p><strong>Espaço Limitado:</strong> É ideal para áreas com restrições de espaço, como centros urbanos, onde a instalação subterrânea ou em postes pode ser inviável.</p>

                    <p><strong>Segurança:</strong> Sua construção robusta oferece segurança adicional, protegendo o transformador contra vandalismo e danos acidentais.</p>

                    <p><strong>Variedade de Aplicações:</strong> É aplicável em diversos contextos, desde áreas residenciais e comerciais até parques e instalações industriais.</p>

                    <p><strong>Flexibilidade:</strong> Pode ser adaptado para diferentes níveis de carga elétrica e voltagens, atendendo a necessidades específicas.</p>

                    <p><strong>Instalação Rápida:</strong> A montagem do transformador pedestal é relativamente rápida, minimizando interrupções no fornecimento de energia.</p>

                    <p><strong>Redução de Custos:</strong> A facilidade de manutenção e a durabilidade do transformador pedestal podem resultar em custos operacionais mais baixos ao longo do tempo.</p>

                    <p>Essas características tornam o transformador pedestal uma opção prática e versátil para distribuição de energia, especialmente em locais onde o espaço e a acessibilidade são importantes considerações.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-15kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-pedestal-45kva" => [
        "imagem" => "transformador_pedestal_45kva",
        "nome" => "Transformador Pedestal 45KVA",
        "preco" => "R$27,983.00 – R$37,777.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="imagens/transformador_pedestal_45kva.webp" alt="Transformador Pedestal 45KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Pedestal 45KVA</h1>

                <div class="produto-preco">
                   R$27,983.00 – R$37,777.00
                </div>

                <p class="produto-descricao-curta">Transformador Pedestal de 45KVA para instalação ao ar livre. Robusto e resistente às intempéries. Fabricado conforme ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TP-45KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-45kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-pedestal-45kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-45kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Pedestal de 45KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Instalação: Ao Tempo / Pedestal;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Comutador de Tap\\\'s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Rodas: Sim;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Fabricado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL 45KVA:</h2>
                    <p>– Invólucro de aço carbono com pintura epóxi resistente às intempéries.</p>
                    <p>– Enrolamentos em alumínio imersos em óleo mineral.</p>
                    <p>– Núcleo de lâminas de aço silício.</p>
                    <p>– Buchas de alta tensão em porcelana.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL 45KVA:</h2>
                    <p>Ideal para redes de distribuição urbana, instalações em postes e pedestais ao ar livre. Projetado para suportar condições climáticas adversas, garantindo operação contínua e segura em ambientes externos.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL 45KVA PODE SER APLICADO:</h2>
                    <p>Redes de distribuição urbana, subestações ao ar livre, calçadas, praças, vias públicas, cooperativas de energia e infraestrutura urbana em geral.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL 45KVA:</h2>
                    <p>Alta resistência às intempéries. Fácil manutenção em campo. Projetado para operação ao tempo sem necessidade de estruturas de proteção adicionais. Design compacto para instalação em postes ou pedestais.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-45kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-pedestal-75kva" => [
        "imagem" => "transformador_pedestal_75kva",
        "nome" => "Transformador Pedestal 75KVA",
        "preco" => "R$38,038.00 – R$51,351.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="imagens/transformador_pedestal_75kva.webp" alt="Transformador Pedestal 75KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Pedestal 75KVA</h1>

                <div class="produto-preco">
                   R$38,038.00 – R$51,351.00
                </div>

                <p class="produto-descricao-curta">Transformador Pedestal de 75KVA para instalação ao ar livre. Robusto e resistente às intempéries. Fabricado conforme ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TP-75KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-75kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-pedestal-75kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-75kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Pedestal de 75KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Instalação: Ao Tempo / Pedestal;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Comutador de Tap\\\'s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Rodas: Sim;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Fabricado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL 75KVA:</h2>
                    <p>– Invólucro de aço carbono com pintura epóxi resistente às intempéries.</p>
                    <p>– Enrolamentos em alumínio imersos em óleo mineral.</p>
                    <p>– Núcleo de lâminas de aço silício.</p>
                    <p>– Buchas de alta tensão em porcelana.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL 75KVA:</h2>
                    <p>Ideal para redes de distribuição urbana, instalações em postes e pedestais ao ar livre. Projetado para suportar condições climáticas adversas, garantindo operação contínua e segura em ambientes externos.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL 75KVA PODE SER APLICADO:</h2>
                    <p>Redes de distribuição urbana, subestações ao ar livre, calçadas, praças, vias públicas, cooperativas de energia e infraestrutura urbana em geral.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL 75KVA:</h2>
                    <p>Alta resistência às intempéries. Fácil manutenção em campo. Projetado para operação ao tempo sem necessidade de estruturas de proteção adicionais. Design compacto para instalação em postes ou pedestais.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-75kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-pedestal-112-5kva" => [
        "imagem" => "transformador_pedestal_112kva",
        "nome" => "Transformador Pedestal 112,5KVA",
        "preco" => "R$47,119.00 – R$65,047.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_pedestal_112kva.webp" alt="Transformador Pedestal 112,5KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Pedestal 112,5KVA</h1>

                <div class="produto-preco">
                    R$47,119.00 – R$65,047.00
                </div>

                <p class="produto-descricao-curta">Apresentamos o nosso Transformador de Pedestal (Pad-Mounted) de 150KVA, solução eficiente e segura para distribuição de energia. Proteção contra condições ambientais, acesso facilitado para manutenção e versatilidade de aplicação. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TP-112,5KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-112-5kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-pedestal-112-5kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-112-5kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: Transformador Pedestal (Pad-Mounted) de 112,5KVA;</li>
                        <li>– Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>– Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Ligação do Primário: Delta;</li>
                        <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>– Método de resfriamento: ONAN;</li>
                        <li>– Grau de Proteção: IP54;</li>
                        <li>– Regime de serviço: Continuo 100%;</li>
                        <li>– Instalação: Ao Tempo;</li>
                        <li>– Pintura de acabamento na cor Verde Munsell;</li>
                        <li>– Orelhas de suspensão;</li>
                        <li>– Placa de Identificação;</li>
                        <li>– Meios de Aterramento;</li>
                        <li>– Nível de Óleo tipo coluna;</li>
                        <li>– Registro Inferior e Superior;</li>
                        <li>– Válvula de alívio de pressão sem contato;</li>
                        <li>– Terminais de BT;</li>
                        <li>– Base de Fixação;</li>
                        <li>– Porta de AT com trava na BT;</li>
                        <li>– Porta de BT com chave;</li>
                        <li>– Fusível Baioneta;</li>
                        <li>– Chave Comutadora com acionamento externo;</li>
                        <li>– Fusível Limitador de corrente;</li>
                        <li>– Fusível de expulsão em Baioneta;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 112,5KVA:</h2>
                    <p>A construção do transformador pedestal envolve a montagem de um transformador elétrico sobre uma base elevada, conhecida como pedestal. O transformador, composto por bobinas primárias e secundárias, é instalado em um invólucro resistente a intempéries.</p>

                    <p>Essa configuração elevada protege o transformador contra fatores ambientais, como umidade e poeira, além de permitir fácil acesso para manutenção e inspeções.</p>

                    <p>O transformador pedestal é uma solução prática para distribuição de energia em áreas urbanas e locais onde o espaço é limitado. Sua construção visa a eficiência, segurança e durabilidade, garantindo um fornecimento de energia confiável.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 150KVA:</h2>
                    <p>Ideal para redes de distribuição urbana, instalações em postes e pedestais ao ar livre. Projetado para suportar condições climáticas adversas, garantindo operação contínua e segura em ambientes externos.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL 112,5KVA PODE SER APLICADO:</h2>
                    <p>Redes de distribuição urbana, subestações ao ar livre, calçadas, praças, vias públicas, cooperativas de energia e infraestrutura urbana em geral.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL 112,5KVA:</h2>
                    <p>Alta resistência às intempéries. Fácil manutenção em campo. Projetado para operação ao tempo sem necessidade de estruturas de proteção adicionais. Design compacto para instalação em postes ou pedestais.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-112-5kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-pedestal-150kva" => [
        "imagem" => "transformador_pedestal_150kva",
        "nome" => "Transformador Pedestal 150KVA",
        "preco" => "R$57,084.00 – R$77,063.00",
        'content' => '<section id="produto-principal">
        <div class="container">
            <div class="flex">

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="produto-galeria">
                        <div class="produto-imagem-principal">
                            <img src="' . $url . 'imagens/main/produtos/transformador_pedestal_150kva.webp" alt="Transformador Pedestal 150KVA" id="img-principal">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">

                    <h1 class="produto-nome">Transformador Pedestal 150KVA</h1>

                    <div class="produto-preco">
                        R$57,084.00 – R$77,063.00
                    </div>

                    <p class="produto-descricao-curta">Apresentamos o nosso Transformador de Pedestal (Pad-Mounted) de 150KVA, solução eficiente e segura para distribuição de energia. Proteção contra condições ambientais, acesso facilitado para manutenção e versatilidade de aplicação. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                    <div class="produto-opcoes">
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Entrada:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                    <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                    <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                                </select>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Enrolamento:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="Alumínio">Alumínio</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                        <a href="#" class="button">
                            <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                        </a>
                    </div>

                    <div class="produto-meta mt-4">
                        <p><strong>SKU:</strong> TP-150KVA</p>
                        <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="descricao-produto">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="abas">
                        <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-500kva">Descrição</button>
                        <button class="aba" data-aba="info-adicional-transformador-pedestal-150kva">Informação adicional</button>
                    </div>

                    <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-150kva">
                        <h3>Descrição</h3>

                        <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                        <ul class="lista-specs">
                            <li>Potência: Transformador Pedestal de 150KVA;</li>
                            <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                            <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                            <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                            <li>Frequência: 60 Hz;</li>
                            <li>Ligação do Primário: Delta;</li>
                            <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                            <li>Número de Fases: 3 (Trifásico);</li>
                            <li>Altitude de utilização máxima: 1000M;</li>
                            <li>Método de resfriamento: ONAN;</li>
                            <li>Tipo de Isolação: Óleo Mineral;</li>
                            <li>Instalação: Ao Tempo / Pedestal;</li>
                            <li>Núcleo: Chapa de Silício;</li>
                            <li>Fator: K1;</li>
                            <li>Comutador de Tap\\\'s: Rotativo;</li>
                            <li>Válvula de alívio: Sim;</li>
                            <li>Grau de Proteção: IP54;</li>
                            <li>Rodas: Sim;</li>
                            <li>Placa de Características: Sim;</li>
                            <li>Identificação do aterramento: Sim;</li>
                            <li>Identificação das buchas: Sim;</li>
                            <li>Fabricado conforme normas NBR: NBR-5440;</li>
                            <li>2 anos de garantia.</li>
                        </ul>

                        <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL 150KVA:</h2>
                        <p>– Invólucro de aço carbono com pintura epóxi resistente às intempéries.</p>
                        <p>– Enrolamentos em alumínio imersos em óleo mineral.</p>
                        <p>– Núcleo de lâminas de aço silício.</p>
                        <p>– Buchas de alta tensão em porcelana.</p>

                        <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL 150KVA:</h2>
                        <p>Ideal para redes de distribuição urbana, instalações em postes e pedestais ao ar livre. Projetado para suportar condições climáticas adversas, garantindo operação contínua e segura em ambientes externos.</p>

                        <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL 150KVA PODE SER APLICADO:</h2>
                        <p>Redes de distribuição urbana, subestações ao ar livre, calçadas, praças, vias públicas, cooperativas de energia e infraestrutura urbana em geral.</p>

                        <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL 150KVA:</h2>
                        <p>Alta resistência às intempéries. Fácil manutenção em campo. Projetado para operação ao tempo sem necessidade de estruturas de proteção adicionais. Design compacto para instalação em postes ou pedestais.</p>

                        <div class="mt-4">
                            <a href="#" class="button">Faça um Orçamento</a>
                        </div>
                    </div>

                    <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-150kva">
                        <h3>Informação adicional</h3>
                        <table class="table table-bordered info-table">
                            <tbody>
                                <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                                <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>',
    ],
    "transformador-pedestal-225kva" => [
        "imagem" => "transformador_pedestal_225kva",
        "nome" => "Transformador Pedestal 225KVA",
        "preco" => "R$75,331.00 – R$101,697.00",
        'content' => '<section id="produto-principal">
        <div class="container">
            <div class="flex">

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="produto-galeria">
                        <div class="produto-imagem-principal">
                            <img src="' . $url . 'imagens/main/produtos/transformador_pedestal_225kva.webp" alt="Transformador Pedestal 225KVA" id="img-principal">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">

                    <h1 class="produto-nome">Transformador Pedestal 225KVA</h1>

                    <div class="produto-preco">
                        R$75,331.00 – R$101,697.00
                    </div>

                    <p class="produto-descricao-curta">Apresentamos o nosso Transformador de Pedestal (Pad-Mounted) de 225KVA, solução eficiente e segura para distribuição de energia. Proteção contra condições ambientais, acesso facilitado para manutenção e versatilidade de aplicação. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                    <div class="produto-opcoes">
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Entrada:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                    <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                    <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                                </select>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Enrolamento:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="Alumínio">Alumínio</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                        <a href="#" class="button">
                            <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                        </a>
                    </div>

                    <div class="produto-meta mt-4">
                        <p><strong>SKU:</strong> TP-225KVA</p>
                        <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="descricao-produto">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="abas">
                        <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-225kva">Descrição</button>
                        <button class="aba" data-aba="info-adicional-transformador-pedestal-225kva">Informação adicional</button>
                    </div>

                    <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-225kva">
                        <h3>Descrição</h3>

                        <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                        <ul class="lista-specs">
                            <li>– Potência: Transformador Pedestal (Pad-Mounted) de 225KVA;</li>
                            <li>– Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                            <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                            <li>– Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                            <li>– Frequência: 60 Hz;</li>
                            <li>– Ligação do Primário: Delta;</li>
                            <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                            <li>– Método de resfriamento: ONAN;</li>
                            <li>– Grau de Proteção: IP54;</li>
                            <li>– Regime de serviço: Continuo 100%;</li>
                            <li>– Instalação: Ao Tempo;</li>
                            <li>– Pintura de acabamento na cor Verde Munsell;</li>
                            <li>– Orelhas de suspensão;</li>
                            <li>– Placa de Identificação;</li>
                            <li>– Meios de Aterramento;</li>
                            <li>– Nível de Óleo tipo coluna;</li>
                            <li>– Registro Inferior e Superior;</li>
                            <li>– Válvula de alívio de pressão sem contato;</li>
                            <li>– Terminais de BT;</li>
                            <li>– Base de Fixação;</li>
                            <li>– Porta de AT com trava na BT;</li>
                            <li>– Porta de BT com chave;</li>
                            <li>– Fusível Baioneta;</li>
                            <li>– Chave Comutadora com acionamento externo;</li>
                            <li>– Fusível Limitador de corrente;</li>
                            <li>– Fusível de expulsão em Baioneta;</li>
                            <li>– 2 anos de garantia.</li>
                        </ul>

                        <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL 225KVA:</h2>
                        <p>A construção do transformador pedestal envolve a montagem de um transformador elétrico sobre uma base elevada, conhecida como pedestal. O transformador, composto por bobinas primárias e secundárias, é instalado em um invólucro resistente a intempéries.</p>
                        <p>Essa configuração elevada protege o transformador contra fatores ambientais, como umidade e poeira, além de permitir fácil acesso para manutenção e inspeções.</p>
                        <p>O transformador pedestal é uma solução prática para distribuição de energia em áreas urbanas e locais onde o espaço é limitado. Sua construção visa a eficiência, segurança e durabilidade, garantindo um fornecimento de energia confiável.</p>

                        <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 225KVA:</h2>
                        <p>Ideal para redes de distribuição urbana, instalações em postes e pedestais ao ar livre. Projetado para suportar condições climáticas adversas, garantindo operação contínua e segura em ambientes externos.</p>

                        <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 225KVA PODE SER APLICADO:</h2>
                        <p>O transformador pedestal encontra aplicação em várias áreas onde a distribuição de energia elétrica é necessária. Ele é comumente utilizado em ambientes urbanos, parques, praças, áreas residenciais e comerciais, condomínios, instalações industriais e locais de eventos.</p>

                        <p>Sua configuração elevada oferece proteção contra condições ambientais adversas e facilita o acesso para manutenção. Com sua versatilidade e adaptabilidade, o transformador pedestal é uma solução confiável e eficiente para suprir demandas de energia em diferentes contextos.</p>

                        <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 225KVA:</h2>
                        <p>O transformador pedestal possui várias características notáveis:</p>

                        <p><stgrong>Proteção Ambiental: Sua configuração elevada o protege contra umidade, poeira e outros elementos ambientais, garantindo a integridade das partes internas.</p>
                        <p><strong>Acesso Fácil:</strong> A instalação em um pedestal facilita o acesso para manutenção, inspeção e reparos, reduzindo o tempo de inatividade.</p>
                        <p><strong>Espaço Limitado:</strong> É ideal para áreas com restrições de espaço, como centros urbanos, onde a instalação subterrânea ou em postes pode ser inviável.</p>
                        <p><strong>Segurança:</strong> Sua construção robusta oferece segurança adicional, protegendo o transformador contra vandalismo e danos acidentais.</p>
                        <p><strong>Variedade de Aplicações:</strong> É aplicável em diversos contextos, desde áreas residenciais e comerciais até parques e instalações industriais.</p>
                        <p><strong>Flexibilidade:</strong> Pode ser adaptado para diferentes níveis de carga elétrica e voltagens, atendendo a necessidades específicas.</p>
                        <p><strong>Instalação Rápida:</strong> A montagem do transformador pedestal é relativamente rápida, minimizando interrupções no fornecimento de energia.</p>
                        <p><strong>Redução de Custos:</strong> A facilidade de manutenção e a durabilidade do transformador pedestal podem resultar em custos operacionais mais baixos ao longo do tempo.</p>
                        <p>Essas características tornam o transformador pedestal uma opção prática e versátil para distribuição de energia, especialmente em locais onde o espaço e a acessibilidade são importantes considerações.</p>
                        <div class="mt-4">
                            <a href="#" class="button">Faça um Orçamento</a>
                        </div>
                    </div>

                    <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-225kva">
                        <h3>Informação adicional</h3>
                        <table class="table table-bordered info-table">
                            <tbody>
                                <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                                <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>',
    ],
    "transformador-pedestal-300kva" => [
        "imagem" => "transformador_pedestal_300kva",
        "nome" => "Transformador Pedestal 300KVA",
        "preco" => "R$86,790.00 – R$117,167.00",
        'content' => '<section id="produto-principal">
        <div class="container">
            <div class="flex">

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="produto-galeria">
                        <div class="produto-imagem-principal">
                            <img src="' . $url . 'imagens/main/produtos/transformador_pedestal_300kva.webp" alt="Transformador Pedestal 300KVA" id="img-principal">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">

                    <h1 class="produto-nome">Transformador Pedestal 300KVA</h1>

                    <div class="produto-preco">
                        R$86,790.00 – R$117,167.00
                    </div>

                    <p class="produto-descricao-curta">Apresentamos o nosso Transformador de Pedestal (Pad-Mounted) de 300KVA, solução eficiente e segura para distribuição de energia. Proteção contra condições ambientais, acesso facilitado para manutenção e versatilidade de aplicação. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                    <div class="produto-opcoes">
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Entrada:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                    <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                    <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                                </select>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Enrolamento:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="Alumínio">Alumínio</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                        <a href="#" class="button">
                            <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                        </a>
                    </div>

                    <div class="produto-meta mt-4">
                        <p><strong>SKU:</strong> TP-300KVA</p>
                        <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="descricao-produto">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="abas">
                        <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-300kva">Descrição</button>
                        <button class="aba" data-aba="info-adicional-transformador-pedestal-300kva">Informação adicional</button>
                    </div>

                    <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-300kva">
                        <h3>Descrição</h3>

                        <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                        <ul class="lista-specs">
                            <li>– Potência: Transformador Pedestal (Pad-Mounted) de 300KVA;</li>
                            <li>– Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                            <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                            <li>– Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                            <li>– Frequência: 60 Hz;</li>
                            <li>– Ligação do Primário: Delta;</li>
                            <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                            <li>– Método de resfriamento: ONAN;</li>
                            <li>– Grau de Proteção: IP54;</li>
                            <li>– Regime de serviço: Continuo 100%;</li>
                            <li>– Instalação: Ao Tempo;</li>
                            <li>– Pintura de acabamento na cor Verde Munsell;</li>
                            <li>– Orelhas de suspensão;</li>
                            <li>– Placa de Identificação;</li>
                            <li>– Meios de Aterramento;</li>
                            <li>– Nível de Óleo tipo coluna;</li>
                            <li>– Registro Inferior e Superior;</li>
                            <li>– Válvula de alívio de pressão sem contato;</li>
                            <li>– Terminais de BT;</li>
                            <li>– Base de Fixação;</li>
                            <li>– Porta de AT com trava na BT;</li>
                            <li>– Porta de BT com chave;</li>
                            <li>– Fusível Baioneta;</li>
                            <li>– Chave Comutadora com acionamento externo;</li>
                            <li>– Fusível Limitador de corrente;</li>
                            <li>– Fusível de expulsão em Baioneta;</li>
                            <li>– 2 anos de garantia.</li>
                        </ul>

                        <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL 300KVA:</h2>
                        <p>A construção do transformador pedestal envolve a montagem de um transformador elétrico sobre uma base elevada, conhecida como pedestal. O transformador, composto por bobinas primárias e secundárias, é instalado em um invólucro resistente a intempéries.</p>
                        <p>Essa configuração elevada protege o transformador contra fatores ambientais, como umidade e poeira, além de permitir fácil acesso para manutenção e inspeções.</p>
                        <p>O transformador pedestal é uma solução prática para distribuição de energia em áreas urbanas e locais onde o espaço é limitado. Sua construção visa a eficiência, segurança e durabilidade, garantindo um fornecimento de energia confiável.</p>

                        <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 300KVA:</h2>
                        <p>Ideal para redes de distribuição urbana, instalações em postes e pedestais ao ar livre. Projetado para suportar condições climáticas adversas, garantindo operação contínua e segura em ambientes externos.</p>

                        <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 300KVA PODE SER APLICADO:</h2>
                        <p>O transformador pedestal encontra aplicação em várias áreas onde a distribuição de energia elétrica é necessária. Ele é comumente utilizado em ambientes urbanos, parques, praças, áreas residenciais e comerciais, condomínios, instalações industriais e locais de eventos.</p>

                        <p>Sua configuração elevada oferece proteção contra condições ambientais adversas e facilita o acesso para manutenção. Com sua versatilidade e adaptabilidade, o transformador pedestal é uma solução confiável e eficiente para suprir demandas de energia em diferentes contextos.</p>

                        <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 300KVA:</h2>
                        <p>O transformador pedestal possui várias características notáveis:</p>

                        <p><stgrong>Proteção Ambiental: Sua configuração elevada o protege contra umidade, poeira e outros elementos ambientais, garantindo a integridade das partes internas.</p>
                        <p><strong>Acesso Fácil:</strong> A instalação em um pedestal facilita o acesso para manutenção, inspeção e reparos, reduzindo o tempo de inatividade.</p>
                        <p><strong>Espaço Limitado:</strong> É ideal para áreas com restrições de espaço, como centros urbanos, onde a instalação subterrânea ou em postes pode ser inviável.</p>
                        <p><strong>Segurança:</strong> Sua construção robusta oferece segurança adicional, protegendo o transformador contra vandalismo e danos acidentais.</p>
                        <p><strong>Variedade de Aplicações:</strong> É aplicável em diversos contextos, desde áreas residenciais e comerciais até parques e instalações industriais.</p>
                        <p><strong>Flexibilidade:</strong> Pode ser adaptado para diferentes níveis de carga elétrica e voltagens, atendendo a necessidades específicas.</p>
                        <p><strong>Instalação Rápida:</strong> A montagem do transformador pedestal é relativamente rápida, minimizando interrupções no fornecimento de energia.</p>
                        <p><strong>Redução de Custos:</strong> A facilidade de manutenção e a durabilidade do transformador pedestal podem resultar em custos operacionais mais baixos ao longo do tempo.</p>
                        <p>Essas características tornam o transformador pedestal uma opção prática e versátil para distribuição de energia, especialmente em locais onde o espaço e a acessibilidade são importantes considerações.</p>
                        <div class="mt-4">
                            <a href="#" class="button">Faça um Orçamento</a>
                        </div>
                    </div>

                    <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-300kva">
                        <h3>Informação adicional</h3>
                        <table class="table table-bordered info-table">
                            <tbody>
                                <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                                <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>',
    ],
    "transformador-pedestal-500kva" => [
        "imagem" => "transformador_pedestal_500kva",
        "nome" => "Transformador Pedestal 500KVA",
        "preco" => "R$101,718.00 – R$137,320.00",
        'content' => '<section id="produto-principal">
        <div class="container">
            <div class="flex">

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="produto-galeria">
                        <div class="produto-imagem-principal">
                            <img src="' . $url . 'imagens/main/produtos/transformador_pedestal_500kva.webp" alt="Transformador Pedestal 500KVA" id="img-principal">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">

                    <h1 class="produto-nome">Transformador Pedestal 500KVA</h1>

                    <div class="produto-preco">
                        R$101,718.00 – R$137,320.00
                    </div>

                    <p class="produto-descricao-curta">Apresentamos o nosso Transformador de Pedestal (Pad-Mounted) de 500KVA, solução eficiente e segura para distribuição de energia. Proteção contra condições ambientais, acesso facilitado para manutenção e versatilidade de aplicação. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                    <div class="produto-opcoes">
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Entrada:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                    <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                    <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                                </select>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Enrolamento:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="Alumínio">Alumínio</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                        <a href="#" class="button">
                            <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                        </a>
                    </div>

                    <div class="produto-meta mt-4">
                        <p><strong>SKU:</strong> TP-500KVA</p>
                        <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="descricao-produto">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="abas">
                        <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-500kva">Descrição</button>
                        <button class="aba" data-aba="info-adicional-transformador-pedestal-500kva">Informação adicional</button>
                    </div>

                    <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-500kva">
                        <h3>Descrição</h3>

                        <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                        <ul class="lista-specs">
                            <li>– Potência: Transformador Pedestal (Pad-Mounted) de 500KVA;</li>
                            <li>– Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                            <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                            <li>– Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                            <li>– Frequência: 60 Hz;</li>
                            <li>– Ligação do Primário: Delta;</li>
                            <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                            <li>– Método de resfriamento: ONAN;</li>
                            <li>– Grau de Proteção: IP54;</li>
                            <li>– Regime de serviço: Continuo 100%;</li>
                            <li>– Instalação: Ao Tempo;</li>
                            <li>– Pintura de acabamento na cor Verde Munsell;</li>
                            <li>– Orelhas de suspensão;</li>
                            <li>– Placa de Identificação;</li>
                            <li>– Meios de Aterramento;</li>
                            <li>– Nível de Óleo tipo coluna;</li>
                            <li>– Registro Inferior e Superior;</li>
                            <li>– Válvula de alívio de pressão sem contato;</li>
                            <li>– Terminais de BT;</li>
                            <li>– Base de Fixação;</li>
                            <li>– Porta de AT com trava na BT;</li>
                            <li>– Porta de BT com chave;</li>
                            <li>– Fusível Baioneta;</li>
                            <li>– Chave Comutadora com acionamento externo;</li>
                            <li>– Fusível Limitador de corrente;</li>
                            <li>– Fusível de expulsão em Baioneta;</li>
                            <li>– 2 anos de garantia.</li>
                        </ul>

                        <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL 500KVA:</h2>
                        <p>A construção do transformador pedestal envolve a montagem de um transformador elétrico sobre uma base elevada, conhecida como pedestal. O transformador, composto por bobinas primárias e secundárias, é instalado em um invólucro resistente a intempéries.</p>
                        <p>Essa configuração elevada protege o transformador contra fatores ambientais, como umidade e poeira, além de permitir fácil acesso para manutenção e inspeções.</p>
                        <p>O transformador pedestal é uma solução prática para distribuição de energia em áreas urbanas e locais onde o espaço é limitado. Sua construção visa a eficiência, segurança e durabilidade, garantindo um fornecimento de energia confiável.</p>

                        <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 500KVA:</h2>
                        <p>O transformador pedestal é aplicado em diversas situações onde é necessário distribuir energia elétrica de maneira confiável e eficiente. Ele é comumente usado em áreas urbanas, parques, praças, condomínios, edifícios comerciais e residenciais, entre outros. Sua configuração elevada oferece proteção contra fatores ambientais e facilita a manutenção. Com sua versatilidade, o transformador pedestal é uma solução prática e segura para distribuição de energia em locais de diferentes tamanhos e necessidades.</p>

                        <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 500KVA PODE SER APLICADO:</h2>
                        <p>O transformador pedestal encontra aplicação em várias áreas onde a distribuição de energia elétrica é necessária. Ele é comumente utilizado em ambientes urbanos, parques, praças, áreas residenciais e comerciais, condomínios, instalações industriais e locais de eventos.</p>

                        <p>Sua configuração elevada oferece proteção contra condições ambientais adversas e facilita o acesso para manutenção. Com sua versatilidade e adaptabilidade, o transformador pedestal é uma solução confiável e eficiente para suprir demandas de energia em diferentes contextos.</p>

                        <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 500KVA:</h2>
                        <p>O transformador pedestal possui várias características notáveis:</p>

                        <p><stgrong>Proteção Ambiental: Sua configuração elevada o protege contra umidade, poeira e outros elementos ambientais, garantindo a integridade das partes internas.</p>
                        <p><strong>Acesso Fácil:</strong> A instalação em um pedestal facilita o acesso para manutenção, inspeção e reparos, reduzindo o tempo de inatividade.</p>
                        <p><strong>Espaço Limitado:</strong> É ideal para áreas com restrições de espaço, como centros urbanos, onde a instalação subterrânea ou em postes pode ser inviável.</p>
                        <p><strong>Segurança:</strong> Sua construção robusta oferece segurança adicional, protegendo o transformador contra vandalismo e danos acidentais.</p>
                        <p><strong>Variedade de Aplicações:</strong> É aplicável em diversos contextos, desde áreas residenciais e comerciais até parques e instalações industriais.</p>
                        <p><strong>Flexibilidade:</strong> Pode ser adaptado para diferentes níveis de carga elétrica e voltagens, atendendo a necessidades específicas.</p>
                        <p><strong>Instalação Rápida:</strong> A montagem do transformador pedestal é relativamente rápida, minimizando interrupções no fornecimento de energia.</p>
                        <p><strong>Redução de Custos:</strong> A facilidade de manutenção e a durabilidade do transformador pedestal podem resultar em custos operacionais mais baixos ao longo do tempo.</p>
                        <p>Essas características tornam o transformador pedestal uma opção prática e versátil para distribuição de energia, especialmente em locais onde o espaço e a acessibilidade são importantes considerações.</p>
                        <div class="mt-4">
                            <a href="#" class="button">Faça um Orçamento</a>
                        </div>
                    </div>

                    <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-500kva">
                        <h3>Informação adicional</h3>
                        <table class="table table-bordered info-table">
                            <tbody>
                                <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                                <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>',
    ],
    "transformador-pedestal-750kva" => [
        "imagem" => "transformador_pedestal_750kva",
        "nome" => "Transformador Pedestal 750KVA",
        "preco" => "R$128,425.00 – R$173,373.00",
        'content' => '<section id="produto-principal">
        <div class="container">
            <div class="flex">

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="produto-galeria">
                        <div class="produto-imagem-principal">
                            <img src="' . $url . 'imagens/main/produtos/transformador_pedestal_750kva.webp" alt="Transformador Pedestal 750KVA" id="img-principal">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">

                    <h1 class="produto-nome">Transformador Pedestal 750KVA</h1>

                    <div class="produto-preco">
                        R$128,425.00 – R$173,373.00
                    </div>

                    <p class="produto-descricao-curta">Apresentamos o nosso Transformador de Pedestal (Pad-Mounted) de 750KVA, solução eficiente e segura para distribuição de energia. Proteção contra condições ambientais, acesso facilitado para manutenção e versatilidade de aplicação. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                    <div class="produto-opcoes">
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Entrada:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                    <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                    <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                                </select>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Enrolamento:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="Alumínio">Alumínio</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                        <a href="#" class="button">
                            <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                        </a>
                    </div>

                    <div class="produto-meta mt-4">
                        <p><strong>SKU:</strong> TP-750KVA</p>
                        <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="descricao-produto">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="abas">
                        <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-750kva">Descrição</button>
                        <button class="aba" data-aba="info-adicional-transformador-pedestal-750kva">Informação adicional</button>
                    </div>

                    <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-750kva">
                        <h3>Descrição</h3>

                        <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                        <ul class="lista-specs">
                            <li>– Potência: Transformador Pedestal (Pad-Mounted) de 750KVA;</li>
                            <li>– Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                            <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                            <li>– Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                            <li>– Frequência: 60 Hz;</li>
                            <li>– Ligação do Primário: Delta;</li>
                            <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                            <li>– Método de resfriamento: ONAN;</li>
                            <li>– Grau de Proteção: IP54;</li>
                            <li>– Regime de serviço: Continuo 100%;</li>
                            <li>– Instalação: Ao Tempo;</li>
                            <li>– Pintura de acabamento na cor Verde Munsell;</li>
                            <li>– Orelhas de suspensão;</li>
                            <li>– Placa de Identificação;</li>
                            <li>– Meios de Aterramento;</li>
                            <li>– Nível de Óleo tipo coluna;</li>
                            <li>– Registro Inferior e Superior;</li>
                            <li>– Válvula de alívio de pressão sem contato;</li>
                            <li>– Terminais de BT;</li>
                            <li>– Base de Fixação;</li>
                            <li>– Porta de AT com trava na BT;</li>
                            <li>– Porta de BT com chave;</li>
                            <li>– Fusível Baioneta;</li>
                            <li>– Chave Comutadora com acionamento externo;</li>
                            <li>– Fusível Limitador de corrente;</li>
                            <li>– Fusível de expulsão em Baioneta;</li>
                            <li>– 2 anos de garantia.</li>
                        </ul>

                        <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL 750KVA:</h2>
                        <p>A construção do transformador pedestal envolve a montagem de um transformador elétrico sobre uma base elevada, conhecida como pedestal. O transformador, composto por bobinas primárias e secundárias, é instalado em um invólucro resistente a intempéries.</p>
                        <p>Essa configuração elevada protege o transformador contra fatores ambientais, como umidade e poeira, além de permitir fácil acesso para manutenção e inspeções.</p>
                        <p>O transformador pedestal é uma solução prática para distribuição de energia em áreas urbanas e locais onde o espaço é limitado. Sua construção visa a eficiência, segurança e durabilidade, garantindo um fornecimento de energia confiável.</p>

                        <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 750KVA:</h2>
                        <p>O transformador pedestal é aplicado em diversas situações onde é necessário distribuir energia elétrica de maneira confiável e eficiente. Ele é comumente usado em áreas urbanas, parques, praças, condomínios, edifícios comerciais e residenciais, entre outros. Sua configuração elevada oferece proteção contra fatores ambientais e facilita a manutenção. Com sua versatilidade, o transformador pedestal é uma solução prática e segura para distribuição de energia em locais de diferentes tamanhos e necessidades.</p>

                        <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 750KVA PODE SER APLICADO:</h2>
                        <p>O transformador pedestal encontra aplicação em várias áreas onde a distribuição de energia elétrica é necessária. Ele é comumente utilizado em ambientes urbanos, parques, praças, áreas residenciais e comerciais, condomínios, instalações industriais e locais de eventos.</p>

                        <p>Sua configuração elevada oferece proteção contra condições ambientais adversas e facilita o acesso para manutenção. Com sua versatilidade e adaptabilidade, o transformador pedestal é uma solução confiável e eficiente para suprir demandas de energia em diferentes contextos.</p>

                        <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 750KVA:</h2>
                        <p>O transformador pedestal possui várias características notáveis:</p>

                        <p><stgrong>Proteção Ambiental: Sua configuração elevada o protege contra umidade, poeira e outros elementos ambientais, garantindo a integridade das partes internas.</p>
                        <p><strong>Acesso Fácil:</strong> A instalação em um pedestal facilita o acesso para manutenção, inspeção e reparos, reduzindo o tempo de inatividade.</p>
                        <p><strong>Espaço Limitado:</strong> É ideal para áreas com restrições de espaço, como centros urbanos, onde a instalação subterrânea ou em postes pode ser inviável.</p>
                        <p><strong>Segurança:</strong> Sua construção robusta oferece segurança adicional, protegendo o transformador contra vandalismo e danos acidentais.</p>
                        <p><strong>Variedade de Aplicações:</strong> É aplicável em diversos contextos, desde áreas residenciais e comerciais até parques e instalações industriais.</p>
                        <p><strong>Flexibilidade:</strong> Pode ser adaptado para diferentes níveis de carga elétrica e voltagens, atendendo a necessidades específicas.</p>
                        <p><strong>Instalação Rápida:</strong> A montagem do transformador pedestal é relativamente rápida, minimizando interrupções no fornecimento de energia.</p>
                        <p><strong>Redução de Custos:</strong> A facilidade de manutenção e a durabilidade do transformador pedestal podem resultar em custos operacionais mais baixos ao longo do tempo.</p>
                        <p>Essas características tornam o transformador pedestal uma opção prática e versátil para distribuição de energia, especialmente em locais onde o espaço e a acessibilidade são importantes considerações.</p>
                        <div class="mt-4">
                            <a href="#" class="button">Faça um Orçamento</a>
                        </div>
                    </div>

                    <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-750kva">
                        <h3>Informação adicional</h3>
                        <table class="table table-bordered info-table">
                            <tbody>
                                <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                                <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>',
    ],
    "transformador-pedestal-1000kva" => [
        "imagem" => "transformador_pedestal_112kva",
        "nome" => "Transformador Pedestal 1000KVA",
        "preco" => "R$151,620.00 – R$204,687.00",
        'content' => '<section id="produto-principal">
        <div class="container">
            <div class="flex">

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="produto-galeria">
                        <div class="produto-imagem-principal">
                            <img src="' . $url . 'imagens/main/produtos/transformador_pedestal_112kva.webp" alt="Transformador Pedestal 1000KVA" id="img-principal">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">

                    <h1 class="produto-nome">Transformador Pedestal 1000KVA</h1>

                    <div class="produto-preco">
                        R$151,620.00 – R$204,687.00
                    </div>

                    <p class="produto-descricao-curta">Apresentamos o nosso Transformador de Pedestal (Pad-Mounted) de 1000KVA, solução eficiente e segura para distribuição de energia. Proteção contra condições ambientais, acesso facilitado para manutenção e versatilidade de aplicação. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                    <div class="produto-opcoes">
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Entrada:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                    <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                    <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                                </select>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Enrolamento:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="Alumínio">Alumínio</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                        <a href="#" class="button">
                            <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                        </a>
                    </div>

                    <div class="produto-meta mt-4">
                        <p><strong>SKU:</strong> TP-1000KVA</p>
                        <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="descricao-produto">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="abas">
                        <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-1000kva">Descrição</button>
                        <button class="aba" data-aba="info-adicional-transformador-pedestal-1000kva">Informação adicional</button>
                    </div>

                    <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-1000kva">
                        <h3>Descrição</h3>

                        <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                        <ul class="lista-specs">
                            <li>– Potência: Transformador Pedestal (Pad-Mounted) de 1000KVA;</li>
                            <li>– Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                            <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                            <li>– Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                            <li>– Frequência: 60 Hz;</li>
                            <li>– Ligação do Primário: Delta;</li>
                            <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                            <li>– Método de resfriamento: ONAN;</li>
                            <li>– Grau de Proteção: IP54;</li>
                            <li>– Regime de serviço: Continuo 100%;</li>
                            <li>– Instalação: Ao Tempo;</li>
                            <li>– Pintura de acabamento na cor Verde Munsell;</li>
                            <li>– Orelhas de suspensão;</li>
                            <li>– Placa de Identificação;</li>
                            <li>– Meios de Aterramento;</li>
                            <li>– Nível de Óleo tipo coluna;</li>
                            <li>– Registro Inferior e Superior;</li>
                            <li>– Válvula de alívio de pressão sem contato;</li>
                            <li>– Terminais de BT;</li>
                            <li>– Base de Fixação;</li>
                            <li>– Porta de AT com trava na BT;</li>
                            <li>– Porta de BT com chave;</li>
                            <li>– Fusível Baioneta;</li>
                            <li>– Chave Comutadora com acionamento externo;</li>
                            <li>– Fusível Limitador de corrente;</li>
                            <li>– Fusível de expulsão em Baioneta;</li>
                            <li>– 2 anos de garantia.</li>
                        </ul>

                        <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL 1000KVA:</h2>
                        <p>A construção do transformador pedestal envolve a montagem de um transformador elétrico sobre uma base elevada, conhecida como pedestal. O transformador, composto por bobinas primárias e secundárias, é instalado em um invólucro resistente a intempéries.</p>
                        <p>Essa configuração elevada protege o transformador contra fatores ambientais, como umidade e poeira, além de permitir fácil acesso para manutenção e inspeções.</p>
                        <p>O transformador pedestal é uma solução prática para distribuição de energia em áreas urbanas e locais onde o espaço é limitado. Sua construção visa a eficiência, segurança e durabilidade, garantindo um fornecimento de energia confiável.</p>

                        <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 1000KVA:</h2>
                        <p>O transformador pedestal é aplicado em diversas situações onde é necessário distribuir energia elétrica de maneira confiável e eficiente. Ele é comumente usado em áreas urbanas, parques, praças, condomínios, edifícios comerciais e residenciais, entre outros. Sua configuração elevada oferece proteção contra fatores ambientais e facilita a manutenção. Com sua versatilidade, o transformador pedestal é uma solução prática e segura para distribuição de energia em locais de diferentes tamanhos e necessidades.</p>

                        <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 1000KVA PODE SER APLICADO:</h2>
                        <p>O transformador pedestal encontra aplicação em várias áreas onde a distribuição de energia elétrica é necessária. Ele é comumente utilizado em ambientes urbanos, parques, praças, áreas residenciais e comerciais, condomínios, instalações industriais e locais de eventos.</p>

                        <p>Sua configuração elevada oferece proteção contra condições ambientais adversas e facilita o acesso para manutenção. Com sua versatilidade e adaptabilidade, o transformador pedestal é uma solução confiável e eficiente para suprir demandas de energia em diferentes contextos.</p>

                        <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 1000KVA:</h2>
                        <p>O transformador pedestal possui várias características notáveis:</p>

                        <p><stgrong>Proteção Ambiental: Sua configuração elevada o protege contra umidade, poeira e outros elementos ambientais, garantindo a integridade das partes internas.</p>
                        <p><strong>Acesso Fácil:</strong> A instalação em um pedestal facilita o acesso para manutenção, inspeção e reparos, reduzindo o tempo de inatividade.</p>
                        <p><strong>Espaço Limitado:</strong> É ideal para áreas com restrições de espaço, como centros urbanos, onde a instalação subterrânea ou em postes pode ser inviável.</p>
                        <p><strong>Segurança:</strong> Sua construção robusta oferece segurança adicional, protegendo o transformador contra vandalismo e danos acidentais.</p>
                        <p><strong>Variedade de Aplicações:</strong> É aplicável em diversos contextos, desde áreas residenciais e comerciais até parques e instalações industriais.</p>
                        <p><strong>Flexibilidade:</strong> Pode ser adaptado para diferentes níveis de carga elétrica e voltagens, atendendo a necessidades específicas.</p>
                        <p><strong>Instalação Rápida:</strong> A montagem do transformador pedestal é relativamente rápida, minimizando interrupções no fornecimento de energia.</p>
                        <p><strong>Redução de Custos:</strong> A facilidade de manutenção e a durabilidade do transformador pedestal podem resultar em custos operacionais mais baixos ao longo do tempo.</p>
                        <p>Essas características tornam o transformador pedestal uma opção prática e versátil para distribuição de energia, especialmente em locais onde o espaço e a acessibilidade são importantes considerações.</p>
                        <div class="mt-4">
                            <a href="#" class="button">Faça um Orçamento</a>
                        </div>
                    </div>

                    <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-1000kva">
                        <h3>Informação adicional</h3>
                        <table class="table table-bordered info-table">
                            <tbody>
                                <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                                <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>',
    ],
    "transformador-pedestal-1500kva" => [
        "imagem" => "transformador_pedestal_1500kva",
        "nome" => "Transformador Pedestal 1500KVA",
        "preco" => "R$181,412.00 – R$244,906.00",
        'content' => '<section id="produto-principal">
        <div class="container">
            <div class="flex">

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="produto-galeria">
                        <div class="produto-imagem-principal">
                            <img src="' . $url . 'imagens/main/produtos/transformador_pedestal_1500kva.webp" alt="Transformador Pedestal 1500KVA" id="img-principal">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">

                    <h1 class="produto-nome">Transformador Pedestal 1500KVA</h1>

                    <div class="produto-preco">
                        R$181,412.00 – R$244,906.00
                    </div>

                    <p class="produto-descricao-curta">Apresentamos o nosso Transformador de Pedestal (Pad-Mounted) de 1500KVA, solução eficiente e segura para distribuição de energia. Proteção contra condições ambientais, acesso facilitado para manutenção e versatilidade de aplicação. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                    <div class="produto-opcoes">
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Entrada:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                    <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                    <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                                </select>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Enrolamento:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="Alumínio">Alumínio</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                        <a href="#" class="button">
                            <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                        </a>
                    </div>

                    <div class="produto-meta mt-4">
                        <p><strong>SKU:</strong> TP-1500KVA</p>
                        <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="descricao-produto">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="abas">
                        <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-1500kva">Descrição</button>
                        <button class="aba" data-aba="info-adicional-transformador-pedestal-1500kva">Informação adicional</button>
                    </div>

                    <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-1500kva">
                        <h3>Descrição</h3>

                        <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                        <ul class="lista-specs">
                            <li>– Potência: Transformador Pedestal (Pad-Mounted) de 1500KVA;</li>
                            <li>– Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                            <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                            <li>– Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                            <li>– Frequência: 60 Hz;</li>
                            <li>– Ligação do Primário: Delta;</li>
                            <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                            <li>– Método de resfriamento: ONAN;</li>
                            <li>– Grau de Proteção: IP54;</li>
                            <li>– Regime de serviço: Continuo 100%;</li>
                            <li>– Instalação: Ao Tempo;</li>
                            <li>– Pintura de acabamento na cor Verde Munsell;</li>
                            <li>– Orelhas de suspensão;</li>
                            <li>– Placa de Identificação;</li>
                            <li>– Meios de Aterramento;</li>
                            <li>– Nível de Óleo tipo coluna;</li>
                            <li>– Registro Inferior e Superior;</li>
                            <li>– Válvula de alívio de pressão sem contato;</li>
                            <li>– Terminais de BT;</li>
                            <li>– Base de Fixação;</li>
                            <li>– Porta de AT com trava na BT;</li>
                            <li>– Porta de BT com chave;</li>
                            <li>– Fusível Baioneta;</li>
                            <li>– Chave Comutadora com acionamento externo;</li>
                            <li>– Fusível Limitador de corrente;</li>
                            <li>– Fusível de expulsão em Baioneta;</li>
                            <li>– 2 anos de garantia.</li>
                        </ul>

                        <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL 1500KVA:</h2>
                        <p>A construção do transformador pedestal envolve a montagem de um transformador elétrico sobre uma base elevada, conhecida como pedestal. O transformador, composto por bobinas primárias e secundárias, é instalado em um invólucro resistente a intempéries.</p>
                        <p>Essa configuração elevada protege o transformador contra fatores ambientais, como umidade e poeira, além de permitir fácil acesso para manutenção e inspeções.</p>
                        <p>O transformador pedestal é uma solução prática para distribuição de energia em áreas urbanas e locais onde o espaço é limitado. Sua construção visa a eficiência, segurança e durabilidade, garantindo um fornecimento de energia confiável.</p>

                        <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 1500KVA:</h2>
                        <p>O transformador pedestal é aplicado em diversas situações onde é necessário distribuir energia elétrica de maneira confiável e eficiente. Ele é comumente usado em áreas urbanas, parques, praças, condomínios, edifícios comerciais e residenciais, entre outros. Sua configuração elevada oferece proteção contra fatores ambientais e facilita a manutenção. Com sua versatilidade, o transformador pedestal é uma solução prática e segura para distribuição de energia em locais de diferentes tamanhos e necessidades.</p>

                        <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 1500KVA PODE SER APLICADO:</h2>
                        <p>O transformador pedestal encontra aplicação em várias áreas onde a distribuição de energia elétrica é necessária. Ele é comumente utilizado em ambientes urbanos, parques, praças, áreas residenciais e comerciais, condomínios, instalações industriais e locais de eventos.</p>

                        <p>Sua configuração elevada oferece proteção contra condições ambientais adversas e facilita o acesso para manutenção. Com sua versatilidade e adaptabilidade, o transformador pedestal é uma solução confiável e eficiente para suprir demandas de energia em diferentes contextos.</p>

                        <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 1500KVA:</h2>
                        <p>O transformador pedestal possui várias características notáveis:</p>

                        <p><stgrong>Proteção Ambiental: Sua configuração elevada o protege contra umidade, poeira e outros elementos ambientais, garantindo a integridade das partes internas.</p>
                        <p><strong>Acesso Fácil:</strong> A instalação em um pedestal facilita o acesso para manutenção, inspeção e reparos, reduzindo o tempo de inatividade.</p>
                        <p><strong>Espaço Limitado:</strong> É ideal para áreas com restrições de espaço, como centros urbanos, onde a instalação subterrânea ou em postes pode ser inviável.</p>
                        <p><strong>Segurança:</strong> Sua construção robusta oferece segurança adicional, protegendo o transformador contra vandalismo e danos acidentais.</p>
                        <p><strong>Variedade de Aplicações:</strong> É aplicável em diversos contextos, desde áreas residenciais e comerciais até parques e instalações industriais.</p>
                        <p><strong>Flexibilidade:</strong> Pode ser adaptado para diferentes níveis de carga elétrica e voltagens, atendendo a necessidades específicas.</p>
                        <p><strong>Instalação Rápida:</strong> A montagem do transformador pedestal é relativamente rápida, minimizando interrupções no fornecimento de energia.</p>
                        <p><strong>Redução de Custos:</strong> A facilidade de manutenção e a durabilidade do transformador pedestal podem resultar em custos operacionais mais baixos ao longo do tempo.</p>
                        <p>Essas características tornam o transformador pedestal uma opção prática e versátil para distribuição de energia, especialmente em locais onde o espaço e a acessibilidade são importantes considerações.</p>
                        <div class="mt-4">
                            <a href="#" class="button">Faça um Orçamento</a>
                        </div>
                    </div>

                    <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-1500kva">
                        <h3>Informação adicional</h3>
                        <table class="table table-bordered info-table">
                            <tbody>
                                <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                                <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>',
    ],
    "transformador-pedestal-2000kva" => [
        "imagem" => "transformador_pedestal_500kva",
        "nome" => "Transformador Pedestal 2000KVA",
        "preco" => "R$239,187.00 – R$322,903.00",
        'content' => '<section id="produto-principal">
        <div class="container">
            <div class="flex">

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="produto-galeria">
                        <div class="produto-imagem-principal">
                            <img src="' . $url . 'imagens/main/produtos/transformador_pedestal_500kva.webp" alt="Transformador Pedestal 2000KVA" id="img-principal">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">

                    <h1 class="produto-nome">Transformador Pedestal 2000KVA</h1>

                    <div class="produto-preco">
                        R$239,187.00 – R$322,903.00
                    </div>

                    <p class="produto-descricao-curta">Apresentamos o nosso Transformador de Pedestal (Pad-Mounted) de 2000KVA, solução eficiente e segura para distribuição de energia. Proteção contra condições ambientais, acesso facilitado para manutenção e versatilidade de aplicação. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                    <div class="produto-opcoes">
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Entrada:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                    <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                    <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                                </select>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Enrolamento:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="Alumínio">Alumínio</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                        <a href="#" class="button">
                            <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                        </a>
                    </div>

                    <div class="produto-meta mt-4">
                        <p><strong>SKU:</strong> TP-2000KVA</p>
                        <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="descricao-produto">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="abas">
                        <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-2000kva">Descrição</button>
                        <button class="aba" data-aba="info-adicional-transformador-pedestal-2000kva">Informação adicional</button>
                    </div>

                    <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-2000kva">
                        <h3>Descrição</h3>

                        <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                        <ul class="lista-specs">
                            <li>– Potência: Transformador Pedestal (Pad-Mounted) de 2000KVA;</li>
                            <li>– Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                            <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                            <li>– Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                            <li>– Frequência: 60 Hz;</li>
                            <li>– Ligação do Primário: Delta;</li>
                            <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                            <li>– Método de resfriamento: ONAN;</li>
                            <li>– Grau de Proteção: IP54;</li>
                            <li>– Regime de serviço: Continuo 100%;</li>
                            <li>– Instalação: Ao Tempo;</li>
                            <li>– Pintura de acabamento na cor Verde Munsell;</li>
                            <li>– Orelhas de suspensão;</li>
                            <li>– Placa de Identificação;</li>
                            <li>– Meios de Aterramento;</li>
                            <li>– Nível de Óleo tipo coluna;</li>
                            <li>– Registro Inferior e Superior;</li>
                            <li>– Válvula de alívio de pressão sem contato;</li>
                            <li>– Terminais de BT;</li>
                            <li>– Base de Fixação;</li>
                            <li>– Porta de AT com trava na BT;</li>
                            <li>– Porta de BT com chave;</li>
                            <li>– Fusível Baioneta;</li>
                            <li>– Chave Comutadora com acionamento externo;</li>
                            <li>– Fusível Limitador de corrente;</li>
                            <li>– Fusível de expulsão em Baioneta;</li>
                            <li>– 2 anos de garantia.</li>
                        </ul>

                        <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL 2000KVA:</h2>
                        <p>A construção do transformador pedestal envolve a montagem de um transformador elétrico sobre uma base elevada, conhecida como pedestal. O transformador, composto por bobinas primárias e secundárias, é instalado em um invólucro resistente a intempéries.</p>
                        <p>Essa configuração elevada protege o transformador contra fatores ambientais, como umidade e poeira, além de permitir fácil acesso para manutenção e inspeções.</p>
                        <p>O transformador pedestal é uma solução prática para distribuição de energia em áreas urbanas e locais onde o espaço é limitado. Sua construção visa a eficiência, segurança e durabilidade, garantindo um fornecimento de energia confiável.</p>

                        <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 2000KVA:</h2>
                        <p>O transformador pedestal é aplicado em diversas situações onde é necessário distribuir energia elétrica de maneira confiável e eficiente. Ele é comumente usado em áreas urbanas, parques, praças, condomínios, edifícios comerciais e residenciais, entre outros. Sua configuração elevada oferece proteção contra fatores ambientais e facilita a manutenção. Com sua versatilidade, o transformador pedestal é uma solução prática e segura para distribuição de energia em locais de diferentes tamanhos e necessidades.</p>

                        <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 2000KVA PODE SER APLICADO:</h2>
                        <p>O transformador pedestal encontra aplicação em várias áreas onde a distribuição de energia elétrica é necessária. Ele é comumente utilizado em ambientes urbanos, parques, praças, áreas residenciais e comerciais, condomínios, instalações industriais e locais de eventos.</p>

                        <p>Sua configuração elevada oferece proteção contra condições ambientais adversas e facilita o acesso para manutenção. Com sua versatilidade e adaptabilidade, o transformador pedestal é uma solução confiável e eficiente para suprir demandas de energia em diferentes contextos.</p>

                        <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 2000KVA:</h2>
                        <p>O transformador pedestal possui várias características notáveis:</p>

                        <p><stgrong>Proteção Ambiental: Sua configuração elevada o protege contra umidade, poeira e outros elementos ambientais, garantindo a integridade das partes internas.</p>
                        <p><strong>Acesso Fácil:</strong> A instalação em um pedestal facilita o acesso para manutenção, inspeção e reparos, reduzindo o tempo de inatividade.</p>
                        <p><strong>Espaço Limitado:</strong> É ideal para áreas com restrições de espaço, como centros urbanos, onde a instalação subterrânea ou em postes pode ser inviável.</p>
                        <p><strong>Segurança:</strong> Sua construção robusta oferece segurança adicional, protegendo o transformador contra vandalismo e danos acidentais.</p>
                        <p><strong>Variedade de Aplicações:</strong> É aplicável em diversos contextos, desde áreas residenciais e comerciais até parques e instalações industriais.</p>
                        <p><strong>Flexibilidade:</strong> Pode ser adaptado para diferentes níveis de carga elétrica e voltagens, atendendo a necessidades específicas.</p>
                        <p><strong>Instalação Rápida:</strong> A montagem do transformador pedestal é relativamente rápida, minimizando interrupções no fornecimento de energia.</p>
                        <p><strong>Redução de Custos:</strong> A facilidade de manutenção e a durabilidade do transformador pedestal podem resultar em custos operacionais mais baixos ao longo do tempo.</p>
                        <p>Essas características tornam o transformador pedestal uma opção prática e versátil para distribuição de energia, especialmente em locais onde o espaço e a acessibilidade são importantes considerações.</p>
                        <div class="mt-4">
                            <a href="#" class="button">Faça um Orçamento</a>
                        </div>
                    </div>

                    <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-2000kva">
                        <h3>Informação adicional</h3>
                        <table class="table table-bordered info-table">
                            <tbody>
                                <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                                <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>',
    ],

    "transformador-pedestal-2500kva" => [
        "imagem" => "transformador_pedestal_750kva",
        "nome" => "Transformador Pedestal 2500KVA",
        "preco" => "R$298.473,00 – R$402.939,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_pedestal_2500kva.webp" alt="Transformador Pedestal 2500KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Pedestal 2500KVA</h1>

                <div class="produto-preco">
                    R$298.473,00 – R$402.939,00
                </div>

                <p class="produto-descricao-curta">Apresentamos o nosso Transformador de Pedestal (Pad-Mounted) de 2500KVA, solução eficiente e segura para distribuição de energia. Proteção contra condições ambientais, acesso facilitado para manutenção e versatilidade de aplicação. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAOP-2500KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-2500kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-pedestal-2500kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-2500kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: Transformador Pedestal (Pad-Mounted) de 2500KVA;</li>
                        <li>– Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>– Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Ligação do Primário: Delta;</li>
                        <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>– Método de resfriamento: ONAN;</li>
                        <li>– Grau de Proteção: IP54;</li>
                        <li>– Regime de serviço: Continuo 100%;</li>
                        <li>– Instalação: Ao Tempo;</li>
                        <li>– Pintura de acabamento na cor Verde Munsell;</li>
                        <li>– Orelhas de suspensão;</li>
                        <li>– Placa de Identificação;</li>
                        <li>– Meios de Aterramento;</li>
                        <li>– Nível de Óleo tipo coluna;</li>
                        <li>– Registro Inferior e Superior;</li>
                        <li>– Válvula de alívio de pressão sem contato;</li>
                        <li>– Terminais de BT;</li>
                        <li>– Base de Fixação;</li>
                        <li>– Porta de AT com trava na BT;</li>
                        <li>– Porta de BT com chave;</li>
                        <li>– Fusível Baioneta;</li>
                        <li>– Chave Comutadora com acionamento externo;</li>
                        <li>– Fusível Limitador de corrente;</li>
                        <li>– Fusível de expulsão em Baioneta;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 2500KVA:</h2>
                    <p>A construção do transformador pedestal envolve a montagem de um transformador elétrico sobre uma base elevada, conhecida como pedestal. O transformador, composto por bobinas primárias e secundárias, é instalado em um invólucro resistente a intempéries.</p>
                    <p>Essa configuração elevada protege o transformador contra fatores ambientais, como umidade e poeira, além de permitir fácil acesso para manutenção e inspeções.</p>
                    <p>O transformador pedestal é uma solução prática para distribuição de energia em áreas urbanas e locais onde o espaço é limitado. Sua construção visa a eficiência, segurança e durabilidade, garantindo um fornecimento de energia confiável.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 2500KVA:</h2>
                    <p>O transformador pedestal é aplicado em diversas situações onde é necessário distribuir energia elétrica de maneira confiável e eficiente. Ele é comumente usado em áreas urbanas, parques, praças, condomínios, edifícios comerciais e residenciais, entre outros. Sua configuração elevada oferece proteção contra fatores ambientais e facilita a manutenção. Com sua versatilidade, o transformador pedestal é uma solução prática e segura para distribuição de energia em locais de diferentes tamanhos e necessidades.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 2500KVA PODE SER APLICADO:</h2>
                    <p>O transformador pedestal encontra aplicação em várias áreas onde a distribuição de energia elétrica é necessária. Ele é comumente utilizado em ambientes urbanos, parques, praças, áreas residenciais e comerciais, condomínios, instalações industriais e locais de eventos.</p>
                    <p>Sua configuração elevada oferece proteção contra condições ambientais adversas e facilita o acesso para manutenção. Com sua versatilidade e adaptabilidade, o transformador pedestal é uma solução confiável e eficiente para suprir demandas de energia em diferentes contextos.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 2500KVA:</h2>
                    <p>O transformador pedestal possui várias características notáveis:</p>

                    <p><strong>Proteção Ambiental:</strong> Sua configuração elevada o protege contra umidade, poeira e outros elementos ambientais, garantindo a integridade das partes internas.</p>

                    <p><strong>Acesso Fácil:</strong> A instalação em um pedestal facilita o acesso para manutenção, inspeção e reparos, reduzindo o tempo de inatividade.</p>

                    <p><strong>Espaço Limitado:</strong> É ideal para áreas com restrições de espaço, como centros urbanos, onde a instalação subterrânea ou em postes pode ser inviável.</p>

                    <p><strong>Segurança:</strong> Sua construção robusta oferece segurança adicional, protegendo o transformador contra vandalismo e danos acidentais.</p>

                    <p><strong>Variedade de Aplicações:</strong> É aplicável em diversos contextos, desde áreas residenciais e comerciais até parques e instalações industriais.</p>

                    <p><strong>Flexibilidade:</strong> Pode ser adaptado para diferentes níveis de carga elétrica e voltagens, atendendo a necessidades específicas.</p>

                    <p><strong>Instalação Rápida:</strong> A montagem do transformador pedestal é relativamente rápida, minimizando interrupções no fornecimento de energia.</p>

                    <p><strong>Redução de Custos:</strong> A facilidade de manutenção e a durabilidade do transformador pedestal podem resultar em custos operacionais mais baixos ao longo do tempo.</p>

                    <p>Essas características tornam o transformador pedestal uma opção prática e versátil para distribuição de energia, especialmente em locais onde o espaço e a acessibilidade são importantes considerações.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-2500kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-pedestal-3000kva" => [
        "imagem" => "transformador-pedestal-3000kva",
        "nome" => "Transformador Pedestal 3000KVA",
        "preco" => "R$351,386.00 – R$474,371.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador-pedestal-3000kva.webp" alt="Transformador Pedestal 3000KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Pedestal 3000KVA</h1>

                <div class="produto-preco">
                    R$351,386.00 – R$474,371.00
                </div>

                <p class="produto-descricao-curta">Transformador Pedestal de 3000KVA — máxima potência da linha pedestal. Projetado para subestações de transmissão e grandes complexos industriais. Fabricado conforme ABNT-NBR.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TP-3000KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-3000kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-pedestal-3000kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-3000kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Pedestal de 3000KVA;</li>
                        <li>Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Ligação do Primário: Delta;</li>
                        <li>Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>Número de Fases: 3 (Trifásico);</li>
                        <li>Altitude de utilização máxima: 1000M;</li>
                        <li>Método de resfriamento: ONAN;</li>
                        <li>Tipo de Isolação: Óleo Mineral;</li>
                        <li>Instalação: Ao Tempo / Pedestal;</li>
                        <li>Núcleo: Chapa de Silício;</li>
                        <li>Fator: K1;</li>
                        <li>Comutador de Tap´s: Rotativo;</li>
                        <li>Válvula de alívio: Sim;</li>
                        <li>Grau de Proteção: IP54;</li>
                        <li>Rodas: Sim;</li>
                        <li>Placa de Características: Sim;</li>
                        <li>Identificação do aterramento: Sim;</li>
                        <li>Identificação das buchas: Sim;</li>
                        <li>Fabricado conforme normas NBR: NBR-5440;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL 3000KVA:</h2>
                    <p>– Invólucro de aço carbono com pintura epóxi resistente às intempéries.</p>
                    <p>– Enrolamentos em alumínio imersos em óleo mineral.</p>
                    <p>– Núcleo de lâminas de aço silício.</p>
                    <p>– Buchas de alta tensão em porcelana.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL 3000KVA:</h2>
                    <p>Ideal para redes de distribuição urbana, instalações em postes e pedestais ao ar livre. Projetado para suportar condições climáticas adversas, garantindo operação contínua e segura em ambientes externos.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL 3000KVA PODE SER APLICADO:</h2>
                    <p>Redes de distribuição urbana, subestações ao ar livre, calçadas, praças, vias públicas, cooperativas de energia e infraestrutura urbana em geral.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL 3000KVA:</h2>
                    <p>Alta resistência às intempéries. Fácil manutenção em campo. Projetado para operação ao tempo sem necessidade de estruturas de proteção adicionais. Design compacto para instalação em postes ou pedestais.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-3000kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-isolador-5kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 5KVA",
        "preco" => "R$1,976.00 – R$2,912.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 5KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 5KVA</h1>

                <div class="produto-preco">
                    R$1,976.00 – R$2,912.00
                </div>

                <p class="produto-descricao-curta">Transformador Isolador de 5KVA com isolamento a seco em verniz poliéster. Ideal para energia solar, painéis e sistemas industriais. Seguro, sem risco de explosão e isento de manutenção.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220V">220V</option>
                                <option value="380V">380V</option>
                                <option value="440V">440V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-5KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-5kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-5kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-5kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 5KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V; 220-440/254V; 440-380/220V; 380-440/254V; 440-380-220V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 5KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 5KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, tendo o primário isolado eletricamente do secundário, destinado principalmente a energia solar, sistemas de redes de iluminação e painéis, também se aplica a motores, máquinas, fornos e diversas outras aplicações industriais (conforme necessidade).</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 5KVA:</h2>
                    <p>Ar condicionado; Alimentar motores; Eletroeletrônicos em geral; Obras e construção civil; Geradores; Máquinas; Painéis; Entre outros.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Possuem a possibilidade de se adaptar para o sistema de ventilação forçada, aumentando sua capacidade nominal em até 40%. Não liberam gases tóxicos, não agridem a natureza. São fabricados com materiais adequados para suportarem altas temperaturas. Possuem baixo nível de ruído, são isentos de manutenção. Transformadores que não apresentam risco de explosão, assim não apresentando perigo em lugares onde tem contínuo fluxo de pessoas.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-5kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220V, 380V, 440V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-isolador-7-5kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 7,5KVA",
        "preco" => "R$2,594.00 – R$3,822.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 7,5KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 7,5KVA</h1>

                <div class="produto-preco">
                    R$2,594.00 – R$3,822.00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Transformador Isolador de 7,5 kVA, uma solução robusta para proteger seus sistemas elétricos. Com capacidade de isolar circuitos e prevenir sobrecargas, garante a segurança de equipamentos sensíveis. Adquira confiabilidade e tranquilidade na distribuição de energia.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-7.5KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-7-5kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-7-5kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-7-5kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 7,5KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 7,5KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 7,5KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, tendo o primário isolado eletricamente do secundário, destinado principalmente a energia solar, sistemas de redes de iluminação e painéis, também se aplica a motores, máquinas, fornos e diversas outras aplicações industriais (conforme necessidade).</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 7,5KVA:</h2>
                    <p>Ar condicionado; Alimentar motores; Eletroeletrônicos em geral; Obras e construção civil; Geradores; Máquinas; Painéis; Entre outros.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>O investimento neste equipamento é extremamente baixo, fazendo valer a pena a instalação de um equipamento em projetos de energia solar.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-7-5kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-10kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 10KVA",
        "preco" => "R$2,779.00 – R$4,095.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 10KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 10KVA</h1>

                <div class="produto-preco">
                    R$2,779.00 – R$4,095.00
                </div>

                <p class="produto-descricao-curta">Transformador Isolador de 10KVA trifásico. Alta eficiência e segurança para isolamento de redes elétricas, ideal para equipamentos sensíveis, sistemas de TI e aplicações industriais que exigem eliminação de ruídos harmônicos.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-10KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-10kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-10kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-10kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 10KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 10KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 10KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, tendo o primário isolado eletricamente do secundário, destinado principalmente a energia solar, sistemas de redes de iluminação e painéis, também se aplica a motores, máquinas, fornos e diversas outras aplicações industriais (conforme necessidade).</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 10KVA:</h2>
                    <p>Ar condicionado; Alimentar motores; Eletroeletrônicos em geral; Obras e construção civil; Geradores; Máquinas; Painéis; Entre outros.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Indicado para alimentação de máquinas de corte a laser, equipamentos médicos e laboratoriais, ou onde o isolamento galvânico entre rede e carga é mandatório.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-10kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-15kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 15KVA",
        "preco" => "R$3,582.00 – R$5,278.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 15KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 15KVA</h1>

                <div class="produto-preco">
                    R$3,582.00 – R$5,278.00
                </div>

                <p class="produto-descricao-curta">Transformador Isolador de 15KVA trifásico. Projetado para oferecer máxima segurança e isolamento galvânico, sendo a escolha ideal para sistemas de energia solar fotovoltaica, alimentação de CPDs e máquinas industriais de médio porte.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-15KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-15kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-15kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-15kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 15KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 15KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 15KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, tendo o primário isolado eletricamente do secundário, destinado principalmente a energia solar, sistemas de redes de iluminação e painéis, também se aplica a motores, máquinas, fornos e diversas outras aplicações industriais (conforme necessidade).</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 15KVA:</h2>
                    <p>Ar condicionado; Alimentar motores; Eletroeletrônicos em geral; Obras e construção civil; Geradores; Máquinas; Painéis; Entre outros.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Ideal para quem busca eliminar ruídos elétricos e garantir que a rede de entrada não tenha contato direto com a carga, protegendo componentes sensíveis contra transientes.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-15kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-isolador-20kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 20KVA",
        "preco" => "RR$4,323.00 – R$6,370.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 20KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 20KVA</h1>

                <div class="produto-preco">
                    R$4.356,00 – R$6.812,00
                </div>

                <p class="produto-descricao-curta">Transformador Isolador de 20KVA trifásico. Alta capacidade e robustez para isolamento de sistemas críticos. Desenvolvido para oferecer máxima proteção contra distúrbios elétricos, sendo ideal para infraestruturas industriais, comerciais e sistemas de energia renovável.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-20KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-20kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-20kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-20kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 20KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 20KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 20KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, tendo o primário isolado eletricamente do secundário, destinado principalmente a energia solar, sistemas de redes de iluminação e painéis, também se aplica a motores, máquinas, fornos e diversas outras aplicações industriais (conforme necessidade).</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 20KVA:</h2>
                    <p>Ar condicionado; Alimentar motores; Eletroeletrônicos em geral; Obras e construção civil; Geradores; Máquinas; Painéis; Entre outros.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>O isolamento galvânico total entre a entrada e a saída garante que surtos de tensão ou ruídos provenientes da rede não atinjam a carga, aumentando significativamente a vida útil de componentes eletrônicos sensíveis.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-20kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-25kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 25KVA",
        "preco" => "R$4,693.00 – R$6,916.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 25KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 25KVA</h1>

                <div class="produto-preco">
                    R$4,693.00 – R$6,916.00
                </div>

                <p class="produto-descricao-curta">Transformador Isolador de 25KVA trifásico. Desenvolvido para aplicações que exigem alta potência e total isolamento entre a rede e a carga. Garante a proteção de equipamentos industriais pesados e sistemas de TI complexos contra interferências e transientes elétricos.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-25KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-25kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-25kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-25kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 25KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 25KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 25KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, tendo o primário isolado eletricamente do secundário, destinado principalmente a energia solar, sistemas de redes de iluminação e painéis, também se aplica a motores, máquinas, fornos e diversas outras aplicações industriais (conforme necessidade).</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 25KVA:</h2>
                    <p>Ar condicionado; Alimentar motores; Eletroeletrônicos em geral; Obras e construção civil; Geradores; Máquinas; Painéis; Entre outros.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Este transformador isolador é projetado para minimizar distorções harmônicas e garantir que o neutro da carga seja independente do neutro da concessionária, provendo uma instalação muito mais estável e segura.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-25kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-30kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 30KVA",
        "preco" => "R$5,558.00 – R$8,190.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 30KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 30KVA</h1>

                <div class="produto-preco">
                    R$5,558.00 – R$8,190.00
                </div>

                <p class="produto-descricao-curta">O Transformador Isolador de 30KVA é a solução definitiva para quem busca o máximo em proteção e desempenho. Projetado para suportar cargas elevadas com total isolamento galvânico, ele protege seus equipamentos contra picos de tensão e ruídos da rede elétrica.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-30KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-30kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-30kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-30kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 30KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 30KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 30KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, tendo o primário isolado eletricamente do secundário, destinado principalmente a energia solar, sistemas de redes de iluminação e painéis, também se aplica a motores, máquinas, fornos e diversas outras aplicações industriais (conforme necessidade).</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 30KVA:</h2>
                    <p>Ar condicionado; Alimentar motores; Eletroeletrônicos em geral; Obras e construção civil; Geradores; Máquinas; Painéis; Entre outros.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Sua alta capacidade o torna indispensável para grandes projetos fotovoltaicos e plantas industriais que não podem sofrer com paradas inesperadas causadas por má qualidade da energia.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-30kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-40kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 40KVA",
        "preco" => "R$7,040.00 – R$10,374.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 40KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 40KVA</h1>

                <div class="produto-preco">
                    R$6.812,00 – R$10.556,00
                </div>

                <p class="produto-descricao-curta">O Transformador Isolador de 40KVA trifásico é a escolha ideal para indústrias e sistemas de energia solar que demandam alta potência com isolamento galvânico total. Garante a proteção de máquinas sensíveis contra harmônicos e ruídos elétricos, assegurando estabilidade operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-40KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-40kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-40kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-40kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 40KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 40KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 40KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, tendo o primário isolado eletricamente do secundário, destinado principalmente a energia solar, sistemas de redes de iluminação e painéis, também se aplica a motores, máquinas, fornos e diversas outras aplicações industriais (conforme necessidade).</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 40KVA:</h2>
                    <p>Ar condicionado; Alimentar motores; Eletroeletrônicos em geral; Obras e construção civil; Geradores; Máquinas; Painéis; Entre outros.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Este equipamento possui excelente dissipação térmica e baixíssimo nível de ruído, sendo isento de manutenção preventiva constante. É a solução robusta para quem não pode comprometer a continuidade do serviço por falhas elétricas externas.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-40kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-50kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 50KVA",
        "preco" => "R$9,263.00 – R$13,650.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 50KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 50KVA</h1>

                <div class="produto-preco">
                    R$9,263.00 – R$13,650.00
                </div>

                <p class="produto-descricao-curta">O Transformador Isolador de 50KVA trifásico oferece potência elevada com isolamento galvânico total, sendo essencial para proteger grandes sistemas fotovoltaicos e plantas industriais. Ele elimina ruídos elétricos e garante que falhas na rede externa não comprometam a integridade dos seus equipamentos internos.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-50KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-50kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-50kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-50kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 50KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 50KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 50KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, tendo o primário isolado eletricamente do secundário, destinado principalmente a energia solar, sistemas de redes de iluminação e painéis, também se aplica a motores, máquinas, fornos e diversas outras aplicações industriais (conforme necessidade).</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 50KVA:</h2>
                    <p>Ar condicionado; Alimentar motores; Eletroeletrônicos em geral; Obras e construção civil; Geradores; Máquinas; Painéis; Entre outros.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Sua robustez permite suportar picos de partida de grandes motores e cargas não lineares. Além disso, o isolamento físico entre enrolamentos impede que descargas atmosféricas ou surtos de manobra atinjam diretamente a carga, servindo como uma barreira de segurança vital.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-50kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-60kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 60KVA",
        "preco" => "R$9,880.00 – R$14,560.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 60KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 60KVA</h1>

                <div class="produto-preco">
                    R$9,880.00 – R$14,560.00
                </div>

                <p class="produto-descricao-curta">Transformador Isolador de 60KVA trifásico, projetado para missões críticas que exigem alta potência e isolamento galvânico total. Ideal para grandes plantas industriais, hospitais e sistemas de energia solar de grande porte, garantindo que ruídos da rede e surtos de tensão não afetem a carga conectada.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-60KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-60kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-60kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-60kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 60KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 60KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 60KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, tendo o primário isolado eletricamente do secundário, destinado principalmente a energia solar, sistemas de redes de iluminação e painéis, também se aplica a motores, máquinas, fornos e diversas outras aplicações industriais (conforme necessidade).</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 60KVA:</h2>
                    <p>Ar condicionado; Alimentar motores; Eletroeletrônicos em geral; Obras e construção civil; Geradores; Máquinas; Painéis; Entre outros.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Este modelo de 60KVA é construído para suportar regimes de carga contínuos. A tecnologia de isolamento a seco elimina o risco de vazamentos de óleo e explosões, tornando-o seguro para ambientes com circulação de pessoas e cumprindo normas rigorosas de segurança.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-60kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-75kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 75KVA",
        "preco" => "R$11,362.00 – R$16,744.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 75KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 75KVA</h1>

                <div class="produto-preco">
                    R$11,362.00 – R$16,744.00
                </div>

                <p class="produto-descricao-curta">Transformador Isolador de 75KVA trifásico. Alta potência com isolamento galvânico total entre primário e secundário. É a solução perfeita para grandes plantas de energia solar e indústrias, garantindo que a carga esteja protegida contra interferências da rede elétrica externa e surtos de tensão.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-75KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-75kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-75kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-75kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 75KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 75KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 75KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, tendo o primário isolado eletricamente do secundário, destinado principalmente a energia solar, sistemas de redes de iluminação e painéis, também se aplica a motores, máquinas, fornos e diversas outras aplicações industriais (conforme necessidade).</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 75KVA:</h2>
                    <p>Ar condicionado; Alimentar motores; Eletroeletrônicos em geral; Obras e construção civil; Geradores; Máquinas; Painéis; Entre outros.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Equipamento robusto com alta suportabilidade a sobrecargas momentâneas. O isolamento galvânico atua como um filtro para harmônicos, protegendo a rede e melhorando a qualidade da energia entregue aos equipamentos críticos.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-75kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-90kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 90KVA",
        "preco" => "R$12,721.00 – R$18,746.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 90KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 90KVA</h1>

                <div class="produto-preco">
                    R$12,721.00 – R$18,746.00
                </div>

                <p class="produto-descricao-curta">Transformador Isolador de 90KVA trifásico. Desenvolvido para oferecer máxima confiabilidade em sistemas de grande porte, proporcionando isolamento galvânico total. Essencial para proteger equipamentos industriais complexos e infraestruturas de TI contra distúrbios elétricos severos e garantir a estabilidade da rede.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-90KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-90kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-90kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-90kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 90KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 90KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 90KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, tendo o primário isolado eletricamente do secundário, destinado principalmente a energia solar, sistemas de redes de iluminação e painéis, também se aplica a motores, máquinas, fornos e diversas outras aplicações industriais (conforme necessidade).</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 90KVA:</h2>
                    <p>Ar condicionado; Alimentar motores; Eletroeletrônicos em geral; Obras e construção civil; Geradores; Máquinas; Painéis; Entre outros.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Possui alta resistência mecânica e excelente isolação térmica. Por ser um transformador a seco, oferece baixo risco de incêndio e é ecologicamente correto, sendo ideal para instalação em subestações abrigadas ou salas de máquinas sem ventilação forçada constante.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-90kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-100kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 100KVA",
        "preco" => "R$14,203.00 – R$20,930.00",
        'content' => '<section id="produto-principal">
        <div class="container">
            <div class="flex">

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="produto-galeria">
                        <div class="produto-imagem-principal">
                            <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 100KVA" id="img-principal">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">

                    <h1 class="produto-nome">Transformador Isolador 100KVA</h1>

                    <div class="produto-preco">
                        R$14,203.00 – R$20,930.00
                    </div>

                    <p class="produto-descricao-curta">O Transformador Isolador de 100KVA trifásico representa o ápice da proteção para sistemas elétricos de grande escala. Com isolamento galvânico total, ele é a barreira definitiva contra surtos e ruídos elétricos, garantindo que grandes infraestruturas industriais e usinas solares operem com máxima estabilidade e segurança.</p>

                    <div class="produto-opcoes">
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Entrada/Saída:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="220-380/220V">220-380/220V</option>
                                    <option value="440-220/127V">440-220/127V</option>
                                </select>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 col-md-3">
                                <label class="opcao-label">Proteção:</label>
                            </div>
                            <div class="col-8 col-md-9">
                                <select class="form-select opcao-select">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                    <option value="IP00">IP00</option>
                                    <option value="IP21">IP21</option>
                                    <option value="IP54">IP54</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                        <a href="#" class="button">
                            <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                        </a>
                    </div>

                    <div class="produto-meta mt-4">
                        <p><strong>SKU:</strong> TI-100KVA</p>
                        <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                    </div>

                </div>
            </div>
        </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-100kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-100kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-100kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 100KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 100KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 100KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, tendo o primário isolado eletricamente do secundário, destinado principalmente a energia solar, sistemas de redes de iluminação e painéis, também se aplica a motores, máquinas, fornos e diversas outras aplicações industriais (conforme necessidade).</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 100KVA:</h2>
                    <p>Ar condicionado; Alimentar motores; Eletroeletrônicos em geral; Obras e construção civil; Geradores; Máquinas; Painéis; Entre outros.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Este transformador de alta potência é projetado para minimizar as perdas por efeito Joule e garantir uma eficiência energética superior. O isolamento a seco Classe F permite que o equipamento suporte condições térmicas rigorosas sem comprometer sua integridade, eliminando riscos de vazamento comuns em modelos a óleo.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-100kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-125kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 125KVA",
        "preco" => "R$16,673.00 – R$24,570.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 125KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 125KVA</h1>

                <div class="produto-preco">
                    R$16,673.00 – R$24,570.00
                </div>

                <p class="produto-descricao-curta">O Transformador Isolador de 125KVA é um equipamento de alta performance voltado para infraestruturas críticas. Ele assegura o isolamento galvânico entre a entrada e a saída, eliminando harmônicos e protegendo grandes cargas contra distúrbios da rede elétrica externa, sendo ideal para indústrias e usinas solares de grande porte.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-125KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-125kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-125kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-125kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 125KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 125KVA:</h2>
                    <p>– Bobina fabricada em alumínio de alta pureza, revestida por material isolante premium e impregnadas em Verniz Poliéster sob vácuo;</p>
                    <p>– Núcleo magnético de alta eficiência composto por lâminas de aço silício de grão orientado.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 125KVA:</h2>
                    <p>– Sistemas de energia solar de alta potência, alimentação de data centers, infraestrutura hospitalar, e proteção de maquinário industrial pesado que requer separação elétrica total da rede de distribuição.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 125KVA:</h2>
                    <p>Sistemas de climatização central; Motores industriais de grande porte; Equipamentos de diagnóstico médico; Grandes racks de servidores; Inversores solares centrais.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Com 125KVA de potência, este isolador minimiza o risco de queima de componentes eletrônicos sensíveis por transientes de rede. Sua construção a seco o torna seguro para ambientes internos, sem o risco de contaminação ou incêndio associado ao óleo.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-125kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-150kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 150KVA",
        "preco" => "R$18,772.00 – R$27,664.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 150KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 150KVA</h1>

                <div class="produto-preco">
                    R$18,772.00 – R$27,664.00
                </div>

                <p class="produto-descricao-curta">O Transformador Isolador de 150KVA é uma solução de altíssima potência projetada para proteger infraestruturas críticas. Com isolamento galvânico total, ele blinda sistemas industriais e grandes usinas de energia solar contra distúrbios da rede, garantindo que a energia entregue seja limpa e estável.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-150KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-150kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-150kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-150kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 150KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 150KVA:</h2>
                    <p>– Bobina fabricada em alumínio de alta condutividade, com isolação reforçada e impregnação a vácuo em Verniz Poliéster;</p>
                    <p>– Núcleo magnético de baixa perda em chapas de silício de grão orientado.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 150KVA:</h2>
                    <p>– Ideal para sistemas fotovoltaicos de grande porte, indústrias petroquímicas, hospitais, data centers e grandes centros comerciais que necessitam de isolamento total da rede de alimentação.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 150KVA:</h2>
                    <p>Grandes centrais de ar-condicionado (Chillers); Inversores solares de alta potência; Maquinário pesado de linha de produção; Equipamentos de ressonância magnética; Sistemas de TI centralizados.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Sendo um transformador a seco, ele oferece segurança superior contra incêndios e facilita a manutenção. O isolamento galvânico é a chave para evitar a propagação de falhas elétricas, protegendo o investimento em eletrônicos de alta tecnologia.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-150kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-200kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 200KVA",
        "preco" => "R$24,083.00 – R$35,490.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 200KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 200KVA</h1>

                <div class="produto-preco">
                    R$24,083.00 – R$35,490.00
                </div>

                <p class="produto-descricao-curta">O Transformador Isolador de 200KVA é uma solução de potência massiva, projetada para as mais exigentes infraestruturas industriais e de energia renovável. Com isolamento galvânico completo, ele oferece a segurança necessária para grandes usinas solares e parques fabris, eliminando interferências magnéticas e protegendo contra transientes da rede externa.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-200KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-200kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-200kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-200kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 200KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 200KVA:</h2>
                    <p>– Bobinas produzidas em alumínio de alta condutividade com isolamento reforçado e tratamento de impregnação a vácuo;</p>
                    <p>– Núcleo magnético montado com chapas de aço silício de grão orientado para máxima eficiência energética.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 200KVA:</h2>
                    <p>– Essencial para grandes centros de processamento de dados (Data Centers), sistemas de energia solar em escala industrial, hospitais de grande porte e plantas fabris que utilizam automação complexa e motores de alta potência.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 200KVA:</h2>
                    <p>Sistemas centrais de refrigeração industrial; Inversores solares de alta capacidade; Linhas de montagem automatizadas; Servidores de alta densidade; Equipamentos hospitalares de suporte à vida.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Este equipamento é projetado para operar em regime contínuo, apresentando alta durabilidade e baixas perdas térmicas. O isolamento galvânico protege o sistema contra harmônicos de rede, aumentando a vida útil dos equipamentos conectados e reduzindo custos com paradas não programadas.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-200kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-300kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 300KVA",
        "preco" => "R$35,692.00 – R$52,598.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 300KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 300KVA</h1>

                <div class="produto-preco">
                    R$35,692.00 – R$52,598.00
                </div>

                <p class="produto-descricao-curta">O Transformador Isolador de 300KVA é uma unidade de potência pesada, desenvolvida para sustentar operações de larga escala em complexos industriais e grandes plantas de geração renovável. Com isolamento galvânico robusto, ele atua como uma barreira intransponível contra ruídos de rede e picos de tensão, assegurando a integridade de sistemas de automação e inversores centrais.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-300KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-300kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-300kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-300kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 300KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 300KVA:</h2>
                    <p>– Enrolamentos em alumínio de alta pureza com isolação de alta performance e impregnação sob vácuo;</p>
                    <p>– Núcleo de aço silício com baixas perdas por histerese, garantindo alta eficiência mesmo em cargas elevadas.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 300KVA:</h2>
                    <p>– Grandes indústrias de manufatura, usinas fotovoltaicas de grande porte, subestações de shoppings e centros comerciais, além de sistemas críticos de saúde que exigem separação total da rede da concessionária.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 300KVA:</h2>
                    <p>Maquinário pesado de fundição ou usinagem; Grandes centrais de processamento de dados; Inversores solares de grande escala; Equipamentos médicos complexos; Sistemas de iluminação pública centralizados.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Dada a sua enorme capacidade, o modelo de 300KVA é projetado com foco total na estabilidade térmica. A tecnologia a seco elimina a necessidade de contenção de óleo, reduzindo custos de infraestrutura e riscos ambientais, enquanto o isolamento galvânico garante que distúrbios elétricos não se propaguem entre os circuitos.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-300kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-500kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 500KVA",
        "preco" => "R$43,472.00 – R$64,064.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 500KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 500KVA</h1>

                <div class="produto-preco">
                    R$43,472.00 – R$64,064.00
                </div>

                <p class="produto-descricao-curta">O Transformador Isolador de 500KVA é uma unidade de potência extrema, projetada para as mais exigentes demandas de infraestrutura. Ele oferece isolamento galvânico total, protegendo grandes complexos industriais, data centers de grande escala e usinas de geração de energia renovável contra distúrbios elétricos críticos e garantindo a máxima continuidade operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-500KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-500kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-500kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-500kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 500KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 500KVA:</h2>
                    <p>– Enrolamentos em alumínio de alta condutividade com isolação de classe superior e impregnação vácuo-pressão (VPI);</p>
                    <p>– Núcleo magnético de alto desempenho em aço silício de grão orientado (GO), minimizando perdas e ruído acústico.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 500KVA:</h2>
                    <p>– Destinado a subestações de grandes indústrias, parques de energia solar de grande porte (Utility Scale), sistemas críticos de data centers Tier III/IV e alimentação de cargas hospitalares de alta complexidade.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 500KVA:</h2>
                    <p>Usinas solares centrais; Grandes parques de servidores; Equipamentos de manufatura pesada; Chillers de alta capacidade; Subestações de grandes empreendimentos comerciais.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Com uma capacidade de 500KVA, este transformador é construído para operar sob condições de carga severas com alta eficiência térmica. O isolamento galvânico blinda o sistema contra transientes de rede, harmônicos e ruídos eletromagnéticos, protegendo o capital investido em tecnologia sensível.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-500kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-750kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 750KVA",
        "preco" => "R$68.900,00 – R$98.540,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 750KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 750KVA</h1>

                <div class="produto-preco">
                    R$56,810.00 – R$83,720.00
                </div>

                <p class="produto-descricao-curta">O Transformador Isolador de 750KVA é uma solução de energia de grande escala, projetada para as mais robustas demandas da infraestrutura moderna. Com isolamento galvânico total, este equipamento blinda sistemas de altíssima potência contra harmônicos e transientes, sendo o componente central para a estabilidade de grandes parques industriais e centrais de geração renovável.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-750KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-750kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-750kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-750kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 750KVA;</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 750KVA:</h2>
                    <p>– Enrolamentos em alumínio de alta pureza com isolação dielétrica de alta performance e sistema de impregnação VPI (Vacuum Pressure Impregnation);</p>
                    <p>– Núcleo magnético fabricado em aço silício de grão orientado (GO) com tratamento para redução de ruídos vibratórios.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 750KVA:</h2>
                    <p>– Utilizado em subestações de alta demanda como plantas siderúrgicas, infraestruturas de telecomunicações massivas, grandes hospitais universitários e fazendas solares de escala governamental que exigem separação elétrica crítica.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 750KVA:</h2>
                    <p>Usinas solares centrais; Centrais de processamento de dados Tier IV; Máquinas de mineração e britagem; Chillers de escala distrital; Estações de carregamento rápido para frotas elétricas.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Com impressionantes 750KVA, este transformador a seco elimina os riscos ambientais e de incêndio de modelos a óleo. O isolamento galvânico entre os circuitos primário e secundário é vital para prevenir a propagação de falhas e garantir que equipamentos eletrônicos ultra-sensíveis operem sem a interferência de distúrbios da rede concessionária.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-750kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-1000kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 1000KVA",
        "preco" => "Produto Indisponível",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 1000KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 1000KVA</h1>
                    Produto fora de estoque e indisponível
                <div class="produto-preco">
                </div>

                <p class="produto-descricao-curta">O Transformador Isolador de 1000KVA (1 Megavolt-Ampère) é uma solução de potência monumental para infraestruturas críticas de grande porte. Projetado com isolamento galvânico total, ele é o coração de sistemas que exigem máxima confiabilidade e proteção contra surtos massivos, sendo indispensável para grandes indústrias, datacenters Tier IV e usinas solares de escala utilitária.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-1000KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-1000kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-1000kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-1000kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 1000KVA (1 MVA);</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 1000KVA:</h2>
                    <p>– Enrolamentos robustos em alumínio de alta condutividade com isolação dielétrica premium reforçada;</p>
                    <p>– Núcleo magnético de última geração em aço silício de grão orientado (GO) para redução drástica de perdas ferromagnéticas.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 1000KVA:</h2>
                    <p>– Centros de mineração de dados, parques industriais pesados, grandes complexos hoteleiros, infraestruturas aeroportuárias e usinas solares massivas que requerem isolamento total para proteção de inversores e automação crítica.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 1000KVA:</h2>
                    <p>Usinas fotovoltaicas de grande porte; Datacenters globais; Siderúrgicas; Equipamentos de ressonância e diagnóstico de alta densidade; Sistemas de ventilação e climatização de distritos industriais.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Com 1000KVA de potência, este modelo a seco oferece uma alternativa segura e ecológica aos transformadores a óleo, eliminando riscos de vazamento e explosão. O isolamento galvânico protege a infraestrutura contra harmônicos de alta frequência e transientes de rede, maximizando a vida útil de todo o ecossistema elétrico conectado.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-1000kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-1500kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 1500KVA",
        "preco" => "Produto Indisponível",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 1500KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 1500KVA</h1>

                <div class="produto-preco">
                    Produto fora de estoque e indisponível
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Transformador Isolador de 1500 kVA, uma solução robusta para proteger seus sistemas elétricos. Com capacidade de isolar circuitos e prevenir sobrecargas, garante a segurança de equipamentos sensíveis. Adquira confiabilidade e tranquilidade na distribuição de energia. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

               <!--<div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>-->

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-1500KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-1500kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-1500kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-1500kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 1500KVA (1 MVA);</li>
                        <li>Tensões: 220-380/220V;</li> 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 1500KVA:</h2>
                    <p>– Enrolamentos robustos em alumínio de alta condutividade com isolação dielétrica premium reforçada;</p>
                    <p>– Núcleo magnético de última geração em aço silício de grão orientado (GO) para redução drástica de perdas ferromagnéticas.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 1500KVA:</h2>
                    <p>– Centros de mineração de dados, parques industriais pesados, grandes complexos hoteleiros, infraestruturas aeroportuárias e usinas solares massivas que requerem isolamento total para proteção de inversores e automação crítica.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 1500KVA:</h2>
                    <p>Usinas fotovoltaicas de grande porte; Datacenters globais; Siderúrgicas; Equipamentos de ressonância e diagnóstico de alta densidade; Sistemas de ventilação e climatização de distritos industriais.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Com 1500KVA de potência, este modelo a seco oferece uma alternativa segura e ecológica aos transformadores a óleo, eliminando riscos de vazamento e explosão. O isolamento galvânico protege a infraestrutura contra harmônicos de alta frequência e transientes de rede, maximizando a vida útil de todo o ecossistema elétrico conectado.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-1500kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-2000kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 2000KVA",
        "preco" => "Produto Indisponível",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 2000KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 2000KVA</h1>

                <div class="produto-preco">
                    Produto fora de estoque e indisponível
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Transformador Isolador de 2000 kVA, uma solução robusta para proteger seus sistemas elétricos. Com capacidade de isolar circuitos e prevenir sobrecargas, garante a segurança de equipamentos sensíveis. Adquira confiabilidade e tranquilidade na distribuição de energia. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

               <!--<div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>-->

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-2000KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-2000kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-2000kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-2000kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 2000KVA (1 MVA);</li>
                        <li>Tensões: 220-380/220V;</li> 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 2000KVA:</h2>
                    <p>– Enrolamentos robustos em alumínio de alta condutividade com isolação dielétrica premium reforçada;</p>
                    <p>– Núcleo magnético de última geração em aço silício de grão orientado (GO) para redução drástica de perdas ferromagnéticas.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 2000KVA:</h2>
                    <p>– Centros de mineração de dados, parques industriais pesados, grandes complexos hoteleiros, infraestruturas aeroportuárias e usinas solares massivas que requerem isolamento total para proteção de inversores e automação crítica.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 2000KVA:</h2>
                    <p>Usinas fotovoltaicas de grande porte; Datacenters globais; Siderúrgicas; Equipamentos de ressonância e diagnóstico de alta densidade; Sistemas de ventilação e climatização de distritos industriais.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Com 2000KVA de potência, este modelo a seco oferece uma alternativa segura e ecológica aos transformadores a óleo, eliminando riscos de vazamento e explosão. O isolamento galvânico protege a infraestrutura contra harmônicos de alta frequência e transientes de rede, maximizando a vida útil de todo o ecossistema elétrico conectado.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-2000kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-2500kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 2500KVA",
        "preco" => "Produto Indisponível",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 2500KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 2500KVA</h1>

                <div class="produto-preco">
                    Produto fora de estoque e indisponível
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Transformador Isolador de 2500 kVA, uma solução robusta para proteger seus sistemas elétricos. Com capacidade de isolar circuitos e prevenir sobrecargas, garante a segurança de equipamentos sensíveis. Adquira confiabilidade e tranquilidade na distribuição de energia. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

               <!--<div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>-->

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-2500KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-2500kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-2500kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-2500kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 2500KVA (1 MVA);</li>
                        <li>Tensões: 220-380/220V;</li> 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 2500KVA:</h2>
                    <p>– Enrolamentos robustos em alumínio de alta condutividade com isolação dielétrica premium reforçada;</p>
                    <p>– Núcleo magnético de última geração em aço silício de grão orientado (GO) para redução drástica de perdas ferromagnéticas.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 2500KVA:</h2>
                    <p>– Centros de mineração de dados, parques industriais pesados, grandes complexos hoteleiros, infraestruturas aeroportuárias e usinas solares massivas que requerem isolamento total para proteção de inversores e automação crítica.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 2500KVA:</h2>
                    <p>Usinas fotovoltaicas de grande porte; Datacenters globais; Siderúrgicas; Equipamentos de ressonância e diagnóstico de alta densidade; Sistemas de ventilação e climatização de distritos industriais.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Com 2500KVA de potência, este modelo a seco oferece uma alternativa segura e ecológica aos transformadores a óleo, eliminando riscos de vazamento e explosão. O isolamento galvânico protege a infraestrutura contra harmônicos de alta frequência e transientes de rede, maximizando a vida útil de todo o ecossistema elétrico conectado.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-2500kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "transformador-isolador-3000kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "Transformador Isolador 3000KVA",
        "preco" => "Produto Indisponível",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="Transformador Isolador 3000KVA" id="img-principal">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Isolador 3000KVA</h1>

                <div class="produto-preco">
                    Produto fora de estoque e indisponível
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Transformador Isolador de 3000kVA, uma solução robusta para proteger seus sistemas elétricos. Com capacidade de isolar circuitos e prevenir sobrecargas, garante a segurança de equipamentos sensíveis. Adquira confiabilidade e tranquilidade na distribuição de energia. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

               <!--<div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220-380/220V">220-380/220V</option>
                                <option value="440-220/127V">440-220/127V</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>-->

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TI-3000KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR ISOLADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-isolador-3000kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-isolador-3000kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-isolador-3000kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>Potência: Transformador Isolador 3000KVA (1 MVA);</li>
                        <li>Tensões: 220-380/220V; 440-220/127V;</li>
                        <li>Frequência: 60 Hz;</li>
                        <li>Grupo de Ligação: YnYn0 (Estrela Estrela);</li>
                        <li>Classe de Isolamento: 1,1 KV;</li>
                        <li>Fator de Potência: K1;</li>
                        <li>Classe de Temperatura: F (155°);</li>
                        <li>Número de Fases: Trifásico;</li>
                        <li>Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>Instalação: Abrigada/Interna;</li>
                        <li>Refrigeração: Ar (A seco);</li>
                        <li>Enrolamento: Alumínio;</li>
                        <li>2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR ISOLADOR 3000KVA:</h2>
                    <p>– Enrolamentos robustos em alumínio de alta condutividade com isolação dielétrica premium reforçada;</p>
                    <p>– Núcleo magnético de última geração em aço silício de grão orientado (GO) para redução drástica de perdas ferromagnéticas.</p>

                    <h2>3 – APLICAÇÕES DO TRANSFORMADOR ISOLADOR 3000KVA:</h2>
                    <p>– Centros de mineração de dados, parques industriais pesados, grandes complexos hoteleiros, infraestruturas aeroportuárias e usinas solares massivas que requerem isolamento total para proteção de inversores e automação crítica.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM TRANSFORMADOR ISOLADOR 3000KVA:</h2>
                    <p>Usinas fotovoltaicas de grande porte; Datacenters globais; Siderúrgicas; Equipamentos de ressonância e diagnóstico de alta densidade; Sistemas de ventilação e climatização de distritos industriais.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS:</h2>
                    <p>Com 3000KVA de potência, este modelo a seco oferece uma alternativa segura e ecológica aos transformadores a óleo, eliminando riscos de vazamento e explosão. O isolamento galvânico protege a infraestrutura contra harmônicos de alta frequência e transientes de rede, maximizando a vida útil de todo o ecossistema elétrico conectado.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-isolador-3000kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220-380/220V, 440-220/127V</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-pedestal-225kva" => [
        "imagem" => "transformador_pedestal_225kva",
        "nome" => "Transformador Pedestal 225KVA",
        "preco" => "R$75.331,00 – R$101.697,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_pedestal_225kva.webp" alt="Transformador Pedestal 225KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Pedestal 225KVA</h1>

                <div class="produto-preco">
                    R$75.331,00 – R$101.697,00
                </div>

                <p class="produto-descricao-curta">Apresentamos o nosso Transformador de Pedestal (Pad-Mounted) de 225KVA, solução eficiente e segura para distribuição de energia. Proteção contra condições ambientais, acesso facilitado para manutenção e versatilidade de aplicação. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAOP-225KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-225kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-pedestal-225kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-225kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: Transformador Pedestal (Pad-Mounted) de 225KVA;</li>
                        <li>– Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>– Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Ligação do Primário: Delta;</li>
                        <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>– Método de resfriamento: ONAN;</li>
                        <li>– Grau de Proteção: IP54;</li>
                        <li>– Regime de serviço: Continuo 100%;</li>
                        <li>– Instalação: Ao Tempo;</li>
                        <li>– Pintura de acabamento na cor Verde Munsell;</li>
                        <li>– Orelhas de suspensão;</li>
                        <li>– Placa de Identificação;</li>
                        <li>– Meios de Aterramento;</li>
                        <li>– Nível de Óleo tipo coluna;</li>
                        <li>– Registro Inferior e Superior;</li>
                        <li>– Válvula de alívio de pressão sem contato;</li>
                        <li>– Terminais de BT;</li>
                        <li>– Base de Fixação;</li>
                        <li>– Porta de AT com trava na BT;</li>
                        <li>– Porta de BT com chave;</li>
                        <li>– Fusível Baioneta;</li>
                        <li>– Chave Comutadora com acionamento externo;</li>
                        <li>– Fusível Limitador de corrente;</li>
                        <li>– Fusível de expulsão em Baioneta;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 225KVA:</h2>
                    <p>A construção do transformador pedestal envolve a montagem de um transformador elétrico sobre uma base elevada, conhecida como pedestal. O transformador, composto por bobinas primárias e secundárias, é instalado em um invólucro resistente a intempéries.</p>
                    <p>Essa configuração elevada protege o transformador contra fatores ambientais, como umidade e poeira, além de permitir fácil acesso para manutenção e inspeções.</p>
                    <p>O transformador pedestal é uma solução prática para distribuição de energia em áreas urbanas e locais onde o espaço é limitado. Sua construção visa a eficiência, segurança e durabilidade, garantindo um fornecimento de energia confiável.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 225KVA:</h2>
                    <p>O transformador pedestal é aplicado em diversas situações onde é necessário distribuir energia elétrica de maneira confiável e eficiente. Ele é comumente usado em áreas urbanas, parques, praças, condomínios, edifícios comerciais e residenciais, entre outros. Sua configuração elevada oferece proteção contra fatores ambientais e facilita a manutenção. Com sua versatilidade, o transformador pedestal é uma solução prática e segura para distribuição de energia em locais de diferentes tamanhos e necessidades.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 225KVA PODE SER APLICADO:</h2>
                    <p>O transformador pedestal encontra aplicação em várias áreas onde a distribuição de energia elétrica é necessária. Ele é comumente utilizado em ambientes urbanos, parques, praças, áreas residenciais e comerciais, condomínios, instalações industriais e locais de eventos.</p>
                    <p>Sua configuração elevada oferece proteção contra condições ambientais adversas e facilita o acesso para manutenção. Com sua versatilidade e adaptabilidade, o transformador pedestal é uma solução confiável e eficiente para suprir demandas de energia em diferentes contextos.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 225KVA:</h2>
                    <p>O transformador pedestal possui várias características notáveis:</p>

                    <p><strong>Proteção Ambiental:</strong> Sua configuração elevada o protege contra umidade, poeira e outros elementos ambientais, garantindo a integridade das partes internas.</p>

                    <p><strong>Acesso Fácil:</strong> A instalação em um pedestal facilita o acesso para manutenção, inspeção e reparos, reduzindo o tempo de inatividade.</p>

                    <p><strong>Espaço Limitado:</strong> É ideal para áreas com restrições de espaço, como centros urbanos, onde a instalação subterrânea ou em postes pode ser inviável.</p>

                    <p><strong>Segurança:</strong> Sua construção robusta oferece segurança adicional, protegendo o transformador contra vandalismo e danos acidentais.</p>

                    <p><strong>Variedade de Aplicações:</strong> É aplicável em diversos contextos, desde áreas residenciais e comerciais até parques e instalações industriais.</p>

                    <p><strong>Flexibilidade:</strong> Pode ser adaptado para diferentes níveis de carga elétrica e voltagens, atendendo a necessidades específicas.</p>

                    <p><strong>Instalação Rápida:</strong> A montagem do transformador pedestal é relativamente rápida, minimizando interrupções no fornecimento de energia.</p>

                    <p><strong>Redução de Custos:</strong> A facilidade de manutenção e a durabilidade do transformador pedestal podem resultar em custos operacionais mais baixos ao longo do tempo.</p>

                    <p>Essas características tornam o transformador pedestal uma opção prática e versátil para distribuição de energia, especialmente em locais onde o espaço e a acessibilidade são importantes considerações.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-225kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-pedestal-300kva" => [
        "imagem" => "transformador_pedestal_300kva",
        "nome" => "Transformador Pedestal 300KVA",
        "preco" => "R$86.790,00 – R$117.167,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_pedestal_300kva.webp" alt="Transformador Pedestal 300KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Pedestal 300KVA</h1>

                <div class="produto-preco">
                    R$86.790,00 – R$117.167,00
                </div>

                <p class="produto-descricao-curta">Apresentamos o nosso Transformador de Pedestal (Pad-Mounted) de 300KVA, solução eficiente e segura para distribuição de energia. Proteção contra condições ambientais, acesso facilitado para manutenção e versatilidade de aplicação. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAOP-300KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-300kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-pedestal-300kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-300kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: Transformador Pedestal (Pad-Mounted) de 300KVA;</li>
                        <li>– Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>– Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Ligação do Primário: Delta;</li>
                        <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>– Método de resfriamento: ONAN;</li>
                        <li>– Grau de Proteção: IP54;</li>
                        <li>– Regime de serviço: Continuo 100%;</li>
                        <li>– Instalação: Ao Tempo;</li>
                        <li>– Pintura de acabamento na cor Verde Munsell;</li>
                        <li>– Orelhas de suspensão;</li>
                        <li>– Placa de Identificação;</li>
                        <li>– Meios de Aterramento;</li>
                        <li>– Nível de Óleo tipo coluna;</li>
                        <li>– Registro Inferior e Superior;</li>
                        <li>– Válvula de alívio de pressão sem contato;</li>
                        <li>– Terminais de BT;</li>
                        <li>– Base de Fixação;</li>
                        <li>– Porta de AT com trava na BT;</li>
                        <li>– Porta de BT com chave;</li>
                        <li>– Fusível Baioneta;</li>
                        <li>– Chave Comutadora com acionamento externo;</li>
                        <li>– Fusível Limitador de corrente;</li>
                        <li>– Fusível de expulsão em Baioneta;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 300KVA:</h2>
                    <p>A construção do transformador pedestal envolve a montagem de um transformador elétrico sobre uma base elevada, conhecida como pedestal. O transformador, composto por bobinas primárias e secundárias, é instalado em um invólucro resistente a intempéries.</p>
                    <p>Essa configuração elevada protege o transformador contra fatores ambientais, como umidade e poeira, além de permitir fácil acesso para manutenção e inspeções.</p>
                    <p>O transformador pedestal é uma solução prática para distribuição de energia em áreas urbanas e locais onde o espaço é limitado. Sua construção visa a eficiência, segurança e durabilidade, garantindo um fornecimento de energia confiável.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 300KVA:</h2>
                    <p>O transformador pedestal é aplicado em diversas situações onde é necessário distribuir energia elétrica de maneira confiável e eficiente. Ele é comumente usado em áreas urbanas, parques, praças, condomínios, edifícios comerciais e residenciais, entre outros. Sua configuração elevada oferece proteção contra fatores ambientais e facilita a manutenção. Com sua versatilidade, o transformador pedestal é uma solução prática e segura para distribuição de energia em locais de diferentes tamanhos e necessidades.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 300KVA PODE SER APLICADO:</h2>
                    <p>O transformador pedestal encontra aplicação em várias áreas onde a distribuição de energia elétrica é necessária. Ele é comumente utilizado em ambientes urbanos, parques, praças, áreas residenciais e comerciais, condomínios, instalações industriais e locais de eventos.</p>
                    <p>Sua configuração elevada oferece proteção contra condições ambientais adversas e facilita o acesso para manutenção. Com sua versatilidade e adaptabilidade, o transformador pedestal é uma solução confiável e eficiente para suprir demandas de energia em diferentes contextos.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 300KVA:</h2>
                    <p>O transformador pedestal possui várias características notáveis:</p>

                    <p><strong>Proteção Ambiental:</strong> Sua configuração elevada o protege contra umidade, poeira e outros elementos ambientais, garantindo a integridade das partes internas.</p>

                    <p><strong>Acesso Fácil:</strong> A instalação em um pedestal facilita o acesso para manutenção, inspeção e reparos, reduzindo o tempo de inatividade.</p>

                    <p><strong>Espaço Limitado:</strong> É ideal para áreas com restrições de espaço, como centros urbanos, onde a instalação subterrânea ou em postes pode ser inviável.</p>

                    <p><strong>Segurança:</strong> Sua construção robusta oferece segurança adicional, protegendo o transformador contra vandalismo e danos acidentais.</p>

                    <p><strong>Variedade de Aplicações:</strong> É aplicável em diversos contextos, desde áreas residenciais e comerciais até parques e instalações industriais.</p>

                    <p><strong>Flexibilidade:</strong> Pode ser adaptado para diferentes níveis de carga elétrica e voltagens, atendendo a necessidades específicas.</p>

                    <p><strong>Instalação Rápida:</strong> A montagem do transformador pedestal é relativamente rápida, minimizando interrupções no fornecimento de energia.</p>

                    <p><strong>Redução de Custos:</strong> A facilidade de manutenção e a durabilidade do transformador pedestal podem resultar em custos operacionais mais baixos ao longo do tempo.</p>

                    <p>Essas características tornam o transformador pedestal uma opção prática e versátil para distribuição de energia, especialmente em locais onde o espaço e a acessibilidade são importantes considerações.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-300kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-pedestal-500kva" => [
        "imagem" => "transformador_pedestal_500kva",
        "nome" => "Transformador Pedestal 500KVA",
        "preco" => "R$101.718,00 – R$137.320,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_pedestal_500kva.webp" alt="Transformador Pedestal 500KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Pedestal 500KVA</h1>

                <div class="produto-preco">
                    R$101.718,00 – R$137.320,00
                </div>

                <p class="produto-descricao-curta">Apresentamos o nosso Transformador de Pedestal (Pad-Mounted) de 500KVA, solução eficiente e segura para distribuição de energia. Proteção contra condições ambientais, acesso facilitado para manutenção e versatilidade de aplicação. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAOP-500KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-500kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-pedestal-500kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-500kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: Transformador Pedestal (Pad-Mounted) de 500KVA;</li>
                        <li>– Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>– Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Ligação do Primário: Delta;</li>
                        <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>– Método de resfriamento: ONAN;</li>
                        <li>– Grau de Proteção: IP54;</li>
                        <li>– Regime de serviço: Continuo 100%;</li>
                        <li>– Instalação: Ao Tempo;</li>
                        <li>– Pintura de acabamento na cor Verde Munsell;</li>
                        <li>– Orelhas de suspensão;</li>
                        <li>– Placa de Identificação;</li>
                        <li>– Meios de Aterramento;</li>
                        <li>– Nível de Óleo tipo coluna;</li>
                        <li>– Registro Inferior e Superior;</li>
                        <li>– Válvula de alívio de pressão sem contato;</li>
                        <li>– Terminais de BT;</li>
                        <li>– Base de Fixação;</li>
                        <li>– Porta de AT com trava na BT;</li>
                        <li>– Porta de BT com chave;</li>
                        <li>– Fusível Baioneta;</li>
                        <li>– Chave Comutadora com acionamento externo;</li>
                        <li>– Fusível Limitador de corrente;</li>
                        <li>– Fusível de expulsão em Baioneta;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 500KVA:</h2>
                    <p>A construção do transformador pedestal envolve a montagem de um transformador elétrico sobre uma base elevada, conhecida como pedestal. O transformador, composto por bobinas primárias e secundárias, é instalado em um invólucro resistente a intempéries.</p>
                    <p>Essa configuração elevada protege o transformador contra fatores ambientais, como umidade e poeira, além de permitir fácil acesso para manutenção e inspeções.</p>
                    <p>O transformador pedestal é uma solução prática para distribuição de energia em áreas urbanas e locais onde o espaço é limitado. Sua construção visa a eficiência, segurança e durabilidade, garantindo um fornecimento de energia confiável.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 500KVA:</h2>
                    <p>O transformador pedestal é aplicado em diversas situações onde é necessário distribuir energia elétrica de maneira confiável e eficiente. Ele é comumente usado em áreas urbanas, parques, praças, condomínios, edifícios comerciais e residenciais, entre outros. Sua configuração elevada oferece proteção contra fatores ambientais e facilita a manutenção. Com sua versatilidade, o transformador pedestal é uma solução prática e segura para distribuição de energia em locais de diferentes tamanhos e necessidades.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 500KVA PODE SER APLICADO:</h2>
                    <p>O transformador pedestal encontra aplicação em várias áreas onde a distribuição de energia elétrica é necessária. Ele é comumente utilizado em ambientes urbanos, parques, praças, áreas residenciais e comerciais, condomínios, instalações industriais e locais de eventos.</p>
                    <p>Sua configuração elevada oferece proteção contra condições ambientais adversas e facilita o acesso para manutenção. Com sua versatilidade e adaptabilidade, o transformador pedestal é uma solução confiável e eficiente para suprir demandas de energia em diferentes contextos.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 500KVA:</h2>
                    <p>O transformador pedestal possui várias características notáveis:</p>

                    <p><strong>Proteção Ambiental:</strong> Sua configuração elevada o protege contra umidade, poeira e outros elementos ambientais, garantindo a integridade das partes internas.</p>

                    <p><strong>Acesso Fácil:</strong> A instalação em um pedestal facilita o acesso para manutenção, inspeção e reparos, reduzindo o tempo de inatividade.</p>

                    <p><strong>Espaço Limitado:</strong> É ideal para áreas com restrições de espaço, como centros urbanos, onde a instalação subterrânea ou em postes pode ser inviável.</p>

                    <p><strong>Segurança:</strong> Sua construção robusta oferece segurança adicional, protegendo o transformador contra vandalismo e danos acidentais.</p>

                    <p><strong>Variedade de Aplicações:</strong> É aplicável em diversos contextos, desde áreas residenciais e comerciais até parques e instalações industriais.</p>

                    <p><strong>Flexibilidade:</strong> Pode ser adaptado para diferentes níveis de carga elétrica e voltagens, atendendo a necessidades específicas.</p>

                    <p><strong>Instalação Rápida:</strong> A montagem do transformador pedestal é relativamente rápida, minimizando interrupções no fornecimento de energia.</p>

                    <p><strong>Redução de Custos:</strong> A facilidade de manutenção e a durabilidade do transformador pedestal podem resultar em custos operacionais mais baixos ao longo do tempo.</p>

                    <p>Essas características tornam o transformador pedestal uma opção prática e versátil para distribuição de energia, especialmente em locais onde o espaço e a acessibilidade são importantes considerações.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-500kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-pedestal-750kva" => [
        "imagem" => "transformador_pedestal_750kva",
        "nome" => "Transformador Pedestal 750KVA",
        "preco" => "R$128.425,00 – R$173.373,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_pedestal_750kva.webp" alt="Transformador Pedestal 750KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Pedestal 750KVA</h1>

                <div class="produto-preco">
                    R$128.425,00 – R$173.373,00
                </div>

                <p class="produto-descricao-curta">Apresentamos o nosso Transformador de Pedestal (Pad-Mounted) de 750KVA, solução eficiente e segura para distribuição de energia. Proteção contra condições ambientais, acesso facilitado para manutenção e versatilidade de aplicação. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAOP-750KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-750kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-pedestal-750kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-750kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: Transformador Pedestal (Pad-Mounted) de 750KVA;</li>
                        <li>– Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>– Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Ligação do Primário: Delta;</li>
                        <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>– Método de resfriamento: ONAN;</li>
                        <li>– Grau de Proteção: IP54;</li>
                        <li>– Regime de serviço: Continuo 100%;</li>
                        <li>– Instalação: Ao Tempo;</li>
                        <li>– Pintura de acabamento na cor Verde Munsell;</li>
                        <li>– Orelhas de suspensão;</li>
                        <li>– Placa de Identificação;</li>
                        <li>– Meios de Aterramento;</li>
                        <li>– Nível de Óleo tipo coluna;</li>
                        <li>– Registro Inferior e Superior;</li>
                        <li>– Válvula de alívio de pressão sem contato;</li>
                        <li>– Terminais de BT;</li>
                        <li>– Base de Fixação;</li>
                        <li>– Porta de AT com trava na BT;</li>
                        <li>– Porta de BT com chave;</li>
                        <li>– Fusível Baioneta;</li>
                        <li>– Chave Comutadora com acionamento externo;</li>
                        <li>– Fusível Limitador de corrente;</li>
                        <li>– Fusível de expulsão em Baioneta;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 750KVA:</h2>
                    <p>A construção do transformador pedestal envolve a montagem de um transformador elétrico sobre uma base elevada, conhecida como pedestal. O transformador, composto por bobinas primárias e secundárias, é instalado em um invólucro resistente a intempéries.</p>
                    <p>Essa configuração elevada protege o transformador contra fatores ambientais, como umidade e poeira, além de permitir fácil acesso para manutenção e inspeções.</p>
                    <p>O transformador pedestal é uma solução prática para distribuição de energia em áreas urbanas e locais onde o espaço é limitado. Sua construção visa a eficiência, segurança e durabilidade, garantindo um fornecimento de energia confiável.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 750KVA:</h2>
                    <p>O transformador pedestal é aplicado em diversas situações onde é necessário distribuir energia elétrica de maneira confiável e eficiente. Ele é comumente usado em áreas urbanas, parques, praças, condomínios, edifícios comerciais e residenciais, entre outros. Sua configuração elevada oferece proteção contra fatores ambientais e facilita a manutenção. Com sua versatilidade, o transformador pedestal é uma solução prática e segura para distribuição de energia em locais de diferentes tamanhos e necessidades.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 750KVA PODE SER APLICADO:</h2>
                    <p>O transformador pedestal encontra aplicação em várias áreas onde a distribuição de energia elétrica é necessária. Ele é comumente utilizado em ambientes urbanos, parques, praças, áreas residenciais e comerciais, condomínios, instalações industriais e locais de eventos.</p>
                    <p>Sua configuração elevada oferece proteção contra condições ambientais adversas e facilita o acesso para manutenção. Com sua versatilidade e adaptabilidade, o transformador pedestal é uma solução confiável e eficiente para suprir demandas de energia em diferentes contextos.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 750KVA:</h2>
                    <p>O transformador pedestal possui várias características notáveis:</p>

                    <p><strong>Proteção Ambiental:</strong> Sua configuração elevada o protege contra umidade, poeira e outros elementos ambientais, garantindo a integridade das partes internas.</p>

                    <p><strong>Acesso Fácil:</strong> A instalação em um pedestal facilita o acesso para manutenção, inspeção e reparos, reduzindo o tempo de inatividade.</p>

                    <p><strong>Espaço Limitado:</strong> É ideal para áreas com restrições de espaço, como centros urbanos, onde a instalação subterrânea ou em postes pode ser inviável.</p>

                    <p><strong>Segurança:</strong> Sua construção robusta oferece segurança adicional, protegendo o transformador contra vandalismo e danos acidentais.</p>

                    <p><strong>Variedade de Aplicações:</strong> É aplicável em diversos contextos, desde áreas residenciais e comerciais até parques e instalações industriais.</p>

                    <p><strong>Flexibilidade:</strong> Pode ser adaptado para diferentes níveis de carga elétrica e voltagens, atendendo a necessidades específicas.</p>

                    <p><strong>Instalação Rápida:</strong> A montagem do transformador pedestal é relativamente rápida, minimizando interrupções no fornecimento de energia.</p>

                    <p><strong>Redução de Custos:</strong> A facilidade de manutenção e a durabilidade do transformador pedestal podem resultar em custos operacionais mais baixos ao longo do tempo.</p>

                    <p>Essas características tornam o transformador pedestal uma opção prática e versátil para distribuição de energia, especialmente em locais onde o espaço e a acessibilidade são importantes considerações.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-750kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "transformador-pedestal-1500kva" => [
        "imagem" => "transformador_pedestal_1500kva",
        "nome" => "Transformador Pedestal 1500KVA",
        "preco" => "R$181.412,00 – R$244.906,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_pedestal_1500kva.webp" alt="Transformador Pedestal 1500KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">Transformador Pedestal 1500KVA</h1>

                <div class="produto-preco">
                    R$181.412,00 – R$244.906,00
                </div>

                <p class="produto-descricao-curta">Apresentamos o nosso Transformador de Pedestal (Pad-Mounted) de 1500KVA, solução eficiente e segura para distribuição de energia. Proteção contra condições ambientais, acesso facilitado para manutenção e versatilidade de aplicação. Este transformador é meticulosamente fabricado em estrita conformidade com as renomadas normas ABNT-NBR, garantindo não apenas a qualidade, mas também a segurança operacional.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="13.800V - 7 Tap\\\'s">13.800V - 7 Tap\\\'s</option>
                                <option value="24.200V - 7 Tap\\\'s">24.200V - 7 Tap\\\'s</option>
                                <option value="34.500V - 7 Tap\\\'s">34.500V - 7 Tap\\\'s</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Enrolamento:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="Alumínio">Alumínio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> TAOP-1500KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">TRANSFORMADOR PEDESTAL</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-transformador-pedestal-1500kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-transformador-pedestal-1500kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-transformador-pedestal-1500kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: Transformador Pedestal (Pad-Mounted) de 1500KVA;</li>
                        <li>– Classe de Tensão Primária: 15KV, 25KV e 34,5KV;</li>
                        <li>– Classe de Tensão Secundária: 0,6/1,2KV;</li>
                        <li>– Tensão do Secundário: 220/127V, 380/220V e 440/254V;</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Ligação do Primário: Delta;</li>
                        <li>– Ligação do Secundário: Estrela com Neutro acessível;</li>
                        <li>– Método de resfriamento: ONAN;</li>
                        <li>– Grau de Proteção: IP54;</li>
                        <li>– Regime de serviço: Continuo 100%;</li>
                        <li>– Instalação: Ao Tempo;</li>
                        <li>– Pintura de acabamento na cor Verde Munsell;</li>
                        <li>– Orelhas de suspensão;</li>
                        <li>– Placa de Identificação;</li>
                        <li>– Meios de Aterramento;</li>
                        <li>– Nível de Óleo tipo coluna;</li>
                        <li>– Registro Inferior e Superior;</li>
                        <li>– Válvula de alívio de pressão sem contato;</li>
                        <li>– Terminais de BT;</li>
                        <li>– Base de Fixação;</li>
                        <li>– Porta de AT com trava na BT;</li>
                        <li>– Porta de BT com chave;</li>
                        <li>– Fusível Baioneta;</li>
                        <li>– Chave Comutadora com acionamento externo;</li>
                        <li>– Fusível Limitador de corrente;</li>
                        <li>– Fusível de expulsão em Baioneta;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 1500KVA:</h2>
                    <p>A construção do transformador pedestal envolve a montagem de um transformador elétrico sobre uma base elevada, conhecida como pedestal. O transformador, composto por bobinas primárias e secundárias, é instalado em um invólucro resistente a intempéries.</p>
                    <p>Essa configuração elevada protege o transformador contra fatores ambientais, como umidade e poeira, além de permitir fácil acesso para manutenção e inspeções.</p>
                    <p>O transformador pedestal é uma solução prática para distribuição de energia em áreas urbanas e locais onde o espaço é limitado. Sua construção visa a eficiência, segurança e durabilidade, garantindo um fornecimento de energia confiável.</p>

                    <h2>3 – FORMATOS DE APLICAÇÃO DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 1500KVA:</h2>
                    <p>O transformador pedestal é aplicado em diversas situações onde é necessário distribuir energia elétrica de maneira confiável e eficiente. Ele é comumente usado em áreas urbanas, parques, praças, condomínios, edifícios comerciais e residenciais, entre outros. Sua configuração elevada oferece proteção contra fatores ambientais e facilita a manutenção. Com sua versatilidade, o transformador pedestal é uma solução prática e segura para distribuição de energia em locais de diferentes tamanhos e necessidades.</p>

                    <h2>4 – LUGARES ONDE O TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 1500KVA PODE SER APLICADO:</h2>
                    <p>O transformador pedestal encontra aplicação em várias áreas onde a distribuição de energia elétrica é necessária. Ele é comumente utilizado em ambientes urbanos, parques, praças, áreas residenciais e comerciais, condomínios, instalações industriais e locais de eventos.</p>
                    <p>Sua configuração elevada oferece proteção contra condições ambientais adversas e facilita o acesso para manutenção. Com sua versatilidade e adaptabilidade, o transformador pedestal é uma solução confiável e eficiente para suprir demandas de energia em diferentes contextos.</p>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DO TRANSFORMADOR PEDESTAL (PAD-MOUNTED) 1500KVA:</h2>
                    <p>O transformador pedestal possui várias características notáveis:</p>

                    <p><strong>Proteção Ambiental:</strong> Sua configuração elevada o protege contra umidade, poeira e outros elementos ambientais, garantindo a integridade das partes internas.</p>

                    <p><strong>Acesso Fácil:</strong> A instalação em um pedestal facilita o acesso para manutenção, inspeção e reparos, reduzindo o tempo de inatividade.</p>

                    <p><strong>Espaço Limitado:</strong> É ideal para áreas com restrições de espaço, como centros urbanos, onde a instalação subterrânea ou em postes pode ser inviável.</p>

                    <p><strong>Segurança:</strong> Sua construção robusta oferece segurança adicional, protegendo o transformador contra vandalismo e danos acidentais.</p>

                    <p><strong>Variedade de Aplicações:</strong> É aplicável em diversos contextos, desde áreas residenciais e comerciais até parques e instalações industriais.</p>

                    <p><strong>Flexibilidade:</strong> Pode ser adaptado para diferentes níveis de carga elétrica e voltagens, atendendo a necessidades específicas.</p>

                    <p><strong>Instalação Rápida:</strong> A montagem do transformador pedestal é relativamente rápida, minimizando interrupções no fornecimento de energia.</p>

                    <p><strong>Redução de Custos:</strong> A facilidade de manutenção e a durabilidade do transformador pedestal podem resultar em custos operacionais mais baixos ao longo do tempo.</p>

                    <p>Essas características tornam o transformador pedestal uma opção prática e versátil para distribuição de energia, especialmente em locais onde o espaço e a acessibilidade são importantes considerações.</p>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-transformador-pedestal-1500kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada</th><td>13.800V – 7 Tap\\\'s, 24.200V – 7 Tap\\\'s, 34.500V – 7 Tap\\\'s</td></tr>
                            <tr><th>Enrolamento</th><td>Alumínio</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],



    "autotransformador-3kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 3KVA",
        "preco" => "R$778,00 – R$1.511,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 3KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 3KVA</h1>

                <div class="produto-preco">
                    R$778,00 – R$1.511,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 3 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-3KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-3kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-3kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-3kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 3KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 3KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 3KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 3KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 3KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-3kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "autotransformador-5kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 5KVA",
        "preco" => "R$914,00 – R$1.693,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 5KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 5KVA</h1>

                <div class="produto-preco">
                    R$914,00 – R$1.693,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 5 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-5KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-5kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-5kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-5kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 5KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 5KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 5KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 5KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 5KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-5kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "autotransformador-7-5kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 7,5KVA",
        "preco" => "R$1.186,00 – R$1.984,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 7,5KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 7,5KVA</h1>

                <div class="produto-preco">
                    R$1.186,00 – R$1.984,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 7,5 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-7,5KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-7-5kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-7-5kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-7-5kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 7,5KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 7,5KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 7,5KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 7,5KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 7,5KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-7-5kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "autotransformador-10kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 10KVA",
        "preco" => "R$1.297,00 – R$2.239,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 10KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 10KVA</h1>

                <div class="produto-preco">
                    R$1.297,00 – R$2.239,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 10 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-10KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-10kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-10kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-10kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 10KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 10KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 10KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 10KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 10KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-10kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "autotransformador-15kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 15KVA",
        "preco" => "R$1.667,00 – R$3.039,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 15KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 15KVA</h1>

                <div class="produto-preco">
                    R$1.667,00 – R$3.039,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 15 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-15KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-15kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-15kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-15kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 15KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 15KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 15KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 15KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 15KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-15kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "autotransformador-20kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 20KVA",
        "preco" => "R$1.976,00 – R$3.604,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 20KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 20KVA</h1>

                <div class="produto-preco">
                    R$1.976,00 – R$3.604,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 20 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-20KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-20kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-20kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-20kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 20KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 20KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 20KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 20KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 20KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-20kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "autotransformador-25kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 25KVA",
        "preco" => "R$2.161,00 – R$4.095,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 25KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 25KVA</h1>

                <div class="produto-preco">
                    R$2.161,00 – R$4.095,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 25 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-25KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-25kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-25kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-25kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 25KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 25KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 25KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 25KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 25KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-25kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "autotransformador-30kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 30KVA",
        "preco" => "R$2.470,00 – R$4.477,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 30KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 30KVA</h1>

                <div class="produto-preco">
                    R$2.470,00 – R$4.477,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 30 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-30KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-30kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-30kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-30kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 30KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 30KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 30KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 30KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 30KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-30kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "autotransformador-40kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 40KVA",
        "preco" => "R$3.211,00 – R$5.824,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 40KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 40KVA</h1>

                <div class="produto-preco">
                    R$3.211,00 – R$5.824,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 40 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT40KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-40kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-40kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-40kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 40KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 40KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 40KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 40KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 40KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-40kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "autotransformador-50kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 50KVA",
        "preco" => "R$3.952,00 – R$7.225,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 50KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 50KVA</h1>

                <div class="produto-preco">
                    R$3.952,00 – R$7.225,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 50 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-50KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-50kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-50kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-50kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 50KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 50KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 50KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 50KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 50KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-50kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "autotransformador-60kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 60KVA",
        "preco" => "R$4.323,00 – R$8.554,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 60KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 60KVA</h1>

                <div class="produto-preco">
                    R$4.323,00 – R$8.554,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 60 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-60KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-60kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-60kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-60kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 60KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 60KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 60KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 60KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 60KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-60kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "autotransformador-75kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 75KVA",
        "preco" => "R$5.187,00 – R$9.919,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 75KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 75KVA</h1>

                <div class="produto-preco">
                    R$5.187,00 – R$9.919,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 75 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-75KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-75kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-75kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-75kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 75KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 75KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 75KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 75KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 75KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-75kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "autotransformador-90kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 90KVA",
        "preco" => "R$5.928,00 – R$11.102,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 90KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 90KVA</h1>

                <div class="produto-preco">
                    R$5.928,00 – R$11.102,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 90 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-90KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-90kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-90kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-90kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 90KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 90KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 90KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 90KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 90KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-90kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "autotransformador-100kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 100KVA",
        "preco" => "R$6.175,00 – R$12.285,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 100KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 100KVA</h1>

                <div class="produto-preco">
                    R$6.175,00 – R$12.285,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 100 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-100KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-100kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-100kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-100kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 100KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 100KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 100KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 100KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 100KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-100kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "autotransformador-125kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 125KVA",
        "preco" => "R$7.534,00 – R$14.378,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 125KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 125KVA</h1>

                <div class="produto-preco">
                    R$7.534,00 – R$14.378,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 125 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-125KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-125kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-125kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-125kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 125KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 125KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 125KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 125KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 125KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-125kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "autotransformador-150kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 150KVA",
        "preco" => "R$8.645,00 – R$16.380,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 150KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 150KVA</h1>

                <div class="produto-preco">
                    R$8.645,00 – R$16.380,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 150 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-150KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-150kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-150kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-150kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 150KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 150KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 150KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 150KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 150KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-150kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "autotransformador-200kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 200KVA",
        "preco" => "R$10.251,00 – R$22.386,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 200KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 200KVA</h1>

                <div class="produto-preco">
                    R$10.251,00 – R$22.386,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 200 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-200KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-200kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-200kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-200kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 200KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 200KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 200KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 200KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 200KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-200kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],

    "autotransformador-300kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 300KVA",
        "preco" => "R$14.326,00 – R$30.940,00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 300KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 300KVA</h1>

                <div class="produto-preco">
                    R$14.326,00 – R$30.940,00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 300 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-300KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-300kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-300kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-300kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 300KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 300KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 300KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 300KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 300KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-300kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "autotransformador-500kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 500KVA",
        "preco" => "R$21,489.00 – R$48,412.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 500KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 500KVA</h1>

                <div class="produto-preco">
                    R$21,489.00 – R$48,412.00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 500 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-500KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-500kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-500kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-500kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 500KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 500KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 500KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 500KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 500KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-500kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "autotransformador-750kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 750KVA",
        "preco" => "R$25,935.00 – R$58,422.00",
        'content' => '<section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 750KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 750KVA</h1>

                <div class="produto-preco">
                    R$25,935.00 – R$58,422.00
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 750 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-750KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-750kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-750kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-750kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 750KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V e 380-220/127V;</li>
                        <li>440-220/127V e 220-440/254V;</li>
                        <li>440-380/220V e 380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 750KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 750KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 750KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Painéis;</li>
                        <li>Máquinas;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 750KVA:</h2>
                    <ul class="lista-specs">
                        <li>Conta apenas com um enrolamento: isso torna o aparelho mais econômico uma vez que exige menos condutor e tem um volume total inferior (para a mesma potência).</li>
                        <li>O tamanho do AutoTransformador é pequeno. Portanto, o custo de todo o dispositivo é menor em comparação com o transformador normal;</li>
                        <li>Requer menos cobre ou alumínio. Portanto, a perda no enrolamento é menor e aumenta a eficiência do transformador.</li>
                        <li>A regulação da tensão do AutoTransformador é melhor em relação ao transformador convencional.</li>
                        <li>AutoTransformador não apresenta risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoa, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>Por conter uma estrutura simples e compacta, é de grande praticidade que suas manutenções preventivas ocorram com longa periodicidade entre elas.</li>
                    </ul>

                    <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div>
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-750kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "autotransformador-1000kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 1000KVA",
        "preco" => "Produto Indisponível",
        'content' => '
        <section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 1000KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 1000KVA</h1>
                <div class="produto-preco">
                    Produto fora de estoque e indisponível
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 1000 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <!--<div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>*/
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>-->

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-1000KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-1000kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-1000kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-1000kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 1000KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V;</li>
                        <li>440-220/127V;</li>
                        <li>220-440/254V;</li>
                        <li>440-380/220V;</li>
                        <li>380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 1000KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 1000KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 1000KVA:</h2>
                    <ul class="lista-specs">
                       <li>Ar condicionado;</li>
                       <li>Alimentar motores;</li>
                       <li>Eletroeletrônicos em geral;</li>
                       <li>Obras e construção civil;</li>
                       <li>Geradores;</li>
                       <li>Máquinas;</li>
                       <li>Painéis;</li>
                       <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 1000KVA:</h2>
                    <ul class="lista-specs">
                        <li>Possuem a possibilidade de se adaptar para o sistema de ventilação forçada, aumentando sua capacidade nominal em até 40%.</li>
                        <li>Não liberam de gases tóxicos, não agridem a natureza.</li>
                        <li>São fabricados com materiais adequados para suportarem altas temperaturas.</li>
                        <li>Possuem baixo nível de ruído, são isentos de manutenção, além de muitos outros benefícios.</li>
                        <li>Transformadores que não apresentam risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoas, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>O investimento neste equipamento é extremamente baixo, fazendo valer a pena a instalação de um equipamento em projetos de energia solar.</li>
                    </ul>

                    <!-- <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div> -->
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-1000kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                            <tr><th>Enrrolamento</th><td>Alumínio, Cobre</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "autotransformador-1500kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 1500KVA",
        "preco" => "Produto Indisponível",
        'content' => '
        <section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 1500KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 1500KVA</h1>
                <div class="produto-preco">
                    Produto fora de estoque e indisponível
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Transformador Isolador de 1500 kVA, uma solução robusta para proteger seus sistemas elétricos. Com capacidade de isolar circuitos e prevenir sobrecargas, garante a segurança de equipamentos sensíveis. Adquira confiabilidade e tranquilidade na distribuição de energia. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <!--<div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>*/
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>-->

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-1500KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-1500kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-1500kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-1500kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 1500KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V;</li>
                        <li>440-220/127V;</li>
                        <li>220-440/254V;</li>
                        <li>440-380/220V;</li>
                        <li>380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 1500KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 1500KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 1500KVA:</h2>
                    <ul class="lista-specs">
                        <li>Ar condicionado;</li>
                        <li>Alimentar motores;</li>
                        <li>Eletroeletrônicos em geral;</li>
                        <li>Obras e construção civil;</li>
                        <li>Geradores;</li>
                        <li>Máquinas;</li>
                        <li>Painéis;</li>
                        <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 1500KVA:</h2>
                    <ul class="lista-specs">
                        <li>Possuem a possibilidade de se adaptar para o sistema de ventilação forçada, aumentando sua capacidade nominal em até 40%.</li>
                        <li>Não liberam de gases tóxicos, não agridem a natureza.</li>
                        <li>São fabricados com materiais adequados para suportarem altas temperaturas.</li>
                        <li>Possuem baixo nível de ruído, são isentos de manutenção, além de muitos outros benefícios.</li>
                        <li>Transformadores que não apresentam risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoas, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>O investimento neste equipamento é extremamente baixo, fazendo valer a pena a instalação de um equipamento em projetos de energia solar.</li>
                    </ul>

                    <!-- <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div> -->
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-1500kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                            <tr><th>Enrrolamento</th><td>Alumínio, Cobre</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>',
    ],
    "autotransformador-2000kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 2000KVA",
        "preco" => "Produto Indisponível",
        'content' => '
        <section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 2000KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 2000KVA</h1>
                <div class="produto-preco">
                    Produto fora de estoque e indisponível
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 1000 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <!--<div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>*/
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>-->

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-2000KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-2000kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-2000kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-2000kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 2000KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V;</li>
                        <li>440-220/127V;</li>
                        <li>220-440/254V;</li>
                        <li>440-380/220V;</li>
                        <li>380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 2000KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 2000KVA:</h2>
                    <p>– Elevador [ou] Rebaixador de Tensão elétrica, tendo o primário isolado eletricamente do secundário, destinado principalmente a energia solar, sistemas de redes de iluminação e painéis, também se aplica a motores, máquinas, fornos e diversas outras aplicações industriais (conforme necessidade).</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 2000KVA:</h2>
                    <ul class="lista-specs">
                       <li>Ar condicionado;</li>
                       <li>Alimentar motores;</li>
                       <li>Eletroeletrônicos em geral;</li>
                       <li>Obras e construção civil;</li>
                       <li>Geradores;</li>
                       <li>Máquinas;</li>
                       <li>Painéis;</li>
                       <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 2000KVA:</h2>
                    <ul class="lista-specs">
                        <li>Possuem a possibilidade de se adaptar para o sistema de ventilação forçada, aumentando sua capacidade nominal em até 40%.</li>
                        <li>Não liberam de gases tóxicos, não agridem a natureza.</li>
                        <li>São fabricados com materiais adequados para suportarem altas temperaturas.</li>
                        <li>Possuem baixo nível de ruído, são isentos de manutenção, além de muitos outros benefícios.</li>
                        <li>Transformadores que não apresentam risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoas, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>O investimento neste equipamento é extremamente baixo, fazendo valer a pena a instalação de um equipamento em projetos de energia solar.</li>
                    </ul>

                    <!-- <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div> -->
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-2000kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                            <tr><th>Enrrolamento</th><td>Alumínio, Cobre</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "autotransformador-2500kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 2500KVA",
        "preco" => "Produto Indisponível",
        'content' => '
        <section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 2500KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 2500KVA</h1>
                <div class="produto-preco">
                    Produto fora de estoque e indisponível
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Autotransformador de 1000 kVA, uma solução compacta e eficiente para conversão de tensão elétrica. Com design versátil, é ideal para diversas aplicações, oferecendo economia de espaço e desempenho confiável. Garanta a adaptação perfeita para suas necessidades energéticas. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <!--<div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>*/
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>-->

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-2500KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-2500kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-2500kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-2500kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 2500KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V;</li>
                        <li>440-220/127V;</li>
                        <li>220-440/254V;</li>
                        <li>440-380/220V;</li>
                        <li>380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 2500KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 2500KVA:</h2>
                    <p>– Elevador [ou] Rebaixador de Tensão elétrica, tendo o primário isolado eletricamente do secundário, destinado principalmente a energia solar, sistemas de redes de iluminação e painéis, também se aplica a motores, máquinas, fornos e diversas outras aplicações industriais (conforme necessidade).</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 2500KVA:</h2>
                    <ul class="lista-specs">
                       <li>Ar condicionado;</li>
                       <li>Alimentar motores;</li>
                       <li>Eletroeletrônicos em geral;</li>
                       <li>Obras e construção civil;</li>
                       <li>Geradores;</li>
                       <li>Máquinas;</li>
                       <li>Painéis;</li>
                       <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 2500KVA:</h2>
                    <ul class="lista-specs">
                        <li>Possuem a possibilidade de se adaptar para o sistema de ventilação forçada, aumentando sua capacidade nominal em até 40%.</li>
                        <li>Não liberam de gases tóxicos, não agridem a natureza.</li>
                        <li>São fabricados com materiais adequados para suportarem altas temperaturas.</li>
                        <li>Possuem baixo nível de ruído, são isentos de manutenção, além de muitos outros benefícios.</li>
                        <li>Transformadores que não apresentam risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoas, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>O investimento neste equipamento é extremamente baixo, fazendo valer a pena a instalação de um equipamento em projetos de energia solar.</li>
                    </ul>

                    <!-- <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div> -->
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-2500kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                            <tr><th>Enrrolamento</th><td>Alumínio, Cobre</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
    "autotransformador-3000kva" => [
        "imagem" => "transformador_isolador_5kva",
        "nome" => "AutoTransformador 3000KVA",
        "preco" => "Produto Indisponível",
        'content' => '
        <section id="produto-principal">
    <div class="container">
        <div class="flex">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="produto-galeria">
                    <div class="produto-imagem-principal">
                        <img src="' . $url . 'imagens/main/produtos/transformador_isolador_5kva.webp" alt="AutoTransformador 3000KVA" id="img-principal" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">

                <h1 class="produto-nome">AutoTransformador 3000KVA</h1>
                <div class="produto-preco">
                    Produto fora de estoque e indisponível
                </div>

                <p class="produto-descricao-curta">Apresentamos nosso Transformador Isolador de 3000 kVA, uma solução robusta para proteger seus sistemas elétricos. Com capacidade de isolar circuitos e prevenir sobrecargas, garante a segurança de equipamentos sensíveis. Adquira confiabilidade e tranquilidade na distribuição de energia. Este transformador é cuidadosamente produzido em total conformidade com as renomadas normas ABNT-NBR, assegurando não somente a qualidade, mas também a operação segura.</p>

                <!--<div class="produto-opcoes">
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Entrada/Saída:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="220/380V - Reversível">220/380V - Reversível</option>
                                <option value="380/440V - Reversível">380/440V - Reversível</option>
                                <option value="220/380/440V - Reversível">220/380/440V - Reversível</option>
                            </select>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-4 col-md-3">
                            <label class="opcao-label">Proteção:</label>
                        </div>
                        <div class="col-8 col-md-9">
                            <select class="form-select opcao-select">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <option value="IP00">IP00</option>
                                <option value="IP21">IP21</option>
                                <option value="IP54">IP54</option>
                                <option value="IP65">IP65</option>
                            </select>
                        </div>
                    </div>*/
                </div>

                <div class="produto-compra d-flex align-items-center gap-3 flex-wrap">
                    <a href="#" class="button">
                        <i class="fas fa-shopping-cart me-2"></i>Adicionar ao carrinho
                    </a>
                </div>-->

                <div class="produto-meta mt-4">
                    <p><strong>SKU:</strong> AUT-3000KVA</p>
                    <p><strong>Categorias:</strong> <a href="#" class="meta-link">AUTOTRANSFORMADOR</a>, <a href="#" class="meta-link">TRANSFORMADORES</a></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="descricao-produto">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="abas">
                    <button class="aba aba--ativa" data-aba="descricao-autotransformador-3000kva">Descrição</button>
                    <button class="aba" data-aba="info-adicional-autotransformador-3000kva">Informação adicional</button>
                </div>

                <div class="aba-painel aba-painel--ativo" id="painel-descricao-autotransformador-3000kva">
                    <h3>Descrição</h3>

                    <h2>1 – DESCRIÇÃO TÉCNICA DO EQUIPAMENTO:</h2>
                    <ul class="lista-specs">
                        <li>– Potência: AutoTransformador 3000KVA;</li>
                        <li>– Tensões:</li>
                        <li>220-380/220V;</li>
                        <li>440-220/127V;</li>
                        <li>220-440/254V;</li>
                        <li>440-380/220V;</li>
                        <li>380-440/254V;</li>
                        <li>440-380-220V.</li>
                        <li>– Frequência: 60 Hz;</li>
                        <li>– Grupo de Ligação: Yn0 (Estrela com Neutro acessível);</li>
                        <li>– Classe de Isolamento: 1,1 KV;</li>
                        <li>– Fator de Potência: K1;</li>
                        <li>– Classe de Temperatura: F (155°);</li>
                        <li>– Número de Fases: Trifásico;</li>
                        <li>– Grau de Proteção: IP00/IP21/IP54;</li>
                        <li>– Instalação: Abrigada/Interna;</li>
                        <li>– Refrigeração: Ar (A seco);</li>
                        <li>– Enrolamento: Alumínio;</li>
                        <li>– 2 anos de garantia.</li>
                    </ul>

                    <h2>2 – CONSTRUÇÃO DO AUTOTRANSFORMADOR 3000KVA:</h2>
                    <p>– Bobina fabricada em alumínio, revestida por material isolante e impregnadas em Verniz Poliéster, confeccionadas em ambiente controlado e apropriado;</p>
                    <p>– Núcleo magnético composto de chapas de silício.</p>

                    <h2>3 – APLICAÇÕES DO AUTOTRANSFORMADOR 3000KVA:</h2>
                    <p>– Elevador ou Rebaixador de Tensão elétrica, destinado a energia solar, motores, sistemas de redes de iluminação, etc.</p>

                    <h2>4 – TIPOS DE APARELHOS QUE NECESSITAM DE UM AUTOTRANSFORMADOR 3000KVA:</h2>
                    <ul class="lista-specs">
                       <li>Ar condicionado;</li>
                       <li>Alimentar motores;</li>
                       <li>Eletroeletrônicos em geral;</li>
                       <li>Obras e construção civil;</li>
                       <li>Geradores;</li>
                       <li>Máquinas;</li>
                       <li>Painéis;</li>
                       <li>Entre outros.</li>
                    </ul>

                    <h2>5 – OUTRAS CARACTERÍSTICAS DE UM AUTOTRANSFORMADOR 3000KVA:</h2>
                    <ul class="lista-specs">
                        <li>Possuem a possibilidade de se adaptar para o sistema de ventilação forçada, aumentando sua capacidade nominal em até 40%.</li>
                        <li>Não liberam de gases tóxicos, não agridem a natureza.</li>
                        <li>São fabricados com materiais adequados para suportarem altas temperaturas.</li>
                        <li>Possuem baixo nível de ruído, são isentos de manutenção, além de muitos outros benefícios.</li>
                        <li>Transformadores que não apresentam risco de explosão, assim não apresentando perigo em lugares onde tem continuo fluxo de pessoas, não precisa de paredes corta-fogo e nem ser instalado em lugares afastados.</li>
                        <li>O investimento neste equipamento é extremamente baixo, fazendo valer a pena a instalação de um equipamento em projetos de energia solar.</li>
                    </ul>

                    <!-- <div class="mt-4">
                        <a href="#" class="button">Faça um Orçamento</a>
                    </div> -->
                </div>

                <div class="aba-painel" id="painel-info-adicional-autotransformador-3000kva">
                    <h3>Informação adicional</h3>
                    <table class="table table-bordered info-table">
                        <tbody>
                            <tr><th>Entrada/Saída</th><td>220/380V – Reversível, 380/440V – Reversível, 220/380/440V – Reversível</td></tr>
                            <tr><th>Proteção</th><td>IP00, IP21, IP54, IP65</td></tr>
                            <tr><th>Enrrolamento</th><td>Alumínio, Cobre</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>',
    ],
];
