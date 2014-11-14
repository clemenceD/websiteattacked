<?php
if(ICL_LANGUAGE_CODE == "fr"){
$id=5;     
}else {
$id = 541;
}
$post = get_post($id); 
$content = apply_filters('the_content', $post->post_content); 
?>
<div id="" class="">
	<div id="home_banner">
		<div class="content">
      <h1><?php the_field('title-header-top'); ?></h1>
        <h3><?php the_field('title-header-top-second'); ?></h3>      
        </div>
	</div>
	<div class="container row-home">
		<?php echo $content;   ?>
	</div>

	<div id="solution" class="container text-center third-title">
		<h2 class="h2-tick"><?php the_field('title-sub-banner-h2'); ?></h2>
    
	</div>
</div>



<section id="services" class="services">
        <h2 class="section-header wow bounceIn animated" style="visibility: visible; font-size: 48px;"><?php the_field('consulting_title'); ?></h2>

        <p class="subtitle text-white wow fadeInUp text-center animated" style="visibility: visible;">
            <?php the_field('consulting_sub_title'); ?></p>

        <div class="container">
                            
                <div class="col-md-3 wow  text-center animated" style="visibility: visible;">
                    <div class="service-block clearfix">
                        <div class="service-intro">
                            <h4><?php the_field('consulting_bloc_1_title'); ?></h4>

                            
                                <p><?php the_field('consulting_bloc_1_content'); ?></p>
                            
                        </div>
                    </div>
                </div>

                

                            
                <div class="col-md-3 wow  text-center animated" style="visibility: visible;">
                    <div class="service-block clearfix">
                        <div class="service-intro">
                            <h4><?php the_field('consulting_bloc_2_title'); ?></h4>

                            
                                <p><?php the_field('consulting_bloc_2_content'); ?></p>
                            
                        </div>
                    </div>
                </div>

                

                            
                <div class="col-md-3 wow  text-center animated" style="visibility: visible;">
                    <div class="service-block clearfix">
                        <div class="service-intro">
                            <h4><?php the_field('consulting_bloc_3_title'); ?></h4>

                            
                                <p><?php the_field('consulting_bloc_3_content'); ?></p>
                            
                        </div>
                    </div>
                </div>

                

                            
                <div class="col-md-3 wow  text-center animated" style="visibility: visible;">
                    <div class="service-block clearfix">
                        <div class="service-intro">
                            <h4><?php the_field('consulting_bloc_4_title'); ?></h4>

                            
                                <p><?php the_field('consulting_bloc_4_content'); ?></p>
                            
                        </div>
                    </div>
                </div>

                

            
        </div>
        <div class="row text-center">
           <?php the_field('consulting_bt'); ?>
           
        </div>
    </section>


<?php
global $themebucket_firebrick;
$sections = $themebucket_firebrick['firebrick_sections_order'];
if (!is_array($sections)) {
    $sections = firebrick_get_enabled_sections();
}
if (empty($sections)) {
    $sections = firebrick_get_all_sections();
}
foreach ($sections as $section_id => $name) {

    $section_id = str_replace("_", "-", $section_id);
    if (file_exists(__DIR__ . "/sections/{$section_id}.php")){
        get_template_part("sections/{$section_id}");
    }
}
?>



<script>
    (function ($) {
 $(document).ready(function () {



    if(window.location.hash != ""){  

        console.log(window.location.hash)

          $('html, body').animate({
             scrollTop: $(window.location.hash).offset().top
         }, 2000);
    
    }

});

});



</script>



