<form action="" method="post">
    <input type="number" name="tanggal" placeholder="masukkan tanggal lahir">
    <input type="number" name="bulan" placeholder="masukkan bulan lahir">
    <input type="submit" name="kirim" value="zodiak anda :">
</form>

<form action="" method="post">

<input type="number" name="angka1"  placeholder="masukkan angka pertama">
    <input type="number" name="angka2" placeholder="masukkan angka kedua">
    <input type="submit" name="jumlahkan" value="tambah" placeholder="+">
    <input type="submit" name="jumlahkan" value="kali" placeholder="*">
    <input type="submit" name="jumlahkan" value="kurang" placeholder="-">
    <input type="submit" name="jumlahkan" value="bagi" placeholder="/">
</form>




<?php 

if (isset($_POST['kirim'])) {
          $tanggal = $_POST['tanggal'];
          $bulan = $_POST['bulan'];

          zodiak($tanggal, $bulan);
          echo "<br>";
 } 

if (isset($_POST['jumlahkan'])){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operasi = $_POST['jumlahkan'];
    if ($operasi == "tambah"){
        echo tambah($angka1, $angka2);
    }
    if ($operasi == "kali"){
        echo kali($angka1, $angka2);
    }
    if ($operasi == "kurang"){
        echo kurang($angka1, $angka2);
    }
    if ($operasi == "bagi"){
        echo bagi($angka1, $angka2);
    }
}



function belajar(){
echo "hari ini saya belajar function";
}


//memanggil function


function cekTanggal($tanggal){



if ($tanggal > 0 && $tanggal < 32) {
    //echo "tanggal benar !";
}else{
    //echo "tanggal salah !";
}
}

//cektanggal(1);
//cekTanggal(0);
//cekTanggal(100);



$tanggal = 1;
$bulan = 100;
if ($tanggal > 0 && $tanggal < 32 && $bulan > 0 && $bulan < 13) {
    if ($bulan == 1){
        if ($tanggal > 0 && $tanggal < 20){
            echo "Zodiak anda adalah carpicorn";
        }else{
            echo "Zodiak anda adalah aquarius";
        }
    }
    if ($bulan == 2){
      if ($tanggal > 0 && $tanggal < 20) {
             echo "Zodiak anda adalah aquarius"; 
       }else{
        echo "zodiak anda adalah pisces";
       }
    }
    if ($bulan == 3){
        if ($tanggal > 0 && $tanggal < 21) {
            echo "zodiak anda adalah pisces";
        }else{
            echo "zodiak anda adalah aries";
        }
    }
    if ($bulan == 4){
        if ($tanggal > 0 && $tanggal < 20){
            echo "zodiak anda adalah aries";
        }else{
            echo "zodiak anda adalah taurus";
        }
    }
    if ($bulan == 5){
        if ($tanggal > 0 && $tanggal < 20){
            echo "zodiak anda adalah taurus";
        }else{
            echo "Zodiak anda adalah gemini";
        }
    }
    if ($bulan == 6){
        if ($tanggal > 0 && $tanggal < 20){
            echo "Zodiak anda adalah gemini";
        }else{
            echo "zodiak anda adalah cancer";
        }
    }
    if ($bulan == 7){
        if ($tanggal > 0 && $tanggal < 20){
            echo "Zodiak anda adalh cancer";
        }else{
            echo "Zodiak anda adalah leo";
        }
    }
    if ($bulan == 8){
        if ($tanggal > 0 && $tanggal < 20){
            echo "zodiak anda adalah leo";
        }else{
            echo "zodiak anda adalah virgo";
        }
    }
    if ($bulan == 9){
        if ($tanggal > 0 && $tanggal < 20){
            echo "zodiak anda adalah virgo";
        }else{
            echo "Zodiak anda adalah libra";
        }
    }
    if ($bulan == 10){
        if ($tanggal > 0 && $tanggal < 20){
            echo "Zodiak anda adalah libra";
        }else{
            echo "Zodiak anda adalah scorpio";
        }
    }
    if ($bulan == 11){
        if ($tanggal > 0 && $tanggal <20){
            echo "Zodiak anda adalah scorpio";
        }else{
            echo "zodiak anda adalah sagitarius";
        }
    }
    if($bulan== 12){
        if ($tanggal > 0 && $tanggal < 20){
            echo "zodiak anda adalah sagitarius";
        }else{
            echo "zodiak anda adalah carpicorn";
        }
    }


}else{
    echo "tanggal atau bulan salah!";


}

function cekBulan($bulan){
    if ($bulan < 0 && $bulan > 13 ){
        return true;
    }else{
        return false;
    }
}


cekBulan (0);

if (cekBulan(0)){
echo "bulan benar";
}else{
    echo "bulan salah";
}

function luasPersegiPanjang($p, $l){
    $luas = $p * $l;
    return $luas;
}

$p = 5;
$l = 3;
$t = 15;

echo "volume balok dengan panjang $p, lebar $l dan panjang $t adalah :";

luasPersegiPanjang($p, $l) * $t;


function tambah($a, $b){
    return $a + $b;
}

function kurang($a, $b){
    return $a - $b;
}
function kali($a, $b){
    return $a * $b;
}

function bagi($a, $b){
    return $a / $b;
}





?>


