<?php
get_header();
?>
<?php
if (have_posts()) :
?>

    <ul class="posts-list">
        <?php
        while (have_posts()) :
            the_post();
            $photos = get_field('photos');
            $short_description = get_post_meta(get_the_ID(), 'short_description', true);
            $category = get_post_meta(get_the_ID(), 'category', true);
            $size = get_field('size');
            if ($size) :
                $height = $size['height'];
                $length = $size['length'];
                $width = $size['width'];
            endif;
        ?>
            <li class="last-post">
                <a href="<?php the_permalink(); ?>" class="last-post__link" aria-label="Читать текст статьи: <?php the_title(); ?>">
                    <figure class="last-post__thumb">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'last-post__img']); ?>
                    </figure>
                    <div class="last-post__wrap">
                        <div class="image">
                            <?php
                            $images = get_field('photos');
                            if ($images) : ?>
                                <div id="slider" class="flexslider">
                                    <ul class="slides">
                                        <?php foreach ($images as $image) : ?>
                                            <li>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <p><?php echo esc_html($image['caption']); ?></p>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div id="carousel" class="flexslider">
                                    <ul class="slides">
                                        <?php foreach ($images as $image) : ?>
                                            <li>
                                                <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="Thumbnail of <?php echo esc_url($image['alt']); ?>" />
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                        <h3 class="last-post__h">
                            <?php the_title(); ?>
                        </h3>
                        <p><?= $short_description ?></p>
                        <p><?= $category ?></p>
                        <div>
                            <p><?= $height ?></p>
                            <p><?= $length ?></p>
                            <p><?= $width ?></p>
                        </div>
                        <p><?php
                            if (have_rows('choose_a_color')) :

                                while (have_rows('choose_a_color')) : the_row();

                                    if (get_row_layout() == 'color') :

                                        echo "<h3>" . get_sub_field('color_name') . "</h3>";
                                    endif;
                                endwhile;
                            endif;
                            ?></p>
                        <p class="last-post__text">
                            <?php echo get_the_excerpt(); ?>
                        </p>
                        <span class="last-post__more link-more">more -></span>
                    </div>
                </a>
            </li>
        <?php endwhile; ?>
    </ul>

<?php
else :
    echo 'Нет статей';
endif;
?>
<?php
get_footer();
?>