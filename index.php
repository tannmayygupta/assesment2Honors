<?php
include "function.php";

$pdo = connectToDatabase();

$query = "SELECT * FROM cms";

$statement = $pdo->prepare($query);

$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

include "views/index.view.php"; 
