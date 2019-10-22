<?php
$id=$_POST['id'];
$cat=$_POST['cat'];
$name=$_POST['name'];
$year=$_POST['year'];
    $servername="localhost";
    $username="root";
    $password="";
    $conn=new mysqli($servername, $username, $password, 'thuvien');
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    if(!empty($id)){
    $sql="SELECT Sach.tensach as i1, LoaiSach.tentheloai as i2, Sach.namxb as i3 FROM Sach INNER JOIN LoaiSach ON Sach.matheloai=LoaiSach.matheloai WHERE Sach.masach=$id";
    }
    else if(!empty($cat)){
        $sql="SELECT Sach.tensach as i1, LoaiSach.tentheloai as i2, Sach.namxb as i3 FROM Sach INNER JOIN LoaiSach ON Sach.matheloai=LoaiSach.matheloai WHERE Sach.matheloai=$cat";
    }
    else if(!empty($name)){
        $sql="SELECT Sach.tensach as i1, LoaiSach.tentheloai as i2, Sach.namxb as i3 FROM Sach INNER JOIN LoaiSach ON Sach.matheloai=LoaiSach.matheloai WHERE Sach.tensach LIKE '".$name."'";

    }
    $result=$conn->query($sql);
    if($conn->query($sql)==TRUE){
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Ten sach: " . $row["i1"]. " - The loai: " . $row["i2"]. " - Nam xuat ban: " . $row["i3"]. "<br>";
            }
        } else {
            echo "0 results.";
        }
    }
    else echo "Error".$sql."<br>".$conn->error;
    $conn->close();
?>