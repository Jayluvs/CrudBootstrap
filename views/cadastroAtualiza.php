<?php include("../models/conexao.php") ?>
<?php include("blades/header.php") ?>

<?php
$varIdAluno = $_GET["id_aluno"];
$query = mysqli_query($conexao, "SELECT * FROM alunos WHERE codigo = $varIdAluno");
while($exibe = mysqli_fetch_array($query)){
?>

<div class="container bg-white mt-5 pt-3 ps-3 pb-3 pe-3 rounded-3 shadow-lg">
<h3 class="pb-5">Atualizar</h3>
<form action="../controllers/atualizar.php" method="post">

    <input type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>">

    <label class="form-label">Nome: </label>
    <input class="form-control" type="text" name="alunoNome" value="<?php echo $exibe[1] ?>"><br>

    <label class="form-label">Cidade: </label>
    <input class="form-control" type="text" name="alunoCidade" value="<?php echo $exibe[2] ?>"><br>

    <label class="form-label">Sexo: </label>
    <br>

    <input type="radio" id="m" name="alunoSexo" value="M" <?php echo ($exibe[3]=='M'?'checked':'') ?>>
    <label for="m"> Masculino </label>
    <input type="radio" id="f" name="alunoSexo" value="F" <?php echo ($exibe[3]=='F'?'checked':'') ?>>
    <label for="f"> Feminino </label>

    <br>
    <input class="btn btn-success mt-3" type="submit" value="Atualizar">

</form>
</div>

<?php } ?>
    
<?php include("blades/footer.php") ?>