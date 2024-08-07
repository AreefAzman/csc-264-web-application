<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../style/homepage.css">
    <link rel="stylesheet" href="../style/ft.css">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
</head>

<body>
    <div class="hero">  
    <?php
        if (isset($_SESSION["username"])) {
            if ($_SESSION["role"] == "user") {
                include('../util/nav_login_user.php');
            } else {
                include('../util/nav_login_admin.php');
            }
        } else {
            include('../util/nav.php');
        }
    ?>
        <video autoplay loop muted plays-inline class="back-video">
            <source src="../video/home-vid.mp4" type="video/mp4">
        </video>
    <div class="content">
        <h1>Glaming Hotel</h1>
        <a href="#gallery">Welcome</a>
    </div>
    </div>

    <div>
        <section class="container" id="gallery">
            <h1>Hotels in each state</h1>
            <div class="cards row">
                <div class="card row">
                    <div class="card-body">
                        <div class="title">
                            <h2>Johor Bahru</h2>
                        </div>
                        
                    </div>
                </div>
                <div class="card row">
                    <div class="card-body">
                        <div class="title">
                            <h2>Pulau Pinang</h2>
                        </div>
                        
                    </div>
                </div>
                <div class="card row">
                    <div class="card-body">
                        <div class="title">
                            <h2>Pahang</h2>
                        </div>
                        
                    </div>
                </div>
                <div class="card row">
                    <div class="card-body">
                        <div class="title">
                            <h2>Selangor</h2>
                        </div>
                    
                    </div>
                </div>
            </div>
        </section>
    </div>
    
<?php include('../util/ft.php');?>
</body>
</html>