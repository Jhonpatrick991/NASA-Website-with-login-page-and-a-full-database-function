<?php 
include("connect.php");

$id = $_POST["id"];
	$new->execute_query("DELETE FROM linker WHERE id = ?", [$id]);
    header("refresh:5;url=index.php");
    echo ("Thank you for your purchase, we'll see you soon! You'll be redirected to the main page!");   