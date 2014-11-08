<?php get_header();
/**
 *  Template Name: Team
 **/

?>

<div id="content">
<div class="team">
<h2>Команда GeekHub</h2>

<ul>
    <?php
    $query = new WP_Query(array('post_type' => 'teachers',
                                'posts_per_page'   => -1,
                                'orderby' => 'post_date',
                                'order' =>'ASC'
    ));
    while($query->have_posts()){ $query->the_post(); ?>
        <li>
            <h3><?php the_title(); ?>
                <span><?php echo get_post_meta($post->ID,'specialization', true) ?></span>
            </h3>
            <?php the_post_thumbnail('full', 'class=imgstyle'); ?>
            <?php the_content(); ?>

        </li>
    <?php } ?>

    <?php wp_reset_postdata(); // сбрасываем переменную $post ?>
</ul>
<!---->
<!--<ul>-->
<!--<li class="odd">-->
<!--    <h3>Євген Григор’єв <span>Frontend/Backend developer в<br />Masterofcode</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/jack.png" />-->
<!--    <p>Працює з рядом технологій, включаючи Symfony, Drupal, jQuery, Compass CSS, HAML, etc. Майстерність Євгена стоїть за такими проектами як Belvilla, Yes or No, Jongenvrij webshop, USGA та багато інших. У GeekHub викладає Frontend + CMS.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Тимофій Козак <span>СTO at Presentain</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/timothy_kozak.png" />-->
<!--    <p><a href="http://ua.linkedin.com/in/timothykozak">Тимофій</a> працює одночасно над декількома проектами - presentain.com, vkorange.com, chedream.org, geekhub.ck.ua". У GeekHub викладає курс iOS.</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Олег Пасько <span>Керуючий в everlabs</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/pasko.png" />-->
<!--    <p>Займається розвитком компанії в цілому та розробкою окремих проектів. На рахунку Олега такі проекти як <a href="ever.html">Ever.travel</a> — сервіс планування подорожей. <a href="SeiCrm.html">SeiCrm.com</a> — CRM система страхування. та ряд інших цікавих проектів для різних компаній. </p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Сергій Босовський <span>Android Developer в<br />Master of Code</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/boss.png" />-->
<!--    <p>Cергій протягом 4х років займається розробкою Android додатків в компанії Master Of Code. У GeekHub Сергій викладає Java for Android.</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Нік Курат <span>Управляючий партнер в<br />Master of Code</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/neek_kurat.png" />-->
<!--    <p>Нік займається розвитком бізнесу компанії Master of Code LLC та розвитком стартапу presentain.com . У складі Geekhub Нік викладає Project Management та працює над брендінгом та маркетингом проекту.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Валентин Ярмолатій <span>Логістичний менеджер в<br />Master of Code</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/val.png" />-->
<!--    <p>Валентин займається питаннями технічного забезпечення Geekhub.</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Олег Зінченко <span>Symfony Expert у KNPLabs</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/oleg_zinchenko.png" />-->
<!--    <p>Олег професiйно займаеться розробкою веб додаткiв на PHP з використанням сучасних фреймфоркiв. Адепт Symfony2 та MongoDB. Координатор та викладач напрямку Advanced PHP. Останній проект - Фітнес startup <a href="http://exercise.com/">www.exercise.com</a> </p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Tim Phipps <span>English Language Tutor</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/tim_phipps.png" />-->
<!--    <p>Since gaining his CELTA teaching qualification, Tim has specialised in private English lessons, meeting a wide range of student needs. At Geekhub Tim leads the Technical English course.</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Юрій Курат <span>CEO в N3w Normal</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/jurii_kurat.png" />-->
<!--    <p>Юрій працює із командою розробників веб та кросс-платформових мобільних технологій. Його нещодавні проекти включають у себе <a href="http://stickyalbums.com/">stickyalbums.com</a>, <a href="http://chewy.com/">chewy.com</a>. У GeekHub Юрій займається організацією та розвитком проекту.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Сергій Ключник <span>WEB Developer at<br />Master of Code</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/kluchnik.png" />-->
<!--    <p>Активний учасник багатьох відкритих проектів, завжди вивчає щось нове зі світу JavaScript. У GeekHub викладає Javascript.</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Олена Перекопська <span>Project Manager <br />Master of Code</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/elena_perekopskaya.png" />-->
<!--    <p>Олена має значний досвід у сфері контролю якості та управління проектами. У GeekHub викладає Quality Assurance.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Володимир Білоус <span>Senior Java Developer at<br />SPD-Ukraine</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/volodymyr_bilous.png" />-->
<!--    <p>Володимир є Java та Android розробником у SPD-Ukraine. Його основний проект -- nimblecommerce.com, що є яскравим прикладом реалізації eCommerce SaaS	У GeekHub викладає Java for Web.</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Валерій Олексієнко <span>Веб-розробник в<br />SPD-Ukraine</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/valerii_oleksienko.png" />-->
<!--    <p>Backend та frontend веб-розробник. Основні технології, з якими працює: Spring (MVC, Security), Hibernate, mySql, MongoDB, jQuery, Ext.js Хоббі включають сноуборд, музика, mobile development. У GeekHub Валерій викладає JavaScript.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Богдан Халяпін <span>Директор в<br />SPD-Ukraine</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/bogdan_haliapin.png" />-->
<!--    <p>Богдан керує компанією SPD-Ukraine та займається її розвитком. Має більше ніж 10 років досвіду з Java. У складі GeekHub Богдан є викладачем та координатором групи Java for Web.</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Богдан Данилюк <span>Office Lead at<br />TransferWise</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/bogdan_danilyuk.png" />-->
<!--    <p>Богдан один з головних розробників компанії TransferWise. Прихильник швидких, динамічних та надійних рішень у розробці програмного забезпечення. Викладатиме курс улюбленої мови програмування та фреймворку - Groovy & Grails.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Павло Надолинський <span>iOS Developer at<br />MasterOfCode</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/nadolinskiy.png" />-->
<!--    <p>Він бачив багато і може з радістю цим поділитися. У GeekHub викладає iOS.</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Дмитро Таряник <span>Android developer в<br />Master of Code</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/dmytro_tarianyk.png" />-->
<!--    <p>Android розробник, активный учасник GDG Cherkasy. У GeekHub викладає Android. На рахунку Дмитра такі проекти як <a href="https://play.google.com/store/apps/details?id=com.heineken.magazineapp">Heineken Nederland Magazine</a>, <a href="https://play.google.com/store/apps/details?id=com.sirma.mobile.bible.android">LifeChurch Android app</a>. У GeekHub викладає Java for Android.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Сергій Гичка <span>Backend and frontend developer в<br />Master of Code</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/sergii_gychka.png" />-->
<!--    <p>Сергій займається розробкою веб проектів, використовуючи такі технології як Symfony 1, 2, Zend framework, Drupal, mysql, JS. У GeekHub Сергій викладає Advanced CMS.</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Юра Батора <span>Lead Java Developer at<br />SPD-Ukraine</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/jura_batora.png" />-->
<!--    <p>Юра займається розробкою комерційних проектів на Java зі складною клієнт-серверною архітектурою.	У GeekHub викладає Java for Web.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Сергій Поліщук <span>Backend розробник в<br />Healthy Code, Inc.</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/polischuk.png" />-->
<!--    <p>Студент GeekHub у минулому, а зараз - backend девелопер в успішній продуктовій компанії США. Сергій полюбляє складні завдання та прості рішення. У GeekHub викладає Advanced PHP. </p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Владислав Ящук <span>Backend and frontend developer в<br />Master of Code</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/yaschuk.png" />-->
<!--    <p>Владислав займається розробкою веб проектів, використовуючи такі фреймворки як Symfony 2, Yii; CMS - Joomla, Wordpress, Magento. На GeekHub Владислав викладає курс Advanced CMS.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Андрій Береза <span>Senior Java Developer at<br />SPD-Ukraine</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/bereza.png" />-->
<!--    <p>Андрій - сертифікований Java 7 Programmer з великим досвідом реалізації back-end та front-end, у тому числі на проектах створення фінансових систем.  У GeekHub викладає Java for Web.</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Яна Семенова <span>Backend розробник в<br />Healthy Code, Inc.</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/iana_semenova.png" />-->
<!--    <p>Молода і дуже талановита. Протягом всього кількох років змогла побудувати успішну кар’єру в ІТ. У GeekHub викладає Advanced PHP.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Олександр Тіняєв <span>Frontend/Wordpress Developer в<br />N3w Normal</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/alexander_tinyaev.png" />-->
<!--    <p>Алекс (або ж Дікс, як його всі кличуть) займається Frontend, AngularJS, Sencha Touch та Wordpress розробкою в N3w Normal LLC вже протягом двох років. У GeekHub викладає Frontend + CMS.</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Пісковий Дмитро <span>Backend and frontend developer в<br />Master of Code</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/piskovoj_dmitrij.png" />-->
<!--    <p>Дмитро займається розробкою веб проектів, використовуючи такі технології як Symfony (1, 2) , Zend Framework, Yii, nodeJs, mysql, mongoDB, JS, angular.js. У GeekHub Дмитро викладає Advanced PHP.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Fred Cox <span>CTO at eKreative</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/fred_cox.png" />-->
<!--    <p>Fred has been coding for over 10 years, his first mobile app was published before anyone knew what a smartphone was. Now he the techinal lead at eKreative where the focus is on web and mobile apps. Teaches Javascript at GeekHub.</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Ірина Нікуліна <span>QA engineer at MasterOfCode</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/irina_nikulina.png" />-->
<!--    <p>Випускниця GeekHub, зараз працює QA інженером у MasterOfCode. У GeekHub викладає Quality Assurance.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Вадим Васильєв  <span>Senior Java/G&G Developer at<br />TransferWise</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/vadym_vasiliev.png" />-->
<!--    <p>Вадим розробник у компанії TransferWise. У попередньому працював розробником та консультантом у банках різних країн Європи та світу. У GeekHub викладає Groovy & Grails.</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Сергій Карпенко <span>Senior Java/G&G Developer at<br />TransferWise</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/sergiy_karpenko.png" />-->
<!--    <p>Сергій один з перших розробників у компанії TransferWise. У GeekHub викладає Groovy & Grails.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Дмитро Немеш <span>Backend developer at<br />Mozidev</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/dmytro_nemesh.png" />-->
<!--    <p>Дмитро вже багато років розробляє web проекти, має досвід з Yii\Yii2, Symfony2, Spring 3. Є контриб'ютором Yii2 та полюблюяє використовувати нові технології. У GeekHub викладає Advanced PHP.</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Костянтин Перевозчиков <span>Backend/Frontend developer</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/konstantin_perevozchikov.png" />-->
<!--    <p>Фрілансер. frontend/backend developer веб додатків. Улюблений PHP фреймворк - Yii. Прихильник масимальної автоматизації розробки. У GeekHub викладає Advanced PHP.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Альона Лісіцина <span>Head Project Manager в<br />Master of Code</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/alona_lisicina.png" />-->
<!--    <p>Альона має науковий ступінь PhD та працює головним проектним менеджером у компанії Master of Code LLC. У Geekhub Альона викладає Project Management. </p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Лавренко Андрій <span>Frontend developer at MasterOfCode</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/lavrenko_andriy.png" />-->
<!--    <p>Працює з рядом технологій, включаючи HTML5/CSS3, jQuery, SASS/SCSS/LESS, CoffeeScript, HAML, Twig, Require JS, Titanium SDK. Обожнює "чистий" код. У GeekHub викладає Frontend + CMS.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Віктор Євпак <span>Managing Director of eKreative</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/viktor_yevpak.png" />-->
<!--    <p>Loves briniging the best in people, helping them realise their potential as professionals and humans. Has a beautiful wife and two amazing children. He is a lawyer by education, enterprenuer by calling and story-teller by hobby. У GeekHub викладає Business English.</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Богдан Свиридов <span>Co-founder & Art director at Pixelgrow.co</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/bogdan_sviridov.png" />-->
<!--    <p>Богдан має великий досвід у дизайні. Його пристрасть – зручні, прості та зрозумілі речі. У GeekHub Богдан викладає Web & Mobile Design.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Таня Ігнатенко <span>Designer at Pixelgrow.co</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/tanya_ignatenko.png" />-->
<!--    <p>У Pixel Grow Тетяна займається веб дизайном та дизайном мобільних додатків. Вона приділяє багато уваги невеликим але важливим деталям. Полюбляє лаконічний дизайн та котів :) У GeekHub викладає Web & Mobile Design.</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Вікторія Однокоз <span>Project Manager at ENKI Games</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/viktoria_odnokoz.png" />-->
<!--    <p>Вікторія має за плечима декілька випущених ігр у ролі від геймдизайнера до керівника проекту. Зараз у ENKI Games займається розвитком основного продукту компанії. У GeekHub викладає Game Development.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Олександр Булла <span>Designer at eKreative</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/olexandr_bula.png" />-->
<!--    <p>Дизайнер в eKreative. У GeekHub викладає Web & Mobile Design.</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Козак Ольга <span>Designer at eKreative</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/olya_kozak.png" />-->
<!--    <p>Зрозумівши, що не може жити без творчості, Ольга змінила фармацію на графічний дизайн. Ще ніразу про це не пошкодувала. Зараз займається розробкою дизайну для мобільних додатків та сайтів. У GeekHub викладає Web & Mobile Design.</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Сергій Кусюмов <span>Project Manager at Master of Code</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/sergiy_kusiymov.png" />-->
<!--    <p>Працює керівником проектів в компанії Master of Code та фін.консультантом стартапу presentain.com. Учасник адміністративної команди GeekHub</p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Елiна Верещак <span>Project Manager at Master of Code</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/elina_vereschak.png" />-->
<!--    <p>Працює керівником проектів в компанії Master of Code. Учасник адміністративної команди GeekHub</p>-->
<!--</li>-->
<!--<li>-->
<!--    <h3>Таня Медведенко <span>Project Manager at eKreative</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/tanya_medvedenko.png" />-->
<!--    <p>Закінчивши третій сезон GeekHub, вирішила, що хоче робити світ кращим разом з учасниками цієї IT-community:) Працює в адміністративній команді. </p>-->
<!--</li>-->
<!--<li class="odd">-->
<!--    <h3>Негода Анастасія <span>Klatz Startup</span></h3>-->
<!--    <img src="--><?php //bloginfo('template_url') ?><!--/images/anastasia_negoda.png" />-->
<!--    <p>Закінчивши третій сезон почала працювати в стартапі Klatz. Учасник адміністративної команди GeekHub.</p>-->
<!--</li>-->
<!--</ul>-->
</div>
</div>

<?php get_footer(); ?>