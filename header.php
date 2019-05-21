<!-- Plantilla personalizada  por: Nestor Morel | v2.2 -->
<!DOCTYPE html>
    <!--[if IE 7]>
    <html class="ie ie7 " lang="es-ES" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <![endif]-->
    <!--[if IE 8]>
    <html class="ie ie8 " lang="es-ES" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<![endif]-->

    <!--[if !(IE 7) | !(IE 8) ]> <!-->
<html class="" lang="es-ES" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <meta name="Googlebot-News" content="noindex, follow">
    <meta name="ROBOTS" content="INDEX,FOLLOW" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />
    <meta name="author" content="Muvh"/>
    <meta name="lang" content="es"/>


    <link rel="canonical" href="https://www.muvh.com.py/" />

    <title><?php
    /*
     * Print the <title> tag based on what is being viewed.
     */
    global $page, $paged;

    wp_title( '|', true, 'right' );

    // Add the blog name.
    bloginfo( 'name' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
      echo " | $site_description";

    ?></title>


    <!-- Bootstrap core CSS -->
    <link href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
        <link href="<?php echo bloginfo('template_url'); ?>/css/showcase.css" rel="stylesheet">
        <link href="<?php echo bloginfo('template_url'); ?>/fonts/fonts.css" rel="stylesheet">
    <!-- Custom styles for this template -->
        <link href="<?php echo bloginfo('stylesheet_url'); ?>" rel="stylesheet">
        <link rel="shortcut icon" href="https://www.muvh.gov.py/sitio/wp-content/uploads/2018/09/icono.png" type="image/x-icon"/>
        <link rel="icon" href="https://www.muvh.gov.py/sitio/wp-content/uploads/2018/09/icono.png" type="image/x-icon"/>
    <?php
	    //wp_deregister_script('jquery');
	    wp_head();
    ?>

<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-21237721-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-21237721-1');
    </script>
<script src='https://www.google.com/recaptcha/api.js'></script>

    </head>
    <body>

        <div class="container" id="cabecera">
            <div class="row">
            <div class="hidden-xs">
  <img src="https://www.muvh.gov.py/sitio/wp-content/uploads/2018/11/muvh.gif" alt="Transicion-animada_3.gif" width="1000" height="170" class="responsive"style="padding-left:45px;" media="(min-width: 768px)">

</div>
<div class="cabecera-responsive visible-xs"></div>
        </div> 
                </div>

        <div class="navbar navbar-default navbar-senavitat navbar-senavitat1  " role="navigation">

            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->


                <div class="navbar-header hidden-md hidden-lg  hidden-sm">


                    <a class="navbar-brand" href="#">MUVH</a>

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                </div>


                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse ">

         

                  <?php
                      wp_nav_menu( array(
                          'menu'              => 'primary',
                          'theme_location'    => 'primary',
                          'depth'             => 2,
                          'container'         => false,
                          'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
                          'menu_class'        => 'nav navbar-nav',
                          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                          'walker'            => new wp_bootstrap_navwalker())
                      );
                  ?>

                  <ul class="nav navbar-nav navbar-right  hidden-xs  hidden-sm">

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle resaltado" data-toggle="dropdown">Programas <br /> Habitacionales <b class="caret"></b></a>
                      <ul class="dropdown-menu programasdropdown">
                          <li class="programasmenu">
<!-- Nuevo icono Agregado barrio San Francisco - by Nestor Morel -->

                     <a href="https://www.muvh.gov.py/proyectosanfrancisco/" title="San francisco">

                                          <img width="169" height="89" src="https://www.senavitat.gov.py/sitio/wp-content/uploads/2017/09/san-francsc-2-169x89.png" class="attachment-programas_thumb size-programas_thumb wp-post-image" alt="">                                     </a>


<!-- Nuevo icono Modificado Viviendas Economicas Acceso Rapido- by Nestor Morel -->

<a href="https://www.muvh.gov.py/viviendaseconomicas/" title="Viviendas Economicas">

                                          <img width="169" height="89" src="https://www.senavitat.gov.py/sitio/wp-content/uploads/2013/10/clase-media-169x89-1.jpg" class="attachment-programas_thumb size-programas_thumb wp-post-image" alt="">                                      </a>
<!-- Nuevo icono  Empleogar Acceso Rapido- by Nestor Morel -->

			<a href="https://www.muvh.gov.py/empleogar/" title="Empleogar"><img width="169" height="89" src="https://www.muvh.gov.py/sitio/wp-content/uploads/2018/02/empleogar1-1-169x89.jpg" class="attachment-programas_thumb size-programas_thumb wp-post-image" alt="">
                      </a>
                                <?php
                                  $args = null;
                                  $args['post_type']='programas';
                                  $args['posts_per_page']=15;
                                  $args['order_by']="date";
                                  $args['order']='asc';
                                  query_posts($args);
                                 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                                      <a href="<?php the_permalink(); ?>"  title="<?php the_title(); ?>">
                                          <?php echo get_the_post_thumbnail( get_the_ID(), 'programas_thumb' ); ?>
                                      </a>

                                  <?php endwhile; else: ?>
                                      <h1>No hay contenido en esta seccion.</h1>
                                  <?php endif;
                                  $args = null;
                                  wp_reset_query();
                                   ?>

                            </li>
</ul>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
             </div><!-- fin navbar container -->
         </div>


        <div class="container">
      <div class="row">
      <div class="col-lg-12">
        <div class="programasmovil hidden-lg hidden-md <?php if(!(is_home())){ echo 'hidden-xs  hidden-sm'; }?>">
        <h3>Programas Habitacionales</h3>

            <?php
            $args = null;
            $args['post_type']='programas';
            $args['posts_per_page']=15;
            $args['order_by']="date";
            $args['order']='asc';
            query_posts($args);
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


                <a href="<?php the_permalink(); ?>" class="btn btn-default btn-lg btn-block"  title="<?php the_title(); ?>">
                    <?php the_title(); ?>
                </a>


            <?php endwhile; else: ?>
                <h1>No hay contenido en esta seccion.</h1>
            <?php endif;
            $args = null;
            wp_reset_query();
            ?>
<!-- Nuevo icono programa habitacional Agregado para movil - by Nestor Morel  -->

 <a href="https://www.muvh.gov.py/viviendaseconomicas" class="btn btn-default btn-lg btn-block">
                                  Viviendas Economicas  </a>
 <a href="https://www.muvh.gov.py/empleogar/" class="btn btn-default btn-lg btn-block">
                                 Empleogar  </a>
        </div>
       </div>
      </div>
                    </div>