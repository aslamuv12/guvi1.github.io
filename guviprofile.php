<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crs";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($_SESSION['email'] == true && $_SESSION['password'] == true) 
{
echo "<script>window.location = 'welcome.php'</script>";
} 
else 
{
    echo "<script>window.location = 'guviregis.php'</script>";
}
?>
<?php
//include('../includes/gheader.php');
?>
