<?php
require_once '../src/Qrbuilder.php';
use QRGenerator\QrBuilder;

if (!empty($_POST) && isset($_POST["data"],$_POST["label"],$_POST["filename"])) {
    $data = $_POST["data"];
    $label = $_POST["label"];
    $filename = hash("sha1", $_POST["filename"]);
    
    $image_qrcode = QrBuilder::create($data, $label, $filename);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Generator</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>QR Generator</legend>
            <label for="data">Data: </label>
            <input type="text" name="data" id="data">
            <label for="label">Label: </label>
            <input type="text" name="label" id="label">
            <label for="filename">File name: </label>
            <input type="text" name="filename" id="filename">
            <input type="submit" value="Generate">
        </fieldset>
    </form>

    <?php
        if (isset($image_qrcode)) {
            echo "<h1>Generated QR Code:</h1>";
            echo "<img src='$image_qrcode' alt='Qr code generated' srcset=''>";
        }
    ?>
</body>
</html>