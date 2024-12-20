<?php
//Template Name: feedback
get_header();
global $wpdb;
?>
<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2 ) ); ?>

<?php
get_footer();
?>