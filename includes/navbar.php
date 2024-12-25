<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #warna {
            color: orange;
        }

        #container {
            background-color: burlywood;
        }
    </style>
</head>
<body>
<header id="header" class="header-scroll top-header headrom headerBg">
    <!-- .navbar -->
    <nav class="navbar navbar-dark" id="i">
        <div class="container">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
            <a class="navbar-brand" id="warna" href="index.php"> KELOMPOK 2 </a>
            <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item"> <a class="nav-link active" id="warna" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                    <li class="nav-item"> <a class="nav-link active" id="warna" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
                    <?php
                    if (empty($_SESSION["user_id"])) // if user is not login
                    {
                        echo '
                                <li class="nav-item"><a href="login.php" class="nav-link active" id="warna">Login</a> </li>
							    <li class="nav-item"><a href="registration.php" class="nav-link active bgGreen" id="warna">Signup</a> </li>';
                    } else {
                        echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active" id="warna">Your Orders</a> </li>';
                        echo  '<li class="nav-item"><a href="logout.php" class="nav-link active" id="warna" >Logout</a> </li>';
                    }

                    ?>





                </ul>

            </div>


        </div>

    </nav>
    <!-- /.navbar -->

</header>
</body>
</html>
