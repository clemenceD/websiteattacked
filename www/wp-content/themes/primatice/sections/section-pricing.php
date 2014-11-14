<?php
global $themebucket_firebrick;
$ptp = firebrick_get_custom_posts_by_custom_order("pricingtable", 4, "_firebrick_pricing_order");
$classes = array(0 => "", "1" => "col-lg-12 col-sm-12", "2" => "col-lg-6 col-sm-6", "3" => "col-lg-4 col-sm-4", "4" => "col-lg-3 col-sm-3");
$anims = array(1 => "slideInLeft", 2 => "fadeIn", 3 => "fadeIn", 4 => "slideInRight");
$class = $classes[count($ptp)];
?>
<?php if ($themebucket_firebrick['section_pricing_display']) { ?>
    <section id="pricing" class="pricing">
        <h2 class="section-header wow bounceIn"><?php if (isset($themebucket_firebrick['section_pricing_title'])) echo $themebucket_firebrick['section_pricing_title']; ?></h2>

        <p class="section-intro wow fadeInUp">
            <?php if (isset($themebucket_firebrick['section_pricing_subtitle'])) echo $themebucket_firebrick['section_pricing_subtitle']; ?>
        </p>

        <div class="container">
            <div class="row">
                <!--price start-->
                <?php
                foreach ($ptp as $price) {
                    $price_meta = get_post_meta($price->ID);
                    $is_popular = false;
                    if (isset($price_meta['_firebrick_pricing_featured'])) $is_popular = $price_meta['_firebrick_pricing_featured'][0];
                    $mpclass = "";
                    if ($is_popular) $mpclass = "most-popular";
                    ?>
                    <div class="<?php echo $class; ?>">
                        <div
                            class="pricing-table <?php echo $mpclass; ?> wow <?php echo $price_meta['_firebrick_pricing_animation'][0]; ?> ">
                            <div class="pricing-head">
                                <span class="p-value"><?php echo $price_meta['_firebrick_pricing_price'][0]; ?> </span>
                                <span class="p-title"> <?php echo $price->post_title; ?> </span>
                            </div>
                            <ul class="list-unstyled">
                                <?php
                                $elements = $price_meta['_firebrick_pricing_elements'][0];
                                $el_parts = explode("\n", $elements);
                                foreach ($el_parts as $el) {
                                    $el = do_shortcode($el);
                                    echo "<li>{$el}</li>";
                                }
                                ?>
                            </ul>
                            <div class="price-actions">
                                <a href="<?php echo $price_meta['_firebrick_pricing_button_link'][0]; ?>"
                                   class="btn"><?php echo $price_meta['_firebrick_pricing_button'][0]; ?></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!--price end-->
            </div>
        </div>
    </section>
<?php } ?>