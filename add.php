<?php
    $cat=$_POST['cat'];
    $name=$_POST['name'];
    $year=$_POST['year'];
    if(!empty($cat) || !empty($name) || !empty($year)){
        $servername="localhost";
        $username="root";
        $password="";
        $conn=new mysqli($servername, $username, $password, 'thuvien');
        if($conn->connect_error){
            die("Connection failed: ".$conn->connect_error);
        }
        $sql="INSERT INTO Sach (matheloai, tensach, namxb) VALUES ($cat, '".$name."', '".$year."')";
        if($conn->query($sql)==TRUE){
            echo "Add ok.";
        }
        else echo "Error".$sql."<br>".$conn->error;
    }
    else{
        echo "All.";
        die();
    }
    $conn->close();
?>