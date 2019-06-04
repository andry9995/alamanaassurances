<?php 
/**
* Template Name: Home Page
*
* @package WordPress
* @subpackage Visite virtuelle
* @since Visite virtuelle
*/
get_header();
?>
<!-- Services -->

<section class="service white-bg page-section-ptb">
  <div class="container">
    <div class="row justify-content-center">
       <div class="col-lg-8">
        <div class="section-title text-center">
            <h2 class="title-effect"><?php echo get_field('service_title') ?></h2>
            <p><?php echo get_field('service_content') ?></p>
          </div>
      </div>
    </div>
    <div class="row">
      <?php while (have_rows('features')) : the_row()?>
        <div class="col-lg-4 col-md-4 mb-30">
          <div class="feature-text box-shadow h-100 text-center">
            <div class="feature-icon">
              <span class="<?php echo get_sub_field('icon') ?> theme-color"></span>
            </div>
            <div class="feature-info">
              <h3 class="pb-10"><?php echo get_sub_field('title') ?></h3>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
     </div>
   </div>
</section>




<!-- A propos -->
<section class="page-section-ptb">
  <div class="container">
   <div class="row">
     <div class="col-lg-6 sm-mb-30">
       <div class="owl-carousel bottom-center-dots" data-nav-dots="ture" data-smartspeed="1200" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
  		<?php if ( have_rows('about_slider') ) : ?>
  			<?php while ( have_rows('about_slider') ) : the_row(); ?>
  				<div class="item">
		            <img class="img-fluid" src="<?php echo get_sub_field('slide') ?>" alt="">
		          </div>
  			<?php endwhile; ?>
  		<?php endif; ?>
      </div>
     </div>
     <div class="col-lg-6">
        <div class="section-title">
        <h2 class="title-effect"><?php echo get_field('about_title'); ?></h2>
        <p><?php echo get_field('about_content'); ?></p>
      </div>
       </div>
   </div>
   </div>
</section>

<!-- Actualités -->
<section class="theme-bg page-section-ptb">
   <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 sm-mt-20">
        <div class="section-title text-center">
          <h2>Actualités</h2>
        </div>
      </div>
    </div>
      <div class="row">
      	<?php 
        	$actualities = get_last_post('news');  
  		    $num = 1;
  		    while ($actualities->have_posts()) : $actualities->the_post();
		    ?>
         <div class="col-lg-4 col-md-4 col-sm-4 xs-mb-30">
            <div class="feature-step ">
              <h1 class="text-white"><?php echo $num ?><span class="text-black">.</span></h1>
              <h3 class="text-white"><?php echo the_title() ?></h3>
              <p class="text-white"><?php echo substr(get_the_content(),0,100) ?></p>
              <div class="button-black-iocn">
               <a class="button icon-color white-btn mt-15" href="<?php echo get_permalink() ?>">Lire la suite<i class="fa fa-angle-right"></i></a>
               </div>
            </div>
         </div>
     <?php 
     	$num += 1 ;
 		endwhile; ?>
      </div>
   </div>
   <div class="text-center clearfix">
   		<br>
   		<br>
   		<a class="button button-border black" href="<?php echo site_url('/actualites/');?>">Voir Plus d'actualités</a>
   </div>
</section>

<!-- Evènements -->
<section id="blog" class="our-blog page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 sm-mt-20">
        <div class="section-title text-center">
          <h2>Evènements</h2>
        </div>
      </div>
    </div>
    <div class="row">

    	<?php 
      	$events = get_last_post('event');
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
    <div class="text-center clearfix">
    	<a class="button xs-mb-10 " href="<?php echo site_url('/evenements/');?>">Voir plus d'évènements</a>
    </div>
  </div>
</section>

<!-- Communiqués -->
<section class="service white-bg page-section-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-center">
          <h2 class="title-effect">Communiqués</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <?php 
        $communicated = get_last_post('communicated',4);
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
    <div class="text-center clearfix">
      <a class="button xs-mb-10 " href="<?php echo site_url('/communiques/');?>">Voir Plus de communiqués</a>
    </div>
  </div>
</section>

<!-- Promotion -->
<section class="our-clients theme-bg text-white page-section-ptb position-relative">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="text-uppercase text-white mb-0 text-center">Promotions</h2>
      </div>
    </div>
  </div>
</section>

<section class="secrvice-blog pb-80">
  <div class="container">
    <div class="row">
      <?php 
        $promotions = get_last_post('promotion');
        $num = 1;
        while ($promotions->have_posts()) : $promotions->the_post();
      ?>
      <div class="col-lg-4 col-md-4 col-sm-12 mb-30">
        <div class="card border-0  box-content o-hidden h-100">
          <img class="img-fluid" src="<?php echo get_field('bg') ?>" alt="">
          <div class="p-4">
            <h4 class="fw-5"><a href="#" class="text-black"><?php echo the_title() ?></a></h4>
            <p class="mb-0 pb-0 text-black">
              <?php echo get_the_content() ?>
            </p>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>