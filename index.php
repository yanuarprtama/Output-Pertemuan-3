<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output pertemuan 3</title>
</head>
<body>
    <h1>Silahkan Upload File!</h1>
    <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>NAMA</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td><input type="file" name="file" id="file"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Kirim" name="submit"> <br> </td>
            </tr>
        </table>
    </form>
</body>
</html>


<?php
    if (isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $file = $_FILES["file"]["name"];
        $tmp_name = $_FILES["file"]["tmp_name"];
        move_uploaded_file($tmp_name, "img/".$file);
    }    
?>

    <table border="1">
        <tr>
            <td><b>Foto success</b></td>
        </tr>
        <tr>
            <td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td><img src="img/<?php echo $file ?>" alt=""></td>
        </tr>
    </table>