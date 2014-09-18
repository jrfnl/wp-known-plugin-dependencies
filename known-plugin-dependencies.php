<?php
/**
 * Known Plugin Dependencies
 *
 * @package 	WordPress\Plugins\Known_Plugin_Dependencies
 * @author		Juliette Reinders Folmer <wpplugins_nospam@adviesenzo.nl>
 * @link		https://github.com/jrfnl/wp-known-plugin-dependencies
 * @version 	0.1
 *
 * @copyright	2014 Juliette Reinders Folmer
 * @license 	http://creativecommons.org/licenses/GPL/2.0/ GNU General Public License, version 2 or higher
 *
 * @wordpress-plugin
 * Plugin Name: Known Plugin Dependencies
 * Plugin URI:	http://wordpress.org/plugins/known-plugin-dependencies/
 * Description: Add-on for the Plugin Dependencies plugin. Enrich available plugin dependency information.
 * Version: 	0.1
 * Author:		Juliette Reinders Folmer
 * Author URI:	http://www.adviesenzo.nl/
 * Depends: 	Plugin Dependencies
 * Copyright:	2014 Juliette Reinders Folmer
 */

// Avoid direct calls to this file
if ( ! function_exists( 'add_action' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( ! is_admin() ) {
	return;
}

if ( ! class_exists( 'Known_Plugin_Dependencies' ) ) {
	class Known_Plugin_Dependencies {

		static $list = array(
			/**
			 * Debug Bar add-ons
			 */
			'debug-bar-actions-and-filters-addon/debug-bar-action-and-filters-addon.php' => array(
				'Name'     => 'Debug Bar Actions and Filters Addon',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-action-hooks/debug-bar-action-hooks.php' => array(
				'Name'     => 'Debug Bar Action Hooks',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-console/debug-bar-console.php' => array(
				'Name'     => 'Debug Bar Console',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-constants/debug-bar-constants.php' => array(
				'Name'     => 'Debug Bar Constants',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-cron/debug-bar-cron.php' => array(
				'Name'     => 'Debug Bar Cron',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-custom-info/debug-bar-custom-info.php ' => array(
				'Name'     => 'Debug Bar Custom Info',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-extender/debug-bar-extender.php' => array(
				'Name'     => 'Debug Bar Extender',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-hook-log/debug-bar-hook-log.php' => array(
				'Name'     => 'Debug Bar Hook Log',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-list-dependencies/debug-bar-list-dependencies.php' => array(
				'Name'     => 'Debug Bar List Script & Style Dependencies',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-my-plugin/debug-my-plugin.php' => array(
				'Name'     => 'Debug My Plugin',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'tdd-debug-bar-post-meta/debug-bar-post-meta.php' => array(
				'Name'     => 'Debug Bar Post Meta',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-post-meta/debug-bar-post-meta.php' => array(
				'Name'     => 'Debug Bar Post Meta',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-post-types/debug-bar-post-types.php' => array(
				'Name'     => 'Debug Bar Post Types',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-query-count-alert/debug-bar-query-count-alert.php' => array(
				'Name'     => 'Debug Bar Query Count Alert',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-query-tracer/galahad-query-tracer.php' => array(
				'Name'     => 'Debug Bar Query Tracer',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-remote-requests/debug-bar-remote-requests.php' => array(
				'Name'     => 'Debug Bar Remote Requests',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-roles-and-capabilities/debug-bar-roles-and-capabilities.php' => array(
				'Name'     => 'Debug Bar Roles and Capabilities',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-screen-info/debug-bar-screen-info.php' => array(
				'Name'     => 'Debug Bar Screen Info',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-shortcodes/debug-bar-shortcodes.php' => array(
				'Name'     => 'Debug Bar Shortcodes',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-sidebars-widgets/debug-bar-sidebars.php ' => array(
				'Name'     => 'Debug Bar - Sidebars & Widgets',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-slow-actions/debug-bar-slow-actions.php' => array(
				'Name'     => 'Debug Bar Slow Actions',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-super-globals/debug-bar-super-globals.php' => array(
				'Name'     => 'Debug Bar Super Globals',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-template-trace/debug-bar-template-trace.php' => array(
				'Name'     => 'Debug Bar Template Trace',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-toggle/debug-bar-toggle.php' => array(
				'Name'     => 'Debug Bar Toggle',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-tracer/debug-bar-tracer.php ' => array(
				'Name'     => 'Debug Bar Tracer',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-transients/debug-bar-transients.php' => array(
				'Name'     => 'Debug Bar Transients',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'pmc-benchmark/pmc-benchmark.php' => array(
				'Name'     => 'PMC Benchmark',
				'Provides' => '',
				'Depends'  => 'Debug Bar',
			),
			'debug-bar-bbpress/debug-bar-bbress.php' => array(
				'Name'     => 'Debug Bar bbPress',
				'Provides' => '',
				'Depends'  => 'Debug Bar, bbPress',
			),
			'debug-bar-timber/debug-bar-timber.php ' => array(
				'Name'     => 'Timber Debug Bar',
				'Provides' => '',
				'Depends'  => 'Debug Bar, Timber',
			),
			'woocommerce-debug-bar/woocommerce-debug-bar.php' => array(
				'Name'     => 'WooCommerce Debug Bar',
				'Provides' => '',
				'Depends'  => 'Debug Bar, WooCommerce',
			),


			/**
			 * BuddyPress
			 */
			'buddypress-toolbar/buddypress-toolbar.php ' => array(
				'Name'     => 'BuddyPress Toolbar',
				'Provides' => '',
				'Depends'  => 'BuddyPress',
			),


			/**
			 * Gravity Forms
			 */
			'gravity-forms-sms-notifications/gravity-forms-sms-notifications.php' => array(
				'Name'     => 'Gravity Forms - Clockwork SMS',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-survey-funnel/gravityforms-surveyfunnel.php' => array(
				'Name'     => 'Gravity Forms - Survey Funnel',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravityforms-nl/gravityforms-nl.php' => array(
				'Name'     => 'Gravity Forms (nl)',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-custom-post-types/gfcptaddon.php' => array(
				'Name'     => 'Gravity Forms + Custom Post Types',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			' gravity-forms-first-data-global-gateway-addon/index.php ' => array(
				'Name'     => 'Gravity Forms + First Data Global Gateway e4',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-stripe/gravity-forms-stripe.php' => array(
				'Name'     => 'Gravity Forms + Stripe',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-advanced-file-uploader/prso-gravity-forms-adv-uploader.php' => array(
				'Name'     => 'Gravity Forms Advanced File Uploader',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			' gravity-forms-bluepay / blue-pay.php' => array(
				'Name'     => 'Gravity Forms Blue Pay Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-braintree/gravity-forms-braintree.php' => array(
				'Name'     => 'Gravity Forms Braintree Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-capsulecrm-add-on/capsulecrm.php' => array(
				'Name'     => 'Gravity Forms CapsuleCRM Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-constant-contact/constantcontact.php' => array(
				'Name'     => 'Gravity Forms Constant Contact Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'contact-form-7-gravity-forms/contact-form-7-gravity-forms.php' => array(
				'Name'     => 'Gravity Forms Contact Form 7 Importer',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-convio-add-on/gravity-forms-convio.php' => array(
				'Name'     => 'Gravity Forms Convio Add-on',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-css-ready-selector/gf-readyclasses-addon.php' => array(
				'Name'     => 'Gravity Forms CSS Ready Class Selector',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-css-themes-with-fontawesome-and-placeholder-support/gravity-forms-css-themes.php' => array(
				'Name'     => 'Gravity Forms CSS Themes Free',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-addons/gravity-forms-addons.php' => array(
				'Name'     => 'Gravity Forms Directory & Addons',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-dps-pxpay/gravityforms-dps-pxpay.php' => array(
				'Name'     => 'Gravity Forms DPS PxPay',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-dropbox-uploader/dropbox.php' => array(
				'Name'     => 'Gravity Forms Dropbox Uploader',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-duplicate-prevention/gravityforms-duplicateprevention.php' => array(
				'Name'     => 'Gravity Forms Duplicate Prevention',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravityforms-eway/gravityforms-eway.php' => array(
				'Name'     => 'Gravity Forms eWAY',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-exacttarget/exacttarget.php' => array(
				'Name'     => 'Gravity Forms ExactTarget Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravityforms-fatzebra/fatzebra.php' => array(
				'Name'     => 'Gravity Forms Fat Zebra Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-highrise/highrise.php' => array(
				'Name'     => 'Gravity Forms Highrise Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-highrise-crm/gravity-forms-highrise-crm.php' => array(
				'Name'     => 'Gravity Forms Highrise CRM',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravityforms-html5-placeholders/gravityforms-html5-placeholders.php' => array(
				'Name'     => 'Gravity Forms HTML5 Placeholders',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'hubspot-for-gravity-forms/gf-hubspot.php' => array(
				'Name'     => 'Gravity Forms HubSpot Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			' gravity-forms-icontact/icontact.php ' => array(
				'Name'     => 'Gravity Forms iContact Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-image-in-html/gravity-forms-image-in-html.php' => array(
				'Name'     => 'Gravity Forms Image In HTML',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'infusionsoft/infusionsoft.php' => array(
				'Name'     => 'Gravity Forms Infusionsoft Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-light-blue-api-add-on/gravity-forms-light-blue.php' => array(
				'Name'     => 'Gravity Forms Light Blue API Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-mad-mimi/madmimi.beta.php' => array(
				'Name'     => 'Gravity Forms Mad Mimi Add-On (Beta)',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-mad-mimi/madmimi.php' => array(
				'Name'     => 'Gravity Forms Mad Mimi Add-On (Stable)',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-wysija-add-on/gravity-forms-wysija.php ' => array(
				'Name'     => 'Gravity Forms MailPoet Add-on',
				'Provides' => '',
				'Depends'  => 'Gravity Forms, MailPoet',
			),
			'marketo/marketo.php' => array(
				'Name'     => 'Gravity Forms Marketo Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-mass-import/gravity-forms-mass-import.php' => array(
				'Name'     => 'Gravity Forms Mass Import',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-paystation-3-party-hosted/gravityforms-paystation.php' => array(
				'Name'     => 'Gravity Forms Paystation (3 party hosted)',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-pdf-extended/pdf.php' => array(
				'Name'     => 'Gravity Forms PDF Extended',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-periodic-notification-e-mails-by-weptile/weptile-periodic-gravity-form-mails.php' => array(
				'Name'     => 'Gravity Forms Periodic Notification E-Mails',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-quantity-limits/gravity-forms-limiter.php ' => array(
				'Name'     => 'Gravity Forms Quantiy Limits',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-rss/gravity-forms-rss.php' => array(
				'Name'     => 'Gravity Forms RSS Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-salesforce/salesforce.php' => array(
				'Name'     => 'Gravity Forms Salesforce Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravityforms-savedforms/gravityforms-savedforms.php' => array(
				'Name'     => 'Gravity Forms Saved Forms Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-shootq-add-on/shootq.php ' => array(
				'Name'     => 'Gravity Forms ShootQ Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gf_survey_results/gf_survey_results.php' => array(
				'Name'     => 'Gravity Forms Survey Results',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-tave-add-on/tave.php' => array(
				'Name'     => 'Gravity Forms T&aacute;ve Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-toolbar/gravity-forms-toolbar.php ' => array(
				'Name'     => 'Gravity Forms Toolbar',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-wysiwyg/gf_wysiwyg.php' => array(
				'Name'     => 'Gravity Forms WYSIWYG',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'ymlp/ymlp.php' => array(
				'Name'     => 'Gravity Forms YMLP Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-forms-post-updates/gravityforms-update-post.php' => array(
				'Name'     => 'Gravity Forms: Post Updates',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'gravity-to-solve360/gravity-to-solve360.php ' => array(
				'Name'     => 'Gravity to Solve360',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'mailpoet-gravity-forms-add-on/mailpoet-gravity-forms-addon.php' => array(
				'Name'     => 'MailPoet Gravity Forms Add-on',
				'Provides' => '',
				'Depends'  => 'Gravity Forms, MailPoet',
			),
			'optiontree-extension-gravity-forms/option-tree-gravityforms.php' => array(
				'Name'     => 'OptionTree Extension: Gravity Forms',
				'Provides' => '',
				'Depends'  => 'Gravity Forms, OptionTree',
			),
			'paymentspring-gravity-forms-add-on/paymentspring.php' => array(
				'Name'     => 'PaymentSpring Gravity Forms Add-On',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),
			'picatcha-for-gravity-forms/picatcha_gforms.php' => array(
				'Name'     => 'Picatcha for Gravity Forms',
				'Provides' => '',
				'Depends'  => 'Gravity Forms',
			),




			/**
			 * Miscellanous
			 */
			'manual-control/manual-control.php' => array(
				'Name'     => 'Manual Control for Jetpack',
				'Provides' => '',
				'Depends'  => 'Jetpack by WordPress.com',
			),
			'my-content-glossary/my-content-glossary.php' => array(
				'Name'     => 'My Content Management - Glossary Filter',
				'Provides' => '',
				'Depends'  => 'My Content Management',
			),
			'shadowbox-js/shadowbox-title-push.php' => array(
				'Name'     => 'Shadowbox JS - Use Title from Image',
				'Provides' => '',
				'Depends'  => 'Shadowbox JS',
			),
			'user-access-manager-private-extension/user-access-manager-private-extension.php' => array(
				'Name'     => 'User Access Manager - Private Extension',
				'Provides' => '',
				'Depends'  => 'User Access Manager',
			),

			/**
			 * WordPress SEO by Yoast add-ons
			 */
			'wpseo-video/video-seo.php' => array(
				'Name'     => 'Video SEO for WordPress SEO by Yoast',
				'Provides' => '',
				'Depends'  => 'WordPress SEO',
			),
			'wpseo-woocommerce/wpseo-woocommerce.php' => array(
				'Name'     => 'Yoast WooCommerce SEO',
				'Provides' => '',
				'Depends'  => 'WordPress SEO, WooCommerce',
			),

			/**
			 * WooCommerce add-ons
			 */
			'woocommerce-admin-bar-addition/woocommerce-admin-bar-addition.php ' => array(
				'Name'     => 'WooCommerce Admin Bar Addition',
				'Provides' => '',
				'Depends'  => 'WooCommerce',
			),
			'woocommerce-poor-guys-swiss-knife/woocommerce-poor-guys-swiss-knife.php' => array(
				'Name'     => 'Woocommerce Poor Guys Swiss Knife',
				'Provides' => '',
				'Depends'  => 'WooCommerce',
			),
			'woocommerce-nl/woocommerce-nl.php' => array(
				'Name'     => 'WooCommerce (nl)',
				'Provides' => '',
				'Depends'  => 'WooCommerce',
			),
			'woocommerce-predictive-search/wc-predictive-search.php ' => array(
				'Name'     => 'WooCommerce Predictive Search LITE',
				'Provides' => '',
				'Depends'  => 'WooCommerce',
			),
			'woocommerce-compare-products/compare_products.php ' => array(
				'Name'     => 'WooCommerce Compare Products LITE',
				'Provides' => '',
				'Depends'  => 'WooCommerce',
			),
			'woocommerce-email-inquiry-cart-options/woocommerce-email-inquiry-cart-options.php ' => array(
				'Name'     => 'WooCommerce Email Inquiry & Cart Options LITE',
				'Provides' => '',
				'Depends'  => 'WooCommerce',
			),
			'woocommerce-admin-theme-for-shop-manager/eshop_theme.php ' => array(
				'Name'     => 'Woocommerce Admin Theme',
				'Provides' => '',
				'Depends'  => 'WooCommerce',
			),
			'woocommerce-multilingual/wpml-woocommerce.php ' => array(
				'Name'     => 'WooCommerce Multilingual',
				'Provides' => '',
				'Depends'  => 'WooCommerce, WPML',
			),
			'woocommerce-dynamic-gallery/wc_dynamic_gallery_woocommerce.php ' => array(
				'Name'     => 'WooCommerce Dynamic Gallery LITE',
				'Provides' => '',
				'Depends'  => 'WooCommerce',
			),
			'woocommerce-exporter/exporter.php ' => array(
				'Name'     => 'WooCommerce - Store Exporter',
				'Provides' => '',
				'Depends'  => 'WooCommerce',
			),
			'woocommerce-product-sort-and-display/wc-psad.php ' => array(
				'Name'     => 'WooCommerce Product Sort and Display LITE',
				'Provides' => '',
				'Depends'  => 'WooCommerce',
			),
			'woo-widget-product-slideshow/product-image-gallery-widget.php ' => array(
				'Name'     => 'WooCommerce Widget Product Slider LITE',
				'Provides' => '',
				'Depends'  => 'WooCommerce',
			),
			'woocommerce-bulk-discount/woocommerce-bulk-discount.php ' => array(
				'Name'     => 'WooCommerce Bulk Discount',
				'Provides' => '',
				'Depends'  => 'WooCommerce',
			),
		);


		/**
		 * Add our filter
		 */
		public static function init() {
			add_filter( 'plugin_dependencies_all_plugins', array( __CLASS__, 'add_known_dependencies' ), 99 );
		}


		/**
		 * Enrich the available plugin dependency data
		 *
		 * @param  array $plugins
		 * @return array
		 */
		public static function add_known_dependencies( $plugins ) {
			if ( method_exists( 'Plugin_Dependencies', 'data_safe_plugin_merge' ) ) {
				return Plugin_Dependencies::data_safe_plugin_merge( $plugins, self::$list );
			}
			else {
				return self::data_safe_plugin_merge( $plugins, self::$list );
			}
		}


		/**
		 * Helper function for hooking into the 'plugin_dependencies_all_plugins' hook.
		 *
		 * @see https://github.com/x-team/wp-plugin-dependencies/pull/35
		 *
		 * Example code:
		 * <code>
		 * <?php
		 * function add_my_dependencies( $plugins ) {
		 *		/* Data format for $myplugins - extraneous information will be ignored:
		 *		array(
		 *			'plugin-dir/file.php' => array(
		 *				'Name' => 'Plugin name',
		 *				'Provides' => '',
		 *				'Depends' => '',
		 *			)
		 *		)* /
		 *		$myplugins = some_function_getting_a_plugins_array();
		 *		return Plugin_Dependencies::data_safe_plugin_merge( $plugins, $my_plugins );
		 * }
		 * add_filter( 'plugin_dependencies_all_plugins', 'add_my_dependencies' );
		 * ?>
		 * </code>
		 *
		 * @param  array  One or more arrays of plugins to be merged
		 * @return array
		 */
		public static function data_safe_plugin_merge() {
			if ( func_num_args() === 0 ) {
				return array();
			}

			$arrays = func_get_args();
			$result = array_shift( $arrays );

			$minimum = array(
				'Name'     => '',
				'Depends'  => '',
				'Provides' => '',
			);

			if ( is_array( $arrays ) && $arrays !== array() ) {
				foreach ( $arrays as $array ) {
					if ( is_array( $array ) && $array !== array() ) {
						foreach ( $array as $file_slug => $data ) {
							if ( ! isset( $result[ $file_slug ] ) ) {
								$result[ $file_slug ] = array_merge( $minimum, $data );
							}
							elseif ( $result[ $file_slug ]['Name'] === $data['Name'] )	{
								if ( ! empty( $data['Depends'] ) ) {
									$result[ $file_slug ]['Depends']  = self::merge_unique_comma_del_string( $result[ $file_slug ]['Depends'], $data['Depends'] );
								}
								if ( ! empty( $data['Provides'] ) ) {
									$result[ $file_slug ]['Provides'] = self::merge_unique_comma_del_string( $result[ $file_slug ]['Provides'], $data['Provides'] );
								}
							}
						}
					}
				}
			}
			return $result;
		}


		/**
		 * Merge two comma delimited strings to one string containing only unique values.
		 *
		 * @param  string $string1
		 * @param  string $string2
		 * @return string
		 */
		protected static function merge_unique_comma_del_string( $string1, $string2 ) {
			if ( $string1 === '' || $string2 === '' ) {
				return ( $string1 === '' ? $string2 : $string1 );
			}
			$string1 = self::parse_field( $string1 );
			$string2 = self::parse_field( $string2 );
			$result  = array_unique( array_merge( $string1, $string2 ) );
			return implode( ',', $result );
		}


		/**
		 * Retrieve an array from a comma delimited list
		 *
		 * @param  string $str
		 * @return array
		 */
		private static function parse_field( $str ) {
			return array_filter( array_map( 'trim', explode( ',', $str ) ) );
		}

	} // End of class

	add_action( 'plugins_loaded', array( 'Known_Plugin_Dependencies', 'init' ) );

} // End of if class_exists wrapper
