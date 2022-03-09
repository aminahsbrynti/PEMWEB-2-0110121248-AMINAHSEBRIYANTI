<?php
$proses = $_GET ['proses'];
$nama_siswa = $_GET ['nama'];
$matkul = $_GET ['matkul'];
$nilai_UTS = $_GET ['nilai_uts'];
$nilai_UAS = $_GET ['nilai_uas'];
$nilai_tugas = $_GET ['nilai_tugas'];

echo 'proses : ' .$proses;
echo '<br/>Nama : ' .$nama_siswa;
echo '<br/>Mata Kuliah : ' .$matkul;
echo '<br/>Nilai UTS : ' .$nilai_UTS;
echo '<br/>Nilai UAS ' .$nilai_UAS;
echo '<br/>Nilai Tugas pratikum : ' .$nilai_tugas;
?>
