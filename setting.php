<?php
// dsn datasource name 
$dsn = 'mysql:host=localhost;dbname=blogin';
// 
$user = 'root';
$pass = '';
try{
// PDO class
$db = new  PDO($dsn,$user,$pass);
// PDO Has attrabutes 
// Has Drivers
// has oppetion you can modify it
echo 'you are connected';
}
catch(PDOException $e){
echo 'Failed' .' '. $e->getMessage();
}
?>