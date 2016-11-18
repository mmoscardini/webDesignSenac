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
      <title>Elder  Peer - Busca por <?php echo htmlspecialchars($_POST['profissoes']); ?></title>
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
      <script type="text/javascript">	
         $(document).ready(function () {         
         	$.getJSON('https://gist.githubusercontent.com/ografael/2037135/raw/5d31e7baaddd0d599b64c3ec04827fc244333447/estados_cidades.json', function (data) {
         		var items = [];
         		var options = '<option value="">Estado</option>';	
         		$.each(data, function (key, val) {
         			options += '<option value="' + val.nome + '">' + val.nome + '</option>';
         		});					
         		$("#estado").html(options);         		
         		$("#estado").change(function () {
         			var options_cidades = 'Cidade';
         			var str = "";
         			$("#estado option:selected").each(function () {
         				str += $(this).text();
         			});
         			$.each(data, function (key, val) {
         				if(val.nome == str) {							
         					$.each(val.cidades, function (key_city, val_city) {
         						options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
         					});							
         				}
         			});
         			$("#cidade").html(options_cidades);
         		}).change();
         	});
         });
      </script>	
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
                     <a class="navbar-brand" href="#">SERVIÇOS TERCEIRA IDADE</a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a href="#about"><strong>LOGIN</strong></a></li>
                        <li><a href="#contact"><strong>DIVULGUE SEUS SERVIÇOS</strong></a></li>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <!--Formulário-->
      <div class="container marketing">
         <section class="form_comp">
            <h1><center><strong>Encontre os melhores <br /> <?php echo htmlspecialchars($_POST['profissoes']); ?> em sua região!</strong></center>
            </h1><br />
            <form class="form-horizontal" method="post">
               <div class="form-group">
                  <label class="control-label col-sm-2" for="cep">CEP:</label>
                  <div class="col-sm-10">
                     <input type="email" class="form-control" id="email" placeholder="Digite seu CEP">
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
                  <label class="control-label col-sm-2" for="date">Data</label>
                  <div class="col-sm-10">
                     <div class="input-group">
                        <div class="input-group-addon">
                           <i class="fa fa-calendar"></i>
                        </div>
                        <input class="form-control" id="date" name="date" placeholder="DD/MM/AAAA" type="text"/>
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
                     <input type="submit" name="submit" value="Buscar" class="btn btn-lg btn-primary">
                  </div>
               </div>
            </form>
         </section>
      </div>
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
