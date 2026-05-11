<?php // Versão 2.0
    session_start();
    include "buscaorganica/class.buscaorganica.php";
    // Parâmetros para URL
    $borg = new classBuscaOrganica(array(
        // URL local
        "http://localhost/_Dev/inovaequipamentoseletricos.com.br/",
        // URL online
        "https://aprov.buscaorganica.com.br/inovaequipamentoseletricos.com.br/"
    ));

    // Principais Dados do Cliente
    $nome_empresa = "Inova Transformadores Eletricos Ltda";
    $slogan       = "Comercialização de Transformadores";
    $emailContato = "marketing@inovaequipamentoseletricos.com.br";

    // Variaveis para schema e site
    $dataDePublicacao = '13/03/2023';
    $dataDeModificacao = '08/03/2023';
    $facebook = "https://www.facebook.com/people/Inova-Equipamentos-El%C3%A9tricos/100095383457309/";
    $instagram = "https://www.instagram.com/inovaequipamentoseletricos/";
    $linkedin = "https://www.linkedin.com/company/inova-equipamentos-el%C3%A9tricos/";
    $pinterest = "https://br.pinterest.com/inovaequipamentoseletricos/";
    
    // Logo para o schema e site
    $logo_cliente = 'imagens/logo.webp';
    $logo_buscaorganica = 'imagens/logo-buscaorganica.png';
    
    // Parâmetros de Unidade
    $unidades = array(
        1 => array(
            "nome" => "DIOGO SILVA ARAUJO",
            "rua" => "Rua Timburi, 124",
            "bairro" => "Panorama (Polvilho)",
            "cidade" => "Guarulhos",
            "estado" => "Cajamar",
            "uf" => "SP",
            "cep" => "07792-725",
            "latitude_longitude" => "-23.410515446862103, -46.84738887664562",
            "ddd" => "11",
            "telefone" => "93955-7908", /* fixo sem ddd ex: 1313-1313 */
            "tel" => "(11) 93955-7908", /* fixo com ddd ex: (11) 1313-1313 */
            "link_tel" => "939557908", /* fixo com ddd sem espaço ex: 1113131313 */
            "whatsapp" => "93955-7908", /* whats sem ddd 91313-1313 */
            "wpp" => "(11) 93955-7908", /* whats com ddd (11) 91313-1313 */
            "link_wpp" => "https://wa.me/55939557908?text=", /*Adicionar a seguinte mensagem após inserir o número: ?text= */
            "link_maps" => "https://maps.app.goo.gl/r9P2CbtgEyY4rZKh7",
            "iframe_maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d915.3457473020688!2d-46.84803663046605!3d-23.41052836797394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf1d159ef43595%3A0x48b4737d2265af32!2sR.%20Timburi%2C%20124%20-%20Polvilho%2C%20Cajamar%20-%20SP%2C%2007750-000!5e0!3m2!1spt-BR!2sbr!4v1777039854112!5m2!1spt-BR!2sbr"
        )
    );
    // Numero do whatsapp do cliente para usar no botão da pagina de ranqueamento
    $whatsapp_botao = '+55939557908';

    //Endereço
    $low_adress = $unidades[1]['rua'] . " - " . $unidades[1]['bairro'] . " - " . $unidades[1]['cidade'];
    $full_adress = $unidades[1]['rua'] . " - " . $unidades[1]['bairro'] . " - " . $unidades[1]['cidade'] . $unidades[1]['uf'] . " - " . $unidades[1]['cep'];

    //Mensagens Padrão
    $msg_padrao_wpp = urlencode('Olá, vim pelo site e gostaria de mais informações!');

    // Compilado de todos os telefones para schema
    $telefones_cliente = [
        $unidades[1]['tel'],
        $unidades[1]['wpp'],
    ];

    // Variáveis da head.php
    $url = $borg->url;
    $canonical = $borg->canonical;
    if(!isset($title)) $title = 'Home';
    $meta_img    = $url . 'imagens/thumbs/' . $borg->formatStringToURL($title).'.jpg'; // mudar extensao se necessário
    
    $palavras_chave = array(
        "Palavra Chave", 
        "Palavra Chave", 
        "Palavra Chave", 
        "Palavra Chave", 
        "Palavra Chave", 
        "Palavra Chave",
    );
    
    //Pegar da instancia do analytics 
    $codigoAnalytics = 'UA-123456789-1';

    /*
        $usarListaThumbSemWeb
        No caso de true vai usar a Lista Thumb sem a extensão webp com img e nao com picture
    */ 
    $usarListaThumbSemWeb = true; /* false || true*/

    // CSS default
    $borg->css_files_default = array(
        "padroes/padronizacao",
        "padroes/grid-system",
        "padroes/slicknav-menu",
        "estilo-padrao",
        "elementos/fontawesome.min",
        "ferramentas/aviso-cookies",
        "ferramentas/gadget", //Cookies
    );

    // JS Default
    $borg->js_files_default = array(
        "padroes/jquery-3.6.0.min",
        "padroes/jquery.slicknav.min",
        "jquery.buscaorganica.padrao",
        "jquery.buscaorganica.custom",
        "tools/aviso-cookies.buscaorganica", //Cookies
        "tools/scroll",
        "tools/fontawesome",
    );

    $direitosAutorais = "<!-- Desenvolvido por Busca Orgânica | Site: www.buscaorganica.com.br | Email: contato@buscaorganica.com.br -->";
    include "buscaorganica/head.buscaorganica.min.php";

    
    $borg->breadcrumb_text_before_home = '<i class="fa-solid fa-house"></i>';
    
    /**
    * Outras Questões
    * 
    * Submenu
    * 
    * $opcoes = array(
    * "id" => "",
    * "class" => "",
    * "limit" => 9999,
    * "random" => false
    * );
    * 
    * $borg->subMenu($palavras_chave, $opcoes);
    * 
    */

    /**
    * Breadcrumb
    * 
    * -> Propriedades
    * 
    * Altera a url da Home no breadcrumb
    * $borg->breadcrumb_url_home = "";
    * 
    * Altera o texto que antecede a Home
    * $borg->breadcrumb_text_before_home = "";
    * 
    * Altera o texto da Home no breadcrumb
    * $borg->breadcrumb_text_home = "Home";
    * 
    * Altera o divisor de níveis do breadcrumb
    * $borg->breadcrumb_spacer = " » ";
    * 
    * -> Função
    * 
    * Cria o breadcrumb
    * $borg->breadcrumb(array("Informações", $h1));
    * 
    */

/**
    * Lista Thumbs
    * 
    * $opcoes = array(
    * "id" => "",
    * "class_div" => "col-md-3",
    * "class_section" => "",
    * "class_img" => "img-responsive",
    * "title_tag" => "h2",
    * "folder_img" => "imagens/thumbs/",
    * "extension" => "jpg",
    * "limit" => 9999,
    * "type" => 1,
    * "random" => false,
    * "text" => "",
    * "headline_text" => "Veja Mais"
    * );
    * 
    * 
    * $borg->listaThumbs($palavras_chave, $opcoes, $usarListaThumbSemWeb);
    * 
    */

/**
    * Funções Extras
    * 
    * $borg->formatStringToURL();
    * Reescreve um texto em uma URL válida
    * 
    */
    

