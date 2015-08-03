<?php get_header(); ?>

<div class="article_wrapper">
    <article class="article_page">

        <?php if ( have_posts() ) : ?>
        <h1><?php if( $cat ){ single_cat_title(); } if($monthnum||$year){ echo $year.'年'; if($monthnum){ echo $monthnum.'月';} } ?></h1>
        
        <section>
            <ul>
            <?php while ( have_posts() ) : the_post(); ?>

                <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?> (<?php the_time('Y/m/d'); ?>)</a></li>
            <?php endwhile; ?>
            </ul>
        </section>
        
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