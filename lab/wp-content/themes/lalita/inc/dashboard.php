<?php
/**
 * Builds our admin page.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'lalita_create_menu' ) ) {
	add_action( 'admin_menu', 'lalita_create_menu' );
	/**
	 * Adds our "Lalita" dashboard menu item
	 *
	 */
	function lalita_create_menu() {
		$theme_name = wp_get_theme();
		$lalita_page = add_theme_page( esc_html( $theme_name ), esc_html( $theme_name ), apply_filters( 'lalita_dashboard_page_capability', 'edit_theme_options' ), 'lalita-options', 'lalita_settings_page' );
		add_action( "admin_print_styles-$lalita_page", 'lalita_options_styles' );
	}
}

if ( ! function_exists( 'lalita_options_styles' ) ) {
	/**
	 * Adds any necessary scripts to the Lalita dashboard page
	 *
	 */
	function lalita_options_styles() {
		wp_enqueue_style( 'lalita-options', get_template_directory_uri() . '/css/admin/admin-style.css', array(), LALITA_VERSION );
	}
}

if ( ! function_exists( 'lalita_admin_add_scripts' ) ) {
	// Add script to Editor
	add_action( 'admin_enqueue_scripts', 'lalita_admin_add_scripts');
	function lalita_admin_add_scripts(){
		
		// Check if we are on the custom admin page
		$screen = get_current_screen();
		
		// Load styles and scripts only on the 'WPKoi Templates for Elementor' admin page
		if ( $screen->id === 'appearance_page_lalita-options' ) {
			wp_enqueue_script( 'lalita-admin-script', get_template_directory_uri() . '/js/admin/admin-script.js', array( 'jquery' ), LALITA_VERSION );
		}
	}
}

// Disable admin notices on the specific page
if ( ! function_exists( 'lalita_disable_admin_notices' ) ) {

	add_action( 'admin_head', 'lalita_disable_admin_notices' );
	function lalita_disable_admin_notices() {
		$current_screen = get_current_screen();
		// Check if we are on the Lalita admin page
		if ( isset( $current_screen->id ) && $current_screen->id === 'appearance_page_lalita-options' ) {
			remove_all_actions( 'admin_notices' );
        	remove_all_actions( 'all_admin_notices' );
		}
	}
}

if ( ! function_exists( 'lalita_settings_page_sidebar' ) ) {
	function lalita_settings_page_sidebar( $lalita_activator ) {
		
		if ( $lalita_activator == 'activate' ) {
			do_action( 'lalita_admin_right_panel' );
		}
		
		if ( ! defined( 'LALITA_PREMIUM_VERSION' ) ) :
	?>
<div class="wpkoi-upgrade lalita-sidebar-element lalita-sc">
	<h3><?php esc_html_e( 'Need more features?', 'lalita' ); ?></h3>
	<p><?php esc_html_e( 'Unlock the full potential of your site! Enjoy advanced functionality and design options that elevate your website to the next level.', 'lalita' ); ?></p>
	<a href="<?php echo esc_url(lalita_new_theme_uri_link()); ?>" class="wpkoi-admin-button" target="_blank"><?php esc_html_e( 'Upgrade to Premium', 'lalita' ); ?></a>
</div>
	<?php endif; ?>
<div class="wpkoi-review lalita-sidebar-element lalita-sc">
	<h3><?php esc_html_e( 'Support Us with Your Review', 'lalita' ); ?></h3>
	<p><?php esc_html_e( 'Love the Lalita theme? Share your experience with the world! Your review helps others discover and enjoy the theme, and we truly appreciate your feedback.', 'lalita' ); ?></p>
	<a href="<?php echo esc_url(LALITA_WORDPRESS_REVIEW); ?>" class="wpkoi-admin-button" target="_blank"><?php esc_html_e( 'Add my review', 'lalita' ); ?></a>
</div>

<div class="wpkoi-social lalita-sidebar-element lalita-sc">
	<h3><?php esc_html_e( 'Stay Updated with WPKoi on Facebook', 'lalita' ); ?></h3>
	<p><?php esc_html_e( 'Want the latest tips, news, and updates on WPKoi products? Follow us on Facebook for exclusive content and useful insights that help you make the most of your themes.', 'lalita' ); ?></p>
	<a href="<?php echo esc_url(LALITA_WPKOI_SOCIAL_URL); ?>" class="wpkoi-admin-button" target="_blank"><?php esc_html_e( 'Go to Facebook', 'lalita' ); ?></a>
</div>
	<?php
	}
}

if ( ! function_exists( 'lalita_settings_page' ) ) {
	// Builds the content of our Lalita dashboard page
	function lalita_settings_page() {
		$theme_name = wp_get_theme();
		$premiumclass = '';
		if ( defined( 'LALITA_PREMIUM_VERSION' ) ) {
			$premiumclass = ' premium-wrap';
		}
		?>
<div class="wrap<?php echo esc_attr( $premiumclass ); ?>">
	<header id="lalita-new-header">
		<div class="lalita-pagelogo"><a href="<?php echo esc_url(lalita_new_theme_uri_link()); ?>" target="_blank"><h1><?php echo esc_html( $theme_name ); ?><br><span><?php esc_html_e( 'WPKoi Theme', 'lalita' ); ?></span></h1></a></div>
		<button class="nav-btn" data-target="lalita-page-features">Features</button>
		<button class="nav-btn" data-target="lalita-page-templates">Templates</button>
		<a href="<?php echo esc_url(LALITA_DOCUMENTATION); ?>" target="_blank" class="lalita-new-header-p"><?php esc_html_e( 'Documentation', 'lalita' ); ?></a>
		<div class="lalita-page-rm">
			<div class="lalita-page-social">
				<a target="_blank" href="<?php echo esc_url(LALITA_WPKOI_WPORG_URL); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M61.7 169.4l101.5 278C92.2 413 43.3 340.2 43.3 256c0-30.9 6.6-60.1 18.4-86.6zm337.9 75.9c0-26.3-9.4-44.5-17.5-58.7-10.8-17.5-20.9-32.4-20.9-49.9 0-19.6 14.8-37.8 35.7-37.8.9 0 1.8.1 2.8.2-37.9-34.7-88.3-55.9-143.7-55.9-74.3 0-139.7 38.1-177.8 95.9 5 .2 9.7.3 13.7.3 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l77.5 230.4L249.8 247l-33.1-90.8c-11.5-.7-22.3-2-22.3-2-11.5-.7-10.1-18.2 1.3-17.5 0 0 35.1 2.7 56 2.7 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l76.9 228.7 21.2-70.9c9-29.4 16-50.5 16-68.7zm-139.9 29.3l-63.8 185.5c19.1 5.6 39.2 8.7 60.1 8.7 24.8 0 48.5-4.3 70.6-12.1-.6-.9-1.1-1.9-1.5-2.9l-65.4-179.2zm183-120.7c.9 6.8 1.4 14 1.4 21.9 0 21.6-4 45.8-16.2 76.2l-65 187.9C426.2 403 468.7 334.5 468.7 256c0-37-9.4-71.8-26-102.1zM504 256c0 136.8-111.3 248-248 248C119.2 504 8 392.7 8 256 8 119.2 119.2 8 256 8c136.7 0 248 111.2 248 248zm-11.4 0c0-130.5-106.2-236.6-236.6-236.6C125.5 19.4 19.4 125.5 19.4 256S125.6 492.6 256 492.6c130.5 0 236.6-106.1 236.6-236.6z"></path></svg></a>
				<a target="_blank" href="<?php echo esc_url(LALITA_WPKOI_SOCIAL_URL); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg></a>
				<a target="_blank" href="<?php echo esc_url(LALITA_WPKOI_DRIBBLE_URL); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z"></path></svg></a>
				<a target="_blank" href="<?php echo esc_url(LALITA_WPKOI_BEHANCE_URL); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M232 237.2c31.8-15.2 48.4-38.2 48.4-74 0-70.6-52.6-87.8-113.3-87.8H0v354.4h171.8c64.4 0 124.9-30.9 124.9-102.9 0-44.5-21.1-77.4-64.7-89.7zM77.9 135.9H151c28.1 0 53.4 7.9 53.4 40.5 0 30.1-19.7 42.2-47.5 42.2h-79v-82.7zm83.3 233.7H77.9V272h84.9c34.3 0 56 14.3 56 50.6 0 35.8-25.9 47-57.6 47zm358.5-240.7H376V94h143.7v34.9zM576 305.2c0-75.9-44.4-139.2-124.9-139.2-78.2 0-131.3 58.8-131.3 135.8 0 79.9 50.3 134.7 131.3 134.7 61.3 0 101-27.6 120.1-86.3H509c-6.7 21.9-34.3 33.5-55.7 33.5-41.3 0-63-24.2-63-65.3h185.1c.3-4.2.6-8.7.6-13.2zM390.4 274c2.3-33.7 24.7-54.8 58.5-54.8 35.4 0 53.2 20.8 56.2 54.8H390.4z"></path></svg></a>
			</div>
			<?php if ( ! defined( 'LALITA_PREMIUM_VERSION' ) ) : ?>
			<div class="lalita-page-more"><a href="<?php echo esc_url(lalita_new_theme_uri_link()); ?>" target="_blank"><h3><?php esc_html_e( 'Get premium', 'lalita' ); ?></h3></a></div>
			<?php endif; ?>
		</div>
	</header>
	<?php
	 do_action( 'lalita_dashboard_after_header' );
	 ?>
	<div id="lalita-page-body">
		<div id="lalita-page-features" style="display: block;">
			<div class="lalita-element-col-flex">
				
				<div class="wpkoi-disable-elements lalita-element-col-1">
					<div class="lalita-sidebar-element">
						<div class="lalita-element-col-50h">
							<div class="lalita-element-col-50">
								<h3><?php esc_html_e( 'Welcome to Your', 'lalita' ); ?> <?php echo esc_html( $theme_name ); ?> <?php esc_html_e( 'Dashboard!', 'lalita' ); ?></h3>
								<p class="lalita-de-p"><?php esc_html_e( 'Get the most out of your WPKoi theme! Here, you’ll find everything you need to elevate your website—whether you’re using the free version or exploring premium features. Quickly access the customizer, or watch short video tutorials that represents the premium features. Building your dream site has never been easier!', 'lalita' ); ?></p>
								<div class="customize-button">
									<?php
									printf( '<a id="lalita_customize_button" class="button button-primary" href="%1$s">%2$s</a>',
										esc_url( admin_url( 'customize.php' ) ),
										esc_html__( 'Customize', 'lalita' )
									);
									?>
								</div>
							</div>
							<div class="lalita-element-col-50">
								<div class="lalita-video">
								</div>
							</div>
						</div>
						
						<?php 
						do_action( 'lalita_dashboard_inside_container' ); 
						do_action( 'lalita_new_inside_options_form' );
						?>
						
						<div class="lalita-qe">
							<h3><?php esc_html_e( 'Quick Access to Customize and Build Your Site', 'lalita' ); ?></h3>
							<p><?php esc_html_e( 'Navigate your site effortlessly with these handy shortcuts. Edit your site’s identity, tweak colors, and refine your top bar in just a few clicks. Quickly access the widget builders to ensure every part of your site aligns with your vision. Everything you need to customize and build your site is right at your fingertips!', 'lalita' ); ?></p>
							<?php
							$quicklinks = array(
								'Site Identity' => array( 'url' => admin_url( 'customize.php' ), 'button' => esc_html( 'Customize', 'lalita' ) ),
								'General' => array( 'url' => admin_url( 'customize.php' ), 'button' => esc_html( 'Customize', 'lalita' ) ),
								'Widgets' => array( 'url' => admin_url( 'widgets.php' ), 'button' => esc_html( 'Build', 'lalita' ) ),
							);
							?>
							<div class="lalita-de-h lalita-qe-h">	
								<?php foreach( $quicklinks as $quicklink => $info ) { ?>
								<div class="lalita-de-e">
									<a href="<?php echo $info[ 'url' ] ; ?>" target="_blank" class="lalita-switch-link">
										<div class="lalita-de-e-premium-i">
											<p><?php echo esc_html( $quicklink ); ?></p>
											<div class="lalita-de-d">

												<div class="lalita-de-di"><h4><?php echo esc_html( $info[ 'button' ] ); ?></h4></div>
											</div>
										</div>
									</a>
								</div>
								<?php } ?>
							</div>
						</div>
						
						<?php if ( ! defined( 'LALITA_PREMIUM_VERSION' ) ) : ?>
						<h3><?php esc_html_e( 'Unlock Premium Modules with Lalita Premium', 'lalita' ); ?></h3>
						<p><?php esc_html_e( 'Take your website to the next level with these exclusive premium features. From advanced color and typography options to extra Elementor elements, you’ll have the tools to create a truly unique site. Simplify setup with one-click demo imports, customize your footer, and enhance performance by disabling unused elements. With the premium modules, you’re in full control of every detail!', 'lalita' ); ?> <strong><?php esc_html_e( 'Lalita Premium works with ', 'lalita' ); ?> <?php echo esc_html( $theme_name ); ?> <?php esc_html_e( 'and with 50 other WPKoi themes on unlimited websites!', 'lalita' ); ?></strong></p>
						
						<?php
						$modules = array(
							'Demo Import' => array( 'url' => lalita_new_theme_uri_link(), 'desc' => esc_html( 'Simplify website setup with one-click, full-demo imports.', 'lalita' ) ),
							'Colors' => array( 'url' => lalita_new_theme_uri_link(), 'desc' => esc_html( 'Choose from a spectrum of colors to create a unique and captivating visual identity.', 'lalita' ) ),
							'Typography' => array( 'url' => lalita_new_theme_uri_link(), 'desc' => esc_html( 'Choose the perfect fonts for your website to create a unique and professional look.', 'lalita' ) ),
							'Copyright Footer' => array( 'url' => lalita_new_theme_uri_link(), 'desc' => esc_html( 'Customize your site&#39;s copyright footer with ease.', 'lalita' ) ),
							'Elementor Addon' => array( 'url' => lalita_new_theme_uri_link(), 'desc' => esc_html( 'Enhance your design options with additional Elementor elements for a unique touch.', 'lalita' ) ),
							'Disable Elements' => array( 'url' => lalita_new_theme_uri_link(), 'desc' => esc_html( 'Turn off the modules that You don&#39;t use for better performance.', 'lalita' ) ),
							'Hooks' => array( 'url' => lalita_new_theme_uri_link(), 'desc' => esc_html( 'Fine-tune your website with code filter inputs for added customization and codes.', 'lalita' ) ),
							'Spacing' => array( 'url' => lalita_new_theme_uri_link(), 'desc' => esc_html( 'Easily control the padding and margin of the elements on your website.', 'lalita' ) ),
							'Button Functions' => array( 'url' => lalita_new_theme_uri_link(), 'desc' => esc_html( 'Customize the style of Your buttons to make them unique.', 'lalita' ) ),
							'Fixed Side Content Functions' => array( 'url' => lalita_new_theme_uri_link(), 'desc' => esc_html( 'Define the size of Your Fixed Side panel for better design.', 'lalita' ) ),
							'Backgrounds' => array( 'url' => lalita_new_theme_uri_link(), 'desc' => esc_html( 'Add custom background images to various elements for a personalized design.', 'lalita' ) ),
							'Blog' => array( 'url' => lalita_new_theme_uri_link(), 'desc' => esc_html( 'Access advanced blog settings to enhance your site’s blogging functionality.', 'lalita' ) ),
							'Menu Plus' => array( 'url' => lalita_new_theme_uri_link(), 'desc' => esc_html( 'Unlock additional settings to further customize your website’s menus.', 'lalita' ) ),
							'Secondary Nav' => array( 'url' => lalita_new_theme_uri_link(), 'desc' => esc_html( 'Add and manage an extra menu for improved site navigation.', 'lalita' ) )
						);
						?>
						
						<div class="lalita-de-h">	
							<?php foreach( $modules as $module => $info ) { ?>
							<div class="lalita-de-e lalita-de-e-premium">
								<a href="<?php echo esc_url( $info[ 'url' ] ); ?>" target="_blank" class="lalita-switch-link">
									<div class="lalita-de-e-premium-i">
										<label class="switch">
											<span class="slider"></span>
										</label>
										<p><?php echo esc_html( $module ); ?></p>
										<p class="lalita-de-desc"><?php echo esc_html( $info[ 'desc' ] ); ?></p>
										<div class="lalita-de-d">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"></path></svg>
											<div class="lalita-de-di"><h4><?php esc_html_e( 'Premium', 'lalita' ); ?></h4></div>
										</div>
									</div>
								</a>
							</div>
							<?php } ?>
						</div>
							
						<div class="customize-button">
							<?php
							printf( '<a id="lalita_customize_button" class="button button-primary" href="%1$s" target="_blank">%2$s</a>',
								esc_url( LALITA_SHOWCASE ),
								esc_html__( 'Check a premium showcase', 'lalita' )
							);
							?>
						</div>
						<?php
						endif;
						do_action( 'lalita_options_items' );
						?>
					</div>
				</div>
				<div class="lalita-element-col-2 lalita-activator-col">
					<?php 
					$lalita_activator = 'activate';
					lalita_settings_page_sidebar( $lalita_activator ); 
					?>
				</div>
			</div>
		</div>
		<div id="lalita-page-templates">
			<div class="lalita-pthh">
			<h3 class="lalita-pth"><?php esc_html_e( 'Discover Your Perfect Design!', 'lalita' ); ?></h3>
			<p class="lalita-ptp">
				<?php if ( $theme_name == 'Lalita' ) { ?>
				<?php esc_html_e( 'Lalita WPKoi WordPress offers several child themes that share the same great functionality but feature different design styles.', 'lalita' ); ?>
				<?php } else { ?>
				<?php 
				echo esc_html( $theme_name );
				esc_html_e( ' is a child theme of the Lalita WPKoi WordPress theme. Lalita offers several other child themes that share the same great functionality but feature different design styles.', 'lalita' ); ?>
				<?php } ?>
				<?php esc_html_e( ' If You find the theme useful, but want to change the feeling, try some other child themes. ', 'lalita' ); ?>
				<strong><?php esc_html_e( 'Lalita Premium gives all the premium features for Lalita and for all child themes.', 'lalita' ); ?></strong>
			</p>
			</div>
			<div class="lalita-templates-loop">
		<?php
		
		$templatelist = array(
			'lalita' => array(),
			'samudra' => array(),
			'varuna' => array(),
			'manasa' => array(),
			'narmada' => array(),
			'pushan' => array(),
			'aditi' => array(),
			'skanda' => array(),
			'moksa' => array(),
			'dhyana' => array(),
			'kalaratri' => array(),
			'durvasa' => array(),
			'kalidasa' => array(),
			'vajra' => array(),
			'purusha' => array(),
			'ashram' => array(),
			'ishvara' => array(),
			'shudra' => array(),
			'agni' => array(),
			'sukha' => array(),
			'havan' => array(),
			'ishta' => array(),
			'madhura' => array(),
			'omkara' => array(),
			'sakti' => array(),
			'mahatma' => array(),
			'daksha' => array(),
			'neela' => array(),
			'daiva' => array(),
			'pandita' => array(),
			'samana' => array(),
			'adarsa' => array(),
			'itara' => array(),
			'nidra' => array(),
			'sundara' => array(),
			'manas' => array(),
			'prakasa' => array(),
			'gotra' => array(),
			'makara' => array(),
			'jihva' => array(),
			'bhakti' => array(),
			'phala' => array(),
			'mardava' => array(),
			'ekata' => array(),
			'ganapati' => array(),
			'maitri' => array(),
			'jagat' => array(),
			'sabda' => array(),
			'parama' => array(),
			'marga' => array(),
			'bhavana' => array()
		);
		foreach( $templatelist as $template => $info ) { ?>
				<div class="lalita-l-template">
				<div class="wpkoi-home-preview-effect"></div>
				<div class="lalita-l-template-inner">
					<div class="wpkoi-ptemp">
						<a href="<?php echo esc_url( 'https://wordpress.org/themes/' ) . esc_attr( $template ) . '/'; ?>" target="_blank">
							<div class="wpkoi-home-preview">
								<img height="auto" src="<?php echo esc_url( get_template_directory_uri() . '/img/themes/' . esc_attr( $template ) . '.webp' ); ?>" style="transition: top 3s ease-out 0s; top: 0px;">
							</div>
						</a>
						<div class="wpkoi-ptemp-main-title">
							<h3><?php echo esc_html( $template ); ?></h3>
							<a class="lalita-template-details" href="<?php echo esc_url( 'https://wordpress.org/themes/' ) . esc_attr( $template ) . '/'; ?>" target="_blank"><?php _e( 'Details', 'lalita' );?></a>
						</div>
						<div class="home-explore">
							<a href="<?php echo esc_url( 'https://wordpress.org/themes/' ) . esc_attr( $template ) . '/'; ?>" target="_blank">
								<div class="home-explore-i"><h5 class="home-explore-t"><?php esc_html_e( 'Preview', 'lalita' );?></h5></div>
							</a>
						</div>

					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		<?php } ?>
			</div>
		</div>
	</div>
</div>
		<?php
	}
}

if ( ! function_exists( 'lalita_admin_errors' ) ) {
	add_action( 'admin_notices', 'lalita_admin_errors' );
	/**
	 * Add our admin notices
	 *
	 */
	function lalita_admin_errors() {
		$screen = get_current_screen();

		if ( 'appearance_page_lalita-options' !== $screen->base ) {
			return;
		}

		if ( isset( $_GET['settings-updated'] ) && 'true' == $_GET['settings-updated'] ) {
			 add_settings_error( 'lalita-notices', 'true', esc_html__( 'Settings saved.', 'lalita' ), 'updated' );
		}

		if ( isset( $_GET['status'] ) && 'imported' == $_GET['status'] ) {
			 add_settings_error( 'lalita-notices', 'imported', esc_html__( 'Import successful.', 'lalita' ), 'updated' );
		}

		if ( isset( $_GET['status'] ) && 'reset' == $_GET['status'] ) {
			 add_settings_error( 'lalita-notices', 'reset', esc_html__( 'Settings removed.', 'lalita' ), 'updated' );
		}

		settings_errors( 'lalita-notices' );
	}
}
