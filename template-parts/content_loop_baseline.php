<?php
foreach ($posts as $post) {
    setup_postdata( $post );
    $tags = wp_get_post_tags($post->ID);
    ?>
    <div class="col-md-4">
        <article>
            <?php the_post_thumbnail() ?>
            <div>
                <h2><?php the_title(); ?></h2>
                <p><a href=" <?php the_permalink(); ?> "><?php the_content(); ?></a></p>
            </div>
        </article>
    </div>
<?php };?>
