<?php
$conn = mysqli_connect("localhost", "root", "seguro_", "cadastro");
$query = 'SELECT * FROM franqueados';
$consulta = mysqli_query($conn, $query);