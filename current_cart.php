<?php
include("connect.php");
// echo "session". print_r($_SESSION);
// echo "post". print_r($_POST);

$id = $_SESSION["id"];
$nyow = $new->execute_query("SELECT * FROM linker WHERE id =?", [$id]);
foreach ($nyow as $wow) {
    $q = $wow;
}

if(mysqli_num_rows($nyow) > 0) {
    $ticket_id = $q["ticket_id"];
    $linker_new = $new->execute_query("SELECT tickets.ticket_name, tickets.price, linker.quantity, linker.id FROM tickets JOIN linker ON tickets.ticket_id = linker.ticket_id");
}
else {
    echo ("<script>alert('there are no items to display in your cart')</script>");
    header("refresh:3;url=tickets.php"); //this is useful when you have to delay a redirection instead of using header location :)
    echo "you will be redirected to ticket page in 3 seconds if not please click this <a href='tickets.php'>link</a>";
    die();
}
// $quantity = $new->execute_query("SELECT quantity AND ticket_id FROM linker WHERE id = ?", ["$id"]);
// $details = $new->execute_query("SELECT ticket_name AND price FROM tickets WHERE ticket_id IN (SELECT ticket_id FROM linker)");

// echo "this is tickets" .print_r($nyow);
// echo "this is quantity" .print_r($quantity);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }
        .cart-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            color: #555;
        }
        ul li:last-child {
            border-bottom: none;
        }
        .cart-item {
            margin-bottom: 15px;
        }
        .cart-item span {
            display: block;
            font-weight: bold;
            color: #333;
        }
        .total {
            text-align: right;
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 20px;
        }
        .checkout-btn {
            display: block;
            width: 100%;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
            background: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1em;
            font-weight: bold;
            cursor: pointer;
        }
        .checkout-btn:hover {
            background: #45a049;
        }
    </style>
</head>
<body>
    <h2>Your Cart</h2>
    <div class="cart-container">
        <ul>
            <?php
            foreach ($linker_new as $a) { 
                if ($a["id"] != $id) {
                    echo "\n";
                } else {
                    echo "<li class='cart-item'>
                            <span>Ticket Name:</span> {$a['ticket_name']}<br>
                            <span>Price:</span> {$a['price']}<br>
                            <span>Quantity:</span> {$a['quantity']}
                          </li>";
                } 
            }
            ?>
        </ul>
        <div class="total"> 
            Total: $<?php  $total = 0;
        foreach ($linker_new as $a) {
            if ($a["id"] == $id) {
                $total += ($a["price"] * $a["quantity"]);
            }
        }
        echo $total;?>
        </div>
            <form method="POST" action="checkout.php">
                <input type="hidden" name="id" value="<?= $_SESSION["id"];?>">
                <button class="checkout-btn">Proceed to Checkout</button>
            </form>
    </div>
</body>
</html>