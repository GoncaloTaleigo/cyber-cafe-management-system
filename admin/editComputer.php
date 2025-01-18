<?php
include("./includes/init.php");

$computer = Computer::getComputerById($_GET["id"]);
print_r($computer);

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $location = $_POST["location"];
    $ip = $_POST["ipAdress"];

    Computer::updateComputerValues($_GET["id"],$name,$location,$ip);
  
    echo "atualizado";
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
                    <input type="text" name="name" value="<?php echo $computer["name"]?>">
                    <label for="">Computer location</label>
                    <input type="text" name="location" value="<?php echo $computer["location"]?>">
                    <label for="">IP adress</label>
                    <input type="text" name="ipAdress" value="<?php echo $computer["ip_adress"]?>">
                    <input type="submit" value="Update" name="submit">
                </form>
            </div>

        </div>
    </div>

</body>

</html>