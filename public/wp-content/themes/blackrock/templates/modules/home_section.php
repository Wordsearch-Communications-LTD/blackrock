<?php 
    $copy = get_sub_field('copy');
    $cta = get_sub_field('cta');
    $image = get_sub_field('image');
    $randClass = 'hs' . substr(md5(microtime()),rand(0,26), 8);
?>

<section class="column-reveal image-curtain solid-bg" id="<?= $randClass ?>">
  <style>
    <?php $randClass ?> .column-reveal_slices .slice {background-color: #F3EADF};
  </style>
  <div class="column-reveal_slices">
                
    <div class="copy split desk-6 large-4 original">
      <div class="container">
        <?= $copy ?>
        <?= return_afc_link($cta, 'button light') ?>
      </div>
    </div>
    <div class="slice-grid">
      <div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div>
    </div>
  </div>  
  <div class="column-reveal_container">
    <?= wp_get_attachment_image( $image['id'], 'full' ); ?>
  </div>
  
  
</section>
