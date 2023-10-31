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
                <figure class="last-post__thumb">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'last-post__img']); ?>
                </figure>
                <div class="last-post__wrap">
                    <div class="slider">
                        <?php
                        $images = get_field('photos');
                        if ($images) : ?>
                            <div class="slider-container">
                                <?php foreach ($images as $image) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endforeach; ?>
                            </div>
                            <div class="slider-bottom">
                                <button class="prev-button">
                                    < </button>
                                        <div class="thumbnail-container">
                                            <?php foreach ($images as $image) : ?>
                                                <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="Thumbnail of <?php echo esc_url($image['alt']); ?>" />
                                            <?php endforeach; ?>
                                        </div>
                                        <button class="next-button"> > </button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <h3 class="title_post">
                        <?php the_title(); ?>
                    </h3>
                    <p class="short_description_post"><?= $short_description ?></p>
                    <p class="category_post">Category: <?= $category ?></p>
                    <div class="size_post">
                        <p class="height_post">Height: <?= $height ?></p>
                        <p class="length_post">Length: <?= $length ?></p>
                        <p class="width_post">Width: <?= $width ?></p>
                    </div>
                    <p><?php
                        if (have_rows('choose_a_color')) :

                            while (have_rows('choose_a_color')) : the_row();

                                if (get_row_layout() == 'color') :

                                    echo "<p class='color_post'>Color: " . get_sub_field('color_name') . "</p>";
                                endif;
                            endwhile;
                        endif;
                        ?></p>
                    <p class="last-post__text">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="last-post__link" aria-label="Читать текст статьи: <?php the_title(); ?>">
                        <span class="last-post__more link-more">more -></span>
                    </a>
                </div>
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