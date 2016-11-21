<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../favicon.ico">
      <title>Elder Peer - Busca por <?php echo htmlspecialchars($_POST['profissoes']); ?></title>
      <!-- Bootstrap core CSS -->
      <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
      <!-- Include Date Range Picker -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
      <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
      <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
      <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Custom styles for this template -->
      <link href="carousel.css" rel="stylesheet">
       <script type="text/javascript" src="JavaScript.js"></script>	
   </head>
   <!-- NAVBAR
      ================================================== -->
   <body>
      <div class="navbar-wrapper">
         <div class="container">
            <nav class="navbar navbar-inverse navbar-static-top">
               <div class="container">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                     <a class="" href="index.html"><img class="logoStyle" src="../../assets/img/logo.jpg" alt="" ></a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a href="login.html" class="box-feature2" ><strong>DIVULGUE SEUS SERVIÇOS</strong></a></li>
                        <li><a href="#" class="box-feature2" id="fontResizer" >Aa+</a></li>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <!--Formulário-->
      <div class="formContainer">
         <section class="">
            <h1><center><strong>Encontre os melhores <br /> <?php echo htmlspecialchars($_POST['profissoes']); ?> em sua região!</strong></center>
            </h1><br />
            <form class="form-horizontal" method="post" action="chequeSeuEmail.html">
               <div class="form-group">
                  <label class="control-label col-sm-2" for="cep">CEP:</label>
                  <div class="col-sm-10">
                     <input type="number" class="form-control" id="cep" placeholder="Digite seu CEP">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-sm-2" for="estado">Estado:</label>
                  <div class="col-sm-10">
                     <select name="estado" id="estado" class="form-control">
                        <option value=""></option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-sm-2" for="cidade">Cidade:</label>
                  <div class="col-sm-10">
                     <select name="cidade" id="cidade" class="form-control">
                        <option value=""></option>
                     </select>
                  </div>
               </div>
               <div class="form-group ">
                  <label class="control-label col-sm-2" for="date">Periodo de interesse</label>
                  <div class="col-sm-10">
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control" id="date" name="date" placeholder="DD/MM/AAAA" type="text"/>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-sm-2" for="comment">Informações Adicionais:</label>
                  <div class="col-sm-10">
                     <textarea class="form-control" rows="5" id="comment"></textarea>
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-2">
                     <center><input type="submit" name="submit" value="Buscar" class="btn btn-lg btn-primary buttonMinWidth"></center>
                  </div>
               </div>
            </form>
         </section>
      </div>

      <footer>
         <div class="container">
            <div class="col-lg-4 ">
               <a href="#" class="byline">Quem Somos</a>
            </div>
           <div class="col-lg-4 ">
               <a href="#" class="byline">Contato</a>
           </div>
           <div class="col-lg-4 ">
              <a href="#" class="byline">Nossos Serviços</a>
            </div>
         </div>
         <br> <br>
         <div class="container">
               <p class="pull-right"><a href="#">Voltar ao Topo</a></p>
               <p>&copy; 2016 Elder Peer &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos e Condições</a></p>
           </div>
         </footer>

      <script>
         $('#sandbox-container input').datepicker({
         });
      </script>
      <!-- /.container -->
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="../../dist/js/bootstrap.min.js"></script>
      <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
      <script src="../../assets/js/vendor/holder.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
   </body>
</html>
