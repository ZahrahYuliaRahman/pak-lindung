<?php
    include("component/header.html");
    include("component/navigasi.html");

    $menu='beranda';

    if(isset($_GET['menu']))
    {
        $menu=$_GET['menu'];
    }
    else{
        $menu='beranda';
    }
    
    include 'component/konten.php';
    include("component/footer.html");
?>
