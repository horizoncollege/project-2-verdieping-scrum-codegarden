<!DOCTYPE html>

<html lang="en">

<head>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link class="img-fluid rounded-circle" rel="shortcut icon" type="logo/png" href="pictures/codegarden_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Edit</title>
  </head>

<body>
<?php
    
    session_start();

    // check if the user is logged in
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    } else {
        // user is not logged in, redirect to login.php
        echo "You are not logged in. Redirecting to login page...";
        header("Location: login.php");
        exit;
    }
    ?>
  <style>
    .container {
      display: flex;
      flex-direction: column;
    }

    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }

    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked+.slider {
      background-color: #6fca3a;
    }

    input:focus+.slider {
      box-shadow: 0 0 1px #6fca3a;
    }

    input:checked+.slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;
    }

    .yourding {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
  </style>

  <!-- print navbar -->
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

  $welk = $_GET['id'];

  $sql = "SELECT * FROM private WHERE id=$welk";
  ?>

  <div class="body2">

    <h1 class="recent">Edit Project</h1>

    <!-- info for upload -->
    <!-- inputs for upload -->
    <div class="UploadInputs">
      <!-- connecting to insert.php -->
      <form action="insert.php" method="POST">
        <div class="search">
          <div class="InputUpload">

            <div class="yourding">
              <?php

              // echo "<input id='Title' name='Title' class='Searchbar' type='text' maxlength='30' placeholder='$title' required></input>";
              foreach ($conn->query($sql) as $row) {
                $welk = $row['id'];
                echo "<table style='display: flex; flex-direction:column; width: 2000px;'>";
                echo "<h1> Title: " . $row['Title'] . "<br><br>" . PHP_EOL;
                echo "Language: " .$row['Language'] . "</h1> <br>" . PHP_EOL;
                echo "<h1>Description: </h1><textarea class='Searchbar' style='width: 400px; height: 150px; resize:vertical; max-height:750px; min-height:150px;'>" . $row['Description'] . "</textarea>" . PHP_EOL;
                echo "<div class='d-flex' style=''><textarea class='form-control flex-grow-1' style='background-color:#282a3a; color:white;' cols='100' rows='15'> " . $row['Code'] . "</textarea></div>" . PHP_EOL;
                echo "<br><button>
                  <div class='svg-wrapper-1'>
                    <div class='svg-wrapper'>
                      <svg height='24' width='24' viewBox='0 0 24 24'>
                        <path d='M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z' fill='currentColor'></path>
                      </svg>
                    </div>
                  </div>
                  <span>Upload</span>
                </button>";
                echo "</table>";
                echo "</div>";
                echo "</div>";
              }
              ?>
            </div>

            <br>
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
          <br>
          <div class="search">
            <a class="ShareUpload" alt="PUBLIC ------ PRIVATE">
              <i>P</i>
              <i>U</i>
              <i>B</i>
              <i>L</i>
              <i>I</i>
              <i>C</i>
              <i>&nbsp;</i>
              <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
              </label>
              <i>&nbsp;</i>
              <i>P</i>
              <i>R</i>
              <i>I</i>
              <i>V</i>
              <i>A</i>
              <i>T</i>
              <I>E</i>
            </a>
          </div>
          <br>
        </div>
    </div>
  </div>
  <!-- print footer -->
  <?php include("footer.php"); ?>
</body>

</html>