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

        // $code = htmlspecialchars($code, ENT_QUOTES);

        // connecting the database
        $host = 'localhost';
        $user = 'bit_academy';
        $password = 'bit_academy';
        $dbname = 'codegarden';

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Verbinding mislukt: " . $e->getMessage());
        }

        if (isset($_SESSION['public'])) {
            $stmt = $pdo->prepare("INSERT INTO public (Title, Description, Language, Code) VALUES (?, ?, ?, ?)");
            $stmt->execute([$title, $description, $language, $code]);
        }

        $stmt = $pdo->prepare("INSERT INTO private (Title, Description, Language, Code) VALUES (?, ?, ?, ?)");
        $stmt->execute([$title, $description, $language, $code]);

        if ($stmt->rowCount() > 0) {
            echo "<h1>Successfully uploaded</h1>";
?>
            <!-- JavaScript countdown for the redirect -->
            <script>
                var countDownDate = new Date().getTime() + 4000;

                // Update the count down every 1 second
                var x = setInterval(function() {

                    // Get the current time
                    var now = new Date().getTime();

                    // Find the distance between now and the count down date
                    var distance = countDownDate - now;

                    // Calculate time remaining in seconds
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // print the time remaining
                    document.getElementById("countdown").innerHTML = "Redirecting automatically to Your projects in " + seconds + " seconds...";

                    // when the countdown hits 0 it will redirect to projects.php
                    if (distance < 0) {
                        clearInterval(x);
                        window.location.href = "projects.php";
                    }
                }, 1000);
            </script>

            <div id="countdown">Redirecting automatically to Your projects in 3 seconds...</div>
<?php
        } else {
            $message = "Error, something went wrong";
        }

        $pdo = null;
    }
}
?>