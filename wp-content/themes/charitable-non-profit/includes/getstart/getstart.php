<?php
//about theme info
add_action( 'admin_menu', 'charitable_non_profit_gettingstarted' );
function charitable_non_profit_gettingstarted() {
	add_theme_page( esc_html__('Charitable Non Profit', 'charitable-non-profit'), esc_html__('Charitable Non Profit', 'charitable-non-profit'), 'edit_theme_options', 'charitable_non_profit_about', 'charitable_non_profit_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function charitable_non_profit_admin_theme_style() {
	wp_enqueue_style('charitable-non-profit-custom-admin-style', esc_url(get_template_directory_uri()) . '/includes/getstart/getstart.css');
	wp_enqueue_script('charitable-non-profit-tabs', esc_url(get_template_directory_uri()) . '/includes/getstart/js/tab.js');
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
}
add_action('admin_enqueue_scripts', 'charitable_non_profit_admin_theme_style');

// Changelog
if ( ! defined( 'CHARITABLE_NON_PROFIT_CHANGELOG_URL' ) ) {
    define( 'CHARITABLE_NON_PROFIT_CHANGELOG_URL', get_template_directory() . '/readme.txt' );
}

function charitable_non_profit_changelog_screen() {	
	global $wp_filesystem;
	$changelog_file = apply_filters( 'charitable_non_profit_changelog_file', CHARITABLE_NON_PROFIT_CHANGELOG_URL );
	if ( $changelog_file && is_readable( $changelog_file ) ) {
		WP_Filesystem();
		$changelog = $wp_filesystem->get_contents( $changelog_file );
		$changelog_list = charitable_non_profit_parse_changelog( $changelog );
		echo wp_kses_post( $changelog_list );
	}
}

function charitable_non_profit_parse_changelog( $content ) {
	$content = explode ( '== ', $content );
	$changelog_isolated = '';
	foreach ( $content as $key => $value ) {
		if (strpos( $value, 'Changelog ==') === 0) {
	    	$changelog_isolated = str_replace( 'Changelog ==', '', $value );
	    }
	}
	$changelog_array = explode( '= ', $changelog_isolated );
	unset( $changelog_array[0] );
	$changelog = '<div class="changelog">';
	foreach ( $changelog_array as $value) {
		$value = preg_replace( '/\n+/', '</span><span>', $value );
		$value = '<div class="block"><span class="heading">= ' . $value . '</span></div><hr>';
		$changelog .= str_replace( '<span></span>', '', $value );
	}
	$changelog .= '</div>';
	return wp_kses_post( $changelog );
}

//guidline for about theme
function charitable_non_profit_mostrar_guide() { 
	//custom function about theme customizer
	$charitable_non_profit_return = add_query_arg( array()) ;
	$charitable_non_profit_theme = wp_get_theme( 'charitable-non-profit' );
?>

    <div class="top-head">
		<div class="top-title">
			<h2><?php esc_html_e( 'Charitable Non Profit', 'charitable-non-profit' ); ?></h2>
		</div>
		<div class="top-right">
			<span class="version"><?php esc_html_e( 'Version', 'charitable-non-profit' ); ?>: <?php echo esc_html($charitable_non_profit_theme['Version']);?></span>
		</div>
    </div>

    <div class="inner-cont">

	    <div class="tab-sec">
	    	<div class="tab">
				<button class="tablinks" onclick="charitable_non_profit_open_tab(event, 'wpelemento_importer_editor')"><?php esc_html_e( 'Setup With Elementor', 'charitable-non-profit' ); ?></button>
				<button class="tablinks" onclick="charitable_non_profit_open_tab(event, 'setup_customizer')"><?php esc_html_e( 'Setup With Customizer', 'charitable-non-profit' ); ?></button>
				<button class="tablinks" onclick="charitable_non_profit_open_tab(event, 'changelog_cont')"><?php esc_html_e( 'Changelog', 'charitable-non-profit' ); ?></button>
			</div>

			<div id="wpelemento_importer_editor" class="tabcontent open">
				<?php if(!class_exists('WPElemento_Importer_ThemeWhizzie')){
					$plugin_ins = Charitable_Non_Profit_Plugin_Activation_WPElemento_Importer::get_instance();
					$charitable_non_profit_actions = $plugin_ins->recommended_actions;
					?>
					<div class="charitable-non-profit-recommended-plugins ">
							<div class="charitable-non-profit-action-list">
								<?php if ($charitable_non_profit_actions): foreach ($charitable_non_profit_actions as $key => $charitable_non_profit_actionValue): ?>
										<div class="charitable-non-profit-action" id="<?php echo esc_attr($charitable_non_profit_actionValue['id']);?>">
											<div class="action-inner plugin-activation-redirect">
												<h3 class="action-title"><?php echo esc_html($charitable_non_profit_actionValue['title']); ?></h3>
												<div class="action-desc"><?php echo esc_html($charitable_non_profit_actionValue['desc']); ?></div>
												<?php echo wp_kses_post($charitable_non_profit_actionValue['link']); ?>
											</div>
										</div>
									<?php endforeach;
								endif; ?>
							</div>
					</div>
				<?php }else{ ?>
					<div class="tab-outer-box">
						<h3><?php esc_html_e('Welcome to WPElemento Theme!', 'charitable-non-profit'); ?></h3>
						<p><?php esc_html_e('Click on the quick start button to import the demo.', 'charitable-non-profit'); ?></p>
						<div class="info-link">
							<a  href="<?php echo esc_url( admin_url('admin.php?page=wpelementoimporter-wizard') ); ?>"><?php esc_html_e('Quick Start', 'charitable-non-profit'); ?></a>
						</div>
					</div>
				<?php } ?>
			</div>

			<div id="setup_customizer" class="tabcontent">
				<div class="tab-outer-box">
				  	<div class="lite-theme-inner">
						<h3><?php esc_html_e('Theme Customizer', 'charitable-non-profit'); ?></h3>
						<p><?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'charitable-non-profit'); ?></p>
						<div class="info-link">
							<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'charitable-non-profit'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Help Docs', 'charitable-non-profit'); ?></h3>
						<p><?php esc_html_e('The complete procedure to configure and manage a WordPress Website from the beginning is shown in this documentation .', 'charitable-non-profit'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( CHARITABLE_NON_PROFIT_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'charitable-non-profit'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Need Support?', 'charitable-non-profit'); ?></h3>
						<p><?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'charitable-non-profit'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( CHARITABLE_NON_PROFIT_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'charitable-non-profit'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Reviews & Testimonials', 'charitable-non-profit'); ?></h3>
						<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'charitable-non-profit'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( CHARITABLE_NON_PROFIT_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'charitable-non-profit'); ?></a>
						</div>
						<hr>
						<div class="link-customizer">
							<h3><?php esc_html_e( 'Link to customizer', 'charitable-non-profit' ); ?></h3>
							<div class="first-row">
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','charitable-non-profit'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','charitable-non-profit'); ?></a>
									</div>
								</div>
							
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=header_image') ); ?>" target="_blank"><?php esc_html_e('Header Image','charitable-non-profit'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','charitable-non-profit'); ?></a>
									</div>
								</div>
							</div>
						</div>
				  	</div>
				</div>
			</div>

			<div id="changelog_cont" class="tabcontent">
				<div class="tab-outer-box">
					<?php charitable_non_profit_changelog_screen(); ?>
				</div>
			</div>
			
		</div>

		<div class="inner-side-content">
			<h2><?php esc_html_e('Premium Theme', 'charitable-non-profit'); ?></h2>
			<div class="tab-outer-box">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
				<h3><?php esc_html_e('Charitable Non Profit WordPress Theme', 'charitable-non-profit'); ?></h3>
				<div class="iner-sidebar-pro-btn">
					<span class="premium-btn"><a href="<?php echo esc_url( CHARITABLE_NON_PROFIT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Premium', 'charitable-non-profit'); ?></a>
					</span>
					<span class="demo-btn"><a href="<?php echo esc_url( CHARITABLE_NON_PROFIT_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'charitable-non-profit'); ?></a>
					</span>
					<span class="doc-btn"><a href="<?php echo esc_url( CHARITABLE_NON_PROFIT_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Theme Bundle', 'charitable-non-profit'); ?></a>
					</span>
				</div>
				<hr>
				<div class="premium-coupon">
					<div class="premium-features">
						<h3><?php esc_html_e('premium Features', 'charitable-non-profit'); ?></h3>
						<ul>
							<li><?php esc_html_e( 'Multilingual', 'charitable-non-profit' ); ?></li>
							<li><?php esc_html_e( 'Drag and drop features', 'charitable-non-profit' ); ?></li>
							<li><?php esc_html_e( 'Zero Coding Required', 'charitable-non-profit' ); ?></li>
							<li><?php esc_html_e( 'Mobile Friendly Layout', 'charitable-non-profit' ); ?></li>
							<li><?php esc_html_e( 'Responsive Layout', 'charitable-non-profit' ); ?></li>
							<li><?php esc_html_e( 'Unique Designs', 'charitable-non-profit' ); ?></li>
						</ul>
					</div>
					<div class="coupon-box">
						<h3><?php esc_html_e('Use Coupon Code', 'charitable-non-profit'); ?></h3>
						<a class="coupon-btn" href="<?php echo esc_url( CHARITABLE_NON_PROFIT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('UPGRADE NOW', 'charitable-non-profit'); ?></a>
						<div class="coupon-container">
							<h3><?php esc_html_e( 'elemento20', 'charitable-non-profit' ); ?></h3>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>

<?php } ?>