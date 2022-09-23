<?php 

function fak(int $angka){
    $hasil = 1;
    for($x = $angka; $x >= 1; $x--){
        $hasil = $hasil * $x;
    }
    return $hasil;
}
function com(int $n, int $r){
    $x = $n - $r;
    $atas = fak($n);
    $bawah = fak($r) * fak($x);
    if($bawah != 0){
        $hasil = $atas / $bawah;
    }else{
        $hasil = $atas;
    }

    return $hasil;
}
function pel(int $a, int $b, int $c, int $x, ?int $nilaix = 0){
    $hasila = com($a, $nilaix);
    $hasilb = com($b, $x - $nilaix);
    $hasilc = com($c, $x);
    $hasilx = $hasila * $hasilb;
    $hasil = $hasilx / $hasilc;
    echo $hasilx."/".$hasilc." atau ";
    return $hasil;
}

$coba = pel(12,3,15,5,2);
echo $coba.PHP_EOL;