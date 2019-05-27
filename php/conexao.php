<?php 

$banco = "bancoteste";
$usuario = "root";
$senha = "";
$host = "localhost";


$conexao = mysqli_connect($host,$usuario,$senha);
if (!($conexao)){
    print("<script language=JavaScript>
          alert(\"Não foi possível conectar ao MySQL.\");
          </script>");
	echo $conexao;
    exit;
}


$db = mysqli_select_db($conexao, $banco) or
    die("<script language=JavaScript>alert(\"Banco inexistente.\");</script>");    

mysqli_set_charset($conexao,'utf8');

?>
