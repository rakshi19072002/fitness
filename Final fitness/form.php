<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="fitness1";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}
if(isset($_POST['save']))
{
    echo "name: " . $_POST["name"] . "<br>";
    echo "age: " . $_POST["age"] . "<br>";
    echo "phone: " . $_POST["phone"] . "<br>";
    echo "dob: " . $_POST["dob"] . "<br>";
    echo "gender: " . $_POST["gender"] . "<br>";
    echo "class: " . $_POST["class"] . "<br>";
    echo "doj: " . $_POST["doj"] . "<br>";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $class = $_POST['class'];
    $doj = $_POST['doj'];

	
	 $sql_query = "INSERT INTO fitness
	 (name,age,phone,dob,gender,class,doj)
	 VALUES ( '$name','$age','$phone','$dob','$gender','$class','$doj')";


	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
