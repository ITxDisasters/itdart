<?php
if( get_field('warp') && is_singular() ){
	$forward_uri = get_field('warp');
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: '.$forward_uri);
}


// polylang get translations
// $translations = pll_the_languages(array('raw'=>1));
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
        global $page, $paged;
        wp_title( '|', true, 'right' );
        bloginfo( 'name' );
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( ' %s Page ' ), max( $paged, $page ) );
    ?></title>
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="home" href="<?php bloginfo("url"); ?>">
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/analytics.js" type="text/javascript"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="header_wrapper">
    <header>
		<h1><a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo("name"); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo_itdart.png" alt="<?php bloginfo("name"); ?>">
		</a></h1>

        <nav><?php
            wp_nav_menu( array(
                'theme_location' => 'header',
                'items_wrap' => '<ul>%3$s</ul>',
                'container' => false,
                'link_before' => '',
                'link_after' => ''
            ));
        ?></nav>
    </header>
</div>