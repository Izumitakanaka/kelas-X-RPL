<?php 
$menu = [
    
     'img'      => 'img/logo.jpg'
     'profil'   => 'Madrasah Tsanawiyah Nahdlatul Ulama Candi didirikan pada tahun 1991. Salah satu Madrasah dibawah naungan Kementrian Agama Kabupaten Sidoarjo',
     'jadwal'   => 'Jadwal Dalam Web Kedaluwarsa (Tahun menunjukkan Tahun 2020)',
     'kegiatan' => 'kegiatan Dalam Web Kedaluwarsa (Tahun menunjukkan Tahun 2020)',
     'kontak'   => 'Info kontak

Kontak Kami
031 8850752
Email Kami
mtsnucandi@gmail.com
Alamat
Jl. Pesantren Desa Durungbedug
Durungbedug RT.09 RW.02
Kec. Candi Kab. Sidoarjo'
];
$berita = 'Berita'   =>  'Pada tahun ini kami menambahkan beberapa program kelas baru, diantaranya : 
1. Kelas tahfidz
2. Kelas digital
3. Kelas Bilingual' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web sekolah mts durumgbedug</title>
</head>
<body>
    <div>
        <div>
            <ul>
                <li><?= $menu[0] ?></li>
                <li><?= $menu[1] ?></li>
                <li><?= $menu[2] ?></li>
                <li><?= $menu[3] ?></li>
                <li><?= $menu[4] ?></li>
            </ul>
        </div>
        <div>
            <ul>
                <li>Berita:</li>
                <li><?= $berita ?></li>
            </ul>
        </div>
    </div>
</body>
</html>