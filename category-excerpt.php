<?php get_header(); ?>

<div id="primary" class="content-area extended">

    <main id="main" class="site-main" role="main">

        <h1>
            <?php the_archive_title(); ?>
            <?php esc_html_e( ' Posts Only!', 'rivercfishertheme' ); ?>
        </h1>
        <p><?php echo category_description(); ?></p>

        <hr>

        <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'posts' ); ?>

        <?php endwhile; else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>

        <?php echo paginate_links(); ?>

    </main>

    <p>Template: Category Excerpt</p>

</div>
    
<?php get_footer(); ?>