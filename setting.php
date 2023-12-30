<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Data Mahasiswa</title>
</head>
<body>
    <form method="POST" action="cookie.php">
        <h3>Setting Halaman Input</h3>

        Apakah alamat harus diisi? <br>
        <?php
            if (isset($_COOKIE['setting']) and $_COOKIE['setting']['inputalamat'] == "tidak") {
                echo "<input type='radio' name='setinputalamat' value='ya' required='required'>Ya
                    <input type='radio' name='setinputalamat' value='tidak' checked>Tidak";
            }
            else {
                echo "<input type='radio' name='setinputalamat' value='ya' required='required' checked>Ya
                    <input type='radio' name='setinputalamat' value='tidak'>Tidak";
            }
        ?>
        <br><br>
        Tentukan IPK default: <br>
        <?php
            if (isset($_COOKIE['setting'])) {
                $ipk = $_COOKIE['setting']['inputipk'];
                echo "<input type='text' name='setinputipk' value=$ipk required>";
            }
            else {
                echo "<input type='text' name='setinputipk' required>";
            }
        ?>
        <br>

        <h3>Setting Halaman Display</h3>

        Ukuran font: <br>
        <?php
            if (isset($_COOKIE['setting'])) {
                $size = $_COOKIE['setting']['ukuranfont'];
                echo "<input type='text' name='setukuranfont' value=$size required> px";
            }
            else {
                echo "<input type='text' name='setukuranfont' required> px";
            }
        ?>
        <br><br>

        Tampilan font: <br>
        <select name="settampilanfont" required>
            <option value="bold" 
            <?php
                if (isset($_COOKIE['setting']) and $_COOKIE['setting']['tampilanfont']=="bold") {
                    echo "selected";
                }
            ?>
            >Bold</option>
            <option value="italic" 
            <?php
                if (isset($_COOKIE['setting']) and $_COOKIE['setting']['tampilanfont']=="italic") {
                    echo "selected";
                }
            ?>
            >Italic</option>
            <option value="underline" 
            <?php
                if (isset($_COOKIE['setting']) and $_COOKIE['setting']['tampilanfont']=="underline") {
                    echo "selected";
                }
            ?>
            >Underline</option>
        </select><br><br>
        
        Apakah alamat akan ditampilkan? <br>
        <?php
            if (isset($_COOKIE['setting']) and $_COOKIE['setting']['displayalamat'] == "tidak") {
                echo "<input type='radio' name='setdisalamat' value='ya' required='required'>Ya
                    <input type='radio' name='setdisalamat' value='tidak' checked>Tidak";
            }
            else {
                echo "<input type='radio' name='setdisalamat' value='ya' required='required' checked>Ya
                    <input type='radio' name='setdisalamat' value='tidak'>Tidak";
            }
        ?>
        <br><br>
        
        Apakah IPK akan ditampilkan? <br>
        <?php
            if (isset($_COOKIE['setting']) and $_COOKIE['setting']['displayipk'] == "tidak") {
                echo "<input type='radio' name='setdisipk' value='ya' required='required'>Ya
                    <input type='radio' name='setdisipk' value='tidak' checked>Tidak";
            }
            else {
                echo "<input type='radio' name='setdisipk' value='ya' required='required' checked>Ya
                    <input type='radio' name='setdisipk' value='tidak'>Tidak";
            }
        ?>
        <br><br>

        <input type="submit" name="save" value="Simpan">
    </form>

    <br>
    <a href="index.php">Kembali ke halaman utama</a>
    
</body>
</html>