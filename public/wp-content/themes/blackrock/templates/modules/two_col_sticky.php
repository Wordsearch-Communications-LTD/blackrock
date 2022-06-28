<?php 
    $leftCopy = get_sub_field('left_copy');
    $rightItems = get_sub_field('right_copy_blocks');
    $cta = get_sub_field('download');

    function leadingZero($index){
        $indexPlus = ++$index;
        $indexString = $indexPlus;
        
        if($indexPlus < 10) {
            $indexString = '0' . $indexPlus;
        }

        return $indexString;
    }        
?>
<section class="two-col-sticky">

    <div class="left">
        <div class="stick">
            <?= $leftCopy ?>
        </div>
    </div>
    <div class="right">
        <?php foreach($rightItems as $index => $item): ?>
            <strong><?= leadingZero($index) ?></strong>
            <?= $item['copy'] ?>
        <?php endforeach; ?>
        
        <a class="button light" href="<?= $cta['url']?>"><?= $cta['title'] ?></a>
    </div>
</section>