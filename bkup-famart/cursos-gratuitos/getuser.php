<?php 
require ('conexao.php');
$q = intval($_GET['q']);


$sql="SELECT * FROM cursos_moodle WHERE IdCurso = '".$q."'";
$result = mysql_query($sql);

while ($linha=mysql_fetch_array($result)){
   
    include("cursos_individuais/".$linha['NomeGrade']);

}
