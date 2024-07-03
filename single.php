
<?php get_header(); ?>



    <div id="primary" class="content-area">
        
        
        <main id="main" class="site-main" role="main">
            
            <?php if( have_posts()): 
                     while ( have_posts() ):
                            the_post();   ?>
            
            <?php get_template_part( 'template-parts/content' );?>
            
            <?php endwhile; else :  ?>
            
            <?php get_template_part( 'template-parts/content','404' );?>
           
            
            
            <?php endif; ?>
            
            <p>Template : Index.php</p>
            
        </main>
        
    <?php get_sidebar(); ?>
        
    </div>
	 

<?php get_footer(); ?>