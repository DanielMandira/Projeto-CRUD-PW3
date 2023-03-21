<?php
include('../models/conexao.php');
mysqli_query($conexao, "DELETE FROM alunos WHERE codigos = ".$_GET["ida"]);
header("location:../");
?>