<?php
$link=mysqli_connect("localhost","root","") or die ("Mysql não encntrado");
mysqli_select_db($link,"sanquim") or die ("Banco de dados não encontrado")
?>