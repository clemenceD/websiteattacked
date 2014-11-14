<?php
global $themebucket_firebrick;
?>
<?php if ($themebucket_firebrick['section_contact_display']) { ?>
    <!--section contact start-->
    <section id="contact" class="contact">
        <div>
            <h2 class="section-header contact-header wow bounceIn p-b-50" style="">Contact</h2>
        </div>
        <div id="location-map">
            <div id="map">
            </div>
            <div id="marker-content">
                <?php if (isset($themebucket_firebrick['section_contact_description'])) echo wpautop($themebucket_firebrick['section_contact_description']); ?>
            </div>
        </div>
    </section>
    <!--section contact end-->
<?php } ?>