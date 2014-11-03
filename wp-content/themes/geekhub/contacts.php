<?php get_header();
/**
 *  Template Name: Contacts
 **/

?>

    <script type="text/javascript">
        function initialize() {
            var latlng = new google.maps.LatLng(49.42608363349172,32.09461569786072);
            var myOptions = {
                zoom: 15,
                center: latlng,
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map"), myOptions);
            var marker = new google.maps.Marker({
                position: latlng,
                title:"Дім Євангелія, вул. Горького 60"
            });

            var infowindow = new google.maps.InfoWindow({
                content: marker.title
            });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });

            marker.setMap(map);
        }

    </script>


    <div id="content">
        <div class="contacts">
            <h2>Зв’язок</h2>
            <dl>
                <dt class="map">
                <h3>Заходьте</h3>
                </dt>
                <dd class="map"><div id="map" style="width:382px; height:287px"></div></dd>
                <dt class="follow">
                <h3>Слідкуйте</h3>
                </dt>
                <dd>
                    <ul>
                        <li class="fb"><a href="http://www.facebook.com/pages/GeekHub/158983477520070">facebook</a></li>
                        <li class="vk"><a href="http://vkontakte.ru/geekhub">vkontakte</a></li>
                        <li class="tw"><a href="http://twitter.com/#!/geek_hub">twitter</a></li>
                    </ul>
                </dd>
                <dt>
                <h3>Пишіть</h3>
                </dt>
                <dd>
                    <img src="<?php bloginfo('template_url') ?>/images/email.png" alt="email"/>
                </dd>
                <dd>Перед тим як писати, ознайомтесь <br>із <a href="http://homework.local/faq/" >сторінкою ПОПУЛЯРНИХ ПИТАНЬ</a></dd>

            </dl>
        </div>
    </div><!-- content -->

<?php get_footer(); ?>