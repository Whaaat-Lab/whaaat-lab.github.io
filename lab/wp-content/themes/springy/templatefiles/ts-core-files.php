<?php
/**
 * Load Core Files
 *
 * @since 1.0.0
*/
/**
 * Enqueue CSS and JS
 */
require get_template_directory() . '/templatefiles/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/templatefiles/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/templatefiles/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/templatefiles/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/templatefiles/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/templatefiles/jetpack.php';
}

/**
 * Load sanitize functions file
 */
require get_template_directory() . '/templatefiles/sanitize-functions.php';

/**
 * Load category dropdown functions
 */
require get_template_directory() . '/templatefiles/customizer-category-control.php';

/**
 * Load category dropdown functions
 */
require get_template_directory() . '/templatefiles/customizer-radio-image-control.php';
/**
 * Dynamic CSS file load
 */
require get_template_directory() . '/templatefiles/dynamic-css.php';

/**
 * load custom widgets
 */
require get_template_directory() . '/templatefiles/widgets/widget-init.php';
require get_template_directory() . '/templatefiles/widgets/ts-author-widget.php';
require get_template_directory() . '/templatefiles/widgets/ts-recent-posts-widget.php';
require get_template_directory() . '/templatefiles/widgets/ts-social-widget.php';

/**
 * Load Hooks
*/

require get_template_directory() . '/templatefiles/hooks/related-posts.php';
require get_template_directory() . '/templatefiles/hooks/posts-navigation.php';
require get_template_directory() . '/templatefiles/hooks/breadcrumb.php';
require get_template_directory() . '/templatefiles/hooks/social-sharing.php';
require get_template_directory() . '/templatefiles/hooks/sections.php';
require get_template_directory() . '/templatefiles/hooks/footer.php';
require get_template_directory() . '/templatefiles/hooks/masonry.php';

/**
 * Load Filters
*/
require get_template_directory() . '/templatefiles/filters/excerpt.php';
require get_template_directory() . '/templatefiles/filters/jetpack-widget.php';
require get_template_directory() . '/templatefiles/filters/body-class.php';

/**
 * Load custom function
*/
require get_template_directory() . '/templatefiles/custom-functions.php';

/**
 * TGM Plugin Activation
 */
require get_template_directory() . '/templatefiles/library/tgm-plugin-activation.php';
require get_template_directory() . '/templatefiles/library/tgm.php';

/**
 * For Admin Page
 */
if ( is_admin() ) {
 require get_template_directory() . '/templatefiles/about/about.php';
}

/**
 * Upgrade to pro
 */
 require get_template_directory() . '/templatefiles/upgrade/class-customize.php';
