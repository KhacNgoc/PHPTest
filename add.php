<?php
    $cat=$_POST['cat'];
    $room=$_POST['room'];
    $bad=$_POST['bad'];
    if(!empty($cat) || !empty($room) || !empty($bad)){
        $servername="localhost";
        $username="root";
        $password="";
        $conn=new mysqli($servername, $username, $password, 'phongkhach');
        if($conn->connect_error){
            die("Connection failed: ".$conn->connect_error);
        }
        $sql="INSERT INTO Phong (maloai, sophong, sogiuong) VALUES ($cat, '".$room."', '".$bad."')";
        if($conn->query($sql)==TRUE){
            echo "<script>alert('Add ok.')</script>";
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