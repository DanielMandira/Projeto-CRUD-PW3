<?php
function mostrarDados()
{
    include('../models/conexao.php');
    if (empty($_POST['buscar'])) {
        echo 'Digite um nome';
    } else {
        $varBusca = $_POST['buscar'];

        echo "<div class='row '>
         <table class='table table-primary bordered table-hover border-secondary rounded table-striped-columns'>
             <thead>
                 <tr>
                     <th scope='col'>Frase</th>
                     <th scope='col'>Editar</th>
                     <th scope='col'>Excluir</th>
                 </tr>
             </thead>";
        $query = mysqli_query($conexao, "SELECT * from  alunos where nome like '%$varBusca%'");
        while ($exibe = mysqli_fetch_array($query)) {
            $varSexo = ($exibe[3] == 'Masculino') ? "o" : "a";
            echo "<tdoby> <tr>";
            echo "<td>" . strtoupper($varSexo) . " alun$varSexo <b>" . $exibe[1] . "</b> mora na cidade de " . $exibe[2] . "</td> <td><button  type='button' class='btn btn-light'><a href='views/cadastroAtualiza.php?ida=" . $exibe[0] . "' class='link-sucess'>Editar</a></button></td> <td><button  type='button' class='btn btn-light'> <a href='controllers/deletarAluno.php?ida=" . $exibe[0] . "'class='link-danger'>Excluir</a></button></td>";
            echo "</tr> </tbody>";
        }
        echo "</table>";
    }
    echo "</div>
     </div>";
}
function atualizarCadastro()
{
    include('../models/conexao.php');
    $varIda = $_GET["ida"];
    $query = mysqli_query($conexao, "SELECT * FROM alunos where codigos='$varIda'");
    while ($exibe = mysqli_fetch_array($query)) {

        echo "
         <div class='mb-3'>
         <div class='text-bg-light rounded mt-5 pt-5 pb-5 ps-5 pe-5 container text-center'>
         <form action='../controllers/atualizarAluno.php' method='post'>
             <input type='hidden' name='alunoIda' value='" . $exibe[0] . "'>
             <div class='input-group mb-3'>
                 <label class='text-bg-secondary input-group-text border-secondary' id='Nome'>Nome:</label>
                 <input type='text' class=' border-secondary rounded form-control' aria-label='Nome' aria-describedby='Nome' name='alunoNome'
                     class='form-control text-center form-text' value='" . $exibe[1] . "'><br>
             </div>
             <div class='input-group mb-3'>
                 <label class=' text-bg-secondary input-group-text' id='Cidade'>Cidade:</label>
                 <input type='text' name='alunoCidade' class=' border-secondary rounded form-control' aria-label='Cidade' aria-describedby='Cidade'
                     value='" . $exibe[2] . "'><br>
             </div>
             <label class=' fs-5 form-label'>Sexo:</label><br>";
        $varSexo = ($exibe[3] == 'Masculino') ? '
        <input class="form-check-input border-dark fs-5"  type="radio" value="Masculino" name="alunoSexo" checked/>
        <label class="radio-inline">Masculino</label><br>
        <input class="form-check-input border-dark fs-5"  type="radio" value="Feminino" name="alunoSexo"/> 
        <label class="radio-inline">Feminino&nbsp;</label> <br>'
            :
            '<input class="form-check-input border-dark fs-5"  type="radio"  value="Masculino" name="alunoSexo"/>
        <label class="radio-inline">Masculino</label><br>
        <input class="form-check-input border-dark fs-5"  type="radio"  value="Feminino" name="alunoSexo" checked/> 
        <label class="radio-inline">Feminino&nbsp;</label><br>';
        echo $varSexo;
        echo "<hr>
             <input type='submit' class='btn btn-outline-secondary btn-lg' value='Atualizar'>
         </form>";
    }
}
?>
