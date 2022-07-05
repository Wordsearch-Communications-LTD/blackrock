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
                <a class="link-text" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
        <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); ?> 
    <?php endif; ?>
</section>