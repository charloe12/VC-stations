     <nav>
        <div class="container nav__container">
            <a href="index.html">
                <h4>SCARS</h4>
            </a>
            <ul class="nav__menu">
                <li><a href="index.php"> Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="pricing.php">Pricing</a></li>
                <li><a href="map.php">Map</a></li>
                <?php
                if(isset($_SESSION['username'])){
                    echo '<li><a href="logout.php">Log out</a></li>';
                }else{
                    echo '<li><a href="login.php">Login</a></li>';
                }
                ?>

                
            </ul>

           
           
            <button id="open-menu-btn" class="button btn1"><i class="bi bi-list"></i></button>

            <button id="close-menu-btn" class="button btn1"><i class="bi bi-x"></i></button>

           
           
            
            


        </div>
    </nav>
    <!--********************END NAV*******************-->

   
