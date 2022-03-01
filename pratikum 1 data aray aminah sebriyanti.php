<?php
 $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];
 // cetak buah ke index ke 2
 echo $ar_buah[2];
 // cetak jumlah buah
 echo '<br/>Jumlah Buah ' . count($ar_buah);
 // cetak seluruh buah 
 echo '<ol>';
 foreach($ar_buah as $buah){
 echo '<li>'. $buah .'</li>';
 }
         echo '</ol>';
         // tambahkan buah 
         $ar_buah[]="Durian";
        // hapus buah index ke 1
        unset($ar_buah[1]);
        // ubah buah index ke 2 menjadi Manggis
        $ar_buah[2]="Manggis";
        // cetak seluruh buah dengan index nya
        echo '<ul>';
        foreach($ar_buah as $k => $v){
              echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
 }
   echo '</ul>'; 
?>

<!doctyppe html>
<html>
<body>

<?php
$ar_buah = ["p"=>"pepaya","a"=>"apel","m"=>"Mangga","j"=>"Jambu" ];
 echo '<ol>';
 foreach($ar_buah as $k =>$v){
   echo '<li>'.$k.' - ' . $v .'</li>';
 }
 echo '</ol>';
 sort($ar_buah);
 echo '<hr/>';
 echo '<ol>';
foreach($ar_buah as $k =>$v){
 echo '<li>'.$k.' - ' . $v .'</li>';
 }
 echo '</ol>';
 ?> 
 </body>
 </html>
 <?php
 $fungsi_sort = 'menyortir elemen elemen dari array yang diindeks dalam ascending order ';
 $fungsi_arsort = 'mengurutkan array asosiatif dalam urutan menurun sesuai dengan nilainya';
 echo ' fungsi sort adalah'. $fungsi_sort .'dan fungsi arsort'. $fungsi_arsort;
 ?>

<hr/>
<!doctype html>
<html>
<body>
    <?php
    $tims = [" erwin","heru","ali","ujang"];
    array_pop($tims);
    foreach($tims as $person){
        echo $person.'<br/>';
    }
    ?>
</body>
</html>

<?php 
$fungsi_aray_pop = 'menghapus isi array paling akhir';
echo 'fungsi array_pop adalah'. $fungsi_aray_pop ;
  





