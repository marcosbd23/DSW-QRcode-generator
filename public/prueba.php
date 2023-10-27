<?php
require_once '../src/Qrbuilder.php';

use QRGenerator\QrBuilder;

$builder = new QrBuilder();
$imgURI = $builder->create("Test data", "test label", "hola");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Generator</title>
</head>
<body>
    <h1>QR Code generado con mi clase:</h1>
    <img src="<?=$imgURI?>" alt="Qr code generated" srcset="">
</body>
</html>