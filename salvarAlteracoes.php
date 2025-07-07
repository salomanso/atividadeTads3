<?php
include("conexaoBD.php");


if(isset($_POST['idColab']) && isset($_POST['nomeColab']) && isset($_POST['emailColab']) && isset($_POST['funcaoColab']) && isset($_POST['status']))
{
    $idColab = $_POST['idColab'];
    $nomeColab = $_POST['nomeColab'];
    $emailColab = $_POST['emailColab'];
    $funcaoColab = $_POST['funcaoColab'];
    $status = $_POST['status'];


    $edit = "UPDATE colaboradores SET nomeColab = '$nomeColab', emailColab = '$emailColab', funcaoColab = '$funcaoColab', status = '$status' WHERE idColab = $idColab";


    if(mysqli_query($conn, $edit))
    {
        echo "<div class='alert alert-danger text-center'> Atualizado!</div>";
        header("Location: listagemColab.php");
    }
    else
    {
        echo "<div class='alert alert-danger text-center'> Atualizado!</div>";
    }


    mysqli_close($conn);
}
else
{
    echo "<div class='alert alert-danger text-center'>Dados incompletos.</div>";
}
?>



