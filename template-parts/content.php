<article id="post-<?php the_ID();?>" <?php post_class(); ?> >

    <header>
        <a href="<?php echo the_permalink(); ?>"><?php the_title( '<h1>', '</h1>'); ?></a>
    </header>
    
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    
</article>