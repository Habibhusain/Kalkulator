<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="latihanphp.css">
</head>
<body>
    <div class="card">
        <div class="kalkulator">
            kalkulator
        </div>
        <?php
        if(isset($_POST['hitung'])){
            $bil1= $_POST['bil1'];
            $bil2= $_POST['bil2'];
            $operasi=$_POST['operasi'];
            switch($operasi) {
                case 'tambah':
                    $hasil = $bil1+$bil2;
                break;
                case 'kurang':
                $hasil = $bil1-$bil2;
                break;
                case 'kali':
                $hasil = $bil1*$bil2;
                break;  
                case 'bagi':
                $hasil = $bil1/$bil2;
            break;
            }
        }
?>
        <form action="latihanphp.php" method="post">
            <input class="bilangan1" type="text" name="bil1" placeholder="Masukan Angka" required>
            <input class="bilangan2" type="text" name="bil2" placeholder="Masukan Angka" required >
            <select name="operasi" class="option kiri" id="">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol kanan">
        </form>
        <?php if(isset($_POST['hitung'])){ ?>
             <div class="clearboth"></div>
                <input class="hasil1" value=" <?php echo $hasil ?> " type="text" readonly>
            <?php } else { ?>
            <input type="text" class="bilangan3">
            <?php } ?>
    </div>
</body>
</html>