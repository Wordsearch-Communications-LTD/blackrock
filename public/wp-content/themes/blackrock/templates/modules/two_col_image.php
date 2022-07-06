<?php 
    $layout = get_sub_field('image_layout');
    $offsetTop = get_sub_field('offset_top');
    $images = get_sub_field('images');
?>
<section class="two-col-image <?= $layout ?> <?= ($offsetTop) ? 'offset-top' : ''; ?>">
    
    <?php foreach($images as $image): ?>
        <div class="image-expand">
            
            <div class="image">    
                <?= wp_get_attachment_image( $image['image']['id'], 'full', "", ["data-original" => $image['image']['url'], "data-caption" => $image['caption']] ); ?>
            </div>
            <div class="caption"><?= $image['caption'] ?></div>
        </div>
    <?php endforeach; ?>
    
</section>