<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Contact</title>
</head>
<body>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $pdo = connectToDatabase();


    $query = "SELECT * FROM cms WHERE id = :id";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    
    $contact = $statement->fetch(PDO::FETCH_ASSOC);

    if ($contact) {
        echo "<h1>Delete Contact</h1>";
        echo "<p>Are you sure you want to delete the following contact?</p>";
        echo "<p><strong>Name:</strong> " . htmlspecialchars($contact['name']) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($contact['email']) . "</p>";
        echo "<p><strong>Phone Number:</strong> " . htmlspecialchars($contact['phone_number']) . "</p>";
        echo '<form action="delete.php" method="GET">
                <input type="hidden" name="id" value="' . htmlspecialchars($id) . '">
                <button type="submit">Yes, Delete</button>
              </form>';
        echo '<a href="index.php">Cancel</a>';
    } else {
        echo "<h1>Contact Not Found</h1>";
        echo "<p>No contact found with ID " . htmlspecialchars($id) . ".</p>";
        echo '<a href="index.php">Back to contact list</a>';
    }
} else {
    echo "<h1>Error</h1>";
    echo "<p>No contact ID provided for deletion.</p>";
    echo '<a href="index.php">Back to contact list</a>';
}

?>

</body>
</html>
</html>