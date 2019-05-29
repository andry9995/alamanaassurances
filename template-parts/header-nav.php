
<header id="header" class="header default">
<!--=================================
 mega menu -->

<div class="menu">  
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container"> 
      <div class="row"> 
       <div class="col-lg-12 col-md-12"> 
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                ?>
                <a href="<?php echo site_url();?>"><img id="logo_img" src="<?php echo $image[0]; ?>" alt="logo"> </a>
            </li>
        </ul>
        <!-- menu links -->
        <div class="menu-bar">
          <?php
              wp_nav_menu( array(
                  'menu'              => 'Header',
                  'theme_location'    => 'Header',
                  'depth'             => 2,
                  'menu_class'        => 'menu-links',
                  'menu_id'           => 'mobile-demo',
                  'walker'  => new wp_bootstrap_navwalker()
              ));
          ?>
        </div>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>
