1 <?php 
2 $servername="localhost"; 
3 $username="root"; 
4 $password=""; 
5 $database="college"; 
5 $con=mysqli_connect($servername, $username, $password, $database); 
7 if(!$con) 
3 { 
die("Error deleting record:" mysqli_error($con)); 
} 
1 ?>