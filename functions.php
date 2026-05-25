<?php
/**
 * Globe & Anchor Digital — Child Theme Functions
 *
 * @package Globe_Anchor_Digital
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ── Enqueue parent + child stylesheets ──────────────────────────────────────
add_action( 'wp_enqueue_scripts', 'ga_enqueue_styles' );
function ga_enqueue_styles() {
	wp_enqueue_style(
		'astra-parent-style',
		get_template_directory_uri() . '/style.css'
	);
	wp_enqueue_style(
		'globe-anchor-child',
		get_stylesheet_uri(),
		array( 'astra-parent-style' ),
		wp_get_theme()->get( 'Version' )
	);
	wp_enqueue_script(
		'globe-anchor-js',
		get_stylesheet_directory_uri() . '/assets/js/globe-anchor.js',
		array(),
		'1.0.0',
		true
	);
}

// ── Google Fonts ─────────────────────────────────────────────────────────────
add_action( 'wp_enqueue_scripts', 'ga_enqueue_fonts' );
function ga_enqueue_fonts() {
	wp_enqueue_style(
		'google-fonts-ga',
		'https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;700;900&family=Inter:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap',
		array(),
		null
	);
}

// ── Preconnect to Google Fonts ────────────────────────────────────────────────
add_filter( 'wp_resource_hints', 'ga_resource_hints', 10, 2 );
function ga_resource_hints( $hints, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$hints[] = array( 'href' => 'https://fonts.googleapis.com' );
		$hints[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' => 'anonymous' );
	}
	return $hints;
}

// ── Body class: dark mode + template flag ────────────────────────────────────
add_filter( 'body_class', 'ga_body_class' );
function ga_body_class( $classes ) {
	$classes[] = 'ga-dark-mode';

	$custom_templates = array(
		'page-home.php',
		'page-services.php',
		'page-about.php',
		'page-contact.php',
	);

	if ( is_page_template( $custom_templates ) ) {
		$classes[] = 'ga-template';
	}

	return $classes;
}

// ── Remove Astra sidebar on custom templates ──────────────────────────────────
add_filter( 'astra_page_layout', 'ga_no_sidebar_on_templates' );
function ga_no_sidebar_on_templates( $layout ) {
	$custom_templates = array(
		'page-home.php',
		'page-services.php',
		'page-about.php',
		'page-contact.php',
	);

	if ( is_page_template( $custom_templates ) ) {
		return 'no-sidebar';
	}

	return $layout;
}

// ── Register page templates with Astra ───────────────────────────────────────
add_filter( 'theme_page_templates', 'ga_register_page_templates' );
function ga_register_page_templates( $templates ) {
	$templates['page-home.php']     = 'Globe &amp; Anchor: Home';
	$templates['page-services.php'] = 'Globe &amp; Anchor: Services';
	$templates['page-about.php']    = 'Globe &amp; Anchor: About';
	$templates['page-contact.php']  = 'Globe &amp; Anchor: Contact';
	return $templates;
}

// ── Contact form AJAX handler ─────────────────────────────────────────────────
add_action( 'wp_ajax_ga_contact_submit',        'ga_contact_submit' );
add_action( 'wp_ajax_nopriv_ga_contact_submit', 'ga_contact_submit' );

function ga_contact_submit() {
	check_ajax_referer( 'ga_contact_nonce', 'nonce' );

	$name    = sanitize_text_field( wp_unslash( $_POST['ga_name']    ?? '' ) );
	$company = sanitize_text_field( wp_unslash( $_POST['ga_company'] ?? '' ) );
	$email   = sanitize_email(      wp_unslash( $_POST['ga_email']   ?? '' ) );
	$message = sanitize_textarea_field( wp_unslash( $_POST['ga_message'] ?? '' ) );

	if ( ! $name || ! is_email( $email ) || ! $message ) {
		wp_send_json_error( 'Please fill in all required fields.' );
	}

	$to      = get_option( 'admin_email' );
	$subject = sprintf( 'New inquiry — Globe & Anchor | %s (%s)', $name, $company ?: 'no company' );
	$body    = "Name:    {$name}\nCompany: {$company}\nEmail:   {$email}\n\n{$message}";
	$headers = array( "Reply-To: {$name} <{$email}>" );

	if ( wp_mail( $to, $subject, $body, $headers ) ) {
		wp_send_json_success( "Thanks {$name} — we'll be in touch shortly." );
	} else {
		wp_send_json_error( 'Message could not be sent. Please email us directly.' );
	}
}

// ── Inline nonce for contact form JS ─────────────────────────────────────────
add_action( 'wp_footer', 'ga_inline_nonce' );
function ga_inline_nonce() {
	if ( is_page_template( 'page-contact.php' ) ) {
		printf(
			'<script>var gaAjaxUrl = %s; var gaContactNonce = %s;</script>',
			wp_json_encode( admin_url( 'admin-ajax.php' ) ),
			wp_json_encode( wp_create_nonce( 'ga_contact_nonce' ) )
		);
	}
}

// ── Remove emoji scripts (not needed for this site) ──────────────────────────
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
