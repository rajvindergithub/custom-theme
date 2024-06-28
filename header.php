<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
    <title>WP Theme - Rajvinder Singh</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 
    <?php wp_head(); ?>
    
</head>
    
    <style type="text/css">
        #primary{ display: flex; justify-content: space-between; align-items: center; background-color: #FFF; padding: 20px; border-radius: 10px; margin: 20px 0px;  }
    </style>

<body <?php body_class( );?>>
    
    <section id="logo-top" class="logo-top">
        Acefone
    </section>
    
    <div id="page">
        
    
        <header id="masthead" class="site-header" role="banner">
            
            <nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php 
                        $args = [
                            'theme-location' => 'main-menu'
                        ];
                        wp_nav_menu( $args );
                    ?>
            </nav>
            
            <div class="site-branding">
                <p class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ) ;?>" rel="home">
                        <?php bloginfo( 'name' );?> 
                    </a>
                </p>
                <p class="site-description">
                    <?php bloginfo( 'description' );?>
                </p>
                    <a href="#content" >
                        <?php esc_html_e('Skip to content');?>
                    </a>
        
            </div>
            
        </header>
        
        <div id="content">
        
       
     
    