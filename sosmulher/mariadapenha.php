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
      <title>Lei Maria da Penha - Sos Mulher</title>
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
   <body>
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
    </br>
<div class="container-fluid">

  <h1 align="center">Lei Maria da Penha</h1>
  </br>
  </br>

</div>

<div align="justify" style="margin: 0 20px 0 10px;">
  <p align="justify" >
    
A Lei Maria da Penha foi sancionada pelo ex presidente Luiz Inácio Lula da Silva em 7 de agosto de 2006, entrando em vigor apenas no dia 22 de setembro de 2006. Esta lei é considerada pela Organização das Nações Unidas como uma das três melhores legislações do mundo no enfrentamento à violência contra as mulheres. Além disso, segundo dados de 2015 do Instituto de Pesquisa Econômica Aplicada (Ipea), a lei Maria da Penha contribuiu para uma diminuição de cerca de 10% na taxa de homicídios contra mulheres praticados dentro das residências das vítimas. A lei serve para todas as pessoas que se identificam com o sexo feminino, hétero e homossexuais. Isto quer dizer que as mulheres trans também estão incluídas.</p>
</br>
<p>
A lei Maria da Penha não contempla apenas os casos de agressão física. Também estão previstas as situações de violência psicológica como afastamento dos amigos e familiares, ofensas, destruição de objetos e documentos, difamação e calúnia.</p>
</br>
<p>
Maria da Penha Maia Fernandes era casada com Marco Antônio Heredia Viveros, que cometeu violência doméstica durante 23 anos de casamento. Em 1983, o marido por duas vezes, tentou assassiná-la. Na primeira vez, com arma de fogo, deixando-a paraplégica, e na segunda, por eletrocussão e afogamento. Após essa tentativa de homicídio ela tomou coragem, o denunciou, pôde sair de casa devido a uma ordem judicial e iniciou a batalha para que seu então marido fosse condenado. Entretanto, o caso foi julgado duas vezes e, devido alegações da defesa de que haveria irregularidades, o processo continuou em aberto por alguns anos.</p>
</br>
<p>
Em razão desse fato, o Centro pela Justiça pelo Direito Internacional (CEJIL) e o Comitê Latino - Americano de Defesa dos Direitos da Mulher (CLADEM), juntamente com a vítima, formalizaram uma denúncia à Comissão Interamericana de Direitos Humanos da OEA, ocasião em que o país foi condenado por não dispor de mecanismos suficientes e eficientes para proibir a prática de violência doméstica contra a mulher, sendo acusado de negligência, omissão e tolerância. Por conta de todos esses fatores, o caso de Maria da Penha Maia Fernandes foi homenagem à Lei Maria da Penha.</p>
</br>
<p>
A violência abrange condutas que vão muito além da agressão física, podendo ser uma espécie de coação, ou forma de constrangimento, posto em prática para vencer a capacidade de resistência do outrem, ou a levar a executá-lo, mesmo contra a sua vontade. Nesse cenário, Cavalcanti define a violência contra a mulher como sendo qualquer ação ou conduta que cause morte, dano ou sofrimento físico, sexual ou psicológico à mulher, tanto no âmbito público como no privado.</p>
</br>
<p>
Na visão da mulher que dá nome à Lei, a Lei Maria da Penha atingiu a forma de agir por parte de agressores e vítimas através de três métodos: o primeiro foi o “aumento do custo da pena para o agressor”; o segundo foi o “aumento do empoderamento e das condições de segurança para que a vítima pudesse denunciar”; por fim, também há o “aperfeiçoamento dos mecanismos jurisdicionais, possibilitando ao sistema de justiça criminal que atendesse de forma mais efetiva os casos envolvendo violência doméstica”. A interação dos dois últimos fatores proporcionou o aumento da probabilidade de condenação.

  </p>



</div>








  



</body>
</html>