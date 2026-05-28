<?php
/**
 * @package Case-Themes
 */
get_header(); ?>
<div class="container">
    <div class="row content-row">
        <div id="pxl-content-area" class="pxl-content-area col-12">
            <main id="pxl-content-main" class="pxl-text-center">
                <div class="pxl-error-inner bg-image">
                    <div class="pxl-error-image"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/image-404.png'); ?>" /></div>
                    <h3 class="pxl-error-title">
                        <?php echo esc_html__('Oops.. Page Not Found!', 'proactive'); ?>
                    </h3>
                    <a class="btn btn-text-parallax btn-icon-box" href="<?php echo esc_url(home_url('/')); ?>">
                        <span class="pxl--btn-text"><?php echo esc_html__('Back To Home Page', 'proactive'); ?></span>
                        <span class="pxl--btn-icon"><i class="flaticon-up-right-arrow"></i></span>
                    </a>
                </div>
            </main>
        </div>
    </div>
</div>
<?php get_footer();
