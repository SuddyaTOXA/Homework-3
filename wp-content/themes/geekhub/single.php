<?php get_header();

?>

    <div id="content">
        <?php get_sidebar(); ?>
        <div class="details">
            <ul>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li class="current">
                        <?php the_post_thumbnail('full', 'class=imgstyle'); ?>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </li>
                <?php endwhile; ?>
            </ul>

            <?php else: ?>
                <p>На жаль зараз немає курсів</p>
            <?php endif; ?>

        </div>
    </div><!-- content -->

<?php get_footer(); ?>