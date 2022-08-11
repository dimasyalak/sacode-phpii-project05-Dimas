<?php
if(isset($_POST['email'])){
    //membuat variable
    $alamat_email = $_POST['email'];
    $kata_sandi = $_POST['kata_sandi'];

    //mencetak nilai variable

    echo '<p class=" fw-bold">'.$alamat_email . '</p>';
    echo '<p class=" fw-bold text-danger">'. $kata_sandi . '</p>';
}


?>