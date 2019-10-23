<?php
$id=$_GET['id'];
if(!empty($id)){
    $servername="localhost";
    $username="root";
    $password="";
    $conn=new mysqli($servername, $username, $password, 'phongkhach');
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    $sql="DELETE FROM Phong WHERE maphong=$id";
    if($conn->query($sql)==TRUE){
        echo "<script>alert('Delete ok.')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    else echo "Error".$sql."<br>".$conn->error;
}
else{
    echo "No data.";
    die();
}
$conn->close();
?>
