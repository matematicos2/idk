<?php
$evilcorp = "MacroQuimica";
?>
<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Scontabilidades - <?php print"$evilcorp";?></title>
    <link rel="stylesheet" href="static/css/uploadfile.css">
</head>
<body>
    <input type="file" name="file" id="file" hidden>
    <label for="file" id="selector">Select file</label>
    <input type="button" id="btn_uploadfile" value="Upload" onclick="uploadFile();"class="uploadbtn">
    <script src="static/js/patch.js"></script>
    <script src="static/js/buttons.js"></script>
</body>
</html>