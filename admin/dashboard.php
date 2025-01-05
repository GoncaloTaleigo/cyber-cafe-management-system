<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>

    <div class="dashboard-page">

        <?php include("./includes/sidebar.php") ?>

        <div class="dashboard-page-right">
            <div class="top-bar">
                <img src="../admin/images/images.png" alt="">
            </div>
            <div class="dashboard-content-container">
                <div class="title-container">
                    <h2>Dashboard</h2>
                </div>

                <div class="dashboard-information">
                    <div class="dashboard-row">
                        <div class="dashboard-card red-card">
                            Total number of users
                        </div>
                        <div class="dashboard-card blue-card">
                            total computers
                        </div>
                    </div>
                    <div class="dashboard-row">
                        <div class="dashboard-card yellow-card">
                            total new users(Still in cafe)
                        </div>
                        <div class="dashboard-card green-card">
                            total old users(Out of cafe)
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

</body>

</html>