<?php
include_once 'index.php';
if(isset($_POST['submit']))
{    
     $title = $_POST['title'];
     $description = $_POST['description'];
     $verse = $_POST['verse'];
     $author = $_POST['author'];
     $status = $_POST['status'];
     $sql = "INSERT INTO news (title,description,verse,author,status)
     VALUES ('$title','$description','$verse','$author','$status')";
     if (mysqli_query($conn, $sql)) {
        echo "Your daily updates has been submitted succesffully!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
if(isset($_POST['alertsBtn']))
{    
     $alerts_title = $_POST['alerts_title'];
     $alerts_description = $_POST['alerts_description'];
     $sql = "INSERT INTO notice (noticetitle,noticedescription)
     VALUES ('$alerts_title','$alerts_description')";
     if (mysqli_query($conn, $sql)) {
        echo "Your notice updates has been submitted succesffully!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>