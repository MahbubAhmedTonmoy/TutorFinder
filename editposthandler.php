<?php
session_start();
require 'config.php';
$userId = $_SESSION['un'];
$userType = $_SESSION['name'];


$address=$_POST['address'];
$divisions=$_POST['divisions'];
$subject=$_POST['subject'];
$medium=$_POST['medium'];
$salary=$_POST['salary'];
/*
echo $address;
echo $divisions;
echo $medium;
echo $subject;
echo $salary;*/

 if($userType == "Gaurdian")
{
    $statement2="update g_post set divisions = '$divisions', medium = '$medium', address = '$address', subject='$subject',salary='$salary'	where g_id = $userId";
    //$result = mysqli_query($conn, $statement1);
    if(mysqli_query($conn,$statement2))
    {
        echo "Update sucessful";
        header('location:logout.php');
    }
    else{
        mysqli_error($conn);
    }
        mysqli_close($conn);

}
    else if($userType == "Tutor")
    {
        $statement3="update tutor_post set divisions = '$divisions', medium = '$medium', address = '$address', subject='$subject',salary='$salary' where tutor_id = $userId";
        //$result = mysqli_query($conn, $statement1);
        if(mysqli_query($conn,$statement3))
        {
            echo "Update sucessful";
            header('location:logout.php');
        }
        else{
            mysqli_error($conn);
        }
            mysqli_close($conn);

    }
        else
        {
            echo "somesthing went wrong";
        }
    
?>