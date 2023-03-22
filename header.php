<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
   <div class="contenedor header-grid">
        <div class="barra-navegacion">
            <div class="logo">
            <h1> <a class="texto-primario" href="<?php echo esc_url(site_url('/')) ?>">
                    Cinemax
                </a></h1>
            </div>

            <?php
                $args = array(
                    'theme_location' => 'menu-principal', 
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
            ?>
            <div class="contacto">
            <p class="texto-primario">0124932818</p>
         <p class="texto-primario">Information and Bron service</p>
            </div>
         </div> 
        </div> <!--.barra-navegacion -->
   
 
   </div>

</header>