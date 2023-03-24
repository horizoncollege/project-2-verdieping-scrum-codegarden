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

    <h1 class="recent">Upload code</h1>

    <!-- info for upload -->
    <div class="UploadInputs">
      <form>
        <div class="search">
          <div class="InputUpload">

            <input class="Searchbar" type="text" id="title" maxlength="30" placeholder="title..." required></input>

            <select class="Searchbar" name="language" id="language" required>
              <option value="" disabled selected>code language</option>
              <option value="HTML">HTML</option>
              <option value="CSS">CSS</option>
              <option value="PHP">PHP</option>
              <option value="JavaScript">JavaScript</option>
              <option value="MySQL">MySQL</option>
            </select>

            <textarea class="Searchbar" id="description" style="width: 600px; height: 150px; resize:vertical; max-height:750px; min-height:150px;" type="text" maxlength="2000" placeholder="description..."></textarea>

          </div>
        </div>

        <!-- code input -->
        <div class="d-flex">
          <textarea class="form-control flex-grow-1" style="background-color:#282a3a; color:white;" spellcheck="false" rows="15" cols="100" required></textarea>
        </div>

        <br>
        <button>
          <div class="svg-wrapper-1">
            <div class="svg-wrapper">
              <svg height="24" width="24" viewBox="0 0 24 24">
                <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
              </svg>
            </div>
          </div>
          <span>Upload</span>
        </button>
      </form>
    </div>
  </div>
  
  <!-- print footer -->
  <?php include("footer.php"); ?>

</body>

</html>