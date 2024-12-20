<style>
   h1.ash {
    font-size: xx-large;
    font-weight: bolder;
}

</style>
<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 */
get_header();
the_post();
?>
      <section class="wrapper banner-wrapper">
         <div id="flexSlider" class="flexslider">
            <div class="inner-banner"><img src="<?php echo get_template_directory_uri(); ?>/theme/images/banner/inner-banner.jpg" alt="Inner Banner of Consumer Affairs" title="banner"></div>
         </div>
      </section>
      <div class="wrapper" id="skipCont"></div>
      <!--/#skipCont-->
      <section id="fontSize" class="wrapper body-wrapper ">
      <div class="bg-wrapper inner-wrapper">
      <div class="breadcam-bg breadcam">
         <div class="container common-container four_content">
            <ul>
               <li><a href="<?php echo site_url(); ?>" >Home</a></li>
               <li class="current"><font color="red"><?php the_title(); ?></font></li>
            </ul>
         </div>
      </div>
      <section id="page-head" class="wrapper headings-wrapper">
         <div class="container common-container four_content">
            <h1 class='ash'>
               <?php the_title(); ?>
            </h1>
            <hr />
         </div>
      </section>
      <!--/#page-head-->
      <section id="paragraph" class="wrapper paragraph-wrapper">
         <div class="container common-container four_content">
            <p style="font-family:verdana; font-size:16px; text-align:justify">
          <?php echo get_the_content(); ?>
            </p>
         </div>
      </section>
     

<?php
get_footer();
?>