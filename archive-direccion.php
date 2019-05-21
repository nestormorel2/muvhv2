<?php /* plantilla del listado de contrataciones */ ?>
<?php get_header(); ?>
	<div class="row">
	   <div class="col-lg-3 col-md-3">
        <?php get_sidebar(); ?>
    </div>
    <div class="col-lg-9 col-md-9">
	       <div class="noticias">
	       
	       		<div class="publicacion clearfix">

	       		<h2>Direcciones Generales</h2>

	       		<ul>
	       		<?php
	       			$args=$wp_query->query_vars;
	       		    $args['orderby']='date';
	       		    $args['order']='ASC';
	       		    $args['posts_per_page']='50';
	                query_posts($args);
	       		?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					        <li>
					        	<h3><a href="<?php the_permalink(); ?>"  style="text-align:center;"><?php the_title(); ?></a></h3>
					        	<a href="<?php the_permalink(); ?>" class="leermas" style="display:inline;">Ver información</a>
					        </li>
					       
					<?php endwhile; else: ?>
					    <li>No hay contenido en esta seccion.</li>
					<?php endif; ?>

				</ul>

	       		</div>  
	    	</div>
	   </div> 
	</div>
<?php get_footer(); ?>           
          