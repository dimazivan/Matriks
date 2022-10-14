<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    $data = array(1, 2, 1, 2, 0.5, 1, 0.5, 1, 1, 2, 1, 2, 0.5, 1, 0.5, 1);

    var_dump($data);

    // tentukan jumlah baris dan kolom
    $baris = 4;
    $kolom = 4;

    // inialisasi array baru
    $data2D = array();

    // konversi ke array 2D
    $counter = 0;
    for ($i = 0; $i < $baris; $i++) {
        for ($j = 0; $j < $kolom; $j++) {
            $data2D[$i][$j] = $data[$counter];
            $counter++;
        }
    }

    // menampilkan array 2D dan jumlahnya
    echo '<table border="1">';
    for ($i = 0; $i < $baris; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $kolom; $j++) {
            echo '<td>' . $data2D[$i][$j] . '</td>';
        }
        echo '<tr>';
    }
    echo '<table>';

    // menghitung jumlah
    $hasil = array();
    for ($i = 0; $i < $kolom; $i++) {
        $jumlah = 0;
        for ($j = 0; $j < $baris; $j++) {
            $jumlah += $data2D[$j][$i];
        }
        $hasil[] = $jumlah;
    }

    var_dump($hasil);

    ?>
</body>

</html>