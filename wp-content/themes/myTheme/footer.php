<footer class="main-footer bg-dark">
    <div class="container">
        <div class="col-md-12">
            &copy; <?php echo date("Y"); ?> <?php echo get_bloginfo('name') ?>
            <div class="social-wrap">
                <?php if (have_posts()) : query_posts('cat=3');
                    while (have_posts()) : the_post(); ?>
                        <li><a href="<?php echo get_post_meta($post->ID, 'url', true); ?>" target="_blank"
                               title="<?php the_title(); ?>"><i
                                    class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a>
                        </li>
                    <? endwhile; endif;
                wp_reset_query(); ?>
            </div>
        </div>
    </div>
</footer>

<div class="hidden"></div>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri() ?>/libs/html5shiv/es5-shim.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/libs/respond/respond.min.js"></script>
<![endif]-->
<script src="<?php echo get_template_directory_uri() ?>/libs/jQuery/jquery-2.1.3.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/libs/animate/animate-css.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/libs/parallax/parallax.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/libs/mixitup/mixitup.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/libs/waypoints/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/libs/PageScroll/PageScroll2id.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/common.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/libs/bootstrapValidate/jqBootstrapValidation.js"></script>
<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->

<?php wp_footer(); ?>
</body>
</html>