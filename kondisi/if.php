<?php 

/**
 * if adalah fungsi untuk melakukan perulangan
 */

$nilai = 80;
if ($nilai >=80 and $nilai <=95) {
    echo 'Nilai anda ' . $nilai . ' dan anda lulus';
} elseif ($nilai >= 95){
    echo 'Nilai anda ' . $nilai . ' dan anda lulus anda keren';
} else {
    echo 'nilai anda ' . $nilai . ' dan anda tidak dapat lulus';
}
?>