<!DOCTYPE html>
<!--[if IE]>	<html class="no-js ie"> <![endif]-->
<!--[if !IE]><!-->
<html class="no-js" lang="pt-br">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		<?php if ( is_category() ) {
		echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_tag() ) {
		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_archive() ) {
		wp_title(''); echo ' Archive | '; bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
	} elseif ( is_home() || is_front_page() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' );
	} elseif ( is_single() ) {
		bloginfo( 'name' ); echo ' | '; wp_title(''); 
	} else {
		echo wp_title( ' | ', false, right ); bloginfo( 'name' );
	} ?>
	</title>
	<meta name="description" content="<?php bloginfo('name'); ?>">
	<meta name="author" content="<?php bloginfo('name'); ?>" />
	<meta property="og:title" content="<?php bloginfo('name'); ?> - <?php wp_title(''); ?>" />
	<meta property="og:description" content="<?php bloginfo('name'); ?> - <?php wp_title(''); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.siteurl.com<?php echo $directoryURI; ?>" />
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.png" />
	<meta property="og:site_name" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	<?php wp_head(); ?>
</head>

<body>

	<header class="header">
		<div class="container">
			<div class="row align-items-center justify-content-between">
			<a href="<?php bloginfo('url'); ?>" class="header-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/svg/inovace.svg" alt="Inovace Logo">
			</a>
			<nav>
				<?php
					$args = array(
						'menu' => 'primary',
						'theme_location' => 'menu-primary',
						'container' => false
					);
					wp_nav_menu( $args );
				?>
			</nav>
			<div class="menuOne">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
			</div>
		</div>
	</header>
