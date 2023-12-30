<!DOCTYPE html>
<html>
<head>
    <title>Web Data Mahasiswa</title>
</head>
<body>
    <?php
        if(is_null($_COOKIE['setting']))
        {
            header("location: setting.php");
        }
        
        session_start();

        $counter = 1;
        if (isset($_SESSION['input']) or isset($_POST['save'])) //mencegah kalau blm pernah input
        {
            foreach ($_SESSION['input'] as $key => $value) 
            {              
                echo "<div style=\"$value[Style]\">";
                echo "$counter. <br>";
                echo "NRP: $value[NRP]<br>Nama: $value[Nama]<br>";
                if ($value['DisAlamat']!=null) {
                    echo "Alamat: $value[Alamat]<br>";
                } 
                if ($value['DisIPK']!=null) {
                    echo "IPK: $value[IPK]<br>";
                }
                echo "</div>";
                echo "<br>";
                $counter += 1;
            }
        }
    ?>
    <br>
    <a href="index.php">Kembali ke halaman utama</a>
</body>
</html>
