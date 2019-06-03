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
<section class="our-service page-section-ptb">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12">
             <div class="section-title text-center">
              <h2 class="title-effect"><?php echo get_field('service_title') ?></h2>
              <p><?php echo get_field('service_content') ?></p>
            </div>
         </div>
      </div>
       <div class="row justify-content-center">
         <div class="col-md-10">
        <div class="row"> 
          <?php while (have_rows('features')) : the_row()?>
             <div class="col-xl-3 col-lg-3 col-md-3">
               <div class="feature-text left-icon mb-40">
                  <div class="feature-icon">
                  <span class="<?php echo get_sub_field('icon') ?> theme-color" aria-hidden="true"></span>
                  </div>
                  <div class="feature-info">
                  <h5><?php echo get_sub_field('title') ?></h5>
                   <!-- <a class="button icon-color" href="#">Read more <i class="fa fa-angle-right"></i></a> -->
                  </div>
               </div>
            </div>
          <?php endwhile; ?>
         </div>     
      </div>
      </div>
      </div>
      <div class="objects-right">
     <img class="objects-4 img-fluid wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="2.0s" src="images/objects/04.png" alt="">
     <img class="objects-5 img-fluid wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="2.0s" src="images/objects/05.png" alt="">
  </div>
</section>

<!-- 
<section class="awesome-features gray-bg page-section-ptb pos-r">
   <div class="side-background">
        <div class="col-lg-5 img-side img-left d-xs-block d-lg-block d-none">
            <div class="row page-section-pt mt-30">
              <img src="<?php echo get_field('service_bg') ?>" alt="">
            </div>
        </div>
    </div>
   <div class="container">
     <div class="row justify-content-end">     
       <div class="col-lg-7">
       <div class="section-title">
          <h2 class="title-effect"><?php echo get_field('service_title') ?> </h2>
          <p><?php echo get_field('service_content') ?></p>
        </div>
         <div class="row">

          <?php while (have_rows('features')) : the_row()?>
           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
             <div class="feature-text text-left mb-30">
             <div class="feature-icon">
              <span class="<?php echo get_sub_field('icon') ?> theme-color"></span>
              </div>
              <div class="feature-info">
                  <h5><?php echo get_sub_field('title') ?></h5>
               </div>
           </div>
          </div>
        <?php endwhile; ?>
         </div>
       </div>
     </div>
   </div>
 </section> -->

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
   		<a class="button button-border black" href="#">Voir Plus</a>
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
    	<a class="button xs-mb-10 " href="index-01.html">Afficher Plus</a>
    </div>
  </div>
</section>

<!-- Communiqués -->

<?php get_footer(); ?>