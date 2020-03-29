<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Questionário </title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/styleindex.css">
<link rel="stylesheet" type="text/css" href="css/styleheader.css">
<link rel="stylesheet" type="text/css" href="css/stylequestion.css">
<link rel="stylesheet" type="text/css" href="css/stylefooter.css">

<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/estilologin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' id='wp-block-library-css'  href='https://mdbootstrap.com/wp-includes/css/dist/block-library/style.min.css?ver=5.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-style-css'  href='https://mdbootstrap.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=2.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='https://mdbootstrap.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1.4' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='wsl-widget-css'  href='https://mdbootstrap.com/wp-content/plugins/wordpress-social-login/assets/css/style.css?ver=5.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='compiled.css-css'  href='https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.8.10.min.css?ver=4.8.10' type='text/css' media='all' />

</head>
<body style="background-color: #F9ECD1">
<header style="position: relative">

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <br>
    <br>
    <center>
    <fieldset id="question1">
<?php

    require "controllers/conecta.php";


    $resultado = mysqli_query($conexao,'select * from Ranking order by quantidade_acertos desc');

    echo "<center>";
    echo "<h1><font face='arial'> RANKING </font> </h1>";

    while($registro = mysqli_fetch_array($resultado)){
        echo "<center>";
        echo "<b> " .$registro[1]. "</b> Acertos";
        echo "<br>";
        echo "<br>";
    }

?>
 <a href="index2.php"><button id="finish" type="submit" >Voltar</button></a>
</fieldset>

</body>
</html>
