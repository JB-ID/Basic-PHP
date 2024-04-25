<?php

$mhs=[
    [
        'nim' => "224162555201204",
        'nama' => "Akbar",
        'alamat' => "Cikampek",
        'prodi' => "Informatika"
    ],
    [
        'nim' => "224162555201138",
        'nama' => "Fajar",
        'alamat' => "Telagasari",
        'prodi' => "Informatika"
    ],
    [
        'nim' => "224162555201165",
        'nama' => "Bisma",
        'alamat' => "Isekai",
        'prodi' => "Informatika"
    ],
    [
        'nim' => "224162555201152",
        'nama' => "Putra",
        'alamat' => "Purwasari",
        'prodi' => "Informatika"
    ],
    [
        'nim' => "224162555201249",
        'nama' => "Fahri",
        'alamat' => "Telagasari",
        'prodi' => "Informatika"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP 2</title>
</head>
<body>

    <table border="1" align="center" >
        
            <br>
            <br>
            <h1 align="center">DAFTAR NAMA MAHASISWA</h1>
            <br>
            <br>
            <br>
            <br>
        <tr align="center">
            <td colspan="3">NIM</td>
            <td colspan="4">NAMA</td>
            <td colspan="4">ALAMAT</td>
            <td colspan="3">PRODI</td>
            
        </tr>
        <?php foreach ($mhs as $kupu) : ?>
        <tr>
            <td colspan="3"><?= $kupu['nim']?></td>
            <td colspan="4"><?= $kupu['nama']?></td>
            <td colspan="4"><?= $kupu['alamat']?></td>
            <td colspan="4"><?= $kupu['prodi']?></td>
        </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>