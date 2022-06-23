<?php 
    $leftCopy = get_sub_field('left_copy');
    $rightItems = get_sub_field('right_copy_blocks');
    $cta = get_sub_field('download');
?>
<section class="two-col-sticky">

    <div class="left">
        <?php echo $leftCopy ?>
    </div>
    <div class="right">
        <?php foreach($rightItems as $index => $item): ?>
            <?php echo $index++ ?>
            <?php echo $item['copy'] ?>
        <?php endforeach; ?>
    </div>
    <a class="button dark" href="<?php echo $cta['url']?>"><?php echo $cta['title'] ?></a>
    
</section>