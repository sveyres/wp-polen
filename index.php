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
                        $posts = get_posts($args);?>

                            <?php
                            printf( '<h2>%s</h2>', $category->name);?>
                        


                            <?php get_template_part( 'template-parts/content_loop_actu'); ?>

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
                        get_template_part( 'template-parts/content_loop_actu');
                        ?>
                    </div>
            </div>
        </div>
    </main>

<?php get_footer() ?>
