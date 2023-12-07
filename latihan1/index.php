<?php
$nama = 'Ahmad';
$nama2 = "karta";
$pesan = "selamat datang {$nama}";
$pesan2 = "selamat datang {$nama2}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $pesan . '<br>';
    echo $pesan2 . '<br>';
    ?>
</body>
</html>