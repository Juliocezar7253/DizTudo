<?php

    require "controllers/conecta.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $consulta = "SELECT * FROM cadastro WHERE email='$email' && senha='$senha'";

    $resultado = mysqli_query($conexao, $consulta);
    $row = mysqli_fetch_row($resultado);

    if($row[4] == $email && $row[5] == $senha){
        setcookie("email",$email);
        header("Location:index2.php");

        ?>
        <script>
        alert("Acesso permitido")
        </script>

       <?php

    }else {
        ?>
        <script>
        alert("Acesso negado")
        window.location.replace("index.html");
        </script>
       <?php

    }
      ?>
