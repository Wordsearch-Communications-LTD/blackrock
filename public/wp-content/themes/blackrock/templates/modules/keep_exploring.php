<?php 
    $title = get_sub_field('title');
    $posts = get_sub_field('posts');
?>
<section class="keep-exploring">
    <div class="title">
        <?php echo $title ?>
    </div>
    <?php if($posts): ?>
        <div class="blocks">
        <?php foreach($posts as $post): ?>
            <?php setup_postdata($post); ?>
            <div class="explore-block">
                <a class="link-image" href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail() ?>
                </a>
                <a class="link-text" href="<?php the_permalink(); ?>"><?php the_title(); ?> <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M4 16.4853L28 16.4853" stroke="black" stroke-width="2"/> <path d="M19.7861 24.9706L28.2713 16.4853L19.7861 8.00001" stroke="black" stroke-width="2"/> </svg></a>
            </div>
        <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); ?> 
    <?php endif; ?>
</section>