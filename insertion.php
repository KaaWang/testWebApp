<?php
$connectionInfo = array("UID" => "apuadmin", "pwd" => "Stormer32@", 
"Database" => "WebApplicationDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:webapplicationtp043517.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if(!$conn)
{
  die("Error connection: ".sqlsrv_errors());
}
 
$sql ="INSERT INTO restaurant (restaurant_name, restaurant_address, restaurant_phone) VALUES (?, ?, ?)";
$params = array("Burger K", "B Jalil", "03-11223344"); 

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false) {
  die( print_r( sqlsrv_errors(), true));
  }
?>
