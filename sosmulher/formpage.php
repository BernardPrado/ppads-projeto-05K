<?php
   include('login/config.php');
   include('login/verifica_login.php');
   
   ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sos</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body onload="getLocation()">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" id="form_container">
                    <h2>Envie um SOS</h2> 
                    <p> Preencha as informações que entraremos em contato com as autoridades. </p>
					<p id="obs"> Obs: Também podemos entrar em contato com uma pessoa de confiança, é só você preencher os dados à baixo.</p>
                    <form method="post" action="sendmail.php">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Nome:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
							<div class="col-sm-6 form-group">
                                <label for="name"> Telefone:</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" required>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
							<div class="col-sm-6 form-group">
                                <label for="email"> Telefone de Emergência:</label>
                                <input type="text" class="form-control" id="telemergency" name="telemergency" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email de Emergência:</label>
                                <input type="email" class="form-control" id="emergency" name="emergency" required>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="message"> Endereço:</label>
                                <textarea class="form-control" type="textarea" name="message" id="message" maxlength="1000" rows="7"></textarea>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-default pull-right" >Enviar &rarr;</button>
                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>

      <script type="text/javascript">

      var x = document.getElementById("demo");

      function getLocation() {
          if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(showPosition);
              console.log('if');
          } else { 
              x.innerHTML = "Geolocation is not supported by this browser.";
              console.log('else');
          }
      }

      function showPosition(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        var dados = new FormData();
        dados.set('latitude', latitude);
        dados.set('longitude', longitude);

        $.ajax({
          url: 'getaddress.php',
          type: "POST",
          data: dados,
          processData: false,
          cache: false,
          dataType: 'json',
          contentType: false,
          success: function(res) {
            console.log('success');
              if (res["success"]) {
                  document.getElementById("message").value = res['address'];
              } else {
                  alert('Houve um erro no processamento. Por favor tente novamente mais tarde.');
              } 
          },
          error: function (request, status, error) {
              document.getElementById("message").value = request.responseText;
          }
        });

      }

      </script>

    </body>
    <?php if( !empty($_SESSION['nome_usuario'])){ ?>
        <script type="text/javascript">
            document.getElementById('name').value = "<?php echo($_SESSION['nome_usuario']); ?>";
            document.getElementById('telefone').value = "<?php echo($_SESSION['user_phone']); ?>";
            document.getElementById('email').value = "<?php echo($_SESSION['usuario']); ?>";
            document.getElementById('telemergency').value = "<?php echo($_SESSION['user_telemergency']); ?>";
            document.getElementById('emergency').value = "<?php echo($_SESSION['user_emergency']); ?>";
            //document.querySelector("[name='name']").value = "TESTEEE";
        </script>
    <?php } ?>

</html>
