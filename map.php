<?php include "templates/header.php"?>
<?php
include 'templates/functions.php';
$stations=getstations();
?>
  <link rel="stylesheet" href="./css/map.css">
</head>
<body>
    <!--MAP direction-->

    <script
        src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
    <link rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css"
        type="text/css">
    

<?php include "templates/nav.php"?>
<section class="container map__container">
        <div id="map" style='width: 100%; height: 89vh;'></div>
        <div class="details">


            <!-- geocoder search input -->

            <?php
session_start();

    if (!empty($_SESSION['details'])) {
        echo '<div class="details__up">
                <img src="images/'.$_SESSION['details'][0]['station_image'].'" alt="">
                <div class="details__title">
                    <div class="details__title1">
                        <h4>'.$_SESSION['details'][0]['station_name'].'</h4>
                        <p> '.$_SESSION['details'][0]['station_adress'].'</p>
                    </div>
                    <div class="details__title2">
                        <i class="bi bi-signpost-2-fill"></i>
                        <p> DIRECT...</p>
                    </div>
                </div>
            </div>

            <div class="details__down">
                <article class="details__address">
                    <div class="address">
                        <i class="bi bi-geo-alt-fill"></i>
                        <p>'.$_SESSION['details'][0]['station_adress'].'</p>
                    </div>
                    <div class="infos">
                        <i class="bi bi-info-circle-fill"></i>
                        <p>'.$_SESSION['details'][0]['station_description'].'</p>

                    </div>
                </article>
                <article class="plugs">
                    <div>
                        <h4>Plugs (1 Kind)</h4>
                    </div>
                    <div class="plug__infos"></div>
                </article>
                <article></article>
            </div>';
    }
?>
        </div>
    </section>

    <!--================END MAP=================-->


    <?php include "templates/footer.php"?>

        <script>
        // show/hide nav menu
        const menu = document.querySelector(".nav__menu");
        const menuBtn = document.querySelector("#open-menu-btn");
        const closeBtn = document.querySelector("#close-menu-btn");

        menuBtn.addEventListener('click', () => {
            menu.style.display = 'flex';
            closeBtn.style.display = 'inline-block';
            menuBtn.style.display = 'none';
        })

        // close nav menu
        const closeNav = () => {
            menu.style.display = 'none';
            closeBtn.style.display = 'none';
            menuBtn.style.display = 'inline-block';
        }
        closeBtn.addEventListener('click', closeNav)


    </script>
    <script>
        

        var YOUR_MAPBOX_ACCESS_TOKEN = 'pk.eyJ1IjoiY2hhcmxvZTEyIiwiYSI6ImNsNnNoZnkxeDA5bWkzZHFqNTRvcjF6aGEifQ.ZjkBlirZZ4UzTfZTImP5wg'
        const details = document.querySelector('.details');
        




        mapboxgl.accessToken = YOUR_MAPBOX_ACCESS_TOKEN;


        navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
            enableHighAccuracy: true
        })
        function successLocation(position) {


            setupMap([position.coords.longitude, position.coords.latitude])

        }
        function errorLocation() { }

        function setupMap(center) {
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: center,
                zoom: 4
            })

            
            const nav = new mapboxgl.NavigationControl();
            
    map.addControl(
        nav,
        'bottom-left');
    const popup = new mapboxgl.Popup({ offset: 25 }).setHTML('<h1>me</h1>');


    const marker = new mapboxgl.Marker({

        color: 'gray',
        draggable: true
    }).setLngLat(center).addTo(map).setPopup(popup);


<?php foreach ($stations as $key => $station) {
    print "const popup".$key." = new mapboxgl.Popup({ offset: 25 }).setHTML('<h1>test</h1>');


            const marker".$key." = new mapboxgl.Marker({

                color: '".$station["desponible"]."',
                draggable: true
            }).setLngLat(['".$station["longitude"]."','".$station["latitude"]."']).addTo(map).setPopup(popup".$key.");

            popup".$key.".on('open', () => {
                if(screen.width>450){
                    details.style.opacity = 1;
                    details.style.width = '400px';
                }
                else{
                    details.style.opacity = 1;
                    details.style.width = '90%';
                }
                

                var station_image='".$station["image"]."';
        var station_name='".$station["city"]."';
        var station_adress='".$station["adress"]."';
        var station_description='".$station["description"]."';

        var action='add';
        console.log(station_image);
        console.log(station_name);
            $.ajax({
                url:'details.php',
                method:'POST',
                DataType:'json',
                data:{
                    station_image:station_image,
                    station_name:station_name,
                    station_adress:station_adress,
                    station_description:station_description,

                    action:action
                }
        })
            })

            popup".$key.".on('close', () => {
                details.style.opacity = 0;
                details.style.width = '0px';
                
            })\n";

    

     


}?>


    
}
setInterval(function(){
        $('.details').load('load.php');
    },100)



    </script>

</body>

</html>



