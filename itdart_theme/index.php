<?php get_header(); ?>

<div class="article_wrapper">
    <article>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <section>

                <h1><?php the_title(); ?></h1>

                <div class="content">
                    <?php the_content(); ?>
                </div>

            </section>
        <?php endwhile; ?>

            <?php if(function_exists('bcn_display')): ?>
                <p class="breadcrumb">
                    <?php bcn_display(); ?>
                </p>
            <?php endif; ?>

            <?php if(function_exists('wp_pagenavi')) {
                wp_pagenavi(array( 'type' => 'multipart'));
            } ?>

        <?php endif; ?>

    </article>
</div>

<?php get_footer(); ?>