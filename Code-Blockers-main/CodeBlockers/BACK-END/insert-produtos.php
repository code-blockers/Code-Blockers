<?php
$conexao = mysqli_connect("localhost", "root", "", "7ssoqueedaora");
$var = 'SELECT * FROM produto WHERE modelo = "air jordan"'; 
$query = mysqli_query($conexao,$var);

//while(){}
//foreach {}
//for
?>