<?php 
/**
* Template Name: Communicateds Page
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

<section class="service white-bg page-section-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2 class="title-effect">Tous les Communiqués</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <?php 
        $communicated = get_last_post('communicated',-1);
        $num = 1;
        while ($communicated->have_posts()) : $communicated->the_post();
      ?>
      <div class="col-lg-6 col-sm-6 mb-30">
        <div class="media border h-100 p-4">
          <span class="media-step theme-color mr-4"><?php echo $num ?></span>
          <div class="media-body">
            <h4><?php echo the_title() ?></h4>
            <p class="mb-0"><?php echo get_the_content() ?></p>
          </div>
        </div>
      </div>
      <?php 
        $num++;
        endwhile; 
      ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>