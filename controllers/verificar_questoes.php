<?php

    require "conecta.php";

    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];

    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];
    $q9 = $_POST['q9'];
    $q10 = $_POST['q10'];

    $q11 = $_POST['q11'];
    $q12 = $_POST['q12'];
    $q13 = $_POST['q13'];
    $q14 = $_POST['q14'];
    $q15 = $_POST['q15'];

    $q16 = $_POST['q16'];
    $q17 = $_POST['q17'];
    $q18 = $_POST['q18'];
    $q19 = $_POST['q19'];
    $q20 = $_POST['q20'];

    $quantidade = 0;

    for($i = 0; $i<1; $i++){

        if($q1 == 'q1a4'){
            $quantidade = $quantidade+1;
        }
        if($q2 == 'q2a5'){
            $quantidade = $quantidade+1;
        }
        if($q3 == 'q3a1'){
            $quantidade = $quantidade+1;
        }
        if($q4 == 'q4a3'){
            $quantidade = $quantidade+1;
        }
        if($q5 == 'q5a2'){
            $quantidade = $quantidade+1;
        }

        if($q6 == 'q6a4'){
            $quantidade = $quantidade+1;
        }
        if($q7 == 'q7a3'){
             $quantidade = $quantidade+1;
        }
        if($q8 == 'q8a4'){
            $quantidade = $quantidade+1;
        }
        if($q9 == 'q9a4'){
            $quantidade = $quantidade+1;
        }
        if($q10 == 'q10a5'){
            $quantidade = $quantidade+1;
        }

        if($q11 == 'q11a1'){
            $quantidade = $quantidade+1;
        }
        if($q12 == 'q12a4'){
            $quantidade = $quantidade+1;
        }
        if($q13 == 'q13a2'){
            $quantidade = $quantidade+1;
        }
        if($q14 == 'q14a1'){
            $quantidade = $quantidade+1;
        }
        if($q15 == 'q15a4'){
            $quantidade = $quantidade+1;
        }

        if($q16 == 'q16a2'){
            $quantidade = $quantidade+1;
        }
        if($q17 == 'q17a5'){
            $quantidade = $quantidade+1;
        }
        if($q18 == 'q18a4'){
            $quantidade = $quantidade+1;
        }
        if($q19 == 'q19a4'){
            $quantidade = $quantidade+1;
        }
        if($q20 == 'q20a2'){
            $quantidade = $quantidade+1;
        }

        if($quantidade<14){
           ?>
           <script>
            alert("Você acertou <?php echo "$quantidade"; ?> questões, revise os conteúdos que você errou e tente novamente");
            window.location.replace("../index2.php");
            </script>
            <?php
        } else {
            ?>
            <script>
            alert("Você acertou <?php echo "$quantidade";?> questões, parabéns. Mas nunca se esqueça o estudo é essencial!!");
            window.location.replace("../index2.php");
            </script>
            <?php
        }

        $sql="insert into Ranking(quantidade_acertos) values('$quantidade')";
        $r=mysqli_query($conexao,$sql);
    }

?>
