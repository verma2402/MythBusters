<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'feedback';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO response (name,email,message) values ('$name','$email','$message')";
    mysqli_query($conn,$sql);
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Feedback</title>
    <!-- favicon on title bar  -->
    <link rel="icon" type="image/png" href="img/icon.png">


    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="contactStyle.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/slick.css" /> -->
    <link href="css/main.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
        integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body >

    <section class="preloader">
        <div class="spinner">
            <span class="sk-inner-circle"></span>
        </div>
    </section>



    <nav class="navbar navbar-expand-lg" style="background-color: #eddef4  ;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="index.html">
                <strong><span>Myth</span>Busters</strong>
            </a>

            <div class="d-lg-none">
                <a href="sign-in.html" class="bi bi-chat-dots" style="font-size: 30px;"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="learn.html">Learn</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="https://mediafiles.botpress.cloud/3b93f420-3b18-4a25-9ca1-f579fd170879/webchat/bot.html" target = "_blank">Chat with us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="game.html">Lets Play</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Feedback</a>
                    </li>
                </ul>

                <div class="d-none d-lg-block">
                    <a href="https://mediafiles.botpress.cloud/3b93f420-3b18-4a25-9ca1-f579fd170879/webchat/bot.html" target="_blank" class="bi bi-chat-dots" style="font-size: 30px;"></a>
                </div>
            </div>
        </div>
    </nav>


  

    <section class="contact mt-3">
        <div class="content  pt-4">
            <h2>Contact Us</h2>
            <p>If you have any query, then feel free to fill the form. </p>
        </div>
        <div class="container2">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p> Jhajjar, Haryana - 124504</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p> vermanitisha28@gmail.com</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+91941635....</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-users" aria-hidden="true"></i>

                    </div>
                    <div class="text">
                        <h3>Website</h3>
                        <p> <a href="index.html">MythBusters</a> </p>
                    </div>
                </div>

            </div>
            <div class="contactForm">
                <form action="#" method="post">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" class="name" id="name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="email" class="email" id="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required" class="message" name="message"></textarea>
                        <span>Type Your Message...</span>
                    </div>
                    <div class="inputBox">
                        <Button class="mybutton" type="Submit" value="Submit" name="submit"> Send </Button>

                    </div>
                </form>
            </div>
    </section>


    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-10 me-auto mb-4">
                    <h4 class="text-white mb-3"><a href="index.html">Myth</a>Busters</h4>
                    <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2022
                        <strong>MythBusters</strong>
                    </p>
                    <br>

                </div>

                <div class= "col-lg-5 col-8" >
                    <h5 class="text-white mb-3">Blueprint</h5>

                    <ul class="footer-menu d-flex flex-wrap">
                        <li class="footer-menu-item"><a href="learn.html" class="footer-menu-link">Learn with us! </a>
                        </li>

                        <li class="footer-menu-item"><a href="game.html" class="footer-menu-link">Play the game</a></li>

                        <li class="footer-menu-item"><a href="https://mediafiles.botpress.cloud/3b93f420-3b18-4a25-9ca1-f579fd170879/webchat/bot.html" target="_blank" class="footer-menu-link">Chat with us</a></li>

                        <li class="footer-menu-item"><a href="contact.php" class="footer-menu-link">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-4">
                    <h5 class="text-white mb-3">Social</h5>

                    <ul class="social-icon">

                        <li><a href="#" class="social-icon-link bi-linkedin"></a></li>

                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                    </ul>
                </div>

            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>