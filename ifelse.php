<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if-elif</title>
</head>
<body>
    <?php
    $d=date("D");
    if($d=="fri")
        echo"Selamat berlibur";
    elseif ($d=="sun")
        echo"selamat hari minggu";
    else
        echo"selamat masuk sekolah";

    ?>
</body>
</html>