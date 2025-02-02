<?php
include("./includes/init.php");

$computersList = Computer::getAllComputers();


if (isset($_POST["submit"])) {

    $user = new User;


    $user->username = $_POST["username"];
    $user->userAdress = $_POST["userAddress"];
    $user->mobileNumber = $_POST["mobileNumber"];
    $user->email = $_POST["email"];
    $user->computerName = $_POST["computerName"];
    $user->idProof = $_POST["username"];

    $user->addUser();

    header("Location:addUser.php");
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
                <p>User detail</p>
            </div>
            <div class="form-container">
                <form action="" method="post" class="add-computer-form">
                    <label for="">Username</label>
                    <input type="text" name="username">
                    <label for="">User address</label>
                    <textarea name="userAddress" id=""></textarea>
                    <label for="">Mobile number</label>
                    <input type="text" name="mobileNumber">
                    <label for="">Email</label>
                    <input type="text" name="email">
                    <label for="">Computer Name</label>
                    <select id=""  name="computerName">
                        <option value="">--Select a computer--</option>
                        <?php foreach ($computersList as $computer): ?>
                            <option value="<?php echo $computer->name ?>"><?php echo $computer->name ?></option>
                        <?php endforeach ?>
                    </select>

                    <label for="">Id proof</label>
                    <input type="text" name="idProof">


                    <input type="submit" value="Add computer" name="submit">
                </form>
            </div>

        </div>
    </div>

</body>

</html>