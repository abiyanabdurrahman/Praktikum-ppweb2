<?php
    // mendefinisikan kontanta
    define ("PHI" , 3.14);
    define ("DBNAME", "Inventori");
    define ("DBSERVER",  "Localhost");

    $jari = 8;
    $luas = PHI * $jari * $jari; 
    $kell = 2 * PHI * $jari;

    echo "Luas Lingkaran dengan Jari " .$jari." : " .$luas;
    echo "<br/> kelilingnya :" .$kell;
?>
<hr>
<?php
    echo "Nama Database : " .DBNAME;
    echo "<br/> Server Database : " .DBSERVER;
?>