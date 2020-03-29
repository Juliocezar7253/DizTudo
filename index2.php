<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" type="text/css" href="css/styleindex.css">
<link rel="stylesheet" type="text/css" href="css/styleheader.css">
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
<style>
.img2-resp {
	display: block;
	max-width: 100%;
	height: auto;
  z-index: 1;
  }
</style>
<body>
<header>
<table>
<tr>
<td width="60%" style="vertical-align:top"><a href="index2.php" class="logodrop"><img src="images/Logo.png" width="200px"></a></td>
<td><a href="Ranking.php"><button class="btndrop"><font face="Sans" class="txtshadow" size="4">Ranking</font></button></a></td>
<td><a href="questionario.html"><button class="btndrop"><font face="Sans" class="txtshadow" size="4">Questionário</font></button></a></td>
<td><a href="menu_redacao.php"><button class="btndrop"><font face="Sans" class="txtshadow" size="4">Redação</font></button></a></td>
<td><a href="menu_gramatica.php"><button class="btndrop"><font face="Sans" class="txtshadow" size="4">Gramática</font></button></a></td>
<td><a href="menu_atualidades.php"><button class="btndrop"><font face="Sans" class="txtshadow" size="4">Atualidades</font></button></a></td>
<td style="vertical-align:middle">
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<a href="Perfil/tela.php"><button class="btncad"><font face="Sans" size="4"><?php

require "controllers/conecta.php";

    $email_c = $_COOKIE['email'];

    $consulta = "SELECT * FROM cadastro WHERE email='$email_c'";

    $resultado = mysqli_query($conexao, $consulta);
    $row = mysqli_fetch_row($resultado);

    echo "$row[1]";

?>
</font></button></a>
</td>
</tr>
</table>
</header>
<img src="images/ImgPagIni2.png" class="img2-resp">
<div class="topicos">
<br><br>

<!-- Topicos -->

<h1 align="center"><font face="Sans"><b>Tópicos</b></font></h1><br>
<table align="center" width="100%">
<td width="33.3%" align="center" style="padding: 3%">
<div class="container">
<map name="map1">
<area shape="circle" coords="502,499,498" href="menu_redacao.html" id="redacao">
<img src="images/RedacaoLogo.png" class="logo" usemap="#map1">
<div class="middle">
<div class="text">Redação</div>
</div>
</map>
</div>
</td>
<td width="33.3%" align="center" style="padding: 3%">
<div class="container">
<map name="map2">
<area shape="circle" coords="502,499,498" href="menu_gramatica.html" id="gramatica">
<img src="images/GramLogo.png" class="logo" usemap="#map2">
<div class="middle">
<div class="text">Gramática</div>
</div>
</map>
</div>
</td>
<td width="33.3%" align="center" style="padding: 3%">
<div class="container">
<map name="map3">
<area shape="circle" coords="502,499,498" href="menu_gramatica.html" id="atualidades">
<img src="images/AtualLogo.png" class="logo" usemap="#map3">
<div class="middle">
<div class="text">Atualidades</div>
</div>
</map>
</div>
</td>
</table>
</div>
<div class="sec1">
<h1 align="center"><font face="Sans"><b>Sobre Nós</b></font></h1><br>
<p align="center"><font face="Sans" size="5">O Diztudo foi desenvolvido em Agosto/2019 por estudantes do 2º ETIM de Informática da ETEC Jorge Street, com apenas um objetivo: ajudar os estudantes para o ENEM na matéria de Língua Portuguesa, talvez a mais difícil na área de humanas no ENEM</font></p>
<br><br>
<p align="center"><font face="Sans" size="5"><i>Diztudo. Por estudantes para estudantes</i></font></p>
</div>
    <footer class="rodape" style="margin-top: 0px !important; background-image: url(images/footerbackground.png)">
      <table align="center" style="border-collapse: separate !important">
        <ul>
          <td>
            <li class="miniMenu"><a href="menu_gramatica.php">Gramática</a></li>
          </td>
          <td>
            <li class="miniMenu"><a href="menu_atualidades.php">Atualidades</a></li>
          </td>
          <td>
            <li class="miniMenu"><a href="menu_redacao.php">Redação</a></li>
          </td>
        </ul>
        </table>
        <table class="nathalia">
        <td width="20%" rowspan="2" align="center">
          <a href="index2.php"><img src="images/Logo.png" width="400px"></a>
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="image-map-resizer-master/js/imageMapResizer.min.js"></script>
  <script type="text/javascript">

    $('map').imageMapResize();

  </script>
</body>
</html>
