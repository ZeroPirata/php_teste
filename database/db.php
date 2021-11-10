<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = 'seguro_';
$banco = 'equivale';
$con = new mysqli($servidor, $usuario, $senha, $banco);
$query = 'SELECT * FROM franqueados';
$consulta = mysqli_query($con, $query);