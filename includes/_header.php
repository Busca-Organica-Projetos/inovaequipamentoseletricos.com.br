<header class="header-background">
    <nav>
        <?php include('includes/top-header.php'); ?>
        <div class="header-container-main">
            <div class="logo">
                <a href="<?php echo $url; ?>" title="<?php echo $h1 . " - " . $nome_empresa; ?>">
                    <span>
                        <picture>
                            <source type="image/webp" srcset="<?php echo $url; ?><?php echo $logo_cliente; ?>">
                            <img src="<?php echo $url.$logo_cliente; ?>" alt="<?php echo $nome_empresa; ?>" title="<?php echo $nome_empresa; ?>" class="img-responsive">
                        </picture>
                    </span>
                </a>
            </div>
            <div class="menu">
                <ul class="menu-list gap-10">
                    <li class="<?php echo $canonical ==  $url ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>" title="Página inicial">Home</a></li>
                    <li class="<?php echo $canonical ==  $url.'quem-somos' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>quem-somos" title="Quem Somos">Quem Somos</a></li>
                    <li class="liprod">
                        <a href="<?php echo $url; ?>loja" title="Loja">Loja <i class="fa-solid fa-angle-right info"></i></a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo $url; ?>portfolio-item/transformadores-a-oleo" title="transformadores á óleo">TRANSFORMADORES Á ÓLEO</a></li>
                            <li><a href="<?php echo $url; ?>portfolio-item/transformadores-pedestal" title="transformadores pedestal">TRANFORMADORES PEDESTAL</a></li>
                            <li><a href="<?php echo $url; ?>portfolio-item/transformadores-a-seco" title="transformadores a seco">TRANSFORMADORES Á SECO</a></li>
                            <li><a href="<?php echo $url; ?>portfolio-item/autotransformadores" title="autotransformadores">AUTOTRANSFORMADORES</a></li>
                            <li><a href="<?php echo $url; ?>portfolio-item/transformadores-isoladores" title="transformadores isolados">TRANFORMADORES ISOLADOS</a></li>
                        </ul>
                    </li>
                    <li class="liprod <?php echo $canonical ==  $url.'locacao' ? 'pagina-focus':'';?>">
                        <a href="<?php echo $url; ?>locacao" title="Locação">Locação<i class="fa-solid fa-angle-right info"></i></a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo $url; ?>portfolio-item/locacao-transformadores-a-oleo" title="locacao-transformadores">LOCAÇÃO DE TRANSFORMADORES Á ÓLEO</a></li>
                            <li><a href="<?php echo $url; ?>portfolio-item/locacao-transformadores-pedestal" title="locacao-transformadores">LOCAÇÃO DE TRANFORMADORES PEDESTAL</a></li>
                            <li><a href="<?php echo $url; ?>portfolio-item/locacao-transformadores-a-seco" title="locacao-transformadores">LOCAÇÃO DE TRANSFORMADORES Á SECO</a></li>
                            <li><a href="<?php echo $url; ?>portfolio-item/locacao-autotransformadores" title="locacao-transformadores">LOCAÇÃO DE AUTOTRANSFORMADORES</a></li>
                            <li><a href="<?php echo $url; ?>portfolio-item/locacao-transformadores-isoladores" title="locacao-transformadores">LOCAÇÃO DE TRANFORMADORES ISOLADOS</a></li>
                        </ul>
                    </li>
                    <li class="liserv <?php echo $canonical ==  $url.'servicos-eletricos' ? 'pagina-focus':'';?>">
                        <a href="<?php echo $url; ?>servicos-eletricos" title="Serviços Elétricos">Serviços Elétricos<i class="fa-solid fa-angle-right info"></i></a>
                        <ul class="sub-menu">
                            <li class="liserv <?php echo $canonical ==  $url.'servicos-eletricos' ? 'pagina-focus':'';?>">
                                <a href="<?php echo $url; ?>instalacao-desinstalacao" title="instalação e desinstalação">INSTALAÇÃO/DESINSTALAÇÃO</a>
                                <ul class="sec-sub-menu">
                                    <li><a href="<?php echo $url; ?>portfolio-item/instalacao-e-desinstalacao-de-transformadores-a-oleo" title="instalacao-e-desinstalacao-de-transformadores-a-oleo">Transformadores Á Óleo</a></li>
                                    <li><a href="<?php echo $url; ?>portfolio-item/instalacao-e-desinstalacao-de-transformadores-pedestal" title="instalacao-e-desinstalacao-de-transformadores-pedestal">Transformadores Pedestal</a></li>
                                    <li><a href="<?php echo $url; ?>portfolio-item/instalacao-e-desinstalacao-de-transformadores-a-seco" title="instalacao-e-desinstalacao-de-transformadores-a-seco">Transformadores Á Seco</a></li>
                                </ul>
                            </li>
                            <li class="liserv"><a href="<?php echo $url; ?>manutencao-preventiva-e-corretiva-em-cabine-primaria" title="Manutenção Preventiva e Corretiva em Cabine Primária">MANUTENÇÃO PREVENTIVA E CORRETIVA EM CABINE PRIMÁRIA</a></li>
                        </ul>
                    </li>
                    <li class="liserv <?php echo $canonical ==  $url.'orcamento' ? 'pagina-focus':'';?>">
                        <a href="<?php echo $url; ?>orcamento" title="Orçamento">Orçamento<i class="fa-solid fa-angle-right info"></i></a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo $url; ?>orcamento-transformadores-a-oleo" title="orcamento-transformadores">TRANSFORMADORES Á ÓLEO</a></li>
                            <li><a href="<?php echo $url; ?>orcamento-transformadores-pedestal" title="orcamento-transformadores">TRANFORMADORES PEDESTAL</a></li>
                            <li><a href="<?php echo $url; ?>orcamento-transformadores-a-seco" title="orcamento-transformadores">TRANSFORMADORES Á SECO</a></li>
                            <li><a href="<?php echo $url; ?>orcamento-autotransformadores" title="orcamento-transformadores">AUTOTRANSFORMADORES</a></li>
                            <li><a href="<?php echo $url; ?>orcamento-transformadores-isoladores" title="orcamento-transformadores">TRANFORMADORES ISOLADOS</a></li>
                        </ul>
                    </li>
                    <li class="liserv <?php echo $canonical ==  $url.'blog' ? 'pagina-focus':'';?>">
                        <a href="<?php echo $url; ?>blog" title="Blog">Blog<i class="fa-solid fa-angle-right info"></i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo $url; ?>category/manutencao-servicos" title="manutenção e serviços">MANUTENÇÃO/SERVIÇOS</a>
                                <ul class="sec-sub-menu">
                                    <li><a href="<?php echo $url; ?>category/manutencao-servicos/manutencao-preventiva" title="manutenção preventiva">MANUTENÇÃO PREVENTIVA</a></li>
                                    <li><a href="<?php echo $url; ?>category/manutencao-servicos/manutencao-corretiva" title="manutenção corretiva">MANUTENÇÃO CORRETIVA</a></li>
                                    <li><a href="<?php echo $url; ?>category/manutencao-servicos/manutencao-preditiva" title="manutenção preditiva">MANUTENÇÃO PREDITIVA</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo $url; ?>category/energia" title="energia">ENERGIA</a>
                                <ul class="sec-sub-menu">
                                    <li><a href="<?php echo $url; ?>category/energia/energia-solar" title="energia solar">ENERGIA SOLAR</a></li>
                                    <li><a href="<?php echo $url; ?>category/energia/energia-eolica" title="energia eólica">ENERGIA EÓLICA</a></li>
                                    <li><a href="<?php echo $url; ?>category/energia/energia-hidreletrica" title="energia hidrelétrica">ENERGIA HIDRELÉTRICA</a></li>
                                    <li><a href="<?php echo $url; ?>category/energia/energia-de-biomassa" title="energia de biomassa">ENERGIA DE BIOMASSA</a></li>
                                    <li><a href="<?php echo $url; ?>category/energia/energia-geotermica" title="energia geotérmica">ENERGIA GEOTÉRMICA</a></li>
                                    <li><a href="<?php echo $url; ?>category/energia/energia-oceanica" title="energia oceânica">ENERGIA OCEÂNICA</a></li>
                                    <li><a href="<?php echo $url; ?>category/energia/energia-nuclear" title="energia nuclear">ENERGIA NUCLEAR</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo $url; ?>category/transformadores" title="transformadores">TRANSFORMADORES</a>
                                <ul class="sec-sub-menu">
                                    <li><a href="<?php echo $url; ?>category/transformadores/transformador-a-oleo" title="transformador a óleo">TRANSFORMADOR A ÓLEO</a></li>
                                    <li><a href="<?php echo $url; ?>category/transformadores/transformador-pedestal" title="transformador pedestal">TRANSFORMADOR PEDESTAL</a></li>
                                    <li><a href="<?php echo $url; ?>category/transformadores/transformador-a-seco" title="transformador a seco">TRANSFORMADOR A SECO</a></li>
                                    <li><a href="<?php echo $url; ?>category/transformadores/autotransformador" title="autotransformador">AUTOTRANSFORMADOR</a></li>
                                    <li><a href="<?php echo $url; ?>category/transformadores/transformador-isolador" title="transformador isolador">TRANSFORMADOR ISOLADOR</a></li>
                                    <li><a href="<?php echo $url; ?>category/transformadores/transformadores-inteligentes" title="transformadores inteligentes">TRANSFORMADORES INTELIGENTES</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo $url; ?>category/cabine-primaria" title="cabinas primárias">CABINAS PRIMÁRIAS</a></li>
                            <li><a href="<?php echo $url; ?>category/carros-eletricos" title="carros elétricos">CARROS ELÉTRICOS</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $canonical ==  $url.'contato' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>contato" title="Contato">Contato</a></li>
                    <li class="<?php echo $canonical ==  $url.'carrinho' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>carrinho" title="carrinho"><i class="fa-solid fa-cart-shopping cart"></i></a></li>
                    <!-- <li class="linfo">
                        <a href="<?php echo $url; ?>informacoes" title="Informações"><i class="fa fa-info linfo-i"></i></a>
                        <ul class="sub-menu">
                            <?php echo $borg->subMenu($palavras_chave); ?>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
</header>