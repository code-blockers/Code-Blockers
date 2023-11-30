<?php
$conexao = mysqli_connect("localhost", "root", "", "7ssoqueedaora");
$var = 'SELECT * FROM produto WHERE modelo = "infantil"'; 
$query = mysqli_query($conexao,$var);

//while(){}
//foreach {}
//for
?>