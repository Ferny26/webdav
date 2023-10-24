<?php
header("Access-Control-Allow-Origin: ");
$files = [];

if(isset($_GET['cliente'])){
    $cliente = $_GET['cliente'];
}
$files = '/var/www/webdav/'.$cliente.'/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet"></link>
    <title>Webdav</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row mb-5 mt-3">
            <div class="col">
                <hr>
            </div>
            <div class="col text-center inner-title">
                <h1>WebDav Orion - Jewerly</h1>
            </div>
            <div class="col">
                <hr>
            </div>
        </div>
        <div class="row">
            <?php
            foreach (glob('/var/www/webdav/'.$cliente.'/') as $archivo) {   
                echo "<a> Archivo: : <strong> $archivo </strong></br> </a>" ;
            }
            ?>
        </div>
    </div>
</body>
</html>