<?php
$nama = $_POST['nama'];
$email = $_POST ['email'];
$alamat = $_POST ['alamat'];
$status = $_POST ['status'];
$catatan =$_POST ['catatan'];
$nohp =$_POST['nohp'];
$daerah =$_POST['daerah'];
$waktu =date('l, d-m-Y  h:i:s a');;



echo "<title>Orang yang tertarik</title>";
$fp = fopen("tertarik.txt","a+");
fputs($fp, "Nama: $nama\n");
fputs($fp, "Alamat asal: $alamat\n");
fputs($fp, "Email: $email\n");
fputs($fp, "NO.HP: $nohp\n");
fputs($fp, "Status: $status\n");
fputs($fp, "Daerah Kost yang diminati: $daerah\n");
fputs($fp, "Watatan: $catatan\n");
fputs($fp, "Waktu : $waktu\n");
echo "data berhasil terkirim";
fputs($fp, "-------------------\n");
?>