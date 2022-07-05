<?php 
    $titleImage =  get_sub_field('title_image');
    $subtitle = get_sub_field('subtitle');
    $curtainImage = get_sub_field('curtain_image');
    $image = get_sub_field('image');
    $copy = get_sub_field('copy');
?>
<section class="column-reveal image-curtain" id="home-hero">
  <style>
      #home-hero .column-reveal_slices div .slice { background-image: url(<?= $curtainImage ?>)};
  </style>
  
    <div class="column-reveal_slices">
        <div class="home-hero_title">
          <div class="content">
            <h1><img src="<?= $titleImage['url'] ?>" class="style-svg"></h1>
            <?= $subtitle ?>
          </div>
        </div>
        <div class="slice-grid">
          <div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div><div class="slice_contain"><div class="slice"></div></div>
        </div>
      </div>
    
    <div class="column-reveal_container">
    <?= wp_get_attachment_image( $image, 'full' ) ?>
        <?= $copy ?>
    </div>
</section>
