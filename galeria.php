<script type="text/javascript">
window.addEvent('domready', function() {
  new BarackSlideshow('menu', 'pictures', 'loading');
});
	
</script>
<div class="content">
	<div id="slideshow">    
	   <span id="loading">Carregando</span>
			  <ul id="pictures">
        <li><a href="<?php echo get_option('featured1-link'); ?>"><img src="<?php echo get_option('featured1-image'); ?>" /></a></li>
        <li><a href="<?php echo get_option('featured2-link'); ?>"><img src="<?php echo get_option('featured2-image'); ?>" /></a></li>
        <li><a href="<?php echo get_option('featured3-link'); ?>"><img src="<?php echo get_option('featured3-image'); ?>" /></a></li>
        <li><a href="<?php echo get_option('featured4-link'); ?>"><img src="<?php echo get_option('featured4-image'); ?>" /></a></li>
        <li><a href="<?php echo get_option('featured5-link'); ?>"><img src="<?php echo get_option('featured5-image'); ?>" /></a></li>
      </ul>
      
      <ul id="menu">
        <li><a href="<?php echo get_option('featured1-image'); ?>"><?php echo get_option('featured1-title'); ?></a></li>
        <li><a href="<?php echo get_option('featured2-image'); ?>"><?php echo get_option('featured2-title'); ?></a></li>
        <li><a href="<?php echo get_option('featured3-image'); ?>"><?php echo get_option('featured3-title'); ?></a></li>
        <li><a href="<?php echo get_option('featured4-image'); ?>"><?php echo get_option('featured4-title'); ?></a></li>
        <li><a href="<?php echo get_option('featured5-image'); ?>"><?php echo get_option('featured5-title'); ?></a></li>                        
      </ul>

    </div>
</div>
