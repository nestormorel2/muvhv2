<?php /* plantilla comodin que muestra contenido de paginas, noticias etc, lo que sea necesario */ ?>
<?php get_header(); ?>
	<div class="row">
	   <div class="col-lg-3 col-md-3">
        <?php get_sidebar(); ?>
    </div>
    <div class="col-lg-9 col-md-9">
	       <div class="noticias">
	       		<div class="publicacion clearfix">
	       			<?php
	                $args['post_type']='post';
			$pagina=get_query_var('paged');
			$args['paged']=$pagina;
	                query_posts($args);
	       			 include('plantilla_noticias.php'); ?> 

	       		</div>  
	    	</div>
	   </div> 
	</div>
<?php get_footer(); ?>