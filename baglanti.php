<?php

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="paylastikca";

$baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);
if(!$baglan)
{
    die("veritabanı bağlantı işlemi başarısız".mysqli_connect_error());

}
else{
    echo "bağlantı Başarılı";
}






?>