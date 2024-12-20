<?php
wp_head();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="format-detection" content="telephone=no" />
      <meta name="keywords" content="ministry, department">
      <meta name="description" content="Ministry/Department">
      <meta name="author" content="National Informatics Center">
      <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-touch-icon.png">
      <link rel="icon" href="assets/images/favicon/favicon.png">
      <!--<title>Home | Ministry | Department | GoI</title> -->
	  <title><?php bloginfo('name'); ?> <?php wp_title(''); ?> </title>
      <!-- Custom styles for this template -->
      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/base.css" rel="stylesheet" media="all">
      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/base-responsive.css" rel="stylesheet" media="all">
      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/grid.css" rel="stylesheet" media="all">
      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" rel="stylesheet" media="all">
      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" media="all">
      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/flexslider.css" rel="stylesheet" media="all">
      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/megamenu.css" rel="stylesheet" media="all" />
      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/print.css" rel="stylesheet" media="print" />
      <!-- Theme styles for this template -->
      <link href="<?php echo get_template_directory_uri(); ?>/assets/css/megamenu.css" rel="stylesheet" media="all" />
      <link href="<?php echo get_template_directory_uri(); ?>/theme/css/site.css" rel="stylesheet" media="all">
      <link href="<?php echo get_template_directory_uri(); ?>/theme/css/site-responsive.css" rel="stylesheet" media="all">
      <link href="<?php echo get_template_directory_uri(); ?>/theme/css/ma5gallery.css" rel="stylesheet" type="text/css">
      <link href="<?php echo get_template_directory_uri(); ?>/theme/css/print.css" rel="stylesheet" type="text/css" media="print">
      <link href="<?php echo bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css">
      <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.min.js"></script>
      <![endif]-->
      <!-- Custom JS for this template -->
      <noscript>
         <link href="<?php echo get_template_directory_uri(); ?>/theme/css/no-js.css" type="text/css" rel="stylesheet">
      </noscript>
   </head>
   <body>
      <div id="fb-root"></div>
      <header>
         <div class="region region-header-top">
            <div id="block-cmf-content-header-region-block" class="block block-cmf-content first last odd">
               <noscript class="no_scr">"JavaScript is a standard programming language that is included to provide interactive features, Kindly enable Javascript in your browser. For details visit help page"
               </noscript>
               <div class="wrapper common-wrapper">
                  <div class="container common-container four_content top-header">
                     <div class="common-left clearfix">
                        <ul>
                           <li class="gov-india"><span class="responsive_go_hindi" lang="hi"><a target="_blank" href="https://india.gov.in/hi" title="भारत सरकार ( बाहरी वेबसाइट जो एक नई विंडो में खुलती है)" role="link">झारखण्ड सरकार</a></span><span class="li_eng responsive_go_eng"><a target="_blank" href="https://india.gov.in/" title="Government of india,External Link that opens in a new window" role="link">Government of Jharkhand</a></span></li>
                           <li class="ministry">
                              <a href="#" target="_blank" alt="Ministry Name" title="मंत्रालय / विभाग नाम"><span class="responsive_minis_hi" lang="hi">5 वां वित्त आयोग </span></a>
                              <a href="#" target="_blank" alt="Ministry Name" title="Ministry / Department Name"><span class="li_eng responsive_minis_eng">5th State Finance Commission </span></a>
                           </li>
                        </ul>
                     </div>
                     <div class="common-right clearfix">
                        <ul id="header-nav">
                           <li class="ico-skip cf"><a href="#skipCont" title="">Skip to main content</a>
                           </li>
                           <li class="ico-site-search cf">
                              <a href="javascript:void(0);" id="toggleSearch" title="Site Search">
                              <img class="top" src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-site-search.png" alt="Site Search" /></a>
                              <div class="search-drop both-search">
                                 <div class="google-find">
                                    <form method="get" action="http://www.google.com/search" target="_blank">
                                       <label for="search_key_g" class="notdisplay">Search</label>
                                       <input type="text" name="q" value="" id="search_key_g"/> 
                                       <input type="submit" value="Search" class="submit" /> 
                                       <div>
                                          <input type="radio" name="sitesearch" value="" id="the_web"/> 
                                          <label for="the_web">The Web</label> 
                                          <input type="radio" name="sitesearch" value="india.gov.in" checked id="the_domain"/> <label for="the_domain"> INDIA.GOV.IN</label>
                                       </div>
                                    </form>
                                 </div>
                                 <div class="find">
                                    <form name="searchForm" action="">
                                       <label for="search_key" class="notdisplay">Search</label>
                                       <input type="text" name="search_key" id="search_key" onKeyUp="autoComplete()" autocomplete="off" required />
                                       <input type="submit" value="Search" class="bttn-search"/>
                                    </form>
                                    <div id="auto_suggesion"></div>
                                 </div>
                              </div>
                           </li>
                           <li class="ico-accessibility cf">
                              <a href="javascript:void(0);" id="toggleAccessibility" title="Accessibility Dropdown" role="link">
                              <img class="top" src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-accessibility.png" alt="Accessibility Dropdown" />
                              </a>
                              <ul>
                                 <li> <a onClick="set_font_size(&#39;increase&#39;)" title="Increase font size" href="javascript:void(0);" role="link">A<sup>+</sup></a> </li>
                                 <li> <a onClick="set_font_size()" title="Reset font size" href="javascript:void(0);" role="link">A<sup>&nbsp;</sup></a> </li>
                                 <li> <a onClick="set_font_size(&#39;decrease&#39;)" title="Decrease font size" href="javascript:void(0);" role="link">A<sup>-</sup></a> </li>
                                 <li> <a href="javascript:void(0);" class="high-contrast dark" title="High Contrast" role="link">A</a> </li>
                                 <li> <a href="javascript:void(0);" class="high-contrast light" title="Normal Contrast" style="display: none;" role="link">A</a> </li>
                              </ul>
                           </li>
                           <li class="ico-social cf">
                              <a href="javascript:void(0);" id="toggleSocial" title="Social Medias">
                              <img class="top" src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-social.png" alt="Social Medias" /></a>
                              <ul>
                                 <li><a target="_blank" title="External Link that opens in a new window" href="http://www.facebook.com/"><img alt="Facebook Page" src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-facebook.png"></a></li>
                                 <li><a target="_blank" title="External Link that opens in a new window" href="http://www.twitter.com/"><img alt="Twitter Page" src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-twitter.png"></a></li>
                                 <li><a target="_blank" title="External Link that opens in a new window" href="http://www.youtube.com/"><img alt="youtube Page" src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-youtube.png"></a></li>
                              </ul>
                           </li>
                           <li class="ico-sitemap cf"><a href="" title="Sitemap">
                              <img class="top" src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-sitemap.png" alt="Sitemap" /></a>
                           </li>
                           <li class="hindi cmf_lan d-hide">
                              <label class="de-lag"><span style="display: none;">Language</span>
                                 <select title="Select Language">
                                    <option>English</option>
                                    <option>हिन्दी</option>
                                 </select>
                              </label>
                           </li>
                           <li class="hindi cmf_lan m-hide">
                              <a href="javascript:;" title="Select Language">Language</a> 
                              <ul>
                                 <li><a target="_blank" href="" lang="hi" class="alink" title="Click here for हिन्दी version.">हिन्दी</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <p id="scroll" style="display: none;"><span></span></p>
         </div>
         <!--Top-Header Section end-->
         <section class="wrapper header-wrapper">
            <div class="container common-container four_content header-container">
               <h1 class="logo">                 
                  <img class="national_emblem" src="<?php echo get_template_directory_uri(); ?>/assets/images/emblem-dark.png" alt="national emblem" >
                  <span class="department-title">
                     <em> <a href="home.html" title="Home" rel="home" class="header__logo" id="logo"><span>5 वां वित्त आयोग </span></a></em>
                     <em>
                        <a href="home.html" title="Home" rel="home" class="header__logo" id="logo"> 
                           <span>5th State Finance Commission</span>
                        </a>
                     </em>
                  </span>
               </h1>
               <div class="header-right clearfix">
                  <div class="right-content clearfix">
                     <div class="float-element">
                        <a class="sw-logo" target="_blank" href="https://swachhbharat.mygov.in/" title="Swachh Bharat, External link that opens in a new windows">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/swach-bharat.png" alt="Swachh Bharat">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--/.header-wrapper-->
         <section class="wrapper megamenu-wraper">
            <h2 style="display: none;">Megamenu</h2>
            <div class="container common-container four_content header-nav">
               <p class="showhide" id="showhide"><em></em><em></em><em></em></p>
               <nav class="main-menu clearfix main-menu1" id="main_menu">
			   <?php 
wp_nav_menu(
array(
'theme_location'=>'top-menu',
'menu_class'=>'nav-menu',
'menu_id'=>'',
'container'=>'false',
'add_li_class'=>'',
'add_a_class'=>''
))
?>
               </nav>
               <nav class="main-menu clearfix" id="overflow_menu">
                  <ul class="nav-menu clearfix">
                  </ul>
               </nav>
            </div>
         </section>
      </header>