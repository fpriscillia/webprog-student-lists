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
				
        if (isset($_SESSION['input'])) {
            $arr_mhs = $_SESSION['input'];
        }
        else {
            $arr_mhs = array();
        }

        if (isset($_POST['save'])) {
            $da = null;
			if (isset($_POST['disalamat'])) {
				$da = $_POST['disalamat'];
			}
			$di = null;
			if (isset($_POST['disipk'])) {
				$di = $_POST['disipk'];
			}
			$mhs = array("NRP"=>$_POST['nrp'], "Nama"=>$_POST['nama'], "Alamat"=>$_POST['alamat'], "IPK"=>$_POST['ipk'], 
			"Style"=>$_POST['font_style'], "DisAlamat"=>$da, "DisIPK"=>$di);
            $arr_mhs[] = $mhs;

            $_SESSION['input'] = $arr_mhs;
        }
	?>

	<h3>Halaman Input</h3>
	<form method="POST" action="input.php">
		NRP: <input type="text" name="nrp" value="" required=""><br><br>
		Nama: <input type="text" name="nama" value="" required=""><br><br>

		Alamat: <input type="text" name="alamat" 
		<?php
			if ($_COOKIE['setting']['inputalamat'] == "ya")
			{
				echo "required";
			}
		?>>

		<br><br>
		IPK: <input type="text" name="ipk"
		<?php
			$ipk = $_COOKIE['setting']['inputipk'];
			echo "value=$ipk";
		?>>

		<br><br>
		<input type="hidden" name="font_style" value="
		<?php
			$size = $_COOKIE['setting']['ukuranfont'];
			echo "font-size: ".$size."px;";
			if ($_COOKIE['setting']['tampilanfont'] == "bold") {
				echo " font-weight: bold;";
			}
			elseif ($_COOKIE['setting']['tampilanfont'] == "italic") {
				echo " font-style: italic;";
			} 
			else {
				echo " text-decoration: underline;";
			}      
		?>">

		<?php
			if($_COOKIE['setting']['displayalamat'] == "ya") {
		 		echo "<input type='hidden' name='disalamat' value='ya'>";
			}
		 	if($_COOKIE['setting']['displayipk'] == "ya") {
				echo "<input type='hidden' name='disipk' value='ya'>";
			}
		?>
		<input type="submit" name="save" value="Simpan">
	</form>

	<br><br>
	<a href="index.php">Kembali ke halaman utama</a>
</body>
</html>