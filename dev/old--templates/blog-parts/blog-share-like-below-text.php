<?php if($blog_share_like_layout == 'below_post_text') { ?>
    <div class="icon_social_holder">
        

        <div class="qode_print">
        <?php echo do_shortcode('[social_share show_share_icon="yes"]'); ?>
        </div>

        <div class="qode_print">
            <a href="#" onClick="window.print();return false;" class="qode_print_page">
                <span class="icon-basic-printer qode_icon_printer"></span>
                <span class="eltd-printer-title"><?php esc_html_e("Print Page", "bridge") ?></span>
            </a>
        </div>

        <div class="qode_print">
            <a href="/blog-news" class="qode_print_page">
                <span class="icon-basic-blog  qode_icon_printer"></span>
                <span class="eltd-printer-title"><?php esc_html_e("Blog & News", "bridge") ?></span>
            </a>
        </div>
        <?php if($qode_like == "on") { ?>
            <div class="qode_like"><?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?></div>
        <?php } ?>
    </div>
<?php } ?>