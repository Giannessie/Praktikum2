<?php
$ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];

// cetak buah index ke 1 yaitu mangga
echo $ar_buah[1];

// cetak jumlah buah
echo '<br>Jumlah buah' . count($ar_buah);

// cetak seluruh buah
echo '<ol>';
foreach ($ar_buah as $buah){
    echo "<li>$buah</li>";
}
echo "</ol>";

// tambahkan buah
$ar_buah [] = "Durian";
// hapus buah index ke-1
unset ($ar_buah[1]);
// ubah buah index 2 menjadi manggis
$ar_buah[2] = "Manggis";
// Cetak seluruh buah dengan indexnya
echo "<ul>";
foreach ($ar_buah as $k => $v){
    echo "<li> buah index ke - $k adalah $v </li>";
}
echo "</ul";
?>