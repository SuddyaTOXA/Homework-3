<div class="sidebar">

    <h3>Наші курси</h3>
    <ul>
        <?php
        $query = new WP_Query(array(  'category' => 2,
            'posts_per_page'   => -1,
        )); // указываем категорию 9 и выключаем разбиение на страницы (пагинацию)
        while($query->have_posts()){ $query->the_post(); ?>
            <li>
                <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php } ?>

        <?php wp_reset_postdata(); // сбрасываем переменную $post ?>
    </ul>
</div>
