<?php
include_once("connection.php")
?>
<?php include_once("insert.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <ul>
            <a href="https://www.facebook.com/itstimeless">
                <li>Home</li>
            </a>
            <a href="https://www.facebook.com/itstimeless">
                <li>About</li>
            </a>
            <a href="https://www.facebook.com/itstimeless">
                <li>Contact</li>
            </a>
            <a href="https://www.facebook.com/itstimeless">
                <li>Shop</li>
            </a>
            <a href="https://www.facebook.com/itstimeless">
                <li>Gallery</li>
            </a>

        </ul>
    </header>

    <form method="POST" action="">
        <label>Name:
            <input type="text" name="firstName" >
        </label>
        <label>lastName:
            <input type="text" name="lastName" >
        </label>
        <label>Albums:
            <input type="text" name="albums" >
        </label>
        <label>
            <input type="submit" name="submit">
        </label>
    </form>
    <br><br>

    <?php include_once("selectAll.php") ?>

    <h1>Display Users</h1>
    <br>
    <table>
        <thead>
            <tr>
                <th><?php echo $row["id"]  ?></th>
                <th><?php echo $row["firstName"]  ?></th>
                <th><?php echo $row["lastName"]  ?></th>
                <th><?php echo $row["Albums"]  ?></th>
            </tr>
            <tr>
                <th>Id</th>
                <th>firstName</th>
                <th>lastName</th>
                <th>Albums</th>
            </tr>
        </thead>
    </table>
</body>

</html>


