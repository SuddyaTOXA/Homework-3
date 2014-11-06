<?php get_header();

?>

    <div id="content">
        <?php get_sidebar(); ?>
        <div class="details">

            <ul>
                <?php
                $query = new WP_Query(array('post_type' => 'courses',
                    'posts_per_page'   => -1,
                ));
                while($query->have_posts()){ $query->the_post(); ?>
                    <li class="current">
                        <?php the_post_thumbnail('full', 'class=imgstyle'); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <h3>Команда</h3>
                        <h3>ТЕМИ ПИТАНЬ НА ЕКЗАМЕНI</h3>
                        <ul class="questions">
                            <li>
                               <?php echo get_post_meta($post->ID,'question', true) ?>
                            </li>
                        </ul>
                        <a class="register" href="#">Зареєструватися</a>
                    </li>
                <?php } ?>

                <?php wp_reset_postdata(); // сбрасываем переменную $post ?>



            </ul>



        </div>
    </div><!-- content -->

<?php get_footer(); ?>