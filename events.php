<?php 
/**
* Template Name: Evènts Page
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

<section id="blog" class="our-blog page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 sm-mt-20">
        <div class="section-title text-center">
          <h2>Tous les Evènements</h2>
        </div>
      </div>
    </div>
    <div class="row">

    	<?php 
      	$events = get_last_post('event',-1);
		    $num = 1;
		    while ($events->have_posts()) : $events->the_post();
		  ?>
	      <div class="col-lg-4 col-md-4 col-sm-12 sm-mt-20 ">
	        <div class="blog-box blog-2 gray-bg h-100">          
	          <div class="blog-info">
	            <h4> <a href="<?php echo get_permalink() ?>"><?php echo the_title() ?></a></h4>
	            <p><?php echo get_the_content() ?></p>
	            <span><i class="fa fa-calendar-check-o"></i> <?php echo get_field('date') ?></span>
	            <a class="button icon-color" href="<?php echo get_permalink() ?>">Lire la suite<i class="fa fa-angle-right"></i></a>
	          </div>  
	        </div>
	      </div>
  <?php endwhile; ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>