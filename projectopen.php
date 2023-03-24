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
    <title>Upload</title>
  </head>

<body>

  <!-- print navbar -->
  <?php include("navbar.php"); ?>

  <div class="body2">

    <h1 class="recent">Project ...</h1>

    <!-- info for upload -->
    <div class="UploadInputs">
      <form>
        <div class="search">
          <div class="InputUpload">

            <input class="Searchbar" type="text" id="title" maxlength="30" placeholder="title..." disabled></input>
          </div>
        </div>

        <!-- code input -->
        <div class="d-flex">
          <textarea class="form-control flex-grow-1" style="background-color:#282a3a; color:white;" spellcheck="false" rows="15" cols="100" required></textarea>
        </div>

        <br>
        <div class="search">
                <a href="Upload.php" class="ShareUpload" alt="CHANGE">
                    <i>C</i>
                    <i>H</i>
                    <i>a</i>
                    <i>N</i>
                    <i>G</i>
                    <i>E</i>
                </a>
            </div>
            <br>
</div>

<div class="search">
                <a href="Upload.php" class="ShareUpload" alt="SHARE">
                    <i>S</i>
                    <i>H</i>
                    <i>A</i>
                    <i>R</i>
                    <i>E</i>
            
                </a>
            </div>
            <br>


<div class="search">
                <a href="Upload.php" class="ShareUpload" alt="PUBLIC">
                    <i>P</i>
                    <i>U</i>
                    <i>B</i>
                    <i>L</i>
                    <i>I</i>
                    <i>C</i>
                </a>
            </div>
            <br>
            
</div>
</div>
  
  
  
  <!-- print footer -->
  <?php include("footer.php"); ?>

</body>

</html>