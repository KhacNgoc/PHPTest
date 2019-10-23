<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <?php
        $id=$_GET['id'];
    ?>
    <?php
    $con = mysqli_connect("localhost", "root", "", "phongkhach");
    ?>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;

    }
    body
    {
        background-color: aqua;
        background-size: cover;
        height:100vh;
    }
    .box{
            position: absolute;
            top: 29%;
            transform: translateY(-25%);
            margin-left: 39%;
            border: 3px solid red;
            padding: 53px 90px;
    }
</style>

<body>
    <div class="box">
        <h1>Update</h1><br><br><br>
        <form action="update.php" method="POST">
            <input type='number' name="id" value=<?php echo $id ?> hidden><br> Categories:
            <br>
            <select name="cat">
                    
            <?php
                        $sql1 = "SELECT * FROM Loaiphong";
                        $kq1 = mysqli_query($con,$sql1);
                        
                        while ($row_loai=mysqli_fetch_array($kq1)){
                            
                            $maloai = $row_loai['maloai'];
                            $tenloai = $row_loai['tenloai'];
                            
                            echo "
                            
                            <option value='$maloai'> $tenloai </option>
                            
                            ";
                            
                        }
            ?>
                        
                </select><br> So phong: <br>
            <input type="number" name="room" required><br> So giuong:<br>
            <input type="number" name="bad" required><br><br>
            <input type="submit" value="Update"><br>
        </form>
    </div>

</body>

</html>