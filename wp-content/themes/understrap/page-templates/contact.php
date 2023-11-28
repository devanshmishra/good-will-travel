<?php
/**
 * Template Name: Contact Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
    get_template_part( 'global-templates/hero' );
}

$wrapper_id = 'full-width-page-wrapper';
if ( is_page_template( 'page-templates/no-title.php' ) ) {
    $wrapper_id = 'no-title-page-wrapper';
}
?>


    
<?php echo get_template_part('page-templates/common/gt-contact-banner');?>

<?php echo get_template_part('page-templates/common/gt-contact-section');?>
   
<?php echo get_template_part('page-templates/common/gt-contact-form');?>


<?php echo get_template_part('page-templates/common/gt-map');?>


   


</html>
<?php
get_footer( ) ;?>
