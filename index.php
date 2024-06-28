
<?php get_header(); ?>



    <div id="primary" class="content-area">
        
        
        <main id="main" class="site-main" role="main">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                <header class="entry-header">
                    <h1><?php the_title(); ?></h1>
                    <p></p>     
                </header>
                <div class="entry-content">
                    <p>Lorem Ipsum</p>
                      
                </div>
            </article>
        </main>
        
    <?php get_sidebar(); ?>
        
    </div>
	 

<?php get_footer(); ?>