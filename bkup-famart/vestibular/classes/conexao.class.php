<?php 


$host =  'mysql.grupoandrademartins.com.br';
$usuario ='gpandrademartins';
$senha ='pZ5QEZpRz6uZ67WU';
$db = 'gpandrademartins';

$con = mysqli_connect($host,$usuario,$senha,$db);
mysqli_set_charset($con,'UTF8');
date_default_timezone_set('America/Sao_Paulo');


?>