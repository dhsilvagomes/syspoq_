$(document).ready( function() {
    /* Executa a requisição quando o campo CNPJ perder o foco */
    
    $('#btn_consulta_cnpj').click(function(){ 
        
        $.ajax({
            url : 'assets/scripts/php/consulta_cnpj.php', /* URL que será chamada */ 
            type : 'POST', /* Tipo da requisição */ 
            data: 'cnpj_cliente='+ $('#cnpj_cliente').val(), /* dado que será enviado via POST */
            dataType: 'json', /* Tipo de transmissão */
            
            success: function(data){
              alert('testando');
                if(data.status == 'OK'){
                    $("#nome_razao_cliente").val(dados.nome);
                    $("#cep").val(dados.cep);
                    $("#rua_cliente").val(dados.logradouro);
                    $("#numero_endereco_cliente").val(dados.numero); 
                    $("#complemento_endereco_cliente").val(dados.complemento);
                    $("#bairro_cliente").val(dados.bairro);
                    $("#uf_cliente").val(dados.uf);
                    $("#cidade_cliente").val(dados.municipio);
                    $("#telefone_cliente").val(dados.telefone);
                }else{
                    alert('Cnpj não encontrado!');
                }
            }
       });   
return false;      
    });
 });
 