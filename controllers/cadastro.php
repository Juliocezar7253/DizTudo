
   <?php

      require "conecta.php";

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $data = $_POST['data'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $gravando =  "insert into cadastro(nome,telefone,data_nasc,email,senha) values('$nome','$telefone','$data','$email','$senha')";


        $resultado = mysqli_query($conexao, $gravando);

        if($resultado==false){
           ?>
            <script>
            alert("Erro no cadastro")
            window.location.replace("../cadastroaluno.html");
            </script>
            <?php
            return;
        }
        else{
            setcookie("nome",$nome);
            setcookie("email",$email);
            header("Location: ../index.html");
            mysqli_close($conexao);
        }

   ?>

        <script>
        alert("Obrigado pelo seu cadastro")
        window.location.replace("../index.html");
        </script>

     
