<?php 
    $copy = get_sub_field('copy'); 
    $images = get_sub_field('images');
    $mirrored = get_sub_field('mirror');
?>
<section class="copy-two-images <?= ($mirrored) ? 'mirrored' : '' ?>">
    
    <div class="copy-image">
        <div class="copy">
            <?= $copy ?>
        </div>
        <div class="image-container image-expand">
            <div class="image">
                <?= wp_get_attachment_image( $images[0]['image']['id'], 'full', "", ["data-original" => $images[0]['image']['url']] ); ?>
            </div>
            <div class="caption"><?= $images[0]['caption'] ?></div>
        </div>
    </div>
    
    <div class="image-container image-expand">
        <div class="image">
            <?= wp_get_attachment_image( $images[1]['image']['id'], 'full', "", ["data-original" => $images[1]['image']['url']] ); ?>
        </div>
        <div class="caption"><?= $images[1]['caption'] ?></div>
    </div>
</section>