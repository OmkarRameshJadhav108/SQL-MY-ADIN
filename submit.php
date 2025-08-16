<?php 
include 'student.php'; 

if (isset($_POST['submit'])) { 
    $name = $_POST['uname']; 
    $password = $_POST['password']; 
    $gender = $_POST['gender']; 
    $education = $_POST['education']; 

    $chk = ""; 
    foreach ($education as $chk1) { 
        $chk .= $chk1 . ","; 
    }

    // Remove trailing comma
    $chk = rtrim($chk, ",");

    $sql = "INSERT INTO student (name, password, gender, education) 
            VALUES ('$name', '$password', '$gender', '$chk')";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Record inserted successfully!";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>
