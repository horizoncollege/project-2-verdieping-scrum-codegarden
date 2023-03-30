<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link class="img-fluid rounded-circle" rel="shortcut icon" type="logo/png" href="pictures/codegarden_logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CodeGarden</title>
</head>

<body>
<?php
    // start the session
    session_start();

    // check if the user is logged in
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    } else {
        // user is not logged in, redirect to login.php
        header("Location: login.php");
        exit;
    }

    ?>
    <!-- navbar -->
    <?php include("navbar.php");

    $servername = "localhost";
    $username = "bit_academy";
    $password = "bit_academy";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=codegarden", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
 ?>

 <style>
.projects {
    display: flex;
    justify-content: center;
    align-items: center;
}


    </style>
    <div class="body2">
        <h1 class="recent"> Your projects </h1>

        <div class="container">
            <div class="search">
                <input class="Searchbar" type="text" placeholder="Search your projects..."></input>
            </div>
        </div>

        <div class="projects row mt-4">

            <?php

            $title = "";

            $sql = "SELECT * FROM private";
            ?>

            <h1>
                <div class="col-sm-3">
                    <?php
                    foreach ($conn->query($sql) as $row) {
                        $welk = $row['id'];
                        echo "<div class='col-sm-3'>";
                        echo "<div class='container'>";
                        echo "<table style='display: flex; flex-direction:column;'>";
                        echo $row['Title'] . "<br>";
                        echo $row['Language'] . "<br>";
                        echo "<textarea max-length='10' style='width:200px; font-size:20px; margin-right:200px;' disabled>" . $row['Description'] . "</textarea>" . PHP_EOL;
                        echo "<a class='UploadBut' type='button' style='text-decoration:none; width:200px; height:auto; text-align:center;' value='Open' href='projectopen.php?id=$welk'>Open</a>";
                        echo "</table>";
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </h1>

        </div>
        <!-- contactlink -->
        <?php include("contactlink.php"); ?>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- footer -->
    <?php include("footer.php"); ?>
</body>

</html>