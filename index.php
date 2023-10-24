<?php
header("Access-Control-Allow-Origin: ");
$files = [];

if(isset($_GET['cliente'])){
    $cliente = $_GET['cliente'];
}
if($cliente){
    $files = scandir($cliente);
}else{
    $files = scandir($_SERVER['DOCUMENT_ROOT']);
}
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
        <div class="table-responsive">
        <table class="table dataTable">
            <tr>
                <th>Nombre</th>
                <th>ver</th>
            </tr>
            <tbody>
            <?php
            foreach ($files as $archivo) {   
                $filePath = $path . '/' . $file;
                ?>
                <td>
                <?php echo $archivo?>
                </td>
            </tbody>
            </table>
    </div>
</body>
</html>