<?php
$id=$_POST['id'];
if(!empty($id)){
    $servername="localhost";
    $username="root";
    $password="";
    $conn=new mysqli($servername, $username, $password, 'thuvien');
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    $sql="DELETE FROM Sach WHERE masach=$id";
    if($conn->query($sql)==TRUE){
        echo "Update ok.";
    }
    else echo "Error".$sql."<br>".$conn->error;
}
else{
    echo "All.";
    die();
}
$conn->close();
?>