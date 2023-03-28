<?php

// start the session
session_start();

// check if the user is logged in
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
} else {
    // user is not logged in, redirect to login.php
    echo "You are not logged in. Redirecting to login page...";
    header("Location: login.php");
    exit;
}

// getting the inputs from upload.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = isset($_POST['Title']) ? $_POST['Title'] : null;
    $language = isset($_POST['Language']) ? $_POST['Language'] : null;
    $description = isset($_POST['Description']) ? $_POST['Description'] : null;
    $code = isset($_POST['Code']) ? $_POST['Code'] : null;

    // check if required fields are set
    if (!$title || !$language || !$code) {
        $message = "Please fill in all required fields";
    } else {


        // connecting the database
        $host = 'localhost';
        $user = 'bit_academy';
        $password = 'bit_academy';
        $dbname = 'codegarden';

        $mysqli = new mysqli($host, $user, $password, $dbname);

        // If connecting failed give an error
        if ($mysqli->connect_error) {
            die("Verbinding mislukt: " . $mysqli->connect_error);
        }

        // query to insert into database
        $stmt = $mysqli->prepare("INSERT INTO private (Title, Description, Language, Code) 
VALUES (?, ?, ?, ?)");

        $stmt->bind_param("ssss", $title, $description, $language, $code);

        if ($stmt->execute()) {
            $message = "Successfully uploaded";
        } else {
            $message = "Error, something went wrong:" . $mysqli->error;
        }

        $stmt->close();
        $mysqli->close();
    }
}

if (isset($message)) : ?>
    <p><?php echo "<h1>" . $message; "<br>";
    header( "refresh:2;url=projects.php" );
        ?></p>
<?php endif; ?>