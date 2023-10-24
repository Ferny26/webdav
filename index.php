<?php
header("Access-Control-Allow-Origin: ");
$files = [];

if(isset($_GET['cliente'])){
    $cliente = $_GET['cliente'];
}
if($cliente){

    $files = scandir(getcwd(). '/'.$cliente);
    $path = getcwd(). '/'.$cliente.'/';
}else{
    $files = scandir($_SERVER['DOCUMENT_ROOT']);
    $path = getcwd();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet"></link>
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <title>Webdav</title>
</head>



<body>
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<nav class="navbar navbar-expand navbar-light bg-pink topbar mb-4 static-top shadow">
    <a class="topbar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="topbar-brand-icon">
            <img src="1.png" style="height: auto; width: auto; max-height: 4em;" alt="">
        </div>
        <ul class="navbar-nav  ml-3">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item">
                <div class="nav-link bg-pink">
                    Orion - Jewerly
                </div>
                
            </li>
    </ul>
    </a>
</nav>
<div class="mt-6" style="min-height: 80vh;">
<div class="container mt-5">
    <div class="row mb-5 mt-3">
        <div class="col">
            <hr>
        </div>
        <div class="col text-center inner-title">
            <h1>Comprobantes de compra </h1>
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
            $filePath = $path.'/'.$archivo;
            ?>
            <tr>
            <?php if (is_file($filePath)) {?>
                <td>
                    <?php echo $archivo;?>
                </td>
                <td> 
                <a class="nav-link" href=<?php echo $cliente.'/'.$archivo?> >
                    <i class="fas fa-file"></i>
                </a>
                </td>
            <?php }else if (!$cliente) {?>
                <td>
                    <?php echo $archivo?>
                </td>
                <td> 
                    <a class="nav-link" href=<?php echo $archivo?> >
                        <i class="fas fa-folder"></i>
                    </a>
                </td>
                <?php }?>
                
                
            </tr>
        <?php }?>
        </tbody>
        </table>
</div>
</div>


</div>
</body>
</html>