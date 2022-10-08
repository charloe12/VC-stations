
<?php include "templates/header.php"?>
<?php include "templates/functions.php";

if (isset($_POST['submit'])) {
    
    $user=connectuser($_POST);
    if (is_array($user) && count($user)>0){
        foreach ($user as $u) {
            $_SESSION['username']=$u['first_name'];
        }
        
        header('location:about.php');
    }
}

    
    
?>

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
            <form action="login.php" class="pricing__form" method="post">
                
                <input type="email" name="Email_Address" placeholder="Your Email Address" required>
                <input type="password" name="password" placeholder="Password" required>
                
                <button type="submit" class="btn btn-primary" name="submit">Login NOW</button>
                <a href="register.php" style="text-decoration: underline;">You Don't Have Account</a>
            </form>
        </div>
    </section>

<?php include "templates/footer.php"?>

   <script src="main.js"></script>

</body>

</html>