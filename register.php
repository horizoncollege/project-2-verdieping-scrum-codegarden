<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link class="img-fluid rounded-circle" rel="shortcut icon" type="logo/png" href="pictures/codegarden_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>

    <div class="body2">
        <!-- LOGO IMG -->
        <div class="container">
            <img src="pictures/codegardensmall.png" class="rounded mx-auto d-block img-fluid" style="width:500px; height: auto; margin-top: 80px; margin-bottom: 80px;" alt="fulllogo">
        </div>
        <div class="container">
            <h3 class="text-center d-flex justify-content-center font-weight-bold" style="color: #6FCA3A; margin-top: 50px; margin-bottom: 10px">Register an account </h3>
            <form>
                <!-- Username input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Username</label>
                    <input type="email" id="form2Example1" class="form-control" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Password</label>
                    <input type="password" id="form2Example2" class="form-control" />
                </div>

                <!-- Submit button -->
                <button type="button" class="btn btn-success btn-block mb-4">Create account</button>

                <!-- Back button -->
                <div class="text-center">
                    <p>Not what you're looking for? <a class="text-success" href="index.php">Return to Homepage</a></p>
                </div>
            </form>
        </div>
    </div>

</body>

</html>