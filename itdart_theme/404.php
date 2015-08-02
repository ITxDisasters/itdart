<?php get_header(); ?>

<div class="article_wrapper">
    <article class="article_page">

        <section>

            <h1>404 Not Found</h1>

            <div class="content">
                <p>お探しの記事は見つかりませんでした。</p>
            </div>

        </section>

        <?php if(function_exists('bcn_display')): ?>
            <p class="breadcrumb">
                <?php bcn_display(); ?>
            </p>
        <?php endif; ?>

        <?php if(function_exists('wp_pagenavi')) {
            wp_pagenavi(array( 'type' => 'multipart'));
        } ?>

    </article>
</div>

<?php get_footer(); ?>