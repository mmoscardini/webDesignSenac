$(document).ready(function(){
 	var normalFontSize = true;
 	$('#fontResizer').click(function(){
 		if (normalFontSize == true){
 			$(document.body).css({'font-size':15, 'font-size':20});
 			$('#fontResizer').html('Aa-');
 			normalFontSize = !normalFontSize;
 		}
 		else{
 			$(document.body).css({'font-size':20, 'font-size':15});
 			$('#fontResizer').html('Aa+');
 			normalFontSize = !normalFontSize;
 		}
 	});

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