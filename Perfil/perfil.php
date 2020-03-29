<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/styleindex.css">
<link rel="stylesheet" type="text/css" href="../css/styleheader.css">
<link rel="stylesheet" type="text/css" href="../css/stylefooter.css">
<link rel="stylesheet" type="text/css" href="../css/styleperfil.css">
<link rel="stylesheet" type="text/css" href="estilos.css">


<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../css/estilologin.css">
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
<body style="background-color: #DCD0C0 !important;">
<header>
<table>
<tr>
<td width="60%" style="vertical-align:top"><a href="../index2.php" class="logodrop"><img src="../images/Logo.png" width="200px"></a></td>
<td><a href="../Ranking.php"><button class="btndrop"><font face="Sans" class="txtshadow" size="4">Ranking</font></button></a></td>
<td><a href="../questionario.html"><button class="btndrop"><font face="Sans" class="txtshadow" size="4">Questionário</font></button></a></td>
<td><a href="../menu_redacao.php"><button class="btndrop"><font face="Sans" class="txtshadow" size="4">Redação</font></button></a></td>
<td><a href="../menu_gramatica.php"><button class="btndrop"><font face="Sans" class="txtshadow" size="4">Gramática</font></button></a></td>
<td><a href="../menu_atualidades.php"><button class="btndrop"><font face="Sans" class="txtshadow" size="4">Atualidades</font></button></a></td>
<td style="vertical-align:middle">
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  
  
<a href="tela.php" ><button class="btncad"><font face="Sans" size="4"><?php

require "../controllers/conecta.php";

    $email_c = $_COOKIE['email'];

    $consulta = "SELECT * FROM cadastro WHERE email='$email_c'";

    $resultado = mysqli_query($conexao, $consulta);
    $row = mysqli_fetch_row($resultado);

    echo "$row[1]";

?></font></button></a>
</td>
</tr>
</table>
</header>
<br><br><br><br><br>
<center>
<div class="box">
  <center>
  <?php

require "../controllers/conecta.php";

$arquivo = $_FILES['arquivo']['name'];
$ft = $_FILES['arquivo']['error'];

$_UP['pasta'] = "../users/";

$_UP['tamanho'] = 1024*1024*100;

$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');

$_UP['renomeia'] = false;

$_UP['erros'][0] = 'não houve erros';
$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
$_UP['erros'][2] = 'O tamanho do arquivo ultrapassa 5mb';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

if($ft != 0){
    die("Não foi possivel fazer o upload");
    exit;
}

$extensao = explode('.', $arquivo);
$extensao = strtolower(array_pop($extensao));
if(array_search($extensao, $_UP['extensoes'])=== false){
    echo "Extensão da imagem inválida";

} else if($_UP['tamanho'] < $_FILES['arquivo']['size']){
    echo "Arquivo muito grande";
} else {

    if($_UP['renomeia'] == true){
        $nome_final = time(). '.jpg';
    } else {
        $nome_final = $_FILES['arquivo']['name'];

    } if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
        $query = mysqli_query($conexao, "Insert into cadastro(foto) values ('$nome_final')");

        $r = "select * from cadastro where foto='$nome_final'";

        $result = mysqli_query($conexao,$r);

        $row = mysqli_fetch_row($result);
        echo "<center>";
        echo "<img src='../users/$row[6]' alt='' width='200px' height='200px'></img>";

    }

}

?>
  <center>
      <h1><?php
      require "../controllers/conecta.php";
      $email_c = $_COOKIE['email'];
      $consulta = "SELECT * FROM cadastro WHERE email='$email_c'";
      $resultado = mysqli_query($conexao, $consulta);
      $row = mysqli_fetch_row($resultado);
      echo "$row[1]";
      ?></h1>

      <p class="title"> <b> E-mail:</b> <?php
      require "../controllers/conecta.php";
      $email_c = $_COOKIE['email'];
      $consulta = "SELECT * FROM cadastro WHERE email='$email_c'";
      $resultado = mysqli_query($conexao, $consulta);
      $row = mysqli_fetch_row($resultado);
      echo "$row[4]";
      ?> </p>

      <p> <b> Celular:</b> <?php
      require "../controllers/conecta.php";
      $email_c = $_COOKIE['email'];
      $consulta = "SELECT * FROM cadastro WHERE email='$email_c'";
      $resultado = mysqli_query($conexao, $consulta);
      $row = mysqli_fetch_row($resultado);
      echo "$row[2]";
      ?> </p>

    <p> <b> Idade:</b> <?php
      require "../controllers/conecta.php";
      $email_c = $_COOKIE['email'];
      $consulta = "SELECT TIMESTAMPDIFF (YEAR,data_nasc,CURDATE()) from cadastro where email='$email_c'";
      $resultado = mysqli_query($conexao, $consulta);
      $fetch = mysqli_fetch_row($resultado);
      echo "$fetch[0]";
      ?> </p>

 

  
  <div style="margin: 24px 0;">    
  </div>
  <p><a href="../index2.php"><button class="btn btn-outline-dark">Menu</button></a></p>
  <p><a href="../index.html"><button class="btn btn-outline-dark">Sair</button></a></p>
</div>
<br><br><br>
    <footer class="rodape" style="margin-top: 0px !important; background-image: url(images/footerbackground.png)">
      <table align="center" style="border-collapse: separate !important">
        <ul>
          <td>
            <li class="miniMenu"><a href="../menu_gramatica.php">Gramática</a></li>
          </td>
          <td>
            <li class="miniMenu"><a href="../menu_atualidades.php">Atualidades</a></li>
          </td>
          <td>
            <li class="miniMenu"><a href="../menu_redacao.php">Redação</a></li>
          </td>
        </ul>
        </table>
        <table class="nathalia">
        <td width="20%" rowspan="2" align="center">
          <a href="../index2.php"><img src="../images/Logo.png" width="400px"></a>
        </td>
        <td width="53%"></td>
        <td width="27%">
          <p align="center">Para entrar em contato conosco:</p>
          <p align="center" style="font-weight: bold;">excuteejs@gmail.com
            <hr id="linha">
          </p>
        </td>
      </table>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>