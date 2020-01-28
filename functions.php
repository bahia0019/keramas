<?php
/**
 * Keramas functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Keramas
 */

if ( ! function_exists( 'keramas_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function keramas_setup() {
		/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Keramas, use a find and replace
		* to change 'keramas' to the name of your theme in all the template files.
		*/
		load_theme_textdomain( 'keramas', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
		add_theme_support( 'title-tag' );

		/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'keramas' ),
		) );

		/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'keramas_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;

add_action( 'after_setup_theme', 'keramas_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function keramas_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'keramas_content_width', 640 );
}
add_action( 'after_setup_theme', 'keramas_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function keramas_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'keramas' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'keramas' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'keramas_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function keramas_scripts() {
	wp_enqueue_style( 'keramas-style', get_stylesheet_uri(), null, date( 'Ymd' ) );
	wp_enqueue_script( 'keramas-navigation', get_template_directory_uri() . '/js/navigation.js', array(), date( 'Ymd' ), true );
	wp_enqueue_script( 'keramas-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), date( 'Ymd' ), true );
	// wp_enqueue_script( 'keramas-home-animations', get_template_directory_uri() . '/js/home.js', array(), date( 'Ymd' ), true );
	wp_enqueue_script( 'keramas-fades-animations', get_template_directory_uri() . '/js/fades.js', array(), date( 'Ymd' ), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'keramas_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Recommend the Kirki plugin
 */
require get_template_directory() . '/inc/include-kirki.php';

/**
 * Load the Kirki Fallback class
 */
require get_template_directory() . '/inc/kirki-fallback.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Include the Widget locations
 */
require get_template_directory() . '/inc/widgets.php';


function fsc_logo( $class ) {
	$image    = get_option( 'fsc_options', '' );
	$image    = $image['fsc_logo'];
	$logo_alt = get_bloginfo( 'name' );

	if ( isset( $image ) ) {

		echo wp_get_attachment_image( $image, 'medium', false,
			array(
				'class' => $class,
				'alt'   => $logo_alt,
			)
		);
	}
}

function fsc_small_logo( $class ) {
	$image    = get_option( 'fsc_options', '' );
	$image    = $image['fsc_small_logo'];
	$logo_alt = get_bloginfo( 'name' );

	if ( isset( $image ) ) {

		echo wp_get_attachment_image( $image, 'medium', false,
			array(
				'class' => $class,
				'alt'   => $logo_alt,
			)
		);
	}
}

function fsc_figure( $image, $size, $imageclass, $captionclass ) {

	/**
	* Let plugins pre-filter the image meta to be able to fix inconsistencies in the stored data.
	*
	* @param string $image        The ACF field name (i.e. 'your_photo_name').
	* @param string $size         Thumbnail size (i.e. 'Thumbnail', 'Medium', 'Large')
	* @param string $imageclass   The Figure class you want to use (ex: 'my-figure')
	* @param string $captionclass The Figcaption class you want to use (ex: 'caption-blue')
	*/

		$image = get_field( $image );
		$size = $size;
		$thumb = $image['sizes'][ $size ];

	if ( ! empty( $image ) ) :
		?>

		<figure class="<?php echo $imageclass; ?>">

				<?php echo wp_get_attachment_image( $image['ID'], $size, false,
					array(
						'alt' => $image['alt']
					)
				);
				?>

				<figcaption class="<?php echo $captionclass; ?>">

					<?php echo $image[ 'caption' ]; ?>

				</figcaption>

		</figure>

		<script type="application/ld+json">
			{
			"@context": "http://schema.org",
			"@type": "ImageObject",
			"author": "<?php the_author(); ?>",
			"contentUrl": "<?php echo $thumb; ?>",
			"datePublished": "<?php echo $image[ 'created_timestamp' ]; ?>",
			"description": "<?php echo $image[ 'alt' ]; ?>",
			"name": "<?php echo $image[ 'title' ]; ?>",
			"copyright": "<?php echo $image[ 'copyright' ]; ?>"
			}
		</script>

		<?php
			endif;
}


/**
 * Hours from Customizer.
 */
function fsc_business_info() {
	$options         = get_option( 'fsc_options', '' );

	// Address.
	$street_one  = $options['street_address_1'] ?? null;
	$street_two  = $options['street_address_2'] ?? null;
	$city        = $options['city'] ?? null;
	$state       = $options['state'] ?? null;
	$postal_code = $options['postal_code'] ?? null;
	$country     = $options['country'] ?? null;
	$phone       = $options['phone'] ?? null;

	// Hours.
	$monday_open     = $options['mon_hour_open'] ?? null;
	$monday_close    = $options['mon_hour_close'] ?? null;
	$tuesday_open    = $options['tue_hour_open'] ?? null;
	$tuesday_close   = $options['tue_hour_close'] ?? null;
	$wednesday_open  = $options['wed_hour_open'] ?? null;
	$wednesday_close = $options['wed_hour_close'] ?? null;
	$thursday_open   = $options['thu_hour_open'] ?? null;
	$thursday_close  = $options['thu_hour_close'] ?? null;
	$friday_open     = $options['fri_hour_open'] ?? null;
	$friday_close    = $options['fri_hour_close'] ?? null;
	$saturday_open   = $options['sat_hour_open'] ?? null;
	$saturday_close  = $options['sat_hour_close'] ?? null;
	$sunday_open     = $options['sun_hour_open'] ?? null;
	$sunday_close    = $options['sun_hour_close'] ?? null;

	?>

	<script type="application/ld+json">
		{
		"@context": "https://schema.org",
		"@type": "ProfessionalService",
		"@id": "<?php echo home_url( '/' ); ?>",
		"name": "<?php echo bloginfo( 'name' ); ?>",
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "<?php echo $monday_open; ?>",
			"addressLocality": "New York",
			"addressRegion": "NY",
			"postalCode": "10019",
			"addressCountry": "US"
		},
		"openingHoursSpecification": [{
		"@type": "OpeningHoursSpecification",
		"dayOfWeek": "Monday",
		"opens": "<?php echo $monday_open; ?>",
		"closes": "<?php echo $monday_close; ?>"
	},{
		"@type": "OpeningHoursSpecification",
		"dayOfWeek": "Tuesday",
		"opens": "<?php echo $tuesday_open; ?>",
		"closes": "<?php echo $tuesday_close; ?>"
	},{
		"@type": "OpeningHoursSpecification",
		"dayOfWeek": "Wednesday",
		"opens": "<?php echo $wednesday_open; ?>",
		"closes": "<?php echo $wednesday_close; ?>"
	},{
		"@type": "OpeningHoursSpecification",
		"dayOfWeek": "Thursday",
		"opens": "<?php echo $thursday_open; ?>",
		"closes": "<?php echo $thursday_close; ?>"
	},{
		"@type": "OpeningHoursSpecification",
		"dayOfWeek": "Friday",
		"opens": "<?php echo $friday_open; ?>",
		"closes": "<?php echo $friday_close; ?>"
	},{
		"@type": "OpeningHoursSpecification",
		"dayOfWeek": "Saturday",
		"opens": "<?php echo $saturday_open; ?>",
		"closes": "<?php echo $saturday_close; ?>"
	},{
		"@type": "OpeningHoursSpecification",
		"dayOfWeek": "Sunday",
		"opens": "<?php echo $sunday_open; ?>",
		"closes": "<?php echo $sunday_close; ?>"
	}]	
	}
	</script> 
	<?php
}