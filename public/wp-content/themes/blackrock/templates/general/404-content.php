<?php
    $copy = get_field('copy','options');
    $link = get_field('link', 'options');
    $background = get_field('background_image', 'options');
?>
<style>
    .error-404 { background-image: url(<?= $background['sizes']['large'] ?>)}

    @media (min-width: 1200px){
        .error-404 { background-image: url(<?= $background['url'] ?>)}
     }
  </style>

<section class="error-404">
    <div class="inner">
        <?= $copy ?>
        <?= return_afc_link($link, 'button') ?>
    </div>
</section>
