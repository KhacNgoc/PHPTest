<?php
$id=$_POST['id'];
$cat=$_POST['cat'];
$room=$_POST['room'];
$bad=$_POST['bad'];
if(!empty($id) || !empty($cat) || !empty($room) || !empty($bad)){
    $servername="localhost";
    $username="root";
    $password="";
    $conn=new mysqli($servername, $username, $password, 'phongkhach');
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    $sql="UPDATE Phong SET maloai=$cat, sophong='".$room."', sogiuong='".$bad."' WHERE maphong=$id";
    if($conn->query($sql)==TRUE){
        echo "<script>alert('Update ok.')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    else echo "Error".$sql."<br>".$conn->error;
}
else{
    echo "All.";
    die();
}
$conn->close();
?>