<?php get_header(home);

?>
    <div id="content">

        <div class="home">
            <h2>ДЕТАЛІ КУРСІВ ТА РЕЄСТРАЦІЯ</h2>
            <ul class="types">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li>
                        <?php the_post_thumbnail('full', 'class=imgstyle'); ?>
                        <a class="title" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Докладніше + реєстрація</a>
                    </li>
                <?php endwhile; ?>
            </ul>

            <?php else: ?>
                <p>На жаль зараз немає курсів</p>
            <?php endif; ?>

        </div>
    </div><!-- content -->

<?php get_footer(); ?>