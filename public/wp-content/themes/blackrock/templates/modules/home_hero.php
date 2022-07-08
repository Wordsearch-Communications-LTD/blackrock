<?php 
    $titleImage =  get_sub_field('title_image');
    $subtitle = get_sub_field('subtitle');
    $curtainImage = get_sub_field('curtain_image');
    $image = get_sub_field('image');
    $copy = get_sub_field('copy');
?>
<section class="column-reveal image-curtain" id="home-hero">
  <style>
      
    
      #home-hero .column-reveal_slices div .slice { background-image: url(<?= $curtainImage['url'] ?>)}
        
      #home-hero .mobile-header-background { background-image: url(<?= $curtainImage['sizes']['large'] ?>)}
  </style>
  
    <div class="column-reveal_slices">
      <div class="mobile-header-background"></div>
        <div class="home-hero_title">
          <div class="content">
            <h1><img src="<?= $titleImage['url'] ?>" class="style-svg"></h1>
            <?= $subtitle ?>
            <svg class="down-arrow" width="160" height="163" viewBox="0 0 160 163" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M79.3909 0L79.3909 159.249" stroke="white" stroke-width="4"/> <path d="M37 117.198L79.8022 160L122.605 117.198" stroke="white" stroke-width="4"/> </svg>
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
