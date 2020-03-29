<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/menu_Rstyle.css">
	<link rel="stylesheet" type="text/css" href="css/styleheader.css">
  <link rel="stylesheet" type="text/css" href="css/stylefooter.css">

	<title>Redação</title>

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
    <label>Redação</label>
		<table class="LAL">
    <td>
      <img src="images/RedacaoLogo.png" class="imgLogo">
    </td>  
    <td>
      <p>
         As provas de vestibular mais
importantes do Brasil requerem
desenvoltura do aluno para com
redações argumentativas, nessa
sessão você irá aprender sobre como
escrever o texto, desde a introdução
até a conclusão.
      </p>
    </td>
    </table>
	</div>
  <div id="container">
    <br><br>
  <label class="textIntrodution">Possíveis Temas para Redação</label>  
  <br><br><br><br>
  <table width="90%">
    <td>
      <label class="textTeam"><img src="img/iconRe.png" class="imgRe"> Mobilidade Urbana no Brasil</label>
      <br><br>
      <p class="bobText">
        Dentro desse tema, vale estudar as políticas públicas de deslocamento e a falta de investimento no transporte público e nos alternativos, que contribui ainda mais para problemas como o congestionamento.
      </p>
    </td>
    <td width="3%"></td>
    <td>
       <label class="textTeam"><img src="images/iconRe.png" class="imgRe"> Combate a Epidemia no Brasil</label>
      <br><br>
      <p class="bobText">
         Hoje, o índice de epidemias e número de mortes relacionadas a elas ainda cresce, como no caso da dengue e da sífilis e de outras doenças que já haviam sido erradicadas, como o sarampo. É importante ficar atualizado sobre o problema e pesquisar políticas de prevenção.
      </p>
    </td>
    <tr></tr>
    <!--- ----->
    <td>
      <label class="textTeam"><img src="images/iconRe.png" class="imgRe"> Plásticos na Natureza</label>
      <br><br>
      <p class="bobText">
         Recentemente, a Câmara Municipal do Rio de Janeiro aprovou o projeto que proíbe o uso de canudos de plásticos na cidade. O tema gerou uma discussão nacional sobre os impactos de uso (e do descarte) de plásticos e suas consequências para a natureza. Por essa razão, o assunto é um forte candidato como um dos temas de Redação para o Enem 2019. Para embasar seu texto, fale sobre os impactos ambientais gerados pela produção e descarte de plástico e a importância de ações como a da Câmara do RJ para a preservação do meio ambiente.
      </p>
    </td>
    <td width="3%"></td>
    <td>
       <label class="textTeam"><img src="images/iconRe.png" class="imgRe"> Educação á Distância no Brasil</label>
      <br><br>
      <p class="bobText">
         A educação à distância cumpre hoje em dia um importante papel na democratização do ensino no Brasil. Com o avanço tecnológico e a facilidade no acesso de informações e conhecimento concedido pela internet, pessoas de todas as idades e classes sociais têm a oportunidade de terminar e continuar seus estudos.Essa modalidade de ensino tornou-se uma opção para todos que não podem (ou não querem) encarar uma rotina de estudos tradicional, seja por falta de tempo ou por não ter condições financeiras de arcar com as despesas de uma instituição privada.

      </p>
    </td>
    <tr></tr>
    <!--- ----->
    <td>
      <label class="textTeam"><img src="images/iconRe.png" class="imgRe"> Agrotóxicos</label>
      <br><br>
      <p class="bobText">
        Sabemos que o agronegócio movimenta a economia brasileira, mas algumas de suas práticas ao longo do tempo foram bastante prejudiciais ao meio ambiente e à saúde da população, como o uso de alguns agrotóxicos. A aplicação de parte desses aditivos estava proibida, mas foi liberada recentemente. Isso dá um bom tema para debate e para a redação do Enem 2019.
      </p>
    </td>
    <td width="3%"></td>
    <td>
       <label class="textTeam"><img src="images/iconRe.png" class="imgRe"> Evasão Escolar</label>
      <br><br>
      <p class="bobText">
         Como o Brasil apresenta a terceira maior evasão escolar do mundo - dados Programa das Nações Unidas para o Desenvolvimento (PNUD) – o tema é importante para ser abordado no Enem 2019. É possível se sair bem fazendo uma análise do perfil das pessoas que mais abandonam os estudos e seus motivos, trazendo uma solução para esta parcela da população.
      </p>
    </td>
    <tr></tr>
    <!--- ----->
    <td>
      <label class="textTeam"><img src="images/iconRe.png" class="imgRe"> Depressão no Brasil </label>
      <br><br>
      <p class="bobText">
        O número de suicídios no Brasil chama atenção para os efeitos da depressão na vida das pessoas, doença que, por vezes, é negligenciada. Uma redação do Enem com tal tema pode trabalhar as políticas públicas para prevenção de suicídios, assistência para quem tem depressão ou outras doenças psiquiátricas e estimular a busca pelos cuidados com a saúde mental.
      </p>
    </td>
    <td width="3%"></td>
    <td>
       <label class="textTeam"><img src="images/iconRe.png" class="imgRe"> Crise no Sistema Hídrico</label>
      <br><br>
      <p class="bobText">
          Os frequentes racionamentos em São Paulo e o já antigo problema de falta d’água no Nordeste – mesmo o Brasil tendo a maior reserva de água doce do mundo – são um prato cheio para a redação do Enem. Foque na importância de investir em infraestrutura para distribuição da água e na tecnologia para reutilização e despoluição de rios e lagoas. Também vale pensar na relação da água com a matriz energética brasileira e no projeto de lei 495/2017, que propõe privatizar a água.
      </p>
    </td>
    <tr></tr>
    <!--- ----->
    <td>
      <label class="textTeam"><img src="images/iconRe.png" class="imgRe"> Valores Èticos na Sociedade</label>
      <br><br>
      <p class="bobText">
        Segundo Eduardo Giannetti, “os valores éticos são uma espécie de gramática da convivência. Sem a gramática, não há língua, do mesmo modo como a virtude dá o estilo do convívio”. Será que é possível ensinar valores como honestidade, ética e respeito? Qual a importância desses princípios na sociedade atual? Eles passam de geração para geração ou vêm da internalização, em que cada um entende por si que as regras e princípios morais são importantes para a vida em sociedade?
      </p>
    </td>
    <td width="3%"></td>
    <td>
       <label class="textTeam"><img src="images/iconRe.png" class="imgRe"> Indústria 4.0</label>
      <br><br>
      <p class="bobText">
          A quarta revolução industrial promoverá uma revolução tecnológica que transformará a forma como vivemos, trabalhamos e nos relacionamos, bem como apresentará um grande impacto no universo do emprego no Brasil. Esta industrialização mudará de uma maneira radical o modelo dos negócios brasileiros podendo apresentar melhorias no cenário econômico e na estratégia de posicionamento. Além disso, o reflexo da indústria 4.0 no país é muito mais do que o desenvolvimento e adoção de novas tecnologias, e sim a mudança do posicionamento estratégico de negócios. 
      </p>
    </td>
  </table>

<br><br><hr class="linear"><br><br>

      <!-- Vídeo em Destaque -->

    <label class="textVideo">Vídeos em Destaque sobre Redação !!!</label>
    <br><br><br>
    <table>
      <td><iframe width="560" height="315" src="https://www.youtube.com/watch?v=tL0fVYDqTQE" frameborder="0" 
    allow="accelerometer;autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin-bottom: 5%"></iframe></td>
    <td width="3%"></td>
    <td>
      <iframe width="560" height="315" src="https://www.youtube.com/watch?v=DEJbFzme8I0" frameborder="0" 
    allow="accelerometer;autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin-bottom: 5%"></iframe>
    </td>
  </table>
      <iframe width="560" height="315" src="https://www.youtube.com/watch?v=T1FlZHTQ5fw" frameborder="0" 
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