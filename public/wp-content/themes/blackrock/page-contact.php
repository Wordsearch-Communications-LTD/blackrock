<?php /* Template Name: Contact */ 
get_header(); 
global $post;
?>

<?php get_template_part('templates/general/navigation','top'); ?>

<section class="contact-module-container">
<?php 
    $contactIntro = get_field('title','options');
    $contacts = get_field('contacts','options');
    $logo = get_field('logo','options');
    $image = get_field('image','options');
?>

    <div class="contacts-container">
        <div class="left">
            <div class="copy">
                <?= $contactIntro ?>
                <?= wp_get_attachment_image( $logo['id'], 'full', '', ["class" => "contact-logo"] ); ?>
            </div>
            <div class="contacts">
                <?php foreach($contacts as $contact): ?>
                    <div class="contact">
                        <?= $contact['contact'] ?>
                    </div>
                <?php endforeach; ?>
            </div>    
        </div>
        <div class="image-container">
            <?= wp_get_attachment_image( $image['id'], 'full' ); ?>
        </div>
    </div>
</section>

<?php get_template_part('templates/general/footer','main'); ?>
<?php get_footer(); ?>
