/*
PROPRIEDADE ÉPOCA TECNOLOGIA

AUTOR E DESENVOLVEDOR: DHOUGLAS SILVA GOMES

SISTEMA: ERP SyspoQ

VERSÃO: 0.1
*/
$(document).ready( function() {
    /* Executa a requisição quando o campo CEP perder o foco */
    $('#cep').blur(function(){
            /* Configura a requisição AJAX */
            
            $.ajax({
                 url : 'assets/scripts/php/consulta_cep.php', /* URL que será chamada */ 
                 type : 'POST', /* Tipo da requisição */ 
                 data: 'cep=' + $('#cep').val(), /* dado que será enviado via POST */
                 dataType: 'json', /* Tipo de transmissão */
                 success: function(data){
                   
                     if(data.sucesso == 1){
                         $('#rua_cliente').val(data.rua);
                         $('#bairro_cliente').val(data.bairro);
                         $('#cidade_cliente').val(data.cidade);
                         $('#uf_cliente').val(data.estado);
  
                         $('#numero_endereco_cliente').focus();
                     }
                 }
            });   
    return false;    
    });
 });