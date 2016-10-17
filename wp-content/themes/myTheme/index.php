<?php get_header(); ?>

    <section id="about" class="s-about bg-light">
        <div class="section-header">
            <h2><?php echo get_cat_name(2); ?></h2>
            <div class="s-description-wrapper">
                <div class="s-description"><?php echo category_description(2); ?></div>
            </div>
        </div>

        <div class="section-content">
            <div class="container">
                <div class="row">
                    <?php if (have_posts()) : query_posts('p=4');
                        while (have_posts()) : the_post(); ?>

                            <div class="col-md-4 col-md-push-4 animation-photo">
                                <h3>Фото</h3>
                                <div class="person">

                                    <?php if (has_post_thumbnail()) { ?>
                                        <a class="popup"
                                           href="<?php $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                                           echo $large_image_url[0] ?>"
                                           title="">
                                            <?php the_post_thumbnail(array(220, 220)); ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="col-md-4 col-md-pull-4 animation-left">
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            </div>
                        <? endwhile; endif;
                    wp_reset_query(); ?>

                    <div class="col-md-4 animation-right personal-last-block">
                        <?php if (have_posts()) :
                            query_posts('p=7');
                            while (have_posts()) :
                                the_post(); ?>
                                <h3><?php the_title(); ?></h3>
                                <h2 class="personal-header"><?php echo get_bloginfo('name') ?></h2>
                                <?php the_content(); ?>
                            <? endwhile;
                        endif;
                        wp_reset_query(); ?>

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
            </div>
        </div>
    </section>

    <section id="resume" class="s-resume">
        <div class="section-header">
            <h2><?php echo get_cat_name(4); ?></h2>
            <div class="s-description-wrapper">
                <div class="s-description"><?php echo category_description(4); ?></div>
            </div>
        </div>

        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="resume-container">
                        <div class="col-md-6 col-xm-6 left">
                            <h3><?php echo get_cat_name(5); ?></h3>
                            <div class="resume-icon"><i class="icon-basic-case"></i></div>
                            <?php if (have_posts()) : query_posts('cat=5');
                                while (have_posts()) : the_post(); ?>
                                    <div class="resume-item">
                                        <div class="year"><?php echo get_post_meta($post->ID, 'year', true); ?></div>
                                        <div
                                            class="resume-description"><?php echo get_post_meta($post->ID, 'working_place', true); ?>
                                            <strong><?php the_title(); ?></strong>
                                        </div>
                                        <?php the_content(); ?>
                                    </div>
                                <? endwhile; endif;
                            wp_reset_query(); ?>
                        </div>
                        <div class="col-md-6 col-xm-6 right">
                            <h3><?php echo get_cat_name(6); ?></h3>
                            <div class="resume-icon"><i class="icon-basic-book-pen"></i></div>
                            <?php if (have_posts()) : query_posts('cat=6');
                                while (have_posts()) : the_post(); ?>
                                    <div class="resume-item">
                                        <div class="year"><?php echo get_post_meta($post->ID, 'year', true); ?></div>
                                        <div class="resume-description">
                                            <strong><?php the_title(); ?></strong><?php echo get_post_meta($post->ID, 'working_place', true); ?>
                                        </div>
                                        <?php the_content(); ?>
                                    </div>
                                <? endwhile; endif;
                            wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="s-portfolio bg-dark">
        <div class="section-header">
            <h2><?php echo get_cat_name(7); ?></h2>
            <div class="s-description-wrapper">
                <div class="s-description"><?php echo category_description(7); ?></div>
            </div>
        </div>

        <div class="section-content">
            <div class="container">
                <div class="row">
                    <ul>
                        <li class="active filter" data-filter="all">Все работы</li>
                        <li class="filter" data-filter=".sites">Сайты</li>
                        <li class="filter" data-filter=".identify">Айдентика</li>
                        <li class="filter" data-filter=".logos">Логотипы</li>
                    </ul>
                    <div id="portfolio-table">
                        <?php if (have_posts()) : query_posts('cat=7');
                            while (have_posts()) : the_post(); ?>

                                <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio-item <?php
                                $tags = wp_get_post_tags($post->ID);
                                if ($tags) {
                                    foreach ($tags as $tag) {
                                        echo ' '.$tag->name;
                                    }
                                } ?> ">
                                    <?php the_post_thumbnail([400, 300]); ?>
                                    <div class="port-item-cont">
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php echo get_post_meta($post->ID, 'thumb-nail sketch', true); ?></p>
                                        <a href="#" class="popup-content">Посмотреть</a>
                                    </div>
                                    <div class="hidden">
                                        <div class="portfolio-description" id="work-1">
                                            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                                            <h3><?php the_title(); ?></h3>
                                            <?php the_content(); ?>
                                            <img
                                                src="<?php $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                                                echo $large_image_url[0] ?>"/>
                                        </div>
                                    </div>
                                </div>
                            <? endwhile; endif;
                        wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="contacts" class="s-contacts bg-light">
        <div class="section-header">
            <h2><?php echo get_cat_name(11); ?></h2>
            <div class="s-description-wrapper">
                <div class="s-description"><?php echo category_description(11);?></div>
            </div>
        </div>

        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-box">
                            <div class="contacts-icon icon-basic-geolocalize-05"></div>
                            <h3>Адрес:</h3>
                            <p><?php
                                $options = get_option('sample_theme_options');
                                echo $options['address']; ?></p>
                        </div>
                        <div class="contact-box">
                            <div class="contacts-icon icon-basic-smartphone"></div>
                            <h3>Телефон:</h3>
                            <p><?php
                                $options = get_option('sample_theme_options');
                                echo $options['telephone']; ?></p>
                        </div>
                        <div class="contact-box">
                            <div class="contacts-icon icon-basic-webpage-img-txt"></div>
                            <h3>Веб-сайт:</h3>
                            <p><a href="<?php
                                $options = get_option('sample_theme_options');
                                echo $options['site']; ?>" target="_blanc"><?php
                                    $options = get_option('sample_theme_options');
                                    echo $options['site']; ?></a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <form action="https://formspree.io/alex12486@gmail.com" method="POST" target="_blanc"
                              class="main-form" novalidate>
                            <label class="form-group"><span class="color_element">*</span>Ваше имя:
                                <input type="text" name="name" placeholder="Ваше имя"
                                       data-validation-required-message="Вы не ввели имя" required=""/>
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group"><span class="color_element">*</span>Ваш E-mail:
                                <input type="email" name="email" placeholder="Ваше email"
                                       data-validation-required-message="Не корректно введен E-mail" required=""/>
                                <span class="help-block text-danger"></span>
                            </label>
                            <label class="form-group"><span class="color_element">*</span>Ваше сообщение:
                                <textarea name="message" placeholder="Ваше сообщение"
                                          data-validation-required-message="Вы не ввели сообщение"
                                          required=""></textarea>
                                <span class="help-block text-danger"></span>
                            </label>

                            <button>Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>