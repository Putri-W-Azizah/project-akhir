<?php
$nama= $_POST['User Name'];
if($nama== " "){
    header ("location:login.php?nama=kosong");
}else{
    echo" Welcome".$nama;
}
?>