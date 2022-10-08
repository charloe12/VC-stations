<?php include "templates/functions.php";
if (isset($_POST['submit'])) {
    
    if($_POST['password']==$_POST['confirm_password']){
        addcustomer($_POST);
        header('location:about.php');
    }
}
    
?>

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
                <h2>Be Apart Of Us</h2>
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
            <form action="register.php" class="pricing__form" method="post">
                <div class="form__name">
                    <input type="text" name="First_Name" placeholder="First_Name" required>
                    <input type="text" name="Last_Name" placeholder="Last_Name" required>
                </div>
                <input type="email" name="Email_Address" placeholder="Your Email Address" required>
                <input type="password" name="password" placeholder="password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <button type="submit" class="btn btn-primary" name="submit">Register NOW</button>


            </form>
        </div>
    </section>

<?php include "templates/footer.php"?>

   <script src="main.js"></script>

</body>

</html>