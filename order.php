<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assests/css/style.css">
    <link rel="stylesheet" href="assests/css/responsive.css">
    <title>wowFood</title>
</head>

<body>
    <!-- Star: Main -->
    <div id="main">
        <!-- Header Starts -->
        <div id="header">
            <div class="nav container">
                <div class="logo">
                    <a href="#" title="Logo">
                        <img src="assests/img/Logo.PNG" alt="Restaurant Logo">
                    </a>
                </div>
                <div class="nav-item flex-center">
                    <ul>
                        <li><a href="index.php">Home</a></li>

                        <li><a href="categories.php">Categories</a></li>

                        <li><a href="food.php">Foods</a></li>

                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header Ends -->
        <div class="content-header">
            <div class="container">
                <h2 class="text-center text-white">Fill this form to confirm your order.</h2>
                <div class="order">
                    <fieldset>
                        <legend>Selected Food</legend>

                        <div class="food-menu-img">
                            <img src="assests/img/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                        </div>

                        <div class="food-menu--desc">
                            <h3>Food Title</h3>
                            <p class="food-price">$2.3</p>
                            <div class="order-label">Quantity</div>
                            <input type="number" name="qty" class="input-responsive" value="1" required>
                        </div>

                    </fieldset>

                    <fieldset>
                        <legend>Delivery Details</legend>

                        <div class="order-label">Full Name</div>
                        <input type="text" name="full-name" placeholder="E.g. Ngô Tâm" class="input-responsive" required>

                        <div class="order-label">Phone Number</div>
                        <input type="tel" name="contact" placeholder="E.g. 0776*******" class="input-responsive" required>

                        <div class="order-label">Email</div>
                        <input type="email" name="email" placeholder="E.g. abc@ngt.com" class="input-responsive" required>

                        <div class="order-label">Address</div>
                        <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                        <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                    </fieldset>
                </div>
            </div>
        </div>


        <div class="footer">
            <div class="container text-center">
                <a href="#"><img src="./assests/img/facebook.png" alt=""></a>
                <a href="#"><img src="./assests/img/instagram.png" alt=""></a>
                <a href="#"><img src="./assests/img/twitter.png" alt=""></a>
            </div>
            <div class="container text-center">
                <p class="footer-p">
                    All rights reserved. Designed By<a href="https://www.facebook.com/profile.php?id=100022459923271"> NDT</a>
                </p>
            </div>
        </div>
    </div>
    <!-- End main -->
    </div>
</body>

</html>