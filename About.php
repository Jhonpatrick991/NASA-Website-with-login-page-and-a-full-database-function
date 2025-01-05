<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Patrick Space Association</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .content {
            padding: 20px;
            margin: 20px;
            background: linear-gradient(to right, #f7f7f7, #e9e9e9);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .logo {
            display: flex;
        }
        .nasa {
            width: 55px;
            margin-left: 20px ;
        }
        .title {
            color: white;
            font-style: bold;
            margin-left: 15px;
            font-size: 20px;
        }
        .main1 {
            display: flex;
            background-color: black;
            align-items: center;
            justify-content: space-between;
            align-items: flex-start;
            margin: -10px;
        }
        .home {
            text-decoration: none;
            font-family: Times New Roman;
            margin-right: 30px;
            margin-left: -15px;
            margin-top: 19px;
            color: white;
            font-size: 20px;
        }
        .navbar {
            display: flex;
            align-items: flex-end;
            gap: 15px;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="main1"> 
            <div class="logo">
                <img src="pictures/Logo.png" class="nasa">
                <p class="title">Patrick Space Association</p>
            </div>
            <div class="navbar">
            <a href="index.php" class="home">Home</a> 
            </div> 
        </div>
        <div class="content">
            <section class="about-section">
                <h2 class="about-heading">Who We Are</h2>
                <p class="about-text">
                    Founded in 2020, the Patrick Space Association (PSA) is a cutting-edge space exploration organization 
                    dedicated to unlocking the mysteries of the cosmos. Our mission is to innovate, inspire, and collaborate 
                    with the global community to advance humanity's reach beyond our planet.
                </p>
            </section>

            <section class="about-section">
                <h2 class="about-heading">Our Vision</h2>
                <p class="about-text">
                    At PSA, we envision a future where space exploration fosters global collaboration, drives technological 
                    innovation, and inspires generations to dream beyond the stars. We aim to pave the way for a sustainable 
                    and inclusive spacefaring civilization.
                </p>
            </section>

            <section class="about-section">
                <h2 class="about-heading">Our Achievements</h2>
                <p class="about-text">
                    Since our inception, we have achieved remarkable milestones, including:
                </p>
                <ul class="achievements-list">
                    <li>Successful deployment of CubeSats for earth monitoring and communication.</li>
                    <li>Development and launch of a lunar rover, pushing the boundaries of planetary exploration.</li>
                    <li>Deployment of a Mars rover designed for advanced surface analysis and data collection.</li>
                </ul>
                <p class="about-text">
                    These achievements represent our commitment to advancing the frontiers of science and exploration.
                </p>
            </section>

            <section class="about-section">
                <h2 class="about-heading">Our Team</h2>
                <p class="about-text">
                    The PSA team is composed of world-class scientists, engineers, and space enthusiasts who work 
                    tirelessly to bring our ambitious vision to life. Collaboration and innovation are at the heart 
                    of everything we do.
                </p>
            </section>
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
    </div>
</body>
</html>