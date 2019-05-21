<?php /* plantilla comodin que muestra contenido de paginas, noticias etc, lo que sea necesario */ ?>
<?php get_header(); ?>
	<div class="row">
	   <div class="col-lg-3 col-md-3">
        <?php get_sidebar(); ?>
    </div>
    <div class="col-lg-9 col-md-9">
	       <div class="noticias">
	       		<div class="publicacion clearfix">

	       			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					    <h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>

					    <?php if(has_post_thumbnail(get_the_ID())){ ?> 
					           <div align="center" style="margin-bottom:20px;">
					                <?php echo get_the_post_thumbnail( get_the_ID(), 'medium' ); ?>
					           </div>
					    <?php } ?>

					    <?php the_content(); ?>
					    <br class="clearfix">
					<?php endwhile; else: ?>
					    <h1>No hay contenido en esta seccion.</h1>
					<?php endif; ?>
	       		</div>  
	    	</div>
	   </div> 
	</div>
<?php get_footer(); ?>           
          