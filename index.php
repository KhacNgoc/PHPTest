<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;

        }
        body{
            background-color: aqua;
            background-size: cover;
            height:100vh;
        }
        table,
        th,
        td {
            border: 3px solid red;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
        }
        .container{
            position: absolute;
            top: 29%;
            transform: translateY(-25%);
            margin-left: 30%;
        }
    </style>
    <?php
    $con = mysqli_connect("localhost", "root", "", "phongkhach");
    ?>
</head>
<body>
    <div class="container">
        <button onclick="window.location.href='viewadd.php'">Add</button><br><br>
        <button onclick="window.location.href='viewsearch.php'">Search</button><br><br>
        <table>
            <thead>
                <tr>
                    <th> Mã phòng </th>
                    <th> Tên loại phòng </th>
                    <th> Số phòng </th>
                    <th> Số giường </th>
                    <th> Xóa </th>
                    <th> Sửa </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT Phong.maphong as i,Phong.sogiuong as i1, Loaiphong.tenloai as i2, Phong.sophong as i3  FROM Phong INNER JOIN Loaiphong ON Phong.maloai=Loaiphong.maloai";
                $result = mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($result)){
                    $maphong = $row['i'];
                    $tentheloai = $row['i2'];
                    $sophong = $row['i3'];
                    $sogiuong = $row['i1'];
                    ?>
                    <tr>
                        <td> <?php echo $maphong; ?> </td>
                        <td> <?php echo $tentheloai; ?> </td>
                        <td> <?php echo $sophong; ?> </td>
                        <td> <?php echo $sogiuong; ?> </td>
                        <td>
                            <a href="delete.php?id=<?php echo $maphong; ?>">
                                Delete
                            </a>
                        </td>
                        <td>
                            <a href="viewupdate.php?id=<?php echo $maphong; ?>">
                                Edit
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
    </div>
</body>
<?php



?>

</html>