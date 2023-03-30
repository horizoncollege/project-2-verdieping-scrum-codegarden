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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/highlight.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/styles/default.min.css"
        id="theme">
    <script>
        window.onload = function () {
            var code = document.getElementById("code");
            hljs.highlightBlock(code);
        };
        function updateTheme(theme) {
            document.getElementById("theme").href = "https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/styles/" + theme + ".min.css";
        }
    </script>
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
$_SESSION['welk'] = $welk;

  $sql = "SELECT * FROM private WHERE id='$welk'";

  ?>

  <div class="body2">

    <h1 class="recent">Edit Project</h1>

    <!-- info for upload -->
    <!-- inputs for upload -->
    <div class="UploadInputs">
      <!-- connecting to insert.php -->
      <form action="edit.php" method="POST">
        <div class="search">
          <div class="InputUpload">

            <div class="yourding">

            <select onchange="updateTheme(this.value)">
        <option value="default">default</option>
        <option value="a11y-dark">a11y-dark</option>
        <option value="atom-one-dark">atom-one-dark</option>
        <option value="rainbow">rainbow</option>
        <option value="vs">vs</option>
    </select>
    <pre id="code">
    -- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 mrt 2023 om 09:44
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codegarden`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `private`
--

CREATE TABLE `private` (
  `id` MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Title` varchar(30) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Language` varchar(30) NOT NULL,
  `Code` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `public`
--

CREATE TABLE `public` (
  `id` MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Title` varchar(30) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Language` varchar(30) NOT NULL,
  `Code` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` mediumint(9) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

</pre>
              <?php

              // echo "<input id='Title' name='Title' class='Searchbar' type='text' maxlength='30' placeholder='$title' required></input>";
              foreach ($conn->query($sql) as $row) {
                $welk = $row['id'];

                echo "<input id='replacetitle' name='replacetitle' class='Searchbar' placeholder='" . $row['Title'] . "' required></input<br><br>";
                echo "<input id='replacelanguage' name='replacelanguage' class='Searchbar' placeholder='" . $row['Language'] . "'required></input<br><br>";
                echo "<p>Description: </p><textarea id='replacedescription' name='replacedescription' class='Searchbar' style='width: 400px; height: 150px; resize:vertical; max-height:750px; min-height:150px;'>" . $row['Description'] . "</textarea>";
                echo "<textarea id='replacecode' name='replacecode' class='form-control flex-grow-1' style='background-color:#282a3a; color:white; max-width:75%; display:flex; justify-content:center; align-items:center;' spellcheck='false' cols='100' rows='15'> " . $row['Code'] . "</textarea>";

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
              }
              ?>
            </div>

            <br>
          </div>

          <br>

          <br>
        </div>
    </div>
  </div>
  <!-- print footer -->
  <?php include("footer.php");

  ?>
</body>

</html>