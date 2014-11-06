<?php get_header(home);
/**
*  Template Name: Home-page
**/

?>
   <div id="content">

        <div class="home">
            <h2>ДЕТАЛІ КУРСІВ ТА РЕЄСТРАЦІЯ</h2>
            <ul class="types">
                <?php
                $query = new WP_Query(array('post_type' => 'courses',
                    'posts_per_page'   => -1,
                ));
                while($query->have_posts()){ $query->the_post(); ?>
                    <li>
                        <?php the_post_thumbnail('full', 'class=imgstyle'); ?>
                        <a class="title" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Докладніше + реєстрація</a>
                    </li>
                <?php } ?>

                <?php wp_reset_postdata(); // сбрасываем переменную $post ?>
            </ul>


            <ul class="social_share">
                <li id="vk">
                    <script type="text/javascript">
                        VK.Widgets.Group("vk", {mode: 0, width: "276", height: "240"}, 30111409);
                    </script>
                </li>
                <li class="sertificates_list">
                    <h4><a href="http://homework.local/certified-professionals">Сертифiкованi професiонали</a></h4>
                </li>
                <li>
                    <h4>Наші Спонсори</h4>
                    <ul>
                        <li class="de"><a href="http://povnahata.com/">Дім Євангелія</a></li>
                        <li class="moc"><a href="http://masterofcode.com/">Masterofcode LTD</a></li>
                        <li class="sergium"><a href="http://sergium.net/">SerGium.net</a></li>
                        <li class="clear left stuff"><a href="http://val.co.ua/">val.co.ua/</a></li>
                        <li class="youthog"><a href="http://yothog.com/">Youthog.com</a></li>
                        <li class="jetbrains"><a href="http://jetbrains.com/">JetBrains.com</a></li>
                        <li class="ucoz"><a href="http://rabota.ucoz.ua/">ucoz.ua</a></li>
                        <li class="spd-ukraine"><a href="http://spd-ukraine.com/">SPD-Ukraine.com</a></li>
                        <li class="ekreative"><a href="http://www.ekreative.com/">Ekreative.com</a></li>
                        <li class="n3wnormal"><a href="http://n3wnormal.com/">n3wnormal.ua</a></li>
                        <li class="in-ck-ua"><a href="http://in.ck.ua/">in.ck.ua</a></li>
                    </ul>
                </li>
            </ul>


        </div>
    </div><!-- content -->

<?php get_footer(); ?>