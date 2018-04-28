
$(function(){
    $('body').on('click', '.ex_cliente', function(event){
        
        var id = $(this).attr('id');

        $(document).ready(function(){
            $.ajax({                
                url:'assets/scripts/php/excluir_cliente.php',
    
                type:'POST',
        
                async: true,
        
                data: 'id='+id,
                    
                success: function(data){
                    window.location.replace("clientes.php");
                    alert(data);
                    
                }
            });
        });

       });
});