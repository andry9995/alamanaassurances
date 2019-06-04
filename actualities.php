<?php 
/**
* Template Name: Actualities Page
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

<section class="theme-bg page-section-ptb">
   <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 sm-mt-20">
        <div class="section-title text-center">
          <h2>Tous les Actualités</h2>
        </div>
      </div>
    </div>
      <div class="row">
      	<?php 
        	$actualities = get_last_post('news',-1);  
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
</section>


<?php get_footer(); ?>