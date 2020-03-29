<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/menu_Astyle.css">
	<link rel="stylesheet" type="text/css" href="css/styleheader.css">
  <link rel="stylesheet" type="text/css" href="css/stylefooter.css">

	<title>Atualidades</title>

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
  
  
<a href="Perfil/perfil.php" ><button class="btncad"><font face="Sans" size="4"><?php

require "controllers/conecta.php";

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
<center>
<body class="corpo">
  
        <!-- Definição -->

  <div class="Descricao">
    <br><br><br><br><br><br><br>
    <label>Atualidades</label>
		<table class="LAL">
    <td>
      <img src="images/AtualLogo.png" class="imgLogo">
    </td>  
    <td>
      <p>
         Esteja informado sobre tudo o
        que está acontecendo ao redor
        do mundo atualmente, nessa
        sessão você terá acesso a fontes
        de informação mais confiáveis.
      </p>
    </td>
    </table>
	</div>

      <div id="container">
    <br><br>

    <table id="bigTable" style="margin-bottom: 4%">

              <!-- Noticias BR -->
       <tr>       
      <td rowspan="3">
        <label class="tema"> Notícias  Atuais Brasileiras</label>
        <table id="potato">
     <td class="topico"><a href="https://pt.wikipedia.org/wiki/Reforma_trabalhista_no_Brasil_em_2017"><div>
        <h3><img src="images/iconNews.png"  class="imgAS"> Reforma Trabalhista </h3>
      </div></a></td>
      <tr>
      <td class="topico"><a href="https://www1.folha.uol.com.br/cotidiano/2017/10/1931609-brasil-registrou-135-estupros-e-12-assassinatos-de-mulheres-por-dia-em-2016.shtml"><div>
        <h3><img src="images/iconNews.png"  class="imgAS"> Questão do Estupro </h3>
      </div></a></td>
      <tr>
      <td class="topico"><a href="https://canalcienciascriminais.jusbrasil.com.br/artigos/413681359/sistema-prisional-brasileiro-e-direitos-humanos"><div>
        <h3><img src="images/iconNews.png"  class="imgAS"> Questão do Sistema Prisional Brasileiro </h3>
      </div></a></td>
      <tr>
      <td class="topico"><a href="https://brasilescola.uol.com.br/educacao/sistema-cotas-racial.htm"><div>
        <h3><img src="images/iconNews.png"  class="imgAS"> Questão das Cotas </h3>
      </div></a></td>
      <tr>
      <td class="topico"><a href="https://noticias.uol.com.br/meio-ambiente/ultimas-noticias/redacao/2019/08/21/o-que-esta-acontecendo-na-amazonia-ambientalistas-explicam.htm"><div>
        <h3><img src="images/iconNews.png"  class="imgAS"> Queimadas na Amazônia </h3>
      </div></a></td>
      <tr>
      <td class="topico"><a href="https://pt.wikipedia.org/wiki/Assassinato_de_Marielle_Franco"><div>
        <h3><img src="images/iconNews.png"  class="imgAS"> Marielle Franco e a Questão Racial no Brasil  </h3>
      </div></a></td>
     <tr>
      <td class="topico"><a href="https://theintercept.com/brasil/"><div>
        <h3><img src="images/iconNews.png"  class="imgAS"> Caso "Vaza-Jato" e a Homofobia no Brasil </h3>
      </div></a></td>
    </table>
      </td>
          
            <!--  Notícias World -->

          <td>
        <label class="tema"> Notícias Atuais Mundiais </label>
        <table id="potato">
      <td class="topico"><a href="https://mundoeducacao.bol.uol.com.br/geografia/aquecimento-global.htm"><div>
        <h3><img src="images/iconNews.png"  class="imgAS"> Aquecimento Global </h3>
      </div></a></td>
      <tr>
      <td class="topico"><a href="https://exame.abril.com.br/mundo/quem-e-guaido-o-jovem-que-tem-papel-crucial-para-a-oposicao-na-venezuela/"><div>
        <h3><img src="images/iconNews.png"  class="imgAS"> Juan Guaidó e o Golpe na Venezuela </h3>
      </div></a></td>
       <tr>
      <td class="topico"><a href="https://www.huffpostbrasil.com/entry/trump-trade-war-china_n_5d5d53d9e4b0d043dd73cb23"><div>
        <h3><img src="images/iconNews.png"  class="imgAS"> ”Trump Trade Wars” </h3>
      </div></a></td>
    </table>
          </td>
        </tr>

            <!-- Sites  -->

          <tr>
          <td>
            <label class="tema"> Recomendações de Sites </label>
            <table id="potato">
      <td class="topico"><a href="https://www.politize.com.br/atualidades-2019/"><div>
        <h3><img src="images/iconNews.png"  class="imgAS"> Politize </h3>
      </div></a></td>
      <tr>
      <td class="topico"><a href="https://guiadoestudante.abril.com.br/atualidades/"><div>
        <h3><img src="images/iconNews.png"  class="imgAS"> Guia do Estudante </h3>
      </div></a></td>
       <tr>
      <td class="topico"><a href="https://www.stoodi.com.br/atualidades/"><div>
        <h3><img src="images/iconNews.png"  class="imgAS"> Stoodi </h3>
      </div></a></td>
    </table>
          </td>
        </tr>
      </table>

      <br><br><hr class="linear"><br><br>

          <!-- Video Aula -->

       <label class="textVideo">Vídeo em Destaque!!!</label>
    <br><br><br>
    <iframe width="560" height="315" src="https://www.youtube.com/watch?v=TGiZQJlkebE" frameborder="0" 
    allow="accelerometer;autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin-bottom: 5%"></iframe>
      </div>



      <!--  Rodapé -->

    <footer class="rodape" style="background-image: url(./images/footerbackground.png)">
      <table>
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
        <td  rowspan="2" align="center">
          <a href="index2.php"><img src="images/Logo.png" width="350px"></a>
        </td>
        <td width="55%"></td>
        <td>
          <p>Para entrar em contato conosco:</p>
          <p align="center" style="font-weight: bold;">excuteejs@gmail.com
            <hr id="linha">
          </p>
        </td>
      </table>
</footer>
</center>
</body>
</html>