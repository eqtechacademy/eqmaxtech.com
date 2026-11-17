<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-white text-slate-900' ); ?>>
<?php wp_body_open(); ?>
<header class="border-b border-slate-200">
	<div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-xl font-bold text-brand"><?php bloginfo( 'name' ); ?></a>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'container'      => 'nav',
			'menu_class'     => 'flex gap-6 text-sm font-medium',
			'fallback_cb'    => false,
		) );
		?>
	</div>
</header>
<main>
