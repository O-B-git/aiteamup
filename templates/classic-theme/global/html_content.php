<?php overall_header($title, $meta_desc); ?>
<!-- <div id="titlebar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php _esc($title)?></h2>
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href='<?php echo $config['site_url'] . 'dashboard' ?>'><?php _e("Dashboard") ?></a></li>
                        <li><?php _esc($name)?></li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div> -->
<div class="container margin-bottom-50">
    <div class="section html-pages"><?php _esc($html)?></div>
    <!-- faq-page -->
</div>
<?php
overall_footer();
?>
