<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Charitable Non Profit
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>
<?php if(get_theme_mod('charitable_non_profit_preloader_hide', false )){ ?>
	<div class="loader">
		<div class="preloader">
			<div class="diamond">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
<?php } ?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'charitable-non-profit' ); ?></a>

<header id="site-navigation" class="header">
	<div class="main-header">
		<div class="container">
			<?php if ( get_theme_mod('charitable_non_profit_elementor_header_adv_tittle') || get_theme_mod('charitable_non_profit_elementor_header_adv_text') || get_theme_mod('charitable_non_profit_social_links_settings') ) : ?>
				<div class="top-header px-5 py-1">
					<div class="row">
						<div class="col-lg-8 col-md-8 align-self-center">
							<?php if ( get_theme_mod('charitable_non_profit_elementor_header_adv_tittle') || get_theme_mod('charitable_non_profit_header_adv_text') ) : ?>
								<p class="mb-0"><span class="adv-tittle" ><?php echo esc_html( get_theme_mod('charitable_non_profit_elementor_header_adv_tittle' ) ); ?></span><span class="adv-text" ><?php echo esc_html( get_theme_mod('charitable_non_profit_elementor_header_adv_text' ) ); ?></span></p>
							<?php endif; ?>
						</div>
						<div class="col-lg-4 col-md-4 align-self-center">
							<?php $charitable_non_profit_settings = get_theme_mod( 'charitable_non_profit_social_links_settings' ); ?>
							<div class="social-links text-center text-md-right">
								<?php if ( is_array($charitable_non_profit_settings) || is_object($charitable_non_profit_settings) ){ ?>
									<?php foreach( $charitable_non_profit_settings as $charitable_non_profit_setting ) { ?>
										<a href="<?php echo esc_url( $charitable_non_profit_setting['link_url'] ); ?>">
											<i class="<?php echo esc_attr( $charitable_non_profit_setting['link_text'] ); ?> mr-2"></i>
										</a>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>	
			<div class="middle-header py-2">
				<div class="row">
					<div class="col-lg-3 col-md-3 align-self-center">
						<div class="logo text-center text-md-left mb-3 mb-md-0">
							<div class="logo-image text-center">
								<?php the_custom_logo(); ?>
							</div>
							<div class="logo-content text-center">
								<?php
									if ( get_theme_mod('charitable_non_profit_display_header_title', true) == true ) :
										echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
										echo esc_attr(get_bloginfo('name'));
										echo '</a>';
									endif;
									if ( get_theme_mod('charitable_non_profit_display_header_text', false) == true ) :
										echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
									endif;
								?>
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-md-6 align-self-center d-flex justify-content-around flex-wrap">
						<?php if ( get_theme_mod('charitable_non_profit_header_location') || get_theme_mod('charitable_non_profit_header_location_text') ) : ?>
							<div class="row header-icon">
								<div class="col-lg-2 col-md-2 col-sm-3 align-self-center p-0">
									<i class="fas fa-map-marker-alt"></i>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-9 align-self-center">
									<h6 class="mb-0"><?php echo esc_html( get_theme_mod('charitable_non_profit_header_location_text' ) ); ?></h6>
									<p class="mb-0"><?php echo esc_html( get_theme_mod('charitable_non_profit_header_location' ) ); ?></p>
								</div>
							</div>
						<?php endif; ?>
						<?php if ( get_theme_mod('charitable_non_profit_header_phone_number') || get_theme_mod('charitable_non_profit_header_phone_number_text') ) : ?>
							<div class="row header-icon">
								<div class="col-lg-2 col-md-2 col-sm-3 align-self-center p-0">
									<i class="fas fa-phone"></i>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-9 align-self-center">
									<h6 class="mb-0"><?php echo esc_html( get_theme_mod('charitable_non_profit_header_phone_number_text' ) ); ?></h6>
									<p class="mb-0"><?php echo esc_html( get_theme_mod('charitable_non_profit_header_phone_number' ) ); ?></p>
								</div>
							</div>
						<?php endif; ?>
						<?php if ( get_theme_mod('charitable_non_profit_header_email_text') || get_theme_mod('charitable_non_profit_header_email') ) : ?>
							<div class="row header-icon">
								<div class="col-lg-2 col-md-2 col-sm-3 align-self-center p-0">
									<i class="fas fa-envelope"></i>
								</div>
								<div class="col-lg-10 col-md-10 col-sm-9 align-self-center">
									<h6 class="mb-0"><?php echo esc_html( get_theme_mod('charitable_non_profit_header_email_text' ) ); ?></h6>
									<p class="mb-0"><?php echo esc_html( get_theme_mod('charitable_non_profit_header_email' ) ); ?></p>
								</div>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-lg-2 col-md-3 align-self-center text-center ">
						<?php if ( get_theme_mod('charitable_non_profit_header_button_url') || get_theme_mod('charitable_non_profit_header_button_text') ) : ?>
						<div class="donate-btn py-2">
							<a href="<?php echo esc_url( get_theme_mod('charitable_non_profit_header_button_url' ) ); ?>"><?php echo esc_html( get_theme_mod('charitable_non_profit_header_button_text' ) ); ?></a>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-header <?php if( get_theme_mod( 'charitable_non_profit_sticky_header','on') != '') { ?>sticky-header<?php } else { ?>close-sticky <?php } ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
				</div>
				<div class="col-lg-9 col-md-12 align-self-center text-center">
					<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><?php esc_html_e( 'Menu', 'charitable-non-profit' ); ?></span>
					</button>
					<nav id="main-menu" class="close-panal">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>