<?php
include('views/blades/header.php');
include('controllers/funcoes.php');
?>

<div class="text-bg-light ">
    <ul class="nav nav-tabs justify-content-center align-items-center pt-3">
        <li class="nav-item">
           <button  class="btn btn-secondary btn-sm mb-3"> <a class="nav-link link-light" href="views/cadastro.php">Cadastro</a></button>&nbsp;&nbsp;
        </li>
        <li class="nav-item">
            <form class="d-flex" action='index.php' method='post'>
                <div class="input-group mb-3">
                    <input type='text' name='buscar' class="form-control border-secondary rounded" placeholder="Buscar"
                        aria-label="Buscar" aria-describedby="button-addon2">
                    <input type='submit' class="btn btn-outline-dark btn-sm" id='button-addon2' value='Buscar'>
                </div>
            </form>
        </li>
    </ul>
</div>
<br>
<div class="text-bg-light container text-center rounded mt-5 pt-4 pb-3 ps-5 pe-5">
    <div class='row'>
        <div class='col'>
        </div>
    </div>
    <?php
    mostrarDados();
    include('views/blades/footer.php');
    ?>
