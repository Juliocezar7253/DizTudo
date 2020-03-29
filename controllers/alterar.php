<?php

    require "conecta.php";

    $email = $_POST['email'];
    $senha_nova = $_POST['senha_nova'];

    $consulta = "UPDATE cadastro set senha='$senha_nova' where email='$email'";

    $resultado = mysqli_query($conexao, $consulta);
?>

    <?php

    header("Location: ../index.html");

       ?>
