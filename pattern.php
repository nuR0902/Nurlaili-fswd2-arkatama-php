<?php 

// Triangle Upside Left
function cetak_pattern_segitiga_upside_left($tinggi, $symbol = "*") {
    // loop untuk mencetak baris
    for ($i = $tinggi; $i >= 1; $i--) {
        // loop untuk mencetak simbol
        for ($j = 1; $j <= $i; $j++) {
            echo $symbol . " ";
        }
        echo "<br>";
    }
}
cetak_pattern_segitiga_upside_left(15, "*"); 

// Triangle Downside Right
function cetak_pattern_segitiga_downside_right($tinggi, $symbol = "*") {
    // loop untuk mencetak baris
    for ($i = 1; $i <= $tinggi; $i++) {
        // loop untuk mencetak spasi
        for ($j = 1; $j <= $tinggi - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // loop untuk mencetak simbol
        for ($j = 1; $j <= $i; $j++) {
            echo $symbol . " ";
        }
        echo "<br>";
    }
}
cetak_pattern_segitiga_downside_right(15, "*");

//Triangle Downside Left
function cetak_pattern_segitiga_downside_left($tinggi, $symbol = "*") {
    // loop untuk mencetak baris
    for ($i = 1; $i <= $tinggi; $i++) {
        // loop untuk mencetak spasi
        for ($j = 1; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // loop untuk mencetak simbol
        for ($j = $i; $j <= $tinggi; $j++) {
            echo $symbol . " ";
        }
        echo "<br>";
    }
}
cetak_pattern_segitiga_downside_left(15, "*");

//Triangle Upside Right
function cetak_pattern_segitiga_upside_right($tinggi, $symbol = "*") {
    // loop untuk mencetak baris
    for ($i = 1; $i <= $tinggi; $i++) {
        // loop untuk mencetak spasi
        for ($j = 1; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // loop untuk mencetak simbol
        for ($j = $tinggi; $j >= $i; $j--) {
            echo $symbol . " ";
        }
        echo "<br>";
    }
}
cetak_pattern_segitiga_upside_right(15, "*");


?>