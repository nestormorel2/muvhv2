
<!-- SESION BANNER | v1.1.1 -->
<br><a href="http://asuparticipa.asuncion.gov.py/participa-widget?institucion=MUVH" "><img class="alignnone  wp-image-3261" src="https://www.muvh.gov.py/recursosweb/image001.png" alt="bannerRecor" width="264" height="102" /></a></br>
<h2 class="tituloseccion">Sub-Sitios</h2>
<?php echo do_shortcode("[WLS id='20947']"); ?>
<a href="https://www.muvh.gov.py/?p=21150" "><img class="alignnone  wp-image-3261" src="http://www.muvh.gov.py/sitio/wp-content/uploads/2019/05/BANNERS.jpg" alt="bannerRecor" width="264" height="102" /></a>

<div class="sidebar <?php if(!(is_home())){ echo 'hidden-xs hidden-sm'; }?>">
<?php /*  ##########################################  Muestra el ultimo video cargado ###################################### */ ?>


<a href="https://www.muvh.gov.py/tipoinfo/videos/" title="Ver mas noticias"><h3>Videos</h3></a>
<?php
      $args = null;
      $args['post_type']='multimedia';
      $args['tipomultimedia']='videos';
      $args['posts_per_page']=1;
    
      query_posts($args);
     if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
                <?php
                    $video = get_the_content();
                    $pattern = '/width=["\']\s*\d+\s*["\']/';
                    $own_style = 'width="100%"' ;
                    $new = preg_replace($pattern, $own_style, $video);

                    $pattern = '/height=["\']\s*\d+\s*["\']/';
                    $own_style = 'height="195"' ;
                    $new = preg_replace($pattern, $own_style, $new);
                    echo $new;
                ?>
                <br>
              <a href="https://www.muvh.gov.py/tipoinfo/videos/"  title="<?php the_title(); ?>" class="leermas">
                 Ver todo
              </a>

      <?php endwhile; else: ?>
         
      <?php endif;
      $args = null;
      wp_reset_query();
?>




<?php /*  ##########################################  Muestra Buscador en sidebar en las internas y solo en movil en home ###################################### */ ?>

<?php if(!(is_home())){ ?>
    <h3>Buscar en el sitio</h3>
    <form class="col-lg-5 formbuscar" role="search"  action="<?php echo bloginfo('url'); ?>" method="get"  id="searchform">
            <div class="form-inline buscar">
                 <input type="text" name="s" id="inputbuscar" value="<?php the_search_query(); ?>" class="form-control input-sm" >
            </div>
          </form>
    <br class="clearfix">
<?php } else { ?>

<div class="hidden-lg">
<h3>Buscar en el sitio</h3>
    <form class="col-lg-5 formbuscar" role="search"  action="<?php echo bloginfo('url'); ?>" method="get"  id="searchform">
            <div class="form-inline buscar">
                 <input type="text" name="s" id="inputbuscar" value="<?php the_search_query(); ?>" class="form-control input-sm" >
            </div>
          </form>
    <br class="clearfix">
</div>
<?php }  ?>



<?php /* #############################################  Activa la barra lateral para organizar contenido dinamico ########################################## */ ?>

<?php if ( is_active_sidebar( 'lateral1' ) ) : ?>
    <ul class="lateral">
        <?php dynamic_sidebar( 'lateral1' ); ?>
    </ul>
<?php endif; ?>

<!--
<?php /* ############################################################  muestra contenido ################################################################### */ ?>
<h3>Multimedia</h3>
<ul>
    <?php 
    /*$tax=get_categories(array('taxonomy'=>'tipomultimedia','orderby'=>'slug', 'parent' => 0 ,  'hide_empty' => 0));      
    foreach($tax as $k=>$categoria){
            ?>
            <li><a href="<?php bloginfo('url');?>/zonas/<?php echo $categoria->slug;  ?>" ><?php echo $categoria->name; ?> </a></li>  
            <?php
    }*/
    ?>
    
</ul>




<?php /* ############################################################  muestra contenido ################################################################### */ ?>
<h3>Documentos</h3>
<ul>
    <li><a href="#">Documentos</a></li>
    <li><a href="#">Documentos</a></li>
    <li><a href="#">Documentos</a></li>
    
</ul>




<?php /* ############################################################  muestra contenido ################################################################### */ ?>
<h3>Publicaciones</h3>
<ul>
    <li><a href="#">Documentos</a></li>
    <li><a href="#">Documentos</a></li>
    <li><a href="#">Documentos</a></li>
    <li><a href="#">Documentos</a></li>
    <li><a href="#">Documentos</a></li>
    <li><a href="#">Documentos</a></li>
</ul>
-->


<?php /* #############################################  Activa una barra lateral secundaria para organizar contenido dinamico ############################## */ ?>

<?php if ( is_active_sidebar( 'lateral2' ) ) : ?>
    <ul class="lateral">
        <?php dynamic_sidebar( 'lateral2' ); ?>
    </ul>
<?php endif; ?>


<?php /* ##########################################  Muestra redes social en sidebar en las internas y solo en movil en home ############################### */ ?>

<?php if(!(is_home())){ ?>
    <h3>Muvh Social Media</h3>
    <div class="socialmedia">
        <?php include('links_socialmedia.php'); ?>
    </div>
<?php } else { ?>

<div class="hidden-lg">
    <h3>Muvh Social Media</h3>
    <div class="socialmedia">
        <?php include('links_socialmedia.php'); ?>
    </div>
</div>
<?php } ?>
</div>