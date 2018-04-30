$(document).ready(function(){
			
			$('#btn-cadastro-produto').click(function(){
				
				if($('#nome_produto').val().length > 0){
					
					$.ajax({
						
						url:'assets/scripts/php/registra_produto.php',

						type:'POST',
			
						async: true,
			
						data:$('#form_produto').serialize(),
						
						success: function(data){
							alert(data);
							window.location.replace("produtos.php");
						}
					});
				}		
		 	});
		});