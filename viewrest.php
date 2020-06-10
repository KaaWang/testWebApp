<?php
$connectionInfo = array("UID" => "apuadmin", "pwd" => "Stormer32@", 
"Database" => "WebApplicationDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:webapplicationtp043517.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if(!$conn)
{
die("Error connection: ".sqlsrv_errors());
}
echo "Connection to DB: Success!";

?>
