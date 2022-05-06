<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Greenara</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="login.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
    <!-- Chat bot August -->
    <link rel="stylesheet" href="static/css/chat.css">
    <link rel="stylesheet" href="static/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="indexfooter.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    <!--chatbot-->
    <script type="text/javascript" src="">
    </script>
</head>
<?php
		require 'menu.php';
	?>

<body>
    <!-- Banner -->
    <section id="banner" class="wrapper">
        <div class="container">
            <!-- <h1>Greenara</h1> -->
            <h1 style="color:green; font-weight:bolder; font-style:oblique">GREENARA</h1>
            <strong>
                <p style="color:antiquewhite; letter-spacing:30px;font-family: fantasy;">
                    <marquee>Your Product Our Market</marquee>
                </p>
            </strong>
            <br><br>
            <center>
                <div class="row uniform">
                    <div class="6u 12u$(xsmall)">
                        <button class=" fit btn btn-outline-primary"
                            onclick="document.getElementById('id01').style.display='block'"
                            style="width:auto; color:light-blue;">LOGIN</button>
                    </div>
                    <div class="6u 12u$(xsmall)">
                        <button class="btn btn-outline-primary fit"
                            onclick="document.getElementById('id02').style.display='block'"
                            style="width:auto;">REGISTER</button>
                        <!-- </div>
						<a href="chatbot.html" class="btn"><b><h2>ChatBot<h2></b></a>
					</div> -->
            </center>
            <!-- <div class="chitchat">
				<a href="chatbot.html" class="btn"><b><h2>ChatBot<h2></b></a>
			 </div> -->
    </section>
    <!-- Chat Bot August -->
    <!-- CHAT BAR BLOCK -->
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Chat with us!
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>
        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>
                        <!-- User input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg"
                                    placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>
                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                    onclick="heartButton()"></i>
                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>
                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- One -->
    <section id="one" class="wrapper style1 align-center" style="">
        <div class="container" style="background-color:sienna;border-radius :25px;">
            <header>
                <!-- <h2 style="color:#fff"></h2> -->
                <p>Explore the new way of trading...</p>
            </header>
            <div class="row 200%">
                <section class="4u 12u$(small)">
                    <i class="icon big rounded fa-clock-o" style="color: black;"></i>
                    <p>G-Market</p>
                </section>
                <section class="4u 12u$(small)">
                    <i class="icon big rounded fa-comments" style="color: black;"></i>

                    <p>Survey for Farmers</p>
                </section>
                <section class="4u$ 12u$(small)">
                    <i class="icon big rounded fa-user" style="color: black;"></i>
                    <p>Gallery</p>
                </section>
            </div>
        </div>
    </section>
    <!----------------------------------- Footer----------------------------------->
    <footer class="footer-distributed" style="background-color:#2ecc71" id="aboutUs">
        <center>
            <h1 style="font:35px cursive;color:black;">About Us</h1>
        </center>
        <div class="footer-left">
            <h3 style="font-family: 'Times New Roman', cursive;color:black;">AgriCulture &copy; </h3>
            <div class="logo ">
                <a href="index.php"><img src="images/logo.jpeg" style="border-radius: 35px;" width="100px"></a>
            </div>
            <br />
            <p style="font-size:20px;color:white">Cultivating ideas for better tomorrow adding Green to your life !!!
            </p>
            <br />
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p style="font-size:20px">Chamoli District<span>Uttrakhand</span></p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p style="font-size:20px">9769320233/7345625652</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p style="font-size:20px"><a href="mailto:agroculture@gmail.com"
                        style="color:white">Supriya@Siddhi.com</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-company-about" style="color:black; font-size:20px">
                <span style="font-size:30px;"><b>About AgroCulture</b></span>
                Greenara is e-commerce trading platform for grains & grocerries...
            </p>
            <div class="footer-icons">
                <a href="#"><i style="margin-left: 0;margin-top:5px;" class="fa fa-facebook"></i></a>
                <a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-instagram"></i></a>
                <a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>

    <!-- <section  class="footer-distributed1" style="background-color:crimson;color:#fff;" >
	<center><h4> Made by Supriya and Siddhi by ♥</h4><center>
	
	</section> -->

    <section class="Footer-distributed" style="background-color: #34495e;;color:#fff;">
        <center>Made in India by ♥ </center>
    </section>


    <div id="id01" class="modal">

        <form class="modal-content animate" action="Login/login.php" method='POST'>
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
            </div>

            <div class="container">
                <h3>Login</h3>
                <form method="post" action="Login/login.php">
                    <div class="row uniform 50%">
                        <div class="7u$">
                            <input type="text" name="uname" id="uname" value="" placeholder="UserName" style="width:80%"
                                required />
                        </div>
                        <div class="7u$">
                            <input type="password" name="pass" id="pass" value="" placeholder="Password"
                                style="width:80%" required />
                        </div>
                    </div>
                    <div class="row uniform">
                        <p>
                            <b>Category : </b>
                        </p>
                        <div class="3u 12u$(small)">
                            <input type="radio" id="farmer" name="category" value="1" checked>
                            <label for="farmer">Farmer</label>
                        </div>
                        <div class="3u 12u$(small)">
                            <input type="radio" id="buyer" name="category" value="0">
                            <label for="buyer">Buyer</label>
                        </div>
                    </div>
                    <center>
                        <div class="row uniform">
                            <div class="7u 12u$(small)">
                                <input type="submit" value="Login" />
                            </div>
                        </div>
                    </center>
            </div>
        </form>
        </section>
    </div>
    </div>
    </div>
    </form>
    </div>
    <div id="id02" class="modal">
        <form class="modal-content animate" action="Login/signUp.php" method='POST'>
            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
            </div>
            <div class="container">
                <section>
                    <h3>SignUp</h3>
                    <form method="post" action="Login/signUp.php">
                        <center>
                            <div class="row uniform">
                                <div class="3u 12u$(xsmall)">
                                    <input type="text" name="name" id="name" value="" placeholder="Name" required />
                                </div>
                                <div class="3u 12u$(xsmall)">
                                    <input type="text" name="uname" id="uname" value="" placeholder="UserName"
                                        required />
                                </div>
                            </div>
                            <div class="row uniform">
                                <div class="3u 12u$(xsmall)">
                                    <input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number"
                                        required />
                                </div>

                                <div class="3u 12u$(xsmall)">
                                    <input type="email" name="email" id="email" value="" placeholder="Email" required />
                                </div>
                            </div>
                            <div class="row uniform">
                                <div class="3u 12u$(xsmall)">
                                    <input type="password" name="password" id="password" value="" placeholder="Password"
                                        required />
                                </div>
                                <div class="3u 12u$(xsmall)">
                                    <input type="password" name="pass" id="pass" value="" placeholder="Retype Password"
                                        required />
                                </div>
                            </div>
                            <div class="row uniform">
                                <div class="6u 12u$(xsmall)">
                                    <input type="text" name="addr" id="addr" value="" placeholder="Address"
                                        style="width:80%" required />
                                </div>
                            </div>


                            <div class="row uniform">
                                <p>
                                    <b>Category : </b>
                                </p>
                                <div class="3u 12u$(small)">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category" value="1"
                                            id="farmers">
                                        <label class="form-check-label" for="farmers">
                                            Farmer
                                        </label>
                                    </div>
                                </div>
                                <div class="3u 12u$(small)">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category" id="buyers"
                                            value="0" checked>
                                        <label class="form-check-label" for="buyers">
                                            Buyer
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row uniform">
                                <div class="3u 12u$(small)">
                                    <input type="submit" value="Submit" name="submit" class="special" />

                                </div>
                                <div class="3u 12u$(small)">
                                    <input type="reset" value="Reset" name="reset" />
                                </div>
                            </div>
                        </center>
                    </form>
                </section>
            </div>
    </div>
    </form>
    </div>
    <script>
    $('.special').on('click', function() {
        var farmer = $('#farmers').val();
        var buyer = $('#buyers').val();
        // console.log(farmer, buyer);
    });
    // Get the modal
    var modal = document.getElementById('id01');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    var modal1 = document.getElementById('id02');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }
    }
    </script>

</body>

<!-- Chat bot August -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="static/scripts/responses.js"></script>
<script src="static/scripts/chat.js"></script>

</html>