<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/menu_Gstyle.css">
	<link rel="stylesheet" type="text/css" href="css/styleheader.css">
  <link rel="stylesheet" type="text/css" href="css/stylefooter.css">

	<title>Gramática</title>

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
<body class="corpo">
  <center>
  
        <!-- Definição -->

  <div class="Descricao">
     <br><br><br><br><br><br><br>
    <label>Gramática</label>
		<table class="LAL">
    <td>
      <img src="images/GramLogo.png" class="imgLogo">
    </td>  
    <td>
      <p>
         Saber gramática é um dos requisitos
    básicos para ir bem em qualquer
    prova que fazer, nessa sessão você
    terá acesso a todo o conteúdo
    necessário para se dar bem em
    português.
      </p>
    </td>
    </table>
	</div>
  <div id="container">
    <br><br>

    <table id="bigTable" style="margin-bottom: 4%">

              <!-- Análise Sintática -->
       <tr>       
      <td rowspan="3">
        <label class="tema"> Análise Sintática</label>
        <table id="potato">
      <td class="topico"><a href=""><div>
        <h3><img src="images/iconFrase.png"  class="imgAS"> Frases </h3>
        <p> Frases são formadas por uma ou mais palavras, com ou sem verbo</p>
      </div></a></td>
      <tr>
      <td class="topico"><a href=""><div>
        <h3><img src="images/iconFrase.png"  class="imgAS"> Estrutura de Frases </h3>
        <p>Regras de estrutura frasal a partir de dois elementos essenciais</p>
      </div></a></td>
      <tr>
      <td class="topico"><a href=""><div>
        <h3><img src="images/iconFrase.png"  class="imgAS"> Tipos de Frases </h3>
        <p> Sobre os tipos de frases no quais seus tipos são faqcilmente identificados</p>
      </div></a></td>
      <tr>
      <td class="topico"><a href=""><div>
        <h3><img src="images/iconFrase.png"  class="imgAS"> Oração </h3>
        <p>Oração é todo conjunto linguístico que...</p>
      </div></a></td>
      <tr>
      <td class="topico"><a href=""><div>
        <h3><img src="images/iconFrase.png"  class="imgAS"> Período Simples </h3>
        <p>Sobre orações com período simples</p>
      </div></a></td>
      <tr>
      <td class="topico"><a href=""><div>
        <h3><img src="images/iconFrase.png"  class="imgAS"> Período Composto </h3>
        <p>Sobre orações com período composto</p>
      </div></a></td>
      <tr>
      <td class="topico"><a href=""><div>
        <h3><img src="images/iconFrase.png" class="imgAS" > Termos da Oração </h3>
        <p>Termos que complementam o significado dos...</p>
      </div></a></td>
      <tr>
      <td class="topico"><a href=""><div>
        <h3><img src="images/iconFrase.png" class="imgAS" > Concordância Nominal e Verbal </h3>
        <p>Para textos sem erros!</p>
      </div></a></td>
    </table>
      </td>
          
            <!--  Morfologia -->

          <td>
        <label class="tema"> Morfologia </label>
        <table id="potato">
      <td class="topico"><a href=""><div>
        <h3><img src="images/iconFrase.png"  class="imgAS"> Conjuções </h3>
        <p>As conjunções são palavras que servem para conectar orações.</p>
      </div></a></td>
      <tr>
      <td class="topico"><a href=""><div>
        <h3><img src="images/iconFrase.png"  class="imgAS"> Preposições </h3>
        <p>Preposição é uma palavra que liga dois elementos da oração.</p>
      </div></a></td>
      <tr>
      <td class="topico"><a href=""><div>
        <h3><img src="images/iconFrase.png"  class="imgAS"> Pronome SE </h3>
        <p>Entenda as funções de "se" como pronome </p>
      </div></a></td>
    </table>
          </td>
        </tr>

            <!-- Fonologia  -->

          <tr>
          <td>
            <label class="tema"> Fonologia </label>
            <table id="potato">
      <td class="topico"><a href=""><div>
        <h3><img src="images/iconFrase.png"  class="imgAS"> Pontuação: Vírgula </h3>
        <p>A vírgula tem a função de separar elementos dentro de uma mesma frase.</p>
      </div></a></td>
      <tr>
      <td class="topico"><a href=""><div>
        <h3><img src="images/iconFrase.png"  class="imgAS"> Pontuação: Ponto e vírgula </h3>
        <p>Ponto e vírgula é o sinal de pontuação intermediário entre o ponto e a vírgula.</p>
      </div></a></td>
    </table>
          </td>

          <table id="bigTable">

            <!-- Estilística  -->

          <td>
            <label class="tema"> Estilística </label>
            <table id="potato" style="margin-bottom: 5%">
      <td class="topico"><a href=""><div>
        <h3><img src="images/iconFrase.png"  class="imgAS"> Figuras de Linguagem </h3>
        <p>São palavras que....</p>
      </div></a></td>
      <tr>
      <td class="topico"><a href=""><div>
        <h3><img src="images/iconFrase.png"  class="imgAS"> Funções de Linguagem </h3>
        <p>A utilização da linguagem segundo a intenção do falante</p>
      </div></a></td>
      <tr>
      <td class="topico"><a href=""><div>
        <h3><img src="images/iconFrase.png"  class="imgAS"> Vícios de Linguagem </h3>
        <p>Abuso de palavra estrangeiras? Pronúncias erradas?</p>
      </div></a></td>
    </table>
          </td>
          <td width="4%"></td>

      <!--  Video Aula -->
<td>
 <label class="textVideo">Vídeo em Destaque!!!</label>
    <br><br><br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/ZR_Ou01WsK0" frameborder="0" 
    allow="accelerometer;autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin-bottom: 5%"></iframe>
  </td>
</table>
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
        <td width="56%"></td>
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