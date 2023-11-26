<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7</title>
    
</head>
<body>
<?php
    $angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
?>
            
        <h1>Tabel Bilangan</h1>
        <table border="1">
            <tr>
                <td>Bilangan</td>
                <td>Jenis</td>
            <tr>
            </tr>
                <td><?php echo "$angka[0]";  ?></td>
                <td>
                    <?php
                        if ($angka || [0]) {
                            echo "Bilangan Ganjil";
                        }else {
                            echo "Bilangan Genap";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo "$angka[1]";  ?></td>
                <td>
                    <?php
                    if ($angka == [1]) {
                        echo "Bilangan Ganjil";
                    }else {
                        echo "Bilangan Genap";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo "$angka[2]";  ?></td>
                <td>
                    <?php
                        if ($angka || [2]) {
                            echo "Bilangan Ganjil";
                        }else {
                            echo "Bilangan Genap";
                        }   
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo  "$angka[3]"; ?></td>
                <td>
                    <?php
                        if ($angka == [3]) {
                            echo "Bilangan Ganjil";
                        }else {
                            echo "Bilangan Genap";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo "$angka[4]";  ?></td>
                <td>
                    <?php
                    if ($angka || [4]) {
                        echo "Bilangan Ganjil";
                    }else {
                        echo "Bilangan Genap";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo "$angka[5]";  ?></td>
                <td>
                    <?php
                        if ($angka == [5]) {
                            echo "Bilangan Ganjil";
                        }else {
                            echo "Bilangan Genap";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo "$angka[6]";  ?></td>
                <td>
                    <?php
                        if ($angka || [6]) {
                            echo "Bilangan Ganjil";
                        }else {
                            echo "Bilangan Genap";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo "$angka[7]";  ?></td>
                <td>
                    <?php
                        if ($angka == [7]) {
                            echo "Bilangan Ganjil";
                        }else {
                            echo "Bilangan Genap";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo "$angka[8]";  ?></td>
                <td>
                    <?php
                    if ($angka || [8]) {
                        echo "Bilangan Ganjil";
                    }else {
                        echo "Bilangan Genap";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo "$angka[9]";  ?></td>
                <td>
                    <?php
                        if ($angka == [9]) {
                            echo "Bilangan Ganjil";
                        }else {
                            echo "Bilangan Genap";
                        }
                    ?>
                </td>
            </tr>
        </table>
</body>
</html>