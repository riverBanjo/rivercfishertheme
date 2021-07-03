<?php get_header(); ?>

<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

        <h1><?php wp_title( '' ); ?></h1>

        <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'posts' ); ?>

        <?php endwhile; else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>

        <?php echo paginate_links(); ?>

    </main>
    <p>Template: Home</p>

</div>


<?php get_sidebar(); ?>
    
<?php get_footer(); ?>