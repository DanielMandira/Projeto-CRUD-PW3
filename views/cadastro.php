<?php
include('../views/blades/header.php');
?>
<div class="text-bg-light container text-center rounded mt-5 pt-5 pb-5 ps-5 pe-5">

    <form action="../controllers/cadastrarAluno.php" method="post">
        <div class='input-group mb-3'>
            <span class="input-group-text text-bg-secondary rounded" id="Nome">Nome:</span>
            <input type="text" class="form-control border-secondary rounded" aria-label="Nome" aria-describedby="Nome" name="alunoNome"><br>
        </div>
        <div class='input-group mb-3'>
            <span class="input-group-text text-bg-secondary rounded" id='cidade'>Cidade:</span>
            <input type="text" class="form-control border-secondary rounded" aria-label="cidade" aria-describedby="cidade" name="alunoCidade"><br>
        </div>
        <div>
            <label class='fs-5'>Sexo:</label><br>
            <input class='form-check-input border-dark fs-5' type="radio" value="Masculino" name="alunoSexo"/>
            <label class='radio-inline'>Masculino</label><br>
            <input class='form-check-input border-dark fs-5'  type="radio" value="Feminino" name="alunoSexo"/> 
            <label class='radio-inline'>Feminino&nbsp;</label> <br>
            <input type="submit" class="btn btn-outline-secondary btn-lg" value="Cadastrar"/>
        </div>
    </form>
</div>
<?php
include('../views/blades/footer.php');
?>