            <?php if(!(is_home())){ ?>
            <div class="row hidden-lg hidden-md hidden-print">
                <div class="col-lg-12">
                <a href="<?php echo bloginfo('url'); ?>" class="btn btn-default">Volver al Inicio</a>
                </div>
            </div>
            <?php } ?>
            
            <div class="row">
                   <div class="col-lg-12">
                        <div class="pie">
                           
                                <p>
                                    Independencia Nacional Nro. 909 e/ Manuel Dom&iacute;nguez - 
                                    Asunci&oacute;n, Paraguay - 
                                    Tel&eacute;fonos: 021-444-340 R.A - Email: consultas@muvh.gov.py
                                </p>
                            
                        </div>
                   </div>
               </div>
        
       
        
        
        <div id="aviso-navegador" >
            <span>Su navegador web (Internet Explorer 6 - 7) <strong>estÃƒÂ¡ obsoleto</strong>  por lo cual algunos elementos podrian no mostrarse correctamente, Le recomendamos instalarse los navegadores <strong><a href="http://www.mozilla.org/es-ES/firefox/new/" target="_blank">Firefox</a></strong> o <strong><a href="http://www.google.com/chrome" target="_blank">Chrome</a></strong> o <a href="http://www.microsoft.com/spain/windows/internet-explorer/" target="_blank">actualizar su navegador aquÃƒÂ­</a>.</span>
        </div>

        <!--<div id="aviso-navegador2">
            <span>Su navegador web (Internet Explorer 8) <strong>es un poco antiguo</strong> por lo cual algunos elementos podrian no mostrarse correctamente, Le recomendamos instalarse los navegadores <strong><a href="http://www.mozilla.org/es-ES/firefox/new/" target="_blank">Firefox</a></strong> o <strong><a href="http://www.google.com/chrome" target="_blank">Chrome</a></strong> o <a href="http://www.microsoft.com/spain/windows/internet-explorer/" target="_blank">actualizar su navegador aquÃƒÂ­</a>.</span>
        </div>-->

        

        <!-- Javascript del bootstrapp y jquery
        ================================================== -->
        <!-- Se pone al final para que el sitio cargue mas rapido -->
        <script src="<?php echo bloginfo('template_url'); ?>/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.aw-showcase.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function()
            {
                    jQuery("#showcase").awShowcase(
                    {
                            content_width:          1140,
                            content_height:         340,
                            fit_to_parent:          true,
                            auto:                   true,
                            interval:               8500,
                            continuous:             true,
                            loading:                true,
                            arrows:             	false,
                            buttons:                true,
                            btn_numbers:            false,
                            keybord_keys:           true,
                            mousetrace:             false, /* Trace x and y coordinates for the mouse */
                            pauseonover:            true,
                            stoponclick:            false,
                            transition:             'hslide', /* hslide/vslide/fade */
                            transition_delay:       0,
                            transition_speed:       800,
                            show_caption:           'onload', /* onload/onhover/show */
                            thumbnails:             false,
                            thumbnails_position:    'outside-last', /* outside-last/outside-first/inside-last/inside-first */
                            thumbnails_direction:   'vertical', /* vertical/horizontal */
                            thumbnails_slidex:      1, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
                            dynamic_height:         false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
                            speed_change:           true, /* Set to true to prevent users from swithing more then one slide at once. */
                            viewline:               false, /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
                            custom_function:        null /* Define a custom function that runs on content change */
                    });


                   /*   jQuery('ul.nav li.dropdown, ul.nav li.dropdown-submenu').hover(function() {
                        jQuery(this).find( '.dropdown-menu').stop(true, true).delay(200).fadeIn();
                      }, function() {
                        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
                      });*/

            });
            </script>

            <?php wp_footer() ?>
    </body>
</html>