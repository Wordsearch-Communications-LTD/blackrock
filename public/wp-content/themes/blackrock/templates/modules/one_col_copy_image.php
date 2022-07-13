<?php 
    $image = get_sub_field('image');
    $copy = get_sub_field('copy');
    $pageHero = get_sub_field('page_hero');
?>
<section class="one-col-copy-image <?= ($pageHero) ? 'page-hero' : ''; ?>">
    
    <div class="copy-container">
        <div class="copy">
            <?php echo $copy ?>
        </div>
    </div>
    <div class="mobile-image-container">
        <?php echo wp_get_attachment_image( $image['id'], 'full', false, ["class" => "image"] ); ?>
    </div>
</section>