<?php
require 'variabel-array.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Holaa</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;700&family=Shantell+Sans:ital,wght@1,300&family=Tilt+Prism&display=swap"
        rel="stylesheet" />
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Style -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- navbar -->
    <div class="navbar">
        <h2>My<span>Profile</span></h2>
    </div>
    <!-- Content -->
    <div class="bg" id="home">
        <div class="kotak"></div>
        <div class="content">
            <h3>Holaa...</h3>
            <h1>I'm 
                <!-- Looping -->
                <?php foreach ($name as $info) :?>
                    <span><?php echo $info;?></span>
                <?php endforeach; ?>
            </h1>
            <h3>And I'm a 
                <!-- Looping -->
                <?php foreach ($job as $jobs) :?>
                    <span class="job"><?php echo $jobs; ?></span>
                <?php endforeach; ?>
            </h3>
            <a href="#about">
                <h5>About me</h5>   
            </a>
        </div>
    </div>
    <!-- About -->
    <div class="about" id="about">
        <div class="tittle">
            <h3>About Me</h3>
            <h4>-- <span>who am i</span>--</h4>
        </div>
        <div class="content-about">
            <div class="left">
                <img src="image/foto.jpeg" alt="" />
            </div>
            <div class="right">
                <h4>I'm <?php echo $about["name"] ?> and I'm <?php echo $age ?></h4>
                <p>
                    <?php echo $about["desk"] ?>
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer-about">
            <div class="footer-text">
                <h4>Follow My Social Media</h4>
            </div>
            <div class="footer-sm">
                <a href=<?php echo $link["Instagram"] ?>>
                    <i data-feather="instagram"></i>
                </a>
                <a href=<?php echo $link["Github"] ?>>
                    <i data-feather="github"></i>
                </a>
                <a href=<?php echo $link["Email"] ?>>
                    <i data-feather="mail"></i>
                </a>
                <a href=<?php echo $link["Twitter"] ?>>
                    <i data-feather="twitter"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Feather Icons -->
    <script>
    feather.replace();
    </script>
</body>

</html>
