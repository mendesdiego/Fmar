<?php 


$host =  'mysql.grupoandrademartins.com.br';
$usuario ='famart_site';
$senha ='fFKLT6yxfzxrBs5C';
$db = 'famart_site';

$con = mysqli_connect($host,$usuario,$senha,$db);
mysqli_set_charset($con,'UTF8');
date_default_timezone_set('America/Sao_Paulo');


?>