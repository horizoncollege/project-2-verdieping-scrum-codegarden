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
        <div class="container-fluid" style="margin-bottom: 25px">
            <h3 class="recent"> Contact </h3>
            <div class="search">
                <a class="btn btn-outline-black btn-lg text-black font-weight-bold" style="background-color: rgb(192,192,192); margin-bottom: 10px; width:427px;" href="mailto:169357@student.horizoncollege.nl" target="_blank">codegardenservice@gmail.com</a>
            </div>
            <div class="search">
                <a class="btn btn-outline-black btn-lg text-black font-weight-bold" style="background-color: rgb(192,192,192); margin-bottom: 10px; width:427px;" href="tel:0618920693" target="_blank">06 12 34 56 78</a>
            </div>
        </div>

        <!-- contactlink -->
        <?php include("contactlink.php"); ?>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>