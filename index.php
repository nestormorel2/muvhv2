<?php get_header(); ?>
	<div class="row">
	   <div class="col-lg-3 col-md-3">
        <?php get_sidebar(); ?>
    </div>
    <div class="col-lg-9 col-md-9">
	       <div class="noticias">
	       		<div class="publicacion clearfix">
	       			<?php include('plantilla_noticias.php'); ?> 
<?php if(function_exists('wp_paginate')) {
              wp_paginate();
            } ?>
	       		</div>  
	    	</div>
	   </div> 
	</div>

<?php get_footer(); ?>