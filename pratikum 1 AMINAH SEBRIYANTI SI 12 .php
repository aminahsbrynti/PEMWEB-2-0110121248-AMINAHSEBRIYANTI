<?php
   // definisikan variables
   $nama = 'Aminah Sebriyanti';
   $umur = 19;
   $berat = 50;

   echo 'Nama : '. $nama;
   echo '<br/>Umur : ' . $umur.'tahun';
   echo '<br/>Berat : ' . $berat.'kg';

   echo"<br/>Hello $nama Apakabar";

?>







<?php
   // definisi konstan
 define('phi',3.14);
 define('dename','inventori');
 define('deserver','localhost');

 $jari = 9;
 $luas = phi * $jari * $jari;
 $kll = 2 * phi * $jari;

 echo 'luas lingkaran dengan jari'.$jari.' : '.$luas;
 echo '<br/>kelilingnya : '.$kll;
?>
<hr/>
<?php
echo 'nama databasenya : '.dbname;
echo '<br/>lokasi databasenya ada di '.dbsrver;
?>


<