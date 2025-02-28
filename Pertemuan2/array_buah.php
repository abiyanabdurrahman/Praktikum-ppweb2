<?php
$ar_buah = ["Pepaya","Mangga", "Pisang", "Jambu",];
echo $ar_buah[1];
// Menampilkan Jumlah Buah
echo "<br/>Jumlah Buah " . count($ar_buah);
// Menampilkan Seluruh Buah
echo "<ol>";
foreach ($ar_buah as $buah) {
    echo "<li>" . $buah ."</li>";
} echo "</ol>";

// Menambah Buah
$ar_buah[] = "Apel";

// Menghapus Buah index Ke 1
unset($ar_buah[1]);

// Mengubah Index ke 2 Menjadi Manggis
$ar_buah[2] = "manggis";

// Menampilkan Seluruh buah dengan Index nya
foreach ($ar_buah as  $buah => $v) {
echo  "<li>Buah Index - " .$buah ." adalah ".$v . "</li>"; 
}echo "</ul> <br>";

echo "</ul>";
sort($ar_buah);
foreach ($ar_buah as  $buah => $v) {
    echo  "<li>Buah Index - " .$buah ." adalah ".$v . "</li>"; 
    }echo "</ul>";
    
?>