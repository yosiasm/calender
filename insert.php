<?php
 
 $tgl=$_POST['dt'];
 $bln=$_POST['month'];
 $thn=$_POST['year'];
echo $thn.' - '.$bln.' - '.$tgl;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tanggal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `kalender` (`idtgl`, `kalender`) VALUES (NULL, '$thn-$bln-$tgl');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>