<?php 
    $title = get_sub_field('title');
    $items = get_sub_field('copy_blocks');
    $ctas = get_sub_field('downloads');
?>
<section class="title-multiple-columns">
    <div class="title">
        <?= $title ?>
    </div>

    <div class="copy-blocks">
        <?php foreach($items as $item): ?>
            <div class="copy-block"> 
                <?= $item['copy'] ?>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="download-buttons">
        <?php foreach($ctas as $cta): ?>
            <a class="button light" href="<?= $cta['file']['url'] ?>"><?= $cta['file']['title'] ?> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M4 28L28 28" stroke="black" stroke-width="2"></path> <path d="M15.5146 3L15.5146 21" stroke="black" stroke-width="2"></path> <path d="M7.02937 13.7861L15.5146 22.2713L23.9999 13.7861" stroke="black" stroke-width="2"></path> </svg></a>
        <?php endforeach; ?>
    </div>
</section>