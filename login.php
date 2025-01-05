<?php
include("connect.php");

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
    $pass = $_POST["pass"];
    $double = $new->execute_query("SELECT * FROM logsession WHERE username = ?", [$username]);
    foreach ($double as $b) {
        $a = $b;
    }
    if (mysqli_num_rows($double) > 0) {
        if ($a["username"] == "JhonPatrick") {
            if ($pass != $a["pass"]) { ?>
                <script>alert("password is incorrect")</script>
             <?php }
             else {
                header("Location:createtickets.php");
             }
        }
        else if ($pass != $a["pass"]) { ?>
           <script>alert("password is incorrect")</script>
        <?php }
        else {
            $_SESSION["username"] = $a["username"];
            $_SESSION["id"] = $a["id"];
            header("Location:index.php");
        }
    }
    else { ?>
         <script>alert("username not found")</script>
    <?php }
}
?>
<head>
    <style>
        body {
            background: radial-gradient(circle, #0b0c1b, #000428);
            background-image: url('pictures/space.jpg');
            background-size: cover;
            background-position: 50% 50%;
            background-repeat: no-repeat; 
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #ffffff;
        }
        form {
            background: rgba(20, 20, 20, 0.9);
            border-radius: 10px;
            padding: 25px 35px;
            width: 320px;
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }
        label {
            margin-bottom: 5px;
            font-size: 1rem;
            color: #bbbbbb;
        }
        input {
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            background: rgba(50, 50, 50, 0.8);
            color: white;
            font-size: 1rem;
            outline: none;
            transition: background 0.3s, box-shadow 0.3s;
        }
        input:focus {
            background: rgba(70, 70, 70, 0.9);
            box-shadow: 0 0 10px #ff7b00;
        }
        button {
            padding: 10px;
            font-size: 1rem;
            font-weight: bold;
            color: white;
            background: linear-gradient(45deg, #ff7b00, #ff4500);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        button:hover {
            background: linear-gradient(45deg, #ff4500, #ff7b00);
            transform: scale(1.05);
            box-shadow: 0 0 10px #ff7b00, 0 0 15px #ff4500;
        }
        a {
            color: #ff7b00;
            text-decoration: none;
            transition: color 0.3s, text-shadow 0.3s;
        }

        a:hover {
            color: #ff4500;
            text-shadow: 0 0 10px #ff7b00;
        }
        p {
            margin-top: 15px;
            font-size: 0.9rem;
            color: #bbbbbb;
        }
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            background-image: radial-gradient(#ffffff 1px, transparent 1px), 
                            radial-gradient(#ff6600 1px, transparent 1px);
            background-size: 3px 3px, 2px 2px;
            background-position: 0px 0px, 1px 1px;
            opacity: 0.05;
            z-index: 0;
        }

        form, h1, p {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<h1>Patrick Space Association</h1>
<form method="POST">
	<label>Username:</label><input name="username" required><br>
	<label>Password:</label><input name="pass" required type="password"><br>
	<button>Login</button>
</form>

Not Registered yet?<p><a href="register.php">Click Here!</a></p>