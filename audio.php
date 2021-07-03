<?php get_header(); ?>

<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

        <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <header class="entry-header">

                    <?php the_title( '<h1>', '</h1>' ); ?>

                </header>

                <div class="entry-content">

                    <audio src="<?php echo esc_url( $post->guid ); ?>" controls style="width: 100%;"></audio>

                    <?php the_content(); ?>

                </div>

                <?php if( comments_open() ) : ?>

                    <?php comments_template(); ?>

                <?php endif; ?>

            </article>

        <?php endwhile; else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>

    </main>
    <p>Template: Audio</p>

</div>


<?php get_sidebar(); ?>
    
<?php get_footer(); ?>