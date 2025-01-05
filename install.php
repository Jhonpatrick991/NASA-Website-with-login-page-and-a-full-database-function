<?php
include("connect.php");

$new->execute_query("CREATE TABLE IF NOT EXISTS tickets (ticket_id INT PRIMARY KEY AUTO_INCREMENT, ticket_name VARCHAR(100) NOT NULL, price INT NOT NULL)");

$new->execute_query("CREATE TABLE IF NOT EXISTS linker (id INT NOT NULL, ticket_id INT NOT NULL, quantity INT NOT NULL)");

$new->execute_query("CREATE TABLE IF NOT EXISTS logsession (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, username VARCHAR(100) UNIQUE NOT NULL, pass VARCHAR(100) NOT NULL)");