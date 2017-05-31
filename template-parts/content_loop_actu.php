
<?php
foreach ($posts as $post) {
    setup_postdata( $post );
    $tags = wp_get_post_tags($post->ID);
    ?>
        <article>
            <?php the_post_thumbnail() ?>
            <div>
                <p><?php the_content(); ?></p>
            </div>
        </article>
        <?php };?>
