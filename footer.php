  <footer class="wrapper footer-wrapper">
         <div class="footer-top-wrapper">
            <div class="container common-container four_content footer-top-container">
               <ul>
                  <!-- <li><a href="#">Feedback</a></li>
                  <li><a href="#">Website Policies </a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Web Information Manager </a></li>
                  <li><a href="#">FAQ’s</a></li>
                  <li><a href="#">Disclaimer</a></li>
                  <li><a href="#">Help</a></li>
                  <li><a href="#">Terms & Conditions</a></li> -->
                  <?php 
wp_nav_menu(
array(
'theme_location'=>'footer-menu',
'menu_id'=>'',
'container'=>'false',
'add_li_class'=>'',
'add_a_class'=>''
))
?>
               </ul>
            </div>
         </div>
         <div class="footer-bottom-wrapper">
            <div class="container common-container four_content footer-bottom-container">
               <div class="footer-content clearfix">
                  <div class="copyright-content"> 
                     Website Content Managed by <strong>Department Name, Ministry Name, <a target="_blank" title="GoI, External Link that opens in a new window" href="https://www.india.gov.in/"><strong>Government of India</strong></a></strong> 
                     <span>Designed, Developed and Hosted by <a target="_blank" title="NIC, External Link that opens in a new window" href="https://www.nic.in/"><strong>National Informatics Centre</strong></a><strong> (NIC)</strong></span>
                     <span class="last-updated">Last Updated: <span id="lastupdated"></span></span>
                  </div>

                  <div class="logo-cmf"> <a target="_blank" title="External link that opens in new tab, cmf" href="http://cmf.gov.in/"><img alt="cmf logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/cmf-logo.png"></a> </div>
               </div>
            </div>
         </div>
      </footer>
      <!--/.footer-wrapper-->
      <!-- jQuery v1.11.1 -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js" integrity="sha512-nhY06wKras39lb9lRO76J4397CH1XpRSLfLJSftTeo3+q2vP7PaebILH9TqH+GRpnOhfAGjuYMVmVTOZJ+682w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- jQuery Migration v1.4.1 -->
      <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
      <!-- jQuery v3.6.0 -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- jQuery Migration v3.4.0 -->
      <script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js"></script>
      
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-accessibleMegaMenu.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/framework.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.flexslider.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/font-size.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swithcer.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/theme/js/ma5gallery.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/megamenu.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/theme/js/easyResponsiveTabs.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/theme/js/custom.js"></script>
     <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

      <script>
         var d = new Date();
         var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
         document.getElementById("lastupdated").innerHTML = months[d.getMonth()]+" "+ d.getDate()+", "+d.getFullYear();
      </script>
      
      <script>
         $(document).ready(function() {

         });
      </script>
   </body>
</html>
<?php
wp_footer();
?>