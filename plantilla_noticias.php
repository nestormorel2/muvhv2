<?php /* plantilla utilizada para listar las noticias */ ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="publicestirar clearfix">
        <?php if(has_post_thumbnail(get_the_ID())){ ?><h2> <a href="<?php the_permalink(); ?>"> 

            <a href="<?php the_permalink(); ?>" class="">
                <?php echo get_the_post_thumbnail( get_the_ID(), 'bloqecitos_thumb foto_portada_item' ); ?>
                <?php the_title(); ?></a></h2>
            </a>
        <?php } ?> 

        <?php include('infonoticias.php'); ?>
        <?php the_excerpt(); ?>
        <br class="clearfix">
    </div>
<?php endwhile; else: ?>
    <h1>No hay contenido en esta seccion.</h1>
<?php endif; ?>

<br>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></br>