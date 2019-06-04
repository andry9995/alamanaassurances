<?php 
/**
* Template Name: Services Page
*
* @package WordPress
* @subpackage Visite virtuelle
* @since Visite virtuelle
*/
get_header();
?>
<section class="page-title center bg-overlay-black-50 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(<?php echo get_field('header_image')?>);">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          <h1 class="text-black"><?php echo the_title();?></h1>
        </div>
        <ul class="page-breadcrumb">
          <li><a href="<?php echo site_url(); ?>"><i class="fa fa-home"></i> <?php echo bloginfo('title'); ?></a> <i class="fa fa-angle-double-right"></i></li>
          <li><a href="#"><?php echo the_title();?></a></li>
       </ul>
     </div>
     </div>
  </div>
</section>
<br>
<br>

<section class="white-bg page-section-pb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
       <div class="section-title text-center">
            <h2 class="title-effect"><?php echo get_field('titre_presentation_des_services');?></h2>
          </div>
      </div>
    </div>
    <div class="row">
      <?php while (have_rows('prestations')) : the_row()?>
    	  <div class="col-md-4 xs-mb-40">
          <div class="feature-box h-100">
            <div class="feature-box-content">
            <i class="<?php echo get_sub_field('icon') ?> blue"></i>
            <h4><?php echo get_sub_field('title') ?></h4>
            <p><?php echo get_sub_field('content') ?></p>
            </div>
            <a href="<?php echo get_permalink() ?>">Lire la suite</a>
            <div class="feature-box-img" style="background-image: url('<?php echo get_sub_field('bg') ?>');"></div>
            <span class="feature-border"></span>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
     <div class="divider pt-50"></div>
  </div>
</section>


<?php get_footer(); ?>