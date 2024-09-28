<?php 

include "function.php" ;


if (isset($_POST['name'])) {


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];


    $pdo = connectToDatabase();


    $query = "INSERT INTO cms SET Name = '$name' , email = '$email' , phone_number='$phone_number'" ;

    $statement = $pdo->prepare($query);


    $statement->execute();

    header('Location: index.php');
    exit;

}

include "views/add.view.php";

?>

