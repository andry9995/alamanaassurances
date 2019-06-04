<?php 
/**
* Template Name: apropos Page
*
* @package WordPress
* @subpackage Visite virtuelle
* @since Visite virtuelle
*/
get_header();
$down_space_title = get_field('titre_espace_telechargement');
$down_space_content = get_field('espace_telechargement_contenue');
?>
<!-- Banner -->
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

<!-- Mots de la directrice -->
<section class="white-bg page-section-ptb">
<div class="container">
 <div class="row justify-content-center">
   <div class="col-lg-8">
       <div class="text-center">
        <h2 class="mb-30"><?php echo get_field('title_mot_directrice');?></h2>
        <?php echo get_field('mot_de_la_directrice');?>
      </div>
    </div>
 </div>
</div>
</section>

<!-- Présentation du personnel -->
<section class="white-bg page-section-pb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
       <div class="section-title text-center">
            <h2 class="title-effect">Personnel</h2>
          </div>
      </div>
    </div>
    <div class="row">
      <?php 
          $args = array(
              'posts_per_page'    => -4,
              'post_type'     => 'team',
              'post_status' => 'publish',
              'orderby' => 'ID',
              'order' => 'ASC'
          );
          $equipes = new WP_Query( $args );
          if( $equipes->have_posts() ):
          while( $equipes->have_posts() ) : $equipes->the_post();
        ?>
        <div class="col-lg-3 col-sm-6 sm-mb-30">
           <div class="team team-hover">
              <div class="team-photo">
                <img class="img-fluid mx-auto" src="<?php echo the_post_thumbnail_url(); ?>"> 
              </div>    
              <div class="team-description"> 
                <div class="team-info"> 
                     <h5><a href="team-single.html"><?php echo the_title();?></a></h5>
                     <span><?php echo get_field('occupation');?></span>
                </div>
               </div>
           </div>
          </div>
        <?php endwhile; ?>
        <?php endif; ?>
       </div>
       <br>
       <div class="row">
        <div class="col-lg-12">
         <div class="section-title text-center">
              <a class="button xs-mb-10 " href="<?php echo site_url('/equipes/');?>">Voire plus <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
      </div>
     <div class="divider pt-50"></div>
  </div>
</section>

<!-- Espace téléchargement -->
<section class="action-box theme-bg full-width">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="action-box-text">
          <h3><?php echo $down_space_title ?></h3>
          <p><?php echo $down_space_content ?></p>
        </div>
        <div class="action-box-button">
          <a class="button button-border white" href="#"><span>Téléchargement</span><i class="fa fa-download"></i></a> 
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>