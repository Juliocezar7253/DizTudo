<?php

    require "conecta.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $consulta = "SELECT * FROM cadastro WHERE email='$email' && senha='$senha'";

    $resultado = mysqli_query($conexao, $consulta);
    $row = mysqli_fetch_row($resultado);

    if($row[4] == $email && $row[5] == $senha){

        ?>
        <script>
        alert("Acesso permitido")
        window.location.replace("../index2.html");
        </script>
       <?php
        
    }else {
        ?>
        <script>
        alert("Acesso negado")
        window.location.replace("../index2.html");
        </script>
       <?php
    }
      ?>
