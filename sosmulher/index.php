<?php
   // Inicia a sessão
   //session_start();
   // Inclui o arquivo de configuração
   include('login/config.php');
   
   // Inclui o arquivo de verificação de login
   include('login/verifica_login.php');
   
   // Se não for permitido acesso nenhum ao arquivo
   // Inclua o trecho abaixo, ele redireciona o usuário para 
   // o formulário de login
   //include('login/redirect.php');
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Newsletter</title>
      <link rel="stylesheet" type="text/css" href="site.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="script.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://newsapi.org/v2/top-headlines?sources=google-news-br&apiKey=4ca51b9c9de346aebee975e6734eadc2"></script>
   </head>
   <body onmouseover="botao()" id="body">
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
         <!-- Brand -->
         <a class="navbar-brand" href="index.php">
         <img src="6845.jpg" alt="logo" style="width:80px;">
         </a>
         <!-- Toggler/collapsibe Button -->
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
         <span class="navbar-toggler-icon"></span>
         </button>
         <!-- Navbar links -->
         <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Mapa
                  </a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="mapa.php">Delegacia da Mulher</a>
                     <a class="dropdown-item" href="mapa2.php">Delegacia</a>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="sos.php">SOS</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="mariadapenha.php">Lei Maria da Penha</a>
               </li>
            </ul>
         </div>
         <?php
         	if($_SESSION['logado']){
         		echo "<p style='color:rgb(154, 157, 160);'>Olá ".$_SESSION['nome_usuario']. " <a href='login/sair.php'>clique aqui</a> para sair.</p>";
         	} else{
         ?>
         <nav id="conteiner">
            <ul>
               <li id="login">
                  <a id="login-trigger" href="#">
                  Log in <span>▼</span>
                  </a>
                  <div id="login-content">
                     <form action="controller.php" method="post">
                        <table>
                           <tr>
                              <td>Email</td>
                           </tr>
                           <tr>
                              <td><input type="text" name="usuario" required></td>
                           </tr>
                           <tr>
                              <td>Senha</td>
                           </tr>
                           <tr>
                              <td><input type="password" name="senha" required></td>
                           </tr>
                           <?php if ( ! empty( $_SESSION['login_erro'] ) ) :?>
                           <tr>
                              <td style="color: red;"><?php echo $_SESSION['login_erro'];?></td>
                              <?php $_SESSION['login_erro'] = ''; ?>
                           </tr>
                           <?php endif; ?>
                           <tr>
                              <td><input type="submit" value="Entrar"></td>
                           </tr>
                        </table>
                     </form>
                  </div>
               </li>
               <li id="signup">
                  <a href="cadastro.php">Cadastre-se</a>
               </li>
            </ul>
         </nav><?php
     }
     ?>
      </nav>



      <div>
<script>
   document.getElementById("body").addEventListener("wheel", botao);
   function botao(){
      $(".gsc-cursor").remove();
      //$(".gsc-cursor-box.gs-bidi-start-align").remove().insertAfter($("#after"));
      $(".gcsc-branding").remove();
      $(".gsc-result-info").remove();
   }

  (function() {
    var cx = '017589840586265729802:omiiuku9ose';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
         <gcse:searchbox></gcse:searchbox>
      </div>
      <h1 align="center" onmouseover="botao()">Newsletter</h1>
      <p>“É inaceitável que uma em cada três mulheres no mundo sofra violência em algum momento de suas vidas”.
         Phumzile Mlambo-Ngcuka, subsecretária geral das Nações Unidas e diretora executiva da ONU Mulheres.
      </p>
      <div align="center">
         <img class="img-fluid" src="violencianatal.jpg" alt="Chania" width="460" height="345" > 
      </div>
      <p align="center">
      <div>
         <gcse:searchresults></gcse:searchresults>
      </div>
      </p>
      <rss version="2.0">
         <channel>
            <description>
               <table border="0" cellpadding="2" cellspacing="3">
                  <tr>
                     <td><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQIDguOrCiWEfZc3zVEaayUnjem6YGtFQO36msY5W0xEda93oLEanuoIefOACDE4Zgp1XCSxalCwg" border="1"></td>
                     <td>
                        <ol style="list-style: none; margin: 0; padding: 0;">
                           <strong>
                              <li><a href="http://www.jornaljurid.com.br/colunas/gisele-leite/violencia-contra-a-mulher-2018-04-02" target="_blank">Violência contra a mulher</a>&nbsp;&nbsp;<font color="#6f6f6f">Jornal Jurid</font></li>
                           </strong>
                           <a href="https://news.google.com/story/?hl=en&ned=us" target="_blank">Leia mais</a>
                        </ol>
                     </td>
                  </tr>
               </table>
            </description>
            </item>
            <item>
               <title>
                  Polícia prende três suspeitos de violência contra mulher em Maceió
               </title>
               <description>
                  <table border="0" cellpadding="2" cellspacing="3">
                     <tr>
                        <td><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcS9T7o1jfzjD8yk0BAZhSGw9YKiyUWQk9mmUSRJDmLvfBM3H4bcu8WPns2qkX9MEV4-bJ9FQF5wu4k" border="1"></td>
                        <td>
                           <ol style="list-style: none; margin: 0; padding: 0;">
                              <strong>
                                 <li><a href="https://g1.globo.com/al/alagoas/noticia/policia-prende-tres-suspeitos-de-violencia-contra-mulher-em-maceio.ghtml" target="_blank">Polícia prende três suspeitos de violência contra mulher em Maceió</a>&nbsp;&nbsp;<font color="#6f6f6f">Globo.com</font></li>
                              </strong>
                              <li><a href="http://www.alagoas24horas.com.br/1141901/seis-casos-de-violencia-contra-mulher-sao-registrados-em-maceio-e-rio-largo-nessa-sexta/" target="_blank">Seis casos de violência contra a mulher são registrados em Maceió e Rio Largo nessa sexta</a>&nbsp;&nbsp;<font color="#6f6f6f">Alagoas 24 Horas</font></li>
                              <a href="https://news.google.com/story/dT2acRnIfmco49MVP2UDcyOANQMqM?hl=en&ned=us" target="_blank">Leia mais</a>
                           </ol>
                        </td>
                     </tr>
                  </table>
               </description>
            </item>
            <item>
               <title>
                  Comissão discute mecanismos de proteção à mulher vítima de violência
               </title>
               <description>
                  <table border="0" cellpadding="2" cellspacing="3">
                     <tr>
                        <td><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ571qrxjbenex3XkKdYrZXU7vCU0yHx4jdFEuS7GSNM37EewjEqdKFptTKaCO0Ee44PFQH4onEbA" border="1"></td>
                        <td>
                           <ol style="list-style: none; margin: 0; padding: 0;">
                              <strong>
                                 <li><a href="https://www12.senado.leg.br/noticias/materias/2018/04/02/comissao-discute-mecanismos-de-protecao-a-mulher-vitima-de-violencia" target="_blank">Comissão discute mecanismos de proteção à mulher vítima de violência</a>&nbsp;&nbsp;<font color="#6f6f6f">Portal de Notícias do Senado Federal</font></li>
                              </strong>
                              <a href="https://news.google.com/story/?hl=en&ned=us" target="_blank">Leia mais</a>
                           </ol>
                        </td>
                     </tr>
                  </table>
               </description>
            </item>
            <item>
               <title>
                  Justiça é lenta para julgar violência contra a mulher
               </title>
               <description>
                  <table border="0" cellpadding="2" cellspacing="3">
                     <tr>
                        <td><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRez2YI3JQ3z_Sk8cw-2XA2IPEjnRMbSuEqy4EGtB0uZnfRXhLGePALVwtyznPn8fRPEN46NPVxHfQ" border="1"></td>
                        <td>
                           <ol style="list-style: none; margin: 0; padding: 0;">
                              <strong>
                                 <li><a href="https://www.cartacapital.com.br/sociedade/justica-e-lenta-para-julgar-violencia-contra-a-mulher" target="_blank">Justiça é lenta para julgar violência contra a mulher</a>&nbsp;&nbsp;<font color="#6f6f6f">CartaCapital</font></li>
                              </strong>
                              <li><a href="http://ginoticias.com.br/capitao-julio-ministra-palestra-sobre-violencia-contra-mulher/" target="_blank">Capitão Julio ministra palestra sobre violência contra mulher</a>&nbsp;&nbsp;<font color="#6f6f6f">IMPACTO (liberação de imprensa)</font></li>
                              <li><a href="https://www.diariodaregiao.com.br/_conteudo/2018/03/cidades/policia/1100872-diario-debate-violencia-contra-a-mulher.html" target="_blank">Diário debate violência contra a mulher</a>&nbsp;&nbsp;<font color="#6f6f6f">Diário da Região</font></li>
                              <li><a href="https://www.terra.com.br/noticias/brasil/justica-e-lenta-para-julgar-violencia-contra-a-mulher,dc212797e4436b18a9699ccc8de9e276tpigntyo.html" target="_blank">Justiça é lenta para julgar violência contra a mulher no Brasil</a>&nbsp;&nbsp;<font color="#6f6f6f">Terra</font></li>
                              <a href="https://news.google.com/story/dJMFloVNN-tzo8Mf2Mykdl2k8UHQM?hl=en&ned=us" target="_blank">Leia mais</a>
                           </ol>
                        </td>
                     </tr>
                  </table>
               </description>
               <description>
                  <table border="0" cellpadding="2" cellspacing="3">
                     <tr>
                        <td><img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQm0wUJRkTYBsa7pxfQOGC-586fvr7SQK1f7zS-99Y3YZkdeKF88T1p4uV-1wNolVSBRzGwdxcFaQ" border="1"></td>
                        <td>
                           <ol style="list-style: none; margin: 0; padding: 0;">
                              <strong>
                                 <li><a href="https://g1.globo.com/rj/regiao-dos-lagos/noticia/violencia-contra-a-mulher-um-problema-de-saude-publica-e-tema-de-debates-na-ultima-semana-de-marco-em-iguaba-grande-no-rj.ghtml" target="_blank">'Violência contra a mulher: Um problema de saúde pública' é tema de debates na última semana de março em Iguaba ...</a>&nbsp;&nbsp;<font color="#6f6f6f">Globo.com</font></li>
                              </strong>
                              <a href="https://news.google.com/story/dpZ2fggM2zLj1kM?hl=en&ned=us" target="_blank">Leia mais</a>
                           </ol>
                        </td>
                     </tr>
                  </table>
               </description>
               <description>
                  <table border="0" cellpadding="2" cellspacing="3">
                     <tr>
                        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPN038modBwDK6oBUpkPSINoMDACBa1i8qS5q7kBS61hXKznGI5spioDHQ5OORq3HM0hNKedZJQDU" border="1"></td>
                        <td>
                           <ol style="list-style: none; margin: 0; padding: 0;">
                              <strong>
                                 <li><a href="https://www12.senado.leg.br/noticias/materias/2018/03/22/pauta-feminina-debate-violencia-contra-a-mulher-em-ceilandia" target="_blank">Pauta Feminina debate violência contra a mulher em Ceilândia</a>&nbsp;&nbsp;<font color="#6f6f6f">Portal de Notícias do Senado Federal</font></li>
                              </strong>
                              <li><a href="https://veja.abril.com.br/brasil/camara-aprova-sistema-de-dados-sobre-violencia-contra-a-mulher/" target="_blank">Câmara aprova sistema de dados sobre violência contra a mulher</a>&nbsp;&nbsp;<font color="#6f6f6f">VEJA.com</font></li>
                              <li><a href="https://www.brasildefato.com.br/2018/03/23/pedalada-pelo-fim-da-violencia-contra-a-mulher-acontece-no-domingo-25-em-curitiba/" target="_blank">Pedalada pelo Fim da Violência Contra a Mulher acontece no domingo (25), em Curitiba</a>&nbsp;&nbsp;<font color="#6f6f6f">Brasil de Fato</font></li>
                              <a href="https://news.google.com/story/d0n0_T6-4LmZs7MjtkGYNTcivXWkM?hl=en&ned=us" target="_blank">Leia mais</a>
                           </ol>
                        </td>
                     </tr>
                  </table>
               </description>
               <description>
                  <table border="0" cellpadding="2" cellspacing="3">
                     <tr>
                        <td><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcT8FMLFqaeQRdAWmsJYStVFSWHlV6vSl221UUNUZ1RE33-UBC0Pk7mvpyAkfcQEz1-t7FfJJzSQNA" border="1"></td>
                        <td>
                           <ol style="list-style: none; margin: 0; padding: 0;">
                              <strong>
                                 <li><a href="http://piaui.folha.uol.com.br/lupa/2018/03/14/sobreelas-ms/" target="_blank">SobreElas: três índices de violência contra mulheres têm alta no MS</a>&nbsp;&nbsp;<font color="#6f6f6f">Agência Lupa</font></li>
                              </strong>
                              <a href="https://news.google.com/story/?hl=en&ned=us" target="_blank">Leia mais</a>
                           </ol>
                        </td>
                     </tr>
                  </table>
               </description>
               <description>
                  <table border="0" cellpadding="2" cellspacing="3">
                     <tr>
                        <td><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcS8m6jHeSfW_GOUz5vjvwP1fiRFR8FBTjj8yS2lM9WxHYia7lTbc-kSQF7PelM8C7SS9vVQeWPR" border="1"></td>
                        <td>
                           <ol style="list-style: none; margin: 0; padding: 0;">
                              <strong>
                                 <li><a href="https://g1.globo.com/mg/triangulo-mineiro/noticia/violencia-contra-a-mulher-cerca-de-130-vitimas-sao-atendidas-mensalmente-em-uberlandia.ghtml" target="_blank">Violência contra a mulher: Cerca de 130 vítimas são atendidas mensalmente em Uberlândia</a>&nbsp;&nbsp;<font color="#6f6f6f">Globo.com</font></li>
                              </strong>
                              <a href="https://news.google.com/story/?hl=en&ned=us" target="_blank">Leia mais</a>
                           </ol>
                        </td>
                     </tr>
                  </table>
               </description>
               <description>
                  <table border="0" cellpadding="2" cellspacing="3">
                     <tr>
                        <td><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTTtuoHbWxV7yLNI5QNOP5BIbB5xGBnTvM9jCr4BLYXcjyR3edvYTLzSEX3teQ1Ie9br31Rc1xRag" border="1"></td>
                        <td>
                           <ol style="list-style: none; margin: 0; padding: 0;">
                              <strong>
                                 <li><a href="http://www.agenciabrasilia.df.gov.br/2018/03/26/lideres-comunitarios-contribuem-para-enfrentar-violencia-contra-a-mulher/" target="_blank">Líderes comunitários contribuem para enfrentar violência contra a mulher</a>&nbsp;&nbsp;<font color="#6f6f6f">Agência Brasília</font></li>
                              </strong>
                              <a href="https://news.google.com/story/dDlYL_Cn1KsIGnM?hl=en&ned=us" target="_blank">Leia mais</a>
                           </ol>
                        </td>
                     </tr>
                  </table>
               </description>
               <description>
                  <table border="0" cellpadding="2" cellspacing="3">
                     <tr>
                        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSORI5a25ArS0R9g036L7Bof4BBxHuJml6j2UqPqjflvarmKUtTFRmyz871wa6nCq_bixdmZe27Yg" border="1"></td>
                        <td>
                           <ol style="list-style: none; margin: 0; padding: 0;">
                              <strong>
                                 <li><a href="https://oglobo.globo.com/sociedade/educacao/guiaenem/como-direito-das-mulheres-aparece-no-enem-vestibulares-22547316" target="_blank">Como o direito das mulheres aparece no Enem e vestibulares</a>&nbsp;&nbsp;<font color="#6f6f6f">Jornal O Globo</font></li>
                              </strong>
                              <a href="https://news.google.com/story/?hl=en&ned=us" target="_blank">Leia mais</a>
                           </ol>
                        </td>
                     </tr>
                  </table>
               </description>
               <description>
                  <table border="0" cellpadding="2" cellspacing="3">
                     <tr>
                        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3I15aRJDNlqFmF6hM6D2I9dz5pgS34WX3pKpq3b2pxanxL3UvpiU4CrFyGMi4YgUnW9-nGI7_0w" border="1"></td>
                        <td>
                           <ol style="list-style: none; margin: 0; padding: 0;">
                              <strong>
                                 <li><a href="https://www.metropoles.com/vida-e-estilo/feminismo/campanha-denuncia-violencia-contra-a-mulher-nas-musicas-brasileiras" target="_blank">Campanha denuncia violência contra a mulher nas músicas brasileiras</a>&nbsp;&nbsp;<font color="#6f6f6f">Metrópoles</font></li>
                              </strong>
                              <li><a href="http://www.bbc.com/portuguese/brasil-43359788" target="_blank">'Se te agarro com outro, te mato': campanha denuncia violência contra a mulher na música</a>&nbsp;&nbsp;<font color="#6f6f6f">BBC Brasil</font></li>
                              <a href="https://news.google.com/story/dKGkN5d8yZZ2fIMdnq0xMJz6D7o8M?hl=en&ned=us" target="_blank">Leia mais</a>
                           </ol>
                        </td>
                     </tr>
                  </table>
               </description>
               <description>
                  <table border="0" cellpadding="2" cellspacing="3">
                     <tr>
                        <td><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTF3EeJEH7tmIIguAXnEL5oVCydLW9U6Y0uq4qjK7-473aGZN3eQ61NSRW50HwTERF8-ag7XIMkCQ" border="1"></td>
                        <td>
                           <ol style="list-style: none; margin: 0; padding: 0;">
                              <strong>
                                 <li><a href="https://claudia.abril.com.br/noticias/servico-de-saude-tera-5-dias-para-informar-sobre-violencia-contra-a-mulher/" target="_blank">Serviço de saúde terá 5 dias para informar sobre violência contra a mulher</a>&nbsp;&nbsp;<font color="#6f6f6f">Claudia</font></li>
                              </strong>
                              <li><a href="https://www.diariodaregiao.com.br/_conteudo/2018/03/cultura/artes_visuais/1100666-uma-por-todas.html" target="_blank">Major Denice Santiago faz palestra sobre o combate à violência contra a mulher</a>&nbsp;&nbsp;<font color="#6f6f6f">Diário da Região</font></li>
                              <a href="https://news.google.com/story/deevp_OKtTRo_oMBAzJTAZtH5bUuM?hl=en&ned=us" target="_blank">Leia mais</a>
                           </ol>
                        </td>
                     </tr>
                  </table>
               </description>
               <description>
                  <table border="0" cellpadding="2" cellspacing="3">
                     <tr>
                        <td><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcS9T7o1jfzjD8yk0BAZhSGw9YKiyUWQk9mmUSRJDmLvfBM3H4bcu8WPns2qkX9MEV4-bJ9FQF5wu4k" border="1"></td>
                        <td>
                           <ol style="list-style: none; margin: 0; padding: 0;">
                              <strong>
                                 <li><a href="https://g1.globo.com/pa/santarem-regiao/noticia/violencia-contra-mulher-justica-concede-cerca-de-30-medidas-protetivas-semanais-em-santarem.ghtml" target="_blank">Violência contra a mulher: justiça concede cerca de 25 medidas protetivas semanais em Santarém</a>&nbsp;&nbsp;<font color="#6f6f6f">Globo.com</font></li>
                              </strong>
                              <li><a href="http://blogs.ne10.uol.com.br/jamildo/2018/03/08/violencia-contra-mulher-ate-sexta-tjpe-promete-ter-mais-de-370-processos-em-pauta-para-decisao/" target="_blank">Violência contra a mulher: até sexta, TJPE promete ter mais de 370 processos em pauta para decisão</a>&nbsp;&nbsp;<font color="#6f6f6f">NE10</font></li>
                              <li><a href="http://www.jornaldaparaiba.com.br/vida_urbana/violencia-contra-mulher-32-mil-homens-respondem-processos-em-campina-grande.html" target="_blank">Violência Contra a Mulher: 3,2 mil homens respondem a processos em Campina Grande</a>&nbsp;&nbsp;<font color="#6f6f6f">http://jornaldaparaiba.com.br/ (liberação de imprensa) (Blogue)</font></li>
                              <li><a href="http://dc.clicrbs.com.br/sc/estilo-de-vida/noticia/2018/03/todas-as-pessoas-que-trabalham-contra-a-violencia-teriam-que-pensar-em-algo-para-evitar-o-pior-diz-desembargadora-10184218.html" target="_blank">"Todas as pessoas que trabalham contra a violência teriam que pensar em algo para evitar o pior", diz desembargadora</a>&nbsp;&nbsp;<font color="#6f6f6f">Diário Catarinense</font></li>
                              <a href="https://news.google.com/story/daRf2Q9uQkMTUAMeRIg4DcY9uqYAM?hl=en&ned=us" target="_blank">Leia mais</a>
                           </ol>
                        </td>
                     </tr>
                  </table>
               </description>
               <description>
                  <table border="0" cellpadding="2" cellspacing="3">
                     <tr>
                        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiWhZU3oc8VlHtxLn7AMzin_5ZvYE5vEymDAs8lGIZysLiuypp8M1tCZBxKl02PY6YcAWcIwqEMQ" border="1"></td>
                        <td>
                           <ol style="list-style: none; margin: 0; padding: 0;">
                              <strong>
                                 <li><a href="https://g1.globo.com/mg/zona-da-mata/noticia/casa-das-mulheres-deve-retomar-atendimentos-na-proxima-semana-em-vicosa.ghtml" target="_blank">Casa das Mulheres deve retomar atendimentos na próxima semana em Viçosa</a>&nbsp;&nbsp;<font color="#6f6f6f">Globo.com</font></li>
                              </strong>
                              <a href="https://news.google.com/story/dGStNFNkJv3IyRM?hl=en&ned=us" target="_blank">Leia mais</a>
                           </ol>
                        </td>
                     </tr>
                  </table>
               </description>
               <description>
                  <table border="0" cellpadding="2" cellspacing="3">
                     <tr>
                        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg_OE52mWSAdps7aCkKBQYNcri5piYqAgxFS1m93CVEyzhFgTGBRN0Z_RegFfs8X0i1r0IIyG5sKM" border="1"></td>
                        <td>
                           <ol style="list-style: none; margin: 0; padding: 0;">
                              <strong>
                                 <li><a href="https://www12.senado.leg.br/noticias/materias/2018/03/07/plenario-aprova-tres-projetos-para-combater-misoginia-e-violencia-contra-a-mulher" target="_blank">Plenário aprova três projetos para combater misoginia e violência contra a mulher</a>&nbsp;&nbsp;<font color="#6f6f6f">Portal de Notícias do Senado Federal</font></li>
                              </strong>
                              <li><a href="https://istoe.com.br/por-dia-da-mulher-senado-aprova-projetos-contra-violencia-de-genero/" target="_blank">Por Dia da Mulher, Senado aprova projetos contra violência de gênero</a>&nbsp;&nbsp;<font color="#6f6f6f">Istoe</font></li>
                              <li><a href="https://www.esmaelmorais.com.br/2018/03/congresso-aprova-pacote-de-leis-protetivas-as-mulheres-na-vespera-do-dia-da-mulher/" target="_blank">Congresso aprova pacote de leis protetivas às mulheres na véspera do Dia da Mulher</a>&nbsp;&nbsp;<font color="#6f6f6f">Esmael Morais (Blogue)</font></li>
                              <a href="https://news.google.com/story/dAAOupOra61GvLMibh65-aRzQnYxM?hl=en&ned=us" target="_blank">Leia mais</a>
                           </ol>
                        </td>
                     </tr>
                  </table>
               </description>
            </item>
            <description>
               <table border="0" cellpadding="2" cellspacing="3">
                  <tr>
                     <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEYqpS-t3Sw9UQa6ioTwnzZRXfXvk3z31tlLefpVjDmnZYliFoctvSbVCw8Xrgdk4PBv-V_n2Fxw" border="1"></td>
                     <td>
                        <ol style="list-style: none; margin: 0; padding: 0;">
                           <strong>
                              <li><a href="https://g1.globo.com/sp/mogi-das-cruzes-suzano/noticia/violencia-contra-a-mulher-companheiros-e-ex-sao-os-principais-agressores-aponta-vigilancia-epidemiologica-de-mogi.ghtml" target="_blank">Violência contra a mulher: Companheiros e ex são os principais agressores, aponta Vigilância Epidemiológica de Mogi</a>&nbsp;&nbsp;<font color="#6f6f6f">Globo.com</font></li>
                           </strong>
                           <a href="https://news.google.com/story/dUz3ghq2xwKDeqM?hl=en&ned=us" target="_blank">Leia mais</a>
                        </ol>
                     </td>
                  </tr>
               </table>
            </description>
            <description>
               <table border="0" cellpadding="2" cellspacing="3">
                  <tr>
                     <td><img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQfptsSrZKAJZYMsOWtVsO8pXW2MhukE07A1ARkDr1gFbnN81209m2JW7SU9Dm7V2GNjCETMGmMrA" border="1"></td>
                     <td>
                        <ol style="list-style: none; margin: 0; padding: 0;">
                           <strong>
                              <li><a href="http://www.redebrasilatual.com.br/cidadania/2018/03/feminicidio-tem-que-ser-prevenido-com-conscientizacao-nas-escolas-dizem-especialistas" target="_blank">Violência contra a mulher tem que ser prevenida com conscientização nas escolas</a>&nbsp;&nbsp;<font color="#6f6f6f">Rede Brasil Atual</font></li>
                           </strong>
                           <a href="https://news.google.com/story/d8uxiqfBs9WGVSM?hl=en&ned=us" target="_blank">Leia mais</a>
                        </ol>
                     </td>
                  </tr>
               </table>
            </description>
            <description>
               <table border="0" cellpadding="2" cellspacing="3">
                  <tr>
                     <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTe1d5RdseAAeRWnR6PLM2FsVKul8tztqJdrhfYWa_1VmHw4uK4JGDkL_EY5Os77cvWzW0MQAQUxA" border="1"></td>
                     <td>
                        <ol style="list-style: none; margin: 0; padding: 0;">
                           <strong>
                              <li><a href="http://jornal.usp.br/atualidades/violencia-contra-mulher-ainda-o-principal-desafio/" target="_blank">Violência contra a mulher ainda é o principal desafio</a>&nbsp;&nbsp;<font color="#6f6f6f">Jornal da USP</font></li>
                           </strong>
                           <a href="https://news.google.com/story/dD3BkvZFtO2nByM?hl=en&ned=us" target="_blank">Leia mais</a>
                        </ol>
                     </td>
                  </tr>
               </table>
            </description>
            <description>
               <table border="0" cellpadding="2" cellspacing="3">
                  <tr>
                     <td><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbTEgqNIGJ43vhx3c14kNVRT-S--Tf9QHoat703s78TaXps-NpWtEFDSvQrfAglioImtiMUJciFX8" border="1"></td>
                     <td>
                        <ol style="list-style: none; margin: 0; padding: 0;">
                           <strong>
                              <li><a href="https://www.voaportugues.com/a/violencia-contra-mulher-aumento-brasil/4286729.html" target="_blank">Violência contra a mulher aumenta no Brasil</a>&nbsp;&nbsp;<font color="#6f6f6f">Voz da América</font></li>
                           </strong>
                           <a href="https://news.google.com/story/dxXetaDWZEyxOqMj55y0qIsWggFaM?hl=en&ned=us" target="_blank">Leia mais</a>
                        </ol>
                     </td>
                  </tr>
               </table>
            </description>
            </item>
         </channel>
      </rss>
      <div id="after"></div> 
   </body>
</html>