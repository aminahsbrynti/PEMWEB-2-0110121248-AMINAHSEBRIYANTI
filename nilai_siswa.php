<?php
$proses= $_POST['proses'];
$nama_siswa = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

echo 'proses : ' .$proses;
echo '<br/>Nama : ' .$nama_siswa;
echo '<br/>Mata Kuliah : ' .$matkul;
echo '<br/>Nilai UTS : ' .$nilai_uts;
echo '<br/>Nilai UAS : ' .$nilai_uas;
echo '<br/>Nilai Tugas pratikum : ' .$nilai_tugas;
}
?>
