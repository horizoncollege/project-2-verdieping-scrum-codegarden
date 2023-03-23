<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link class="img-fluid rounded-circle" rel="shortcut icon" type="logo/png" href="pictures/codegarden_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CodeGarden</title>
</head>

<body>
    <!-- NAVBAR -->
    <?php include("navbar.php"); ?>
    <div class="body2">
        <!-- LOGO IMG -->
        <div class="container">
            <img src="pictures/codegardensmall.png" class="rounded mx-auto d-block img-fluid" style="width:500px; height: auto; margin-top: 80px; margin-bottom: 80px;" alt="fulllogo">
        </div>

        <!-- Search Upload Share -->
        <div class="container-fluid">

            <div class="search">
                <input class="Searchbar" type="text" placeholder="Search..."></input>
            </div>
            <div class="search">
                <a href="Upload.php" class="ShareUpload" alt="UPLOAD">
                    <i>U</i>
                    <i>P</i>
                    <i>L</i>
                    <i>O</i>
                    <i>A</i>
                    <i>D</i>
                </a>
            </div>
            
            <div class="search">
                <a href="share.php" class="ShareUpload" alt="SHARE">
                    <i>S</i>
                    <i>H</i>
                    <i>A</i>
                    <i>R</i>
                    <i>E</i>
                </a>
            </div>
        </div>

        <!-- Your recent projects -->

        <h3 class="recent"> Your recent projects </h3>

        <!-- Recent projects table -->

        <div class="container" style="border-radius: 20px; background-color: #04A118; margin-bottom: 50px; max-width: 750px">
            <table class="table" style="color: white; font-weight: 900;">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Language</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Project 1</td>
                        <td>HTML/CSS</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Project 2</td>
                        <td>HTML/CSS</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Project 3</td>
                        <td>PHP</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- contactlink -->
        <?php include("contactlink.php"); ?>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>