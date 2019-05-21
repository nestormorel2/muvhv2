     <?php
/* plantilla de la pagina de inicio */
get_header(); ?>
<?php include('homeslider.php'); ?>
<div class="row">
    <div class="col-lg-3 col-md-3">
        <?php get_sidebar(); ?>

  
    </div>
      <div class="col-lg-9 col-md-9">
       <div class="noticias noticiashome">
<h2 class="titulopost"> <span style="color:#000000;">Últimas noticias publicadas</h2>
      </span>
       <?php

            include('plantilla_noticias.php');
            $args = null;
            wp_reset_query(); 
            ?>

     
       </div>
    </div>
</div>
<?php get_footer(); ?>