<?php

function luas_lingkaran($jariJari)
{
    $luas = 3.14 * ($jariJari ** 2);
    echo number_format($luas, 2) . "\n";
}

function keliling_lingkaran($jariJari)
{
    $keliling = 2 * 3.14 * $jariJari;
    echo number_format($keliling, 2) . "\n";
}

function luas_persegi($panjang, $lebar)
{
    $luas = $panjang * $lebar;
    echo number_format($luas, 2) . "\n";
}

for ($i = 1; $i <= 100; $i++) {

  echo "Angka baris ke- " . $i. ' = '; 

    if (($i % 3 == 0) && ($i % 5 == 0)) {
        // Kelipatan 3 dan 5
        luas_persegi($i / 3, $i / 5);

    } elseif ($i % 3 == 0) {
          // Kelipatan 3
        luas_lingkaran($i / 3);

    } elseif ($i % 5 == 0) {
        // Kelipatan 5
        keliling_lingkaran($i / 5);

    } else {
        // Bukan kelipatan 3 atau 5 (tidak memanggil function)
        // langsung mencetak angka tersebut   
        echo number_format($i, 2) . "\n";
    }
}
?>