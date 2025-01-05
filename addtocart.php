<?php
include("connect.php");
if (empty($_SESSION)) {
    header("Location:Login.php");
}

// echo print_r($_SESSION);
// echo print_r($_POST);

$ticket_id = $_SESSION["ticket_id"];
$tickets = $new->execute_query("SELECT * FROM tickets WHERE ticket_id = ?", [$ticket_id]);

foreach ($tickets as $a) { 
    $c = $a; 
} 

if (isset($_POST["quantity"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
        $quantity = $_POST["quantity"];
        $id = $_SESSION["id"];
        $checker = $new->execute_query("SELECT * FROM linker WHERE id = ? AND ticket_id = ?", [$id, $ticket_id]);
        if (mysqli_num_rows($checker) > 0) { 
            $new->execute_query("UPDATE linker SET quantity = ? WHERE id = ? AND ticket_id = ?", [$quantity, $id, $ticket_id]);
            echo "<script> let a = confirm('Cart updated successfully! Do you want another purchase?')
            if (a) {
                window.location.href='tickets.php' 
            }
            else {
                window.location.href = 'index.php'}</script>";
        }
        else {
            $new->execute_query("INSERT INTO linker (ticket_id, id, quantity) VALUES (?, ?, ?)",
            [$ticket_id, $id, $quantity]);
            echo "<script> let a = confirm('Added to cart! Do you want another purchase?')
                if (a) {
                    window.location.href='tickets.php' 
                }
                else {
                    window.location.href = 'index.php'}</script>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart - Dark Theme</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #121212; /* Dark gray background */
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        h3, p, label {
            margin: 10px 0;
        }

        /* Card Style */
        .cart-card {
            background: #1e1e1e; /* Slightly lighter gray */
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5); /* Soft shadow */
        }

        .cart-card h3 {
            font-size: 1.2em;
            color: #ffa726; /* Accent color: orange */
        }

        .cart-card p {
            font-size: 1em;
            color: #e0e0e0; /* Light gray text */
        }

        /* Form Styles */
        form {
            margin-top: 20px;
        }

        input[type="number"] {
            padding: 8px;
            font-size: 1em;
            border: 1px solid #555; /* Subtle border */
            border-radius: 5px;
            background: #2a2a2a; /* Darker gray */
            color: #fff;
            width: 80px;
            margin-right: 10px;
            text-align: center;
        }

        input[type="number"]:focus {
            outline: none;
            border-color: #ffa726; /* Highlight on focus */
        }

        button {
            padding: 10px 20px;
            font-size: 1em;
            color: #fff;
            background: #ffa726; /* Orange button */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        button:hover {
            background: #ff8f00; /* Slightly darker orange on hover */
        }
    </style>
</head>
<body>
    <div class="cart-card">
        <h3>Ticket Name:</h3>
        <p><?= $c["ticket_name"] ?></p>
        <h3>Price:</h3>
        <p><?= $c["price"] ?></p>
        <label for="quantity">Quantity</label>
        <form method="POST">
            <input type="number" name="quantity" min="1" value="1">
            <button>Add to your Cart</button>
        </form>
    </div>
</body>
</html>