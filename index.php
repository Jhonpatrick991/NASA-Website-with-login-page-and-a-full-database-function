<?php
    include ("connect.php");
//     echo print_r($_SESSION);
// echo print_r($_POST);
?>

<?php if (!empty($_SESSION)) { ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PSA</title>
        <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <div class="main">
            <div class="main1"> 
                <div class="logo">
                    <img src="pictures/Logo.png" class="nasa">
                    <p class="title">Welcome<p class="username"><?php echo $_SESSION["username"];?></p></p>
                </div>
                <div class="navbar">
                    <button onclick="window.location.href='current_cart.php'" style="vertical-align:middle" class="button"><span>Your tickets</span></button> 
                    <button onclick="window.location.href='logout.php'" style="vertical-align:middle" class="button"><span>Logout </span></button> 
                </div> 
            </div>
            <div class="header">
                <div>
                    <h1 class="quote">Reaching New Heights<br>Through Exploration</h1>
                </div>
                <div>
                    <a href="https://youtu.be/i16RhLyXns4?si=0Mg9Rlmm-yrjGejU" target="_blank" class="learnmoreq">Learn More</a>
                </div>
        
            </div> 
            <div class="intro">
                <h1 class="intro1">PATRICK SPACE ASSOCIATION</h1>
                <h2 class="intro2">VENTURING INTO THE UNKNOWN.</h2>
                <h2 class="intro3">We are passionate about exploring the wonders
                of the cosmos and advancing space  exploration.<br> 
                Our dedicated team of scientists, engineers, 
                and space enthusiasts collaborate to push<br> 
                the boundaries of human understanding
                and contribute to the exploration of the universe.</h2>
            </div>
            <div class="header2">
                <div class="header2_1">
                    <h2 class="quote2">PATRICK SPACE EXPLORATIONS</h2>
                    <h1 class="quote2_1">MILESTONES</h1>
                    <h2 class="quote2_2"> Founded in 2020, we have launched CubeSats, <br> 
                    deployed a lunar rover and launched a Mars rover. With global <br>
                    partnerships and sustainability in mind we are leading the way for a new era of space exploration. From unlocking the <br> 
                    secrets of far-off planets to pioneering green space technologies and pioneering space tourism, <br>
                    join us on this incredible journey.</h2>
                    <div class="aboutus1">
                        <a href="About.php" target="_blank" class="aboutus">About Us</a>
                    </div>  
                </div>
                <div class="main_pic">
                    <img src="pictures/meric-dagli-i_14EbINjKY-unsplash.jpg" class="pic1">
                </div>
            </div>
        </div>
    </div> 
        <div class="new_intro">
            <h1 class="new_intro1">YOU WANT TO BE A PART OF OUR EXPLORATION?</h1>
            <h2 class="new_intro2">GET A LIMITED SEAT</h2>
            <button onclick="window.location.href='tickets.php'" style="vertical-align:middle" class="button_new"><span>Get seats </span></button>
        </div>
        <div class="footer">
            <footer>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="About.php">About</a></li>
                </ul>

                <ul class="footer-social-icons">
                    <li><a href="#" target="_blank">Facebook</a></li>
                    <li><a href="#" target="_blank">Twitter</a></li>
                    <li><a href="#" target="_blank">Instagram</a></li>
                </ul>

                <p>&copy; 2024 Patrick Space Association. All rights reserved.</p>
            </footer>
        </div>
    </body>
    </html>
<?php } else {
           echo ("<script>alert('you are not logged in yet')</script>");
           header("refresh:3;url=login.php");
           echo "you will be redirected to login page in 3 seconds if not please click this <a href='login.php'>link</a>";
           die();
    } ?>