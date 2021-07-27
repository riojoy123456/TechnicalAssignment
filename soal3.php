<?php
$a = 17;
$b = 8;

if ($a > $b) {
    $besar = $a;
    $strBesar = 'a';

    $kecil = $b;
    $strKecil = 'b';
} else {
    $besar = $b;
    $strBesar = 'a';

    $kecil = $a;
    $strKecil = 'a';
}

// dapatin jumlah maksimal  a yang boleh dempet 3
$jumlah_dempet_besar = floor(($besar / 3));

// dapatin jumlah maksimal yang kecil boleh dempet 
$dempet_kecil = round($kecil / $jumlah_dempet_besar);

/// dapatin jumlah maksimal  b yang boleh dempet 2
$jumlah_dempet_kecil = $kecil - (($jumlah_dempet_besar * $dempet_kecil) - $kecil);

$count_kecil = 0;

while ($besar > 0 || $kecil > 0) {
    if ($jumlah_dempet_besar > 0) {
        for ($i = 0; $i < 3; $i++) {
            echo ($strBesar);
            $besar--;
        }
        $jumlah_dempet_besar--;
    } else {
        echo ($strBesar);
        $besar--;
    }



    if ($count_kecil <= $jumlah_dempet_kecil) {
        for ($i = 0; $i < $dempet_kecil; $i++) {
            echo ($strKecil);
            $count_kecil++;
            $kecil--;
        }
    } else {
        echo ($strKecil);
        $kecil--;
    }
}
