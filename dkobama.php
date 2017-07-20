<?php
/*
Plugin Name: Dk Obama Gallery
Plugin URI: http://www.dkcell.com.br/design
Description: Plugin que integra o <a href="http://devthought.com/barackslideshow-an-elegant-lightweight-slideshow-script/">Barack Slideshow</a> com Wordpress. <br />Baseado no <a href="http://www.wpelements.com/2008/02/28/the-featured-content-gallery-plugin/"> Featured Content Gallery</a>
Version: 1.0
Author: Kaiserlino
Author URI: http://www.dkcell.com.br
*/

/* Página de opções */
$options_page = get_option('siteurl') . '/wp-admin/admin.php?page=dkobama/opcoes.php';
/* Adiciona a página de opções ao menu" */
function gallery_options_page() {
	add_options_page('P&aacute;gina de op&ccedil;&otilde;es Dk Obama', 'Dk Obama', 10, 'dkobama/opcoes.php');
}

function gallery_styles() {
    /* AS próximas linhas referem aonde estará o plugin e todos os arquivos, relativo a raiz do wordpress: */
    $gallery_path =  get_bloginfo('wpurl')."/wp-content/plugins/dkobama/";

    /* O cabeçalho necessário para a galeria funcionar: */
	$galleryscript = "
	<!-- Inicio scripts galeria -->
    <link rel=\"stylesheet\" href=\"".$gallery_path."css/slideshow.css\" type=\"text/css\" media=\"screen\" charset=\"utf-8\"/>
	<script type=\"text/javascript\" charset=\"utf-8\" src=\"".$gallery_path."scripts/mootools-1.2-core.js\"></script>
    <script type=\"text/javascript\" charset=\"utf-8\" src=\"".$gallery_path."scripts/mootools-1.2-more.js\"></script>
    <script type=\"text/javascript\" charset=\"utf-8\" src=\"".$gallery_path."scripts/morphlist.js\"></script>
    <script type=\"text/javascript\" charset=\"utf-8\" src=\"".$gallery_path."scripts/barackslideshow.js\"></script>
		<!-- Fim scripts galeria -->\n";
	/* Liberar o $galleryscript  como texto para nossas páginas: */
	echo($galleryscript);
}

/* Adiciona os códigos acima ao cabeçalho: */
add_action('wp_head', 'gallery_styles');
add_action('admin_menu', 'gallery_options_page');
?>