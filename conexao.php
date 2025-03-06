<?php 
echo '<pre>';
// $host= 'localhost:';
// $user= 'u283879542_gabriel_m';
// $pass= 'Gabriel_m@tipi02';
// $db='u283879542_gabriel_m';

$host= 'localhost';
$user= 'root';
$pass= '';
$db='db_teste';

$mysqli= new mysqli($host, $user, $pass, $db);

// function foi(){
// global $mysqli;
// $obj= $mysqli->query('SELECT * FROM teste where id_teste= 1');
// $resultado= $obj->fetch_assoc();
// return $resultado;
// }
// var_export(foi());



echo '</pre>';



