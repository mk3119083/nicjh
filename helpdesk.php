<?php
//Template Name: helpdesk
get_header();
global $wpdb;
?>
<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1 ) ); ?>
<?php
get_footer();
?>