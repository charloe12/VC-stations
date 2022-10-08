<?php include "templates/header.php"?>
  <link rel="stylesheet" href="./css/pricing.css">
</head>
<body>

<?php include "templates/nav.php"?>
<section class="pricing">
        <div class="container pricing__container">
            <aside class="pricing__aside">
                <div class="aside__image">
                    <img src="images/pricing.svg" alt="">
                </div>
                <h2>Charge Your Card</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis nihil velit corporis
                    necessitatibus!</p>
                <ul class="pricing__details">
                    <li>
                        <i class="bi bi-envelope"></i>
                        <h5>example@email.ma</h5>
                    </li>
                    <li>
                        <i class="bi bi-telephone"></i>
                        <h5>+01 234 5678</h5>
                    </li>
                    <li>
                        <i class="bi bi-geo"></i>
                        <h5>N123, ROUTE, CITY</h5>
                    </li>
                </ul>
                <ul class="pricing__socials">
                    <li>
                        <a href="#"><i class="bi bi-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-linkedin"></i>
                        </a>
                    </li>
                </ul>


            </aside>
            <form action="" class="pricing__form">
                <div class="form__name">
                    <input type="text" name="First Name" placeholder="First Name" required>
                    <input type="text" name="Last Name" placeholder="Last Name" required>
                </div>
                <input type="email" name="Email Address" placeholder="Your Email Address" required>
                <input type="text" name="Card Number" placeholder="Card Station Number" required>
                <input type="text" name="CCV" placeholder="CCV`s Card" required>
                <button type="submit" class="btn btn-primary">Charge NOW</button>
            </form>
        </div>
    </section>

<?php include "templates/footer.php"?>



   <script src="main.js"></script>

</body>

</html>