<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$ticket_name = $_POST["ticket_name"];
	$price = $_POST["price"];

    $double = $new->execute_query("SELECT * FROM tickets WHERE ticket_name = ?", [$ticket_name]);
    if (mysqli_num_rows($double) > 0) { ?>
        <script> alert("the ticket already exist!");</script>      
    <?php }	else {
	$new->execute_query(
		"INSERT INTO tickets (ticket_name, price) VALUES (?, ?)",
		[$ticket_name, $price]
	); ?>
    <script>alert("Registration Successful!")</script>
    <?php } 
} ?>
<head>
	<style>
		.main_label {
			width: 85px;
			display: inline-block;
		}
	</style>
</head>

<h2>Ticket Creator </h2>

<p><a href="login.php">Back</a></p>

<form method="POST">
	<label class="main_label">Ticket name:</label><input name="ticket_name" required><br>
	<label class="main_label">Prices:</label><input name="price" required> <label class="label">Pesos</label><br>
	<button>Enter</button>
</form>