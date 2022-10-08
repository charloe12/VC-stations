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