<?php
include("./includes/init.php");

$allComputers = Computer::getAllComputers();

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
                <p>Manage Computers</p>
            </div>
            <div class="form-container">
                <table>
                    <thead>
                        <th>S.NO</th>
                        <th>Computer name</th>
                        <th>Action</th>
                    </thead>
                    <?php foreach ($allComputers as $computer): ?>
                        <tr>
                            <td>
                                <?php echo $computer["id"] ?>
                            </td>
                            <td>
                                <?php echo $computer["name"] ?>
                            </td>
                            <td>
                                <a href="./editComputer.php?id=<?php echo $computer["id"]?>">Edit</a>
                                <a href="./computerDetails.php?id=<?php echo $computer["id"]?>">Details</a>
                            </td>
                        </tr>

                    <?php endforeach ?>
                </table>
            </div>

        </div>
    </div>

</body>

</html>