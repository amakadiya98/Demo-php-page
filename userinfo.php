<?php 

$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection successful";
}else{
    echo "no connection";
}

mysqli_select_db($con,'contact_info');

$first_name=$_GET['first-name'];
$last_name=$_GET['last-name'];
$email=$_GET['email'];
$phone_no=$_GET['phone'];
$message=$_GET['message'];

$query = "INSERT INTO `user_info`(`Firstname`, `Lastname`)
            VALUES ('$first_name','$last_name')";
            
// $query2 = "INSERT INTO  user_contact_data(`Email`, `PhoneNo`,'Message')
//             VALUES ('$email','$phone_no','$message')";
$query2="INSERT INTO `user_contact_data`( `Email`, `PhoneNo`, `Message`) 
VALUES ('$email','$phone_no','$message')";
$query3="select * from user_info, user_contact_data where user_info.uid = user_contact_data.uc_id";
       echo "$query";
        echo "$query2";
        mysqli_query($con,$query);
        mysqli_query($con,$query2);
        mysqli_query($con,$query3);
        header('location:index.php');
?>
 