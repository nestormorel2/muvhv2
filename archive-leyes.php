<?php /* plantilla del listado de contrataciones */ ?>
<?php get_header(); ?>
	<div class="row">
	   <div class="col-lg-3 col-md-3">
        <?php get_sidebar(); ?>
    </div>
    <div class="col-lg-9 col-md-9">
	       <div class="noticias">
	       
	       		<div class="publicacion clearfix">

	       		<h2>Leyes</h2>
		       		
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					    <div class="publicacion clearfix">
					        <h3> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
					   
					        
					        <?php the_excerpt(); ?>
					        <a href="<?php the_permalink(); ?>" class="leermas" style="text-align:center;">Ver documento</a>
					        <br class="clearfix">
					    </div>
					<?php endwhile; else: ?>
					    <h1>No hay contenido en esta seccion.</h1>
					<?php endif; ?>

					 <?php if(function_exists('wp_paginate')) {
              wp_paginate();
            } ?>
	       		</div>  
	    	</div>
	   </div> 
	</div>
<?php get_footer(); ?>           
          