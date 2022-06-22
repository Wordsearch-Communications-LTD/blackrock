<?php

/**
 * Hero Padding Image Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$image = get_field('image');
$main_text = get_field('main_text');
$mini_text = get_field('mini_text');

?>
<div class="hero-holding container-fluid">
    <div class="background-image" style="background:url('<?php echo $image; ?>');"></div>
    <div class="border-gradient"></div>
	<div class="row" >
      <div class="col-sm-12 no-pad ">
        <?php if(is_front_page()){ ?>
            <div class="text-center">
                <img src="<?php echo site_url(); ?>/wp-content/themes/kensington/img/icons/logo.svg" alt="The Kensington Building" class="hero-logo">
            </div>

        <?php }else{ ?>
                <div class="h1-wrapper" data-aos="fade-in">
                     <h1><?php echo $main_text; ?></h1>
                     <span><?php echo $mini_text; ?></span>
                </div>
        <?php } ?>

                
            </div>
            <a href="#next"><div class="arrow-down"></div></a>
    </div>
</div>


<div id="next"></div>