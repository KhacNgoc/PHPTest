<?php
$id=$_POST['id'];
$cat=$_POST['cat'];
$name=$_POST['name'];
$year=$_POST['year'];
if(!empty($id) || !empty($cat) || !empty($name) || !empty($year)){
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