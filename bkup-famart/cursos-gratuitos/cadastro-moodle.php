<?php 
require('conexao.php');

if (array_key_exists('cadastro-moodle', $_POST)!=""){

    $usuario    =   $_POST['usuario'];
    $senha      =   $_POST['senha'];
    $nome       =   $_POST['nome'];
    $sobrenome  =   $_POST['sobrenome'];
    $email      =   $_POST['email'];
    $cidade     =   $_POST['cidade'];
    $pais       =   $_POST['pais'];
    $rg         =   $_POST['rg'];
    $cpf        =   $_POST['cpf'];
    $telefone   =   $_POST['telefone'];
    $celular    =   $_POST['celular'];

    $cript=hash('sha512',$senha);


    $query= "INSERT INTO mdl_user
    (username,password,firstname,lastname,email,city,country,phone1,phone2)
    VALUES ('$usuario','$cript','$nome','$sobrenome','$email','$cidade','$pais','$telefone','$celular')";
    $sql=mysql_query($query)or die (mysql_error());
    $id_user = mysql_insert_id();



 $query3= "INSERT INTO mdl_user_info_data (userid,fieldid, data)
 VALUES('$id_user','1','$rg')";
 $sql=mysql_query($query3)or die (mysql_error());

 $query4= "INSERT INTO mdl_user_info_data (userid,fieldid, data)
 VALUES('$id_user','2','$cpf')";
 $sql=mysql_query($query4)or die (mysql_error());

 $query5= "INSERT INTO mdl_user_info_data (userid,fieldid, data)
 VALUES('$id_user','3','$telefone')";
 $sql=mysql_query($query5)or die (mysql_error());

  $query6= "INSERT INTO mdl_user_info_data (userid,fieldid, data)
 VALUES('$id_user','4','$celular')";
 $sql=mysql_query($query6)or die (mysql_error());



// RG E CPF NAO ACHEI NA TABELA!!!!

    
}

?>