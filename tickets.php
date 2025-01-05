<?php
include("connect.php");

if (empty($_SESSION)) {
    header("Location:Login.php");
}

$wow = $new->execute_query("SELECT * FROM tickets");

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $_SESSION["ticket_id"] = $_POST["ticket_id"];
    header("Location:addtocart.php");
}
?>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
            color: #ffffff;
        }
        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #2c2c2c;
            border-radius: 8px;
        }
        th, td {
            text-align: center;
            padding: 12px;
            border: 1px #2c2c2c #444; 
            font-family: 'Courier New', Courier, monospace;
        }
        th {
            background-color: #2c2c2c; 
            color: #ffffff;
            font-size: 18px;
        }
        td {
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            background-color: #1e90ff; 
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color:#121212;
        }
        .tickets {
            text-align: center;
            max-width: 50%;
            margin: 0 auto;
        }
        button {
            margin: 5px 25px 10px 0px;  
        }
        td.actions {
            padding: 0px;
            margin: 0px;
        }
        form {
            display:inline-block;
        }
    </style>
</head>

<h2>Buy tickets</h2>
<table>
<tr>
	<th>Ticket Names</th>
	<th>Price</th>
</tr>
<?php
    foreach ($wow as $a) {
        echo "<tr>" .
			"<td>" . $a["ticket_name"] . "</td>" .
			"<td> $" . $a["price"] ."</td>" ?>
			<td class="actions"> 
                <form method="POST">
                    <input type="hidden" value='<?= $a["ticket_id"] ?>' name="ticket_id"></input>
                    <button>Add to cart</button>
                </form>
			</td>
		</tr>
    <?php } ?>
</table>