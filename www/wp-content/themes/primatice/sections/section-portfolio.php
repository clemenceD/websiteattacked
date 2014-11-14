<?php
global $themebucket_firebrick;
?>
<?php
if ($themebucket_firebrick['section_portfolio_display'] && isset($themebucket_firebrick['section_portfolio_gallery'])) {
    $portfolio_post = $themebucket_firebrick['section_portfolio_gallery'];
    $tags = array();
    $attachments = new Attachments('firebrick_portfolio', $portfolio_post);
    if ($attachments->exist()) {
        while ($attachment = $attachments->get()) {
            $_tag = str_replace(", ", ",", $attachments->field("tags"));
            $atags = explode(",", $_tag);
            $tags = array_unique(array_merge($tags, $atags));
        }
    }
    ?>

    <!--section portfolio start-->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="section-header wow bounceIn"><?php echo the_field('section_portfolio_title'); ?></h2>

            <p class="section-intro wow fadeInUp">
                <?php echo the_field('section_portfolio_subtitle'); ?>
            </p>
        
            <div class="clear">
            </div>
            <?php
            $attachments = new Attachments('firebrick_portfolio', $portfolio_post);
            if ($attachments->exist()) {
                ?>
                <!-- The GRID System -->
                <div class="megafolio-container light-bg-entries">
                    <?php
                    while ($attachment = $attachments->get()) {
                        $atags = explode(",", $attachments->field("tags"));
                        $tags = array_unique(array_merge($tags, $atags));
                        $_tag = str_replace(", ", " ", $attachments->field("tags"));
                        $_tag = str_replace(",", " ", $attachments->field("tags"));
                        //get_template_part("section-templates/portfolio", "item");
                        {
                            ?>
                            <!-- A GALLERY ENTRY -->

                            <div class="mega-entry <?php echo $_tag; ?> cat-all entry-4"
                                 data-src="<?php echo $attachments->src('portfolio-thumb'); ?>" data-width="150"
                                 data-height="150">
                                <div class="mega-hover alone">
                                    <div class="mega-hovertitle"><?php echo $attachments->field("title"); ?></div>

                                    <a href="<?php echo $attachments->src('portfolio-items'); ?>" class="image-link">
                                        <div class="mega-hoverview"></div>
                                        <div class="img-desc">
                                            <?php echo $attachments->field("description"); ?>
                                        </div>
                                        <div class="img-title">
                                            <?php echo $attachments->field("title"); ?>
                                        </div>
                                        <div class="img-url">
                                            <?php echo $attachments->field("url"); ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php
                        }
                    }
                    ?>

                </div>
            <?php } ?>

            <!-- colio-content # colio_c1 -->
        </div>
    </section>
<?php } ?>