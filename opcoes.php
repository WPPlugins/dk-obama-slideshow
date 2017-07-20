<?php
$location = $options_page; // Form Action URI
?>

<div class="wrap">
	<h2>Configura&ccedil;&atilde;o Dk Obama</h2>
	<p>Aqui voc&ecirc; poder&aacute; editar os itens da galeria, bastando preencher os campos abaixo:</p>
	
    <div style="margin-left:0px;">
    <form method="post" action="options.php"><?php wp_nonce_field('update-options'); ?>
		<fieldset name="general_options" class="options">

        <h3>Artigo #1</h3>

        T&iacute;tulo:<br />
		<div style="margin:0;padding:0;">
        <input name="featured1-title" id="featured1-title" value="<?php echo get_option('featured1-title'); ?>"></input>
        </div><br />
        
        Local da imagem: (ex: "http://www.seusite.com/imagem.jpg"<br />
		<div style="margin:0;padding:0;">
        <input name="featured1-image" id="featured1-image" size="75" value="<?php echo get_option('featured1-image'); ?>"></input> 
        </div><br />
        
        Ir para: (ex: "http://www.seusite.com/link-do-artigo")<br />
		<div style="margin:0;padding:0;">
        <input name="featured1-link" id="featured1-link" size="75" value="<?php echo get_option('featured1-link'); ?>"></input>   
        </div><br />
        
       

        <h3>Artigo #2</h3>
        
        T&iacute;tulo:<br />
		<div style="margin:0;padding:0;">
        <input name="featured2-title" id="featured2-title" value="<?php echo get_option('featured2-title'); ?>"></input>
        </div><br />
        
        Local da imagem: (ex: "http://www.seusite.com/imagem.jpg"<br />
		<div style="margin:0;padding:0;">
        <input name="featured2-image" id="featured2-image" size="75" value="<?php echo get_option('featured2-image'); ?>"></input> 
        </div><br />
        
        Ir para: (ex: "http://www.seusite.com/link-do-artigo")<br />
		<div style="margin:0;padding:0;">
        <input name="featured2-link" id="featured2-link" size="75" value="<?php echo get_option('featured2-link'); ?>"></input>   
        </div><br />
        
       
       	<h3>Artigo #3</h3>
        
        T&iacute;tulo:<br />
		<div style="margin:0;padding:0;">
        <input name="featured3-title" id="featured3-title" value="<?php echo get_option('featured3-title'); ?>"></input>
        </div><br />
        
        Local da imagem: (ex: "http://www.seusite.com/imagem.jpg"<br />
		<div style="margin:0;padding:0;">
        <input name="featured3-image" id="featured3-image" size="75" value="<?php echo get_option('featured3-image'); ?>"></input> 
        </div><br />
        
        Ir para: (ex: "http://www.seusite.com/link-do-artigo")<br />
		<div style="margin:0;padding:0;">
        <input name="featured3-link" id="featured3-link" size="75" value="<?php echo get_option('featured3-link'); ?>"></input>   
        </div><br />
        
        
        <h3>Artigo #4</h3>
        
        T&iacute;tulo:<br />
		<div style="margin:0;padding:0;">
        <input name="featured4-title" id="featured4-title" value="<?php echo get_option('featured4-title'); ?>"></input>
        </div><br />
        
        Local da imagem: (ex: "http://www.seusite.com/imagem.jpg"<br />
		<div style="margin:0;padding:0;">
        <input name="featured4-image" id="featured4-image" size="75" value="<?php echo get_option('featured4-image'); ?>"></input> 
        </div><br />
        
        Ir para: (ex: "http://www.seusite.com/link-do-artigo")<br />
		<div style="margin:0;padding:0;">
        <input name="featured4-link" id="featured4-link" size="75" value="<?php echo get_option('featured4-link'); ?>"></input>   
        </div><br />
        
       
        
        <h3>Artigo #5</h3>
        
        T&iacute;tulo:<br />
		<div style="margin:0;padding:0;">
        <input name="featured5-title" id="featured5-title" value="<?php echo get_option('featured5-title'); ?>"></input>
        </div><br />
        
        Local da imagem: (ex: "http://www.seusite.com/imagem.jpg"<br />
		<div style="margin:0;padding:0;">
        <input name="featured5-image" id="featured5-image" size="75" value="<?php echo get_option('featured5-image'); ?>"></input> 
        </div><br />
        
        Ir para: (ex: "http://www.seusite.com/link-do-artigo")<br />
		<div style="margin:0;padding:0;">
        <input name="featured5-link" id="featured5-link" size="75" value="<?php echo get_option('featured5-link'); ?>"></input>   
        </div><br />
             
       
        
        <input type="hidden" name="action" value="update" />

		</fieldset>
		<p class="submit"><input type="submit" name="Submit" value="<?php _e('Atualizar') ?>" /></p>
	</form>    
   
</div>