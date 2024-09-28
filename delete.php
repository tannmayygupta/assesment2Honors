<?php

include "function.php"; // database connection function

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    // Establish a connection to the database
    $pdo = connectToDatabase();

    $query = "SELECT * FROM cms WHERE id = :id"; // Ensure this table exists
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    
    $contact = $statement->fetch(PDO::FETCH_ASSOC);
    
    if ($contact) {
        $query = "DELETE FROM cms WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        
        if ($statement->execute()) {

            header('Location: index.php');
            exit;
        } else {
            echo "Error: Could not delete the contact.";
        }
    } else {
        echo "Error: Contact with ID $id does not exist.";
    }
} else {

    echo "Error: No contact ID provided.";
}

?>
