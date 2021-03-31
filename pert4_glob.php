<?php 
    require "pert4_tabung.php";
    
    $tabung = new Tabung;  
    if (isset($_POST['submit_btn'])){
       
        $tabung->setDiameter ($_POST['diameter']);
        $tabung->setTinggi ($_POST['tinggi']);
        $tabung->hitungluas();
		$tabung->hitungvol();
    
    }
	 // if(isset($_POST['submit'])) {
    //     $diameter = $_POST['diameter'];
    //     $tinggi = $_POST['tinggi'];

    //     $radius = $diameter / 2;
    //     $luas = 2 * pi() * $radius * ($radius + $tinggi);
    //     $volume = pi() * $radius * $radius * $tinggi;

    //     echo "Diameter : $diameter <br>";
    //     echo "Tinggi : $tinggi <br>";
    // }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabung</title>
</head>
<body>
    
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name='submit_btn'>Hitung</button>

        <hr>

        <ul>
            <li>Luas Selimut : <?=$tabung->getLuasSelimut(); ?></li>
            <li>Volume : <?=$tabung->getVol(); ?></li>
        </ul>
    </form>
</body>
</html>

<!-- super global- bisa diakses dimana saja -->
<!-- require namanya harus sesuai dengan file yang dituju -->
<!-- membuat function di file tabung.php,file glob.php untuk mengakses webnya -->
<!-- sebelumnya, kita harus mendeklarasikan variablenya juga -->
<!-- isset digunakan untuk memastikan harus diisi -->