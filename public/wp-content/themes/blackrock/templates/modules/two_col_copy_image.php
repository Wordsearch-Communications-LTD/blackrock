<?php 
    $title = get_sub_field('title');
    $copy = get_sub_field('copy');
    $image = get_sub_field('image');
    $caption = get_sub_field('caption');
?>
<section class="two-col-copy-image">
    <div class="copy">
        <div class="left">
            <?php echo $title ?>
        </div>
        <div class="right">
            <?php echo $copy ?>
        </div>
    </div>
    <?php if($image): ?>
    <div class="image-container image-expand">
        <div class="image"><?php echo wp_get_attachment_image( $image['id'], 'full', "", ["data-original" => $image['url']] ); ?></div>
        <div class="caption"><?php echo $caption ?></div>
    </div>
    <?php endif; ?>
</section>