<?php

define("CLIENT_ID", "Acak4kTAaFGQV4YK32_eIslIwM4wMxRwgEE7RevU_yB1Pb_2ok5cqNJl2RTUKjbKhkdiOHebPiNeozpj");
define("CURRENCY", "MXN");
define("KEY_TOKEN", "APR.wqc-354*");
define("MONEDA", "$");

session_start();

$num_cart = 0;
if(isset($_SESSION['carrito']['productos'])){
    $num_cart = count($_SESSION['carrito']['productos']);
}

?>