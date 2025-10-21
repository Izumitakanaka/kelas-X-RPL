<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class=container-fluid>
        <nav class="navbar navbar-expand-lg navbar danger bg-danger ">
        <ol class="navbar-nav ms-auto">
            <li class="nav-item  ms-5">
                <a class="nav-link" href="?menu=profil">profil</a>
            </li>
            <li class="nav-item  ms-5">
                <a class="nav-link" href="?menu=sejarah">sejarah</a>
           </li>
            <li class="nav-item  ms-5">
                <a class="nav-link" href="?menu=jurusan">jurusan</a>
           </li>
            <li class="nav-item  ms-5">
                <a class="nav-link" href="?menu=prestasi">prestasi</a>
           </li>
            <li class="nav-item  ms-5">
                <a class="nav-link" href="?menu=kegiatan">kegiatan</a>
            </li>
            <li class="nav-item  ms-5">
                <a class="nav-link" href="?menu=kontak">kontak</a>
           </li>
        </ol>
        </nav>
        <section class=>
        <?php 
        if (isset($_GET['menu'])) {
            $isi = $_GET['menu'];
            echo $isi;
        }
            if($isi == "pages/profil.php"){
                require_once "pages/profil.php";
            }
            if($isi == "pages/sejarah.php"){
                require_once "pages/sejarah.php";
            }
            if($isi == "pages/jurusan.php"){
            require_once "pages/jurusan.php";
            }
            if($isi == "pages/prestasi.php"){
            require_once "pages/prestasi.php";
            }
            if($isi == "pages/kegiatan.php"){
            require_once "pages/kegiatan.php";
            }
             if($isi == "pages/kontak.php"){
            require_once "pages/kontak.php";
            }
        else{
            require_once "pages/profil.php";
        }
        {
            require_once "pages/sejarah.php";
        }
        {
            require_once "pages/jurusan.php";
        }
        {
            require_once "pages/prestasi.php";
        }
        {
            require_once "pages/profil.php";
        }
        {
            require_once "pages/profil.php";
        }

        if (isset($_POST['tombol'])){
            $nama = $_POST['nama'];
            $_pesan = $_POST['pesan'];
            $email = $_POST['email'];
            
            echo $nama;
            echo "<br";
            echo $pesan;
            echo "<br";
            echo $email;
            echo "<br";
        }
         
        
        ?>
        </section>
        <footer class=mt-4>
         <p>
            Web ini dibuat oleh Rahman
         </p>
        </footer>
    </div>
</body>
</html>