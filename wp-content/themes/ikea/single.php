<?php
get_header();
while (have_posts()) :
    the_post();
    $photos = get_field('photos');
    $description = get_post_meta(get_the_ID(), 'description', true);
    $short_description = get_post_meta(get_the_ID(), 'short_description', true);
    $product_details = get_post_meta(get_the_ID(), 'product_details', true);
    $good_to_know = get_post_meta(get_the_ID(), 'good_to_know', true);
    $materials_and_care = get_field('materials_and_care');
    $category = get_post_meta(get_the_ID(), 'category', true);
    $size = get_field('size');
    if ($size) :
        $height = $size['height'];
        $length = $size['length'];
        $width = $size['width'];
    endif;
?>

    <h1><?= the_title() ?></h1>
    <p><?= $short_description ?></p>
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

    <p><?= $description ?></p>
    <p><?= $product_details ?></p>


    <P>12131</P>


    <?php
    if ($materials_and_care) :
        if (isset($materials_and_care["materials"])) {
            foreach ($materials_and_care["materials"] as $material) {
                if (isset($material["name"])) {
                    echo $material["name"] . "\n";
                    echo $material["description"] . "\n";
                }
            }
        }
        $care = $materials_and_care['care'];
        echo "<h3>" . $care . "</h3>";
    endif;


    if (have_rows("choose_a_color")) {
        while (have_rows('choose_a_color')) : the_row();
            if (get_row_layout() == 'color') {
                echo get_sub_field('color_name') . "\n";
            }
        endwhile;
    }
    ?>
<?php
endwhile;
get_footer();
?>