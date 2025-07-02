<!-- <?php
// echo "welcome to this web designed by Elly";
$servername="localhost";
$username="root";
$password="";
$dbname="project2";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("". $conn->connect_error);
}else{
    echo"connected to the database";
}
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql= 'INSERT INTO ';

}
?> -->