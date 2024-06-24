<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
    <title>WP Theme - Rajvinder Singh</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 
    <?php wp_head(); ?>
    
</head>

<body <?php body_class( );?>>
    
    <section id="logo-top" class="logo-top">
        Acefone
    </section>
    
    <nav id="site-navigation" class="main-navigation" role="navigation">
    
        <?php 
            $args = [
                'theme-location' => 'main-menu'
            ];
        
            wp_nav_menu( $args );
        
        ?>
    
    </nav>