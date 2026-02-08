<?php
// 1. Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "mini_project_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

// 2. Get form data
$college = $_POST['college'];
$other_college = $_POST['other_college'];
$category = $_POST['category'];
$message = $_POST['message'];

// 3. Insert data into table
$sql = "INSERT INTO complaints (college, other_college, category, message) 
        VALUES ('$college', '$other_college', '$category', '$message')";

if(mysqli_query($conn, $sql)){
    echo "<h2>Complaint submitted successfully ✅</h2>";
}else{
    echo "Error: " . mysqli_error($conn);
}

// 4. Close connection
mysqli_close($conn);
?>