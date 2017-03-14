<?php
$serverName = "mssql5.gear.host";

$connectionInfo = array( "Database"=>"coll","UID"="coll","PWD"="@shboy123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
$st= "select name from login where password='123'";
$mt=sqlsrv_query($conn,$st);

if($mt==false)
{
 echo "Failed to retrieve.<br />";
     die( print_r( sqlsrv_errors(), true));
}

$row= sqlsrv_fetch_array($mt);
echo "The Corresponding user name is: ".$row['name'];

?>
