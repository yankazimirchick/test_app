<?php
/**
* Template Name: Main Page
*
*/
?>
<?get_header();?>
<main>
        <section class="screen-1" style="background-image: url(<?=the_field('background');?>);">
            <div class="screen-1_bg-color"></div>
            <div class="screen-1_inner-wrapper container">
                <h1><?=the_field('main_text');?></h1>
                <p><?=the_field('sub_text');?>
                   
                </p>
            </div>
        </section>
        <section class="screen-2 bg-black">
            <div class="container">
                <h2 class=""><?=the_field('s2main_text');?></h2>
                <div class="list">
                                        <?

$posts = get_posts( array(
	'post_type'   => 'products',
	'suppress_filters' => true, 
) );

foreach( $posts as $key =>$post ){
	setup_postdata($post);
    if($key==0){
        echo('<details open> <summary>'.get_the_title().'</summary>');
    }else{
        echo('<details> <summary>'.get_the_title().'</summary>');
    }
   
    echo(' <div class="list-content">'.get_the_content( ).'</div></details>');
   
   
}

wp_reset_postdata(); // сброс

?>
                </div>
              
            </div>
        </section>

        <section>
           <div class="screen-3">
                <!-- Slider main container -->
            <div class="screen-3_text container">
                <h2 class=""><?=the_field('s3main_text');?></h2>

            <p class="">
            <?=the_field('s3sub_text');?>
            </p>
            </div>
           

            <div class="swiper-container">
                <div class="swiper-button-prev"></div>
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->

                    <?php

if( have_rows('slaider_content') ):
    while ( have_rows('slaider_content') ) : the_row();
        ?>       
        <div class="swiper-slide">
                        <div class="swiper-slide_inner">
                            <img src="<?the_sub_field('slaider-image');?>" alt="">
                            <p><?the_sub_field('slaider-text');?></p>
                        </div>     
                    </div>
        <?
    endwhile;

else :

    // вложенных полей не найдено

endif;

?>


                   
                    
                </div>


                <!-- If we need navigation buttons -->
                
                <div class="swiper-button-next"></div>
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar mt-2"></div>
            </div>
           </div>
        </section>



    </main>

<?get_footer();?>