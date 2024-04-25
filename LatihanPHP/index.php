<?php
function hitungHari($jumlahHari) {
    $tanggalSekarang = date("l, d-m-Y");
    
    $tanggalDiHitung = date("l, d-m-Y", strtotime($tanggalSekarang . " + " . $jumlahHari));

    $hariInggris = date("l", strtotime($tanggalDiHitung));

    switch ($hariInggris) {
        case "Monday":
            return "Senin";
            break;
        case "Tuesday":
            return "Selasa";
            break;
        case "Wednesday":
            return "Rabu";
            break;
        case "Thursday":
            return "Kamis";
            break;
        case "Friday":
            return "Jumat";
            break;
        case "Saturday":
            return "Sabtu";
            break;
        case "Sunday":
            return "Minggu";
            break;
        default:
            return "Hari tidak valid";
            break;
    }
}

$jumlahHari = 100;
$hariBerikutnya = hitungHari($jumlahHari);
echo "100 hari setelah hari ini adalah: " . $hariBerikutnya;
?>
