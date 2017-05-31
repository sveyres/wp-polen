    <?php get_header() ?>

    <main>
        <div class="container">

            <div class="row baseline">
                    <?php
                    $args = array(
            	           'posts_per_page'   => 3,
                           'orderby'          => 'date',
	                       'order'            => 'ASC',
            	           'category_name'    => 'baseline'
                    );
                    $posts = get_posts($args);
                    get_template_part( 'template-parts/content_loop_baseline');
                    ?>
            </div>
            <div class="row actu">
                    <div class="col-md-4">
                        <?php

                        $args = array(
                            'posts_per_page'   => 3,
                            'orderby'          => 'date',
                            'order'            => 'ASC',
                            'category_name'    => 'innovantes'
                        );
                        $posts = get_posts($args);

                        echo '<h2>'.get_cat_name(4).'</h2>';
                        get_template_part( 'template-parts/content_loop_actu'); ?>

                    </div>
                    <div class="col-md-4">
                        <?php
                        $args = array(
                            'posts_per_page'   => 3,
                            'orderby'          => 'date',
                            'order'            => 'ASC',
                            'category_name'    => 'entreprise'
                        );
                        $posts = get_posts($args);
                        echo '<h2>'.get_cat_name(5).'</h2>';
                        get_template_part( 'template-parts/content_loop_actu');
                        ?>
                    </div>
                    <div class="col-md-4">
                        <?php
                        $args = array(
                            'posts_per_page'   => 3,
                            'orderby'          => 'date',
                            'order'            => 'ASC',
                            'category_name'    => 'teletravail'
                        );
                        $posts = get_posts($args);
                        echo '<h2>'.get_cat_name(6).'</h2>';
                        get_template_part( 'template-parts/content_loop_actu');
                        ?>
                    </div>
            </div>
        </div>
    </main>

<?php get_footer() ?>
