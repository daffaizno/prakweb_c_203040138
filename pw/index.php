<?php 

require 'php/functions.php';

$buku = query("SELECT * FROM buku")
?>

<!doctype html>
<html lang="en">

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>

<body>
    <div class="container">
        <table cellpadding="10" cellspacing="0" border="1">
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>penulis</th>
                <th>gambar</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($buku as $bk) :?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $bk["nama_buku"] ?></td>
                        <td><?= $bk["penulis"] ?></td>
                        <td><img src="assets/img/<?= $bk["gambar"]; ?>"</td>
                    </tr>
            <?php $i++ ?>
            <?php endforeach; ?>    
        </table>
    </div>


</body>

</html>