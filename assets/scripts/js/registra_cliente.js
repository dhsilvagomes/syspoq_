$(document).ready(function(){
			
			$('#btn_salva_cliente').click(function(){
				
				if($('#cnpj_cliente').val().length > 0){
					
					$.ajax({
						
						url:'assets/scripts/php/registra_cliente.php',

						type:'POST',
			
						async: true,
			
						data:$('#form_cliente').serialize(),
						
						success: function(data){
							alert(data);
							window.location.replace("clientes.php");
						}
					});
				}			
		 	});
		});