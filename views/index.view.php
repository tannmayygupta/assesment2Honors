<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACTS</title>
</head>
<link rel="stylesheet" href="/pico.min.css">
<body>
    <header class="container">
        <nav>
            <h1>Contacts List: </h1>
            <ul>
                <li><a href="add.php">Add Contacts </a> </li>
            </ul>
        </nav>
</header>

<main class="container">
<h1> My Todos </h1>

<table>
    <tr>        
        <th> # </th>

        <th> Name </th>

        <th> email </th>

        <th> phone_number </th>

    </tr>
    <?php foreach ($rows as $row) : ?>
    <tr>

        <td>
            <?php echo $row["id"] ?>
        </td>

        <td>
            <?php echo $row["Name"] ?>
        </td>

        <td>
            <?php echo $row["email"] ?> 
        </td>

        <td>
            <?php echo $row["phone_number"] ; ?>
        </td>

        <td>
            <a href="delete.php">Delete </a>
        </td>

    </tr>
    
    <?php endforeach; ?>
    
</table>
</main>

</body>
</html>