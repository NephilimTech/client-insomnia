<?php
$servername = "localhost";
$database = "insomnia_btw";
$username = "insomnia";
$password = "insomnia2019";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
$name = $_POST['name'];
$email = $_POST['email'];
$occupation = $_POST['occupation'];
$phno = $_POST['phno'];
$affiliation = $_POST['affiliation'];

$sql = "INSERT INTO `btw` (`name`, `occupation`, `affiliation`, `email`, `phno`) VALUES ('$name', '$occupation', '$affiliation', '$email', '$phno')";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

echo "<script> location.href='https://www.insomnia.org.in/done/'; </script>";
exit;


?>
