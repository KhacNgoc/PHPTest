<?php
$id=$_POST['id'];
$cat=$_POST['cat'];
$room=$_POST['room'];
$bad=$_POST['bad'];
    $servername="localhost";
    $username="root";
    $password="";
    $conn=new mysqli($servername, $username, $password, 'phongkhach');
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    if(!empty($id)){
        $sql="SELECT Phong.sogiuong as i,Phong.maphong as i1, Loaiphong.tenloai as i2, Phong.sophong as i3 FROM Phong INNER JOIN Loaiphong ON Phong.maloai=Loaiphong.maloai WHERE Phong.maphong=$id";
    }
    else if(!empty($cat)){
        $sql="SELECT Phong.sogiuong as i,Phong.maphong as i1, Loaiphong.tenloai as i2, Phong.sophong as i3 FROM Phong INNER JOIN Loaiphong ON Phong.maloai=Loaiphong.maloai WHERE Phong.maloai=$cat";
    }
    else if(!empty($room)){
        $sql="SELECT Phong.sogiuong as i,Phong.maphong as i1, Loaiphong.tenloai as i2, Phong.sophong as i3 FROM Phong INNER JOIN Loaiphong ON Phong.maloai=Loaiphong.maloai WHERE Phong.sophong=$room";
    }
    else if(!empty($bad)){
        $sql="SELECT Phong.sogiuong as i,Phong.maphong as i1, Loaiphong.tenloai as i2, Phong.sophong as i3 FROM Phong INNER JOIN Loaiphong ON Phong.maloai=Loaiphong.maloai WHERE Phong.sogiuong=$bad";
    }
    else{
        echo "Khong thay dieu kien loc.";
        die();
    }
    $result=$conn->query($sql);
    if($conn->query($sql)==TRUE){
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Ma phong: " . $row["i1"]. " - The loai phong: " . $row["i2"]. " - So phong: " . $row["i3"]. " - So giuong: " . $row["i"]."<br>";
            }
        } else {
            echo "Khong tim thay ban ghi.";
        }
    }
    else echo "Error".$sql."<br>".$conn->error;
    $conn->close();
?>
