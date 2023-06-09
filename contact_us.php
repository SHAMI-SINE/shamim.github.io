<?php
     include ("connection.php");
     $msg = "";

     if(isset($_POST['submit'])){
            $username=$_POST['name'];
            $email=$_POST['email'];
            $number=$_POST['number'];
            $message=$_POST['message'];

            $sql="INSERT INTO contact(name, email, number, message)VALUES (?,?,?,?)";
                   $stmt=$conn->prepare($sql);
                   $stmt->bind_param("ssss",$username, $email, $number, $message);
                   $stmt->execute();
                   $result = $stmt->get_result();
                   $_SESSION['status'] ='The record is insert Successfully';
                   header('location:index.php');  
                
    }
?>