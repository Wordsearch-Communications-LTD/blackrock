<?php 
    $leftCopy = get_sub_field('left_copy');
    $rightItems = get_sub_field('right_copy_blocks');
    $cta = get_sub_field('download');
?>
<section class="two-col-sticky">

    <div class="left">
        <div class="stick">
            <?= $leftCopy ?>
        </div>
    </div>
    <div class="right">
        <?php foreach($rightItems as $index => $item): ?>
            <article>
                <div class="number"><?= leadingZero($index) ?></div>
                <div class="content"><?= $item['copy'] ?></div>
            </article>
        <?php endforeach; ?>
        
        <div class="button-container"><a class="button light" href="<?= $cta['url']?>"><?= $cta['title'] ?> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M4 16.4853L28 16.4853" stroke="black" stroke-width="2"/> <path d="M19.7861 24.9706L28.2713 16.4853L19.7861 8.00001" stroke="black" stroke-width="2"/> </svg></a></div>
    </div>
</section>