<?php
global $themebucket_firebrick;
$sp = firebrick_get_custom_posts("service", 4);
$classes = array(0 => "", "1" => "col-md-12", "2" => "col-md-6", "3" => "col-md-4", "4" => "col-md-3");
$anims = array(0=>"",1 => "slideInLeft", 2 => "slideInRight");
?>
<?php if ($themebucket_firebrick['section_services_display']) { ?>
    <section id="services" class="services">
        <h2 class="section-header wow bounceIn"><?php if (isset($themebucket_firebrick['section_service_title'])) echo $themebucket_firebrick['section_service_title']; ?></h2>

        <p class="subtitle text-white wow fadeInUp text-center">
            <?php if (isset($themebucket_firebrick['section_service_subtitle'])) echo $themebucket_firebrick['section_service_subtitle']; ?>
        </p>

        <div class="container">
            <?php
            $i = 0;
            foreach ($sp as $post) {
                setup_postdata($post);
                $icon_code = get_post_meta($post->ID, "_firebrick_icon_code", 1);
                $anim = get_post_meta($post->ID, "_firebrick_object_animation", 1);
                $i++;
                ?>
                
                <div class="col-md-3 wow <?php echo $anim; ?> text-center">
                    <div class="service-block clearfix">
                        <div class="service-intro">
                            <h4><?php the_title();?></h4>

                            
                                <?php the_excerpt();?>
                            
                        </div>
                    </div>
                </div>

                

            <?php } ?>

        </div>
        <div class="row text-center">
           <a href=""> <button class="btn btn-primo">EN SAVOIR PLUS</button></a>
        </div>
    </section>
<?php } ?>