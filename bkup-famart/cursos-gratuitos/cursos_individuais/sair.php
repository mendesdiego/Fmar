<?php
ob_start();
//INICIALIZA A SESS�O 
session_start(); 

//DESTR�I AS SESSOES
unset($_SESSION[log]); 
unset($_SESSION[validacao]);
session_destroy(); 

//REDIRECIONA PARA A TELA DE LOGIN 
header("Location: index.php"); 
?> 
