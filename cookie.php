<?php
    if (isset($_POST['save'])) {
        setcookie("setting[inputalamat]", $_POST['setinputalamat']);
        setcookie("setting[inputipk]", $_POST['setinputipk']);
        setcookie("setting[ukuranfont]", $_POST['setukuranfont']);
        setcookie("setting[tampilanfont]", $_POST['settampilanfont']);
        setcookie("setting[displayalamat]", $_POST['setdisalamat']);
        setcookie("setting[displayipk]", $_POST['setdisipk']);    
    }

    header("location: setting.php");
?>