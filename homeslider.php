<div id="showcase" class="showcase  hidden-xs hidden-sm">
        <?php
        $args['post_type']='post';
        //$args['posts_per_page']='4';
        $args['posts_per_page']='15';

        $args['tax_query'] = array(
            array(
                'taxonomy' => 'portada',
                'terms' => array('ocultar'),
                'field' => 'slug',
                'operator' => 'NOT IN',
            ),
        );

        query_posts($args);
         if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="showcase-slide">
                <a href="<?php the_permalink(); ?>" class="showcase-content">
                        <div class="izquierda">
                            <h1><?php the_title(); ?></h1>
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="derecha">
                            <?php echo get_the_post_thumbnail( get_the_ID(), 'slider_thumb' ); ?>
                        </div>
                </a>
        </div>
        <?php endwhile; else: ?>
             <div class="showcase-slide">
                <div class="showcase-content">
                        <div class="izquierda">
                            <h1>No hay contenido en esta seccion</h1>
                            
                        </div>
                        <div class="derecha">
                            
                        </div>
                </div>
        </div>
        <?php endif; 
        $args = null;
        wp_reset_query();
        ?>

        
</div>


<div class="row">
<div class="col-lg-12 col-md-12">
    <div class="subbar clearfix hidden-xs hidden-sm hidden-md">
         <form class="col-lg-5 col-md-5 formbuscar" role="search" action="<?php echo bloginfo('url'); ?>" method="get"  id="searchform">
            <div class="form-inline buscar">
                <label class="fuente2">BUSCAR EN EL SITIO</label> <input type="text" name="s" id="inputbuscar" value="<?php the_search_query(); ?>" class="form-control input-sm" >      </div>
          </form> 

                   <div class="col-lg-7 col-md-5 social"> 
            <span class="fuente2"></span>
            <?php include('links_socialmedia.php'); ?>
        </div>
        
    </div>
</div>
</div>