<?php
include("../models/conexao.php");
mysqli_query($conexao, "UPDATE alunos SET nome='".$_POST['alunoNome']."', cidade='".$_POST['alunoCidade']."', sexo='".$_POST['alunoSexo']."' where codigos='".$_POST["alunoIda"]."'");
header("location:../");
?>