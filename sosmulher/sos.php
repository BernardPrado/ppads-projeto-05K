<?php
   include('login/config.php');
   include('login/verifica_login.php');

   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>SOS Formulario - Sos Mulher</title>
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
      <iframe name="formpage" id="formpage" width='100%' height='800px' frameborder='0' src='formpage.php'></iframe>
</body>
</html>