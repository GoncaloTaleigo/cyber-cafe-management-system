<?php
include("./includes/init.php");

$computer = new Computer;

if (isset($_POST["submit"])) {
    $computer->name = $_POST["name"];
    $computer->location = $_POST["location"];
    $computer->ip = $_POST["ipAdress"];

    $computer->addComputer();
    header("Location:addComputer.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="computer-page">
        <?php include("includes/sidebar.php") ?>
        <div class="add-computer">
            <?php include("./includes/top-bar.php") ?>
            <div class="path-details">
                <p>Computer Detail</p>
            </div>
            <div class="form-container">
                <form action="" method="post" class="add-computer-form">
                    <label for="">Computer Name</label>
                    <input type="text" name="name">
                    <label for="">Computer location</label>
                    <input type="text" name="location">
                    <label for="">IP adress</label>
                    <input type="text" name="ipAdress">
                    <input type="submit" value="Add computer" name="submit">
                </form>
            </div>

        </div>
    </div>

</body>

</html>