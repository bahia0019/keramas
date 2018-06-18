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

    /**
    * PHP flips 0-100 to 100-0 for positioning reasons.
    **/

    <?php  
        $fifty = get_theme_mod( 'mobile_hero_adjust_X');
        $invert = 50 - $fifty + 50;
    ?>

    .jumbotron-image{
        background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 59%, rgba(0, 0, 0, 0.65) 100%), url('<?php echo get_theme_mod( 'keramas_hero_image', '' ); ?>')  <?php echo $invert ?>% 50%/cover no-repeat;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0)), color-stop(59%, rgba(0, 0, 0, 0)), color-stop(100%, rgba(0, 0, 0, 0.65))), url('<?php echo get_theme_mod( 'keramas_hero_image', '' ); ?>') <?php echo $invert ?>% 50%/cover no-repeat;
        background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 59%, rgba(0, 0, 0, 0.65) 100%), url('<?php echo get_theme_mod( 'keramas_hero_image', '' ); ?>') <?php echo $invert ?>% 50%/cover no-repeat;
        background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 59%, rgba(0, 0, 0, 0.65) 100%), url('<?php echo get_theme_mod( 'keramas_hero_image', '' ); ?>') <?php echo $invert ?>% 50%/cover no-repeat;
        background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 59%, rgba(0, 0, 0, 0.65) 100%), url('<?php echo get_theme_mod( 'keramas_hero_image', '' ); ?>') <?php echo $invert ?>% 50%/cover no-repeat;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 59%, rgba(0, 0, 0, 0.65) 100%), url('<?php echo get_theme_mod( 'keramas_hero_image', '' ); ?>') <?php echo $invert ?>% 50%/cover no-repeat;
    }


    body{
         color:<?php echo get_theme_mod( 'text_color', '#999'  ); ?>; 
         background-color:<?php echo get_theme_mod( 'site_background_color', '#fff' ); ?>
    }  

    .logo{
        <?php $logo_width = get_option( 'fsc_options', '200' ); ?>
        width: <?php echo $logo_width[ 'fsc_logo_width' ]; ?>px;
    }

    .page-title, .page-title a, .entry-title, .entry-title a, .sidebar-title, .sidebar-title a{
        color:<?php echo get_theme_mod( 'heading_color', '#666' ); ?>;
    }

    .page-title a, .entry-title a, .sidebar-title a{
        border-bottom: 1px solid <?php echo get_theme_mod( 'heading_color', '#666' ); ?>;
    }
 
    .page-title a:hover, .entry-title a:hover, .sidebar-title a:hover {
        color:<?php echo get_theme_mod( 'heading_hover_color', '#222' ); ?>;
        border-bottom: 1px solid <?php echo get_theme_mod( 'heading_hover_color', '#222' ); ?>;
    }    

    button.menu-toggle, a.btn, .footer {
        background-color:<?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>;
    }

    svg.fs-icons, svg.fs-icons a{
        fill:<?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>;
    }

    input {
        border: 1px solid <?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>;
    }

    a, a:visited, .social-icon, .swiper-button-prev, .swiper-button-next{
        color:<?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>;
    }

    a:hover, .social-icon:hover, .swiper-button-prev:hover, .swiper-button-next:hover{
        color:<?php echo get_theme_mod( 'site_accent_hover_color', '#089' ); ?>;
    }   

    svg.fs-icons:hover, svg.fs-icons a:hover{
        fill:<?php echo get_theme_mod( 'site_accent_hover_color', '#089' ); ?>;
    }

    .btn, .btn:visited, button, input[type="button"], input[type="reset"], input[type="submit"]{
        color:<?php echo get_theme_mod( 'site_accent_text_color', '#fff' ); ?>;
        background-color:<?php echo get_theme_mod( 'site_accent_color', '#999' ); ?>;
    }

    .btn:hover, button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover{
        color:<?php echo get_theme_mod( 'site_accent_text_hover_color', '#ddd' ); ?>;
        background-color:<?php echo get_theme_mod( 'site_accent_hover_color', '#333' ); ?>;
    }

    .footer-widget-area, .footer-widget-area a, .footer ul.footer-widget-area li.footer-widget h2 {
        color:<?php echo get_theme_mod( 'site_accent_text_color', '#fff' ); ?>;
    }

    .footer ul.footer-widget-area li.footer-widget h2{
        border-bottom: 1px solid <?php echo get_theme_mod( 'site_accent_text_color', '#fff' ); ?>;
    }

    .footer-widget-area a:hover{
        opacity: 0.75;
    }



/*--------------------
TABLET & SMALLER LAPTOPS
--------------------*/
@media screen and (min-width: 40em) {

figcaption{
    background-color: <?php echo get_theme_mod( 'caption_background_color', ''); ?>;
}

.jumbotron-image{
    .background-position-x: 50%;
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

