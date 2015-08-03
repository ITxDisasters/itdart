<?php get_header(); ?>

<div class="article_wrapper">
    <article class="article_home">
        
        <section class="home_topbox">
            <div class="leftbox">
                <h2><img src="/itdartwp/wp-content/uploads/2015/07/logo_itdart_big.png" alt="情報支援レスキュー隊 IT DART (Disaster Assistance Response Team)" width="460"></h2>
                <p class="big">私たちは、災害発生時に迅速に被災地に赴き、情報の収集・活用・発信に関わる支援活動を行う「情報 × ITの緊急支援チーム」発足に向けて活動を始めました。</p>
            </div>
            <div class="rightbox">
                <h3>情報収集</h3>
                <p>発災時、直ちに被災地に赴き、現地における情報支援ニーズを継続的に収集する。</p>
                <h3>情報活用</h3>
                <p>時々の情報支援ニーズに基づき必要な人材、機材、サービス、プログラム開発を調達・提供するコーディネートを行う。</p>
                <h3>情報発信</h3>
                <p>被災地の状況やニーズを継続的に発信し、被災地の時々の生の現状を広く知らせる。</p>
            </div>
        </section>
        
        <?php if( is_active_sidebar( 'topbox' ) ): ?>
            <section class="highlight">
                <?php dynamic_sidebar( 'topbox' ); ?>
            </section>
        <?php endif; ?>

        <?php $home_args = array(
            'page_id' => 31
        );
        $home_query = new WP_Query( $home_args );
        if ( $home_query->have_posts() ) : while ( $home_query->have_posts() ) : $home_query->the_post(); ?>
            <section>

                <div class="content">
                    <?php the_content(); ?>
                </div>

            </section>
        <?php endwhile; ?>
        
        <?php if(function_exists('wp_pagenavi')) {
            wp_pagenavi(array( 'type' => 'multipart'));
        } ?>

        <?php endif; wp_reset_postdata(); ?>

    </article>
</div>

<?php get_footer(); ?>