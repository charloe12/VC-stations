<?php include "templates/header.php"?>
<?php
include 'templates/functions.php';
$stations=getstations();
?>

</head>

<body>
<?php include "templates/nav.php"?>

	<header>
        <div class="container header__container">
            <div class="header__left">
                <h1>Charging Cars Station Online</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam ea reiciendis sunt nulla blanditiis!
                    Similique sed autem dolores? Assumenda vitae itaque et quo quae! Tenetur temporibus labore maxime
                    error itaque!</p>
                <a href="pricing.php" class="btn btn-primary">Charge NOW</a>
            </div>
            <div class="header__right">
                <div class="header__right-image">
                    <img src="./images/car.svg" alt="">
                </div>

            </div>
        </div>
    </header>
    <!--********************END HEADER*******************-->

    <section class="about">
        <div class="container about__container">
            <div class="about__left">
                <h1>About US</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam rerum repellendus quo corporis
                    veritatis laudantium quos voluptas praesentium porro numquam, sed natus magni quia! Itaque possimus
                    ipsum ullam excepturi aliquam.

                </p>
                <a href="about.php" class="btn">Learn More</a>
            </div>
            <div class="about__right">
                <article class="goals">
                    <span class="goals__icon"><i class="bi bi-credit-card"></i></span>
                    <h5>Pricing</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, dolorum</p>

                </article>
                <article class="goals">
                    <span class="goals__icon"><i class="bi bi-credit-card"></i></span>
                    <h5>Pricing</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, dolorum</p>

                </article>
                <article class="goals">
                    <span class="goals__icon"><i class="bi bi-credit-card"></i></span>
                    <h5>Pricing</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, dolorum</p>

                </article>
                <article class="goals">
                    <span class="goals__icon"><i class="bi bi-credit-card"></i></span>
                    <h5>Pricing</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, dolorum</p>

                </article>
                <article class="goals">
                    <span class="goals__icon"><i class="bi bi-credit-card"></i></span>
                    <h5>Pricing</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, dolorum</p>

                </article>
                <article class="goals">
                    <span class="goals__icon"><i class="bi bi-credit-card"></i></span>
                    <h5>Pricing</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, dolorum</p>

                </article>
            </div>
        </div>
    </section>
    <!--================END ABOUTUS=================-->

    <section class="map">



        <div class="container map__container">
            <div class="map__left">
                <h1>Our Stations Map</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, sapiente. Magni, odit!
                    Reprehenderit, tempora veritatis? Repudiandae voluptatibus quae reprehenderit voluptatum animi? Quia
                    beatae placeat deleniti eius ab nam saepe libero.</p>
                <a href="map.php" class="btn btn-primary">Ckeck NOW</a>
            </div>

            <div id="map" style='width: 100%; height: 60vh;'></div>
        </div>
    </section>

    <!--================END MAP=================-->


<?php include "templates/footer.php"?>

<script src="main.js"></script>
    <script>
        var YOUR_MAPBOX_ACCESS_TOKEN = 'pk.eyJ1IjoiY2hhcmxvZTEyIiwiYSI6ImNsNnNoZnkxeDA5bWkzZHFqNTRvcjF6aGEifQ.ZjkBlirZZ4UzTfZTImP5wg'




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





            const marker = new mapboxgl.Marker({

                color: 'gray',
                draggable: true
            }).setLngLat(center).addTo(map);


            <?php foreach ($stations as $key => $station) {
    print "const popup".$key." = new mapboxgl.Popup({ offset: 25 }).setHTML('<h1>test</h1>');


            const marker".$key." = new mapboxgl.Marker({

                color: '".$station["desponible"]."',
                draggable: true
            }).setLngLat(['".$station["longitude"]."','".$station["latitude"]."']).addTo(map).setPopup(popup".$key.");";}?>


        }



    </script>
    
</body>

</html>