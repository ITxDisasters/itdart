<?php get_header(); ?>

<div class="article_wrapper">
    <article class="article_page category_event">
    
        <?php $mirai_args = array(
            'cat' => 6
        );
        $mirai_query = new WP_Query( $mirai_args );
        if ( $mirai_query->have_posts() ) : ?>
            <h1>今後のイベント</h1>
            <section>
                <ul>
                <?php while ( $mirai_query->have_posts() ) : $mirai_query->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
                </ul>
            </section>
        <?php endif; wp_reset_postdata(); ?>

        <?php $mirai_args = array(
            'cat' => 4
        );
        $mirai_query = new WP_Query( $mirai_args );
        if ( $mirai_query->have_posts() ) : ?>
            <h1>これまでのイベント</h1>
            <section>
                <ul>
                <?php while ( $mirai_query->have_posts() ) : $mirai_query->the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
                </ul>
            </section>
        <?php endif; wp_reset_postdata(); ?>
        
        <p class="breadcrumb">
            <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="ホームへ戻る" href="http://itdart-org.check-xserver.jp" class="home">IT DART</a></span> &gt; <span typeof="v:Breadcrumb"><span property="v:title">イベント</span></span>
        </p>
        
        <?php if(function_exists('wp_pagenavi')) {
            wp_pagenavi(array( 'type' => 'multipart'));
        } ?>

    </article>
</div>

<?php get_footer(); ?>