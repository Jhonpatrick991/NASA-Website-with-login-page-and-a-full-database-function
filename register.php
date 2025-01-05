<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {  // to check whether the form has submitted a method "POST"
	$username = $_POST["username"];
    $pass = $_POST["pass"];
    $pass2 = $_POST["pass2"];

    // if it returns mysqli_num_rows > 0 that means there exist such a data whether 1 or more
    $checker = $new->execute_query("SELECT * FROM logsession WHERE username = ?", [$username]);
    if (mysqli_num_rows($checker) > 0) { ?>
        <script> alert("the username already exist!");</script>      
    <?php } else if ($pass != $pass2) { ?>
       <script> alert("Password don't match please try again");</script>
    <?php }	else {
        $new->execute_query(
		"INSERT INTO logsession (username, pass) VALUES (?, ?)",
		[$username, $pass]
	); ?>
    <script>alert("Registration Successful!")</script>
<?php }
}
?>
<head>
    <style> 
        body {
        background: radial-gradient(circle, #0b0c1b, #000428);
        background-image: url('pictures/spacex.jpg');
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
    h2 {
        font-size: 2rem;
        font-family: sans-serif;
        margin-bottom: 20px;
        color: #f0f0f0;
    }
    p {
        text-align: center;
    }
    form {
        background: rgba(20, 20, 20, 0.9);
        border-radius: 10px;
        padding: 25px 35px 25px 35px;
        width: 320px;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        z-index: 1;
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
        pointer-events: none;
    }
    .container, h2, p {
        position: relative;
        z-index: 1;
    }
    </style>
</head>
<h2>Create your account</h2>

<form method="POST">
	<label>Username:</label><input name="username" required><br>
	<label>Password:</label><input name="pass" required type="password"><br>
    <label>Confirm Password:</label><input name="pass2" required type="password"><br>
	<button>Register</button>
    <p>Registered? <a href="login.php">Click here to login</a></p>
</form>