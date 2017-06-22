<?php 
/**
* Renders styles from the Customizer and outputs it to Head.
* 
* @package keramas
*/
?>

<style type="text/css">

/*--------------------
BASE (MOBILE) SIZE
--------------------*/

    .jumbotron{
       background-image:url('<?php echo get_theme_mod( 'keramas_hero_image', '' ); ?>');     
    }


    a, a:visited, .social-icon{
        color:<?php echo get_theme_mod( 'site_accent_color', '' ); ?>;
    }

/*--------------------
TABLET & SMALLER LAPTOPS
--------------------*/
@media screen and (min-width: 40em) {

figcaption{
    background-color: <?php echo get_theme_mod( 'caption_background_color', ''); ?>;
}


} // end of media query

/*--------------------
DESKTOP
--------------------*/
@media screen and (min-width: 64em) {



} // end of media query

/*--------------------
LARGE VIEWING SIZE
--------------------*/

@media only screen and (min-width: 90.063em) {



} // end of media query

/*--------------------
RETINA (2x RESOLUTION DEVICES)
--------------------*/
@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
       only screen and (min--moz-device-pixel-ratio: 1.5),
       only screen and (min-device-pixel-ratio: 1.5) {





} // end of media query


/*--------------------
CUSTOM CSS FROM CUSTOMIZER
--------------------*/

<?php echo get_theme_mod( 'custom_css' ); ?>

</style>

