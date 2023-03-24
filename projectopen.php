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
<style>
    .container{
        display:flex;
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

input:checked + .slider {
  background-color: #6fca3a;
}

input:focus + .slider {
  box-shadow: 0 0 1px #6fca3a;
}

input:checked + .slider:before {
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
</style>
    <!-- print navbar -->
    <?php include("navbar.php"); ?>

    <div class="body2">

<h1 class="recent">Upload code</h1>

<!-- info for upload -->
<!-- inputs for upload -->
<div class="UploadInputs">
  <!-- connecting to insert.php -->
  <form action="insert.php" method="POST">
    <div class="search">
      <div class="InputUpload">

        <input id="Title" name="Title" class="Searchbar" type="text"  maxlength="30" placeholder="title..." required></input>

        <!-- dropdown menu for code language required-->
        <select class="Searchbar" name="Language" id="Language" required>
          <option value="" disabled selected>code language</option>
          <option value="HTML">HTML</option>
          <option value="CSS">CSS</option>
          <option value="PHP">PHP</option>
          <option value="JavaScript">JavaScript</option>
          <option value="MySQL">MySQL</option>
        </select>

        <!-- textarea for description -->
        <textarea class="Searchbar" id="Description" name="Description" style="width: 400px; height: 150px; resize:vertical; max-height:750px; min-height:150px;" type="text" maxlength="2000" placeholder="description..."></textarea>

      </div>
    </div>

    <!-- textarea for code input required-->
    <div class="d-flex">
      <textarea id="Code" name="Code" class="form-control flex-grow-1" style="background-color:#282a3a; color:white;" spellcheck="false" rows="15" cols="100" required></textarea>
    </div>

                <br>
                <div class="search">
                    <a href="Upload.php" class="ShareUpload" alt="SAVE">
                        <i>S</i>
                        <i>A</i>
                        <i>V</i>
                        <i>E</i>
                    </a>
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