$(document).ready(function(){
			
			$('#btn_salva_cliente').click(function(){
				
				if($('#cnpj_cliente').val().length > 0){
					
					$.ajax({
						
						url:'../../scripts/php/clientes/registra_cliente.php',

						type:'POST',
			
						async: true,
			
						data:$('#form_cliente').serialize(),
						
						success: function(data){
							alert(data);
							window.location.replace("../../layouts/clientes/clientes.php");
						}
					});
				}			
		 	});
		});