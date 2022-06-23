<?php 
    $title = get_sub_field('title');
    $items = get_sub_field('copy_blocks');
    $ctas = get_sub_field('downloads');
?>
<section class="title-multiple-columns">
    <div class="title">
        <?php echo $title ?>
    </div>

    <div class="copy-blocks">
        <?php foreach($items as $item): ?>
            <div class="copy-block"> 
                <?php echo $item['copy'] ?>
            </div>
        <?php endforeach; ?>
    </div>

    <?php foreach($ctas as $cta): ?>
        <?php $cta['file']['url'] ?>
    <?php endforeach; ?>

</section>