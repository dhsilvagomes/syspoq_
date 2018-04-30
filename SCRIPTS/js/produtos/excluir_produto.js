
$(function(){
    $('body').on('click', '.ex_produto', function(event){
        
        var id = $(this).attr('id');

        $(document).ready(function(){
            $.ajax({                
                url:'assets/scripts/php/excluir_produto.php',
    
                type:'POST',
        
                async: true,
        
                data: 'id='+id,
                    
                success: function(data){
                    window.location.replace("produtos.php");
                    alert(data);
                    
                }
            });
        });

       });
});