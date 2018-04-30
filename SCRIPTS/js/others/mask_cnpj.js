function mascaraMutuario(o,f){
    v_obj=o
    v_fun=f
    setTimeout('execmascara()',1)
}
 
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
 
function cpfCnpj(v){
 
    //Remove tudo o que não é dígito
    v=v.replace(/\D/g,"")
 
    if (v.length <= 12) { //CPF
 
        //Coloca um ponto entre o terceiro e o quarto dígitos
        v=v.replace(/(\d{3})(\d)/,"$1.$2")
 
        //Coloca um ponto entre o terceiro e o quarto dígitos
        //de novo (para o segundo bloco de números)
        v=v.replace(/(\d{3})(\d)/,"$1.$2")
 
        //Coloca um hífen entre o terceiro e o quarto dígitos
        v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
 
    } else { //CNPJ
 
        //Coloca ponto entre o segundo e o terceiro dígitos
        v=v.replace(/^(\d{2})(\d)/,"$1.$2")
 
        //Coloca ponto entre o quinto e o sexto dígitos
        v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
 
        //Coloca uma barra entre o oitavo e o nono dígitos
        v=v.replace(/\.(\d{3})(\d)/,".$1/$2")
 
        //Coloca um hífen depois do bloco de quatro dígitos
        v=v.replace(/(\d{4})(\d)/,"$1-$2")
 
    }
 
    return v
 
}

function cep(v){

    v=v.replace(/\D/g,"")
 
    v=v.replace(/^(\d{2})(\d)/,"$1.$2")

    v=v.replace(/(\d{3})(\d)/,"$1-$2")    
    

    return v
}

function limitar(){
    var el = document.querySelector('#cnpj_cliente');

    el.addEventListener('keyup', function(event){
        var input = event.target;
        var toStr = String(input.value);
        if(input.value.length > 18){
            var novo = toStr.slice(0, 18);
            input.value = novo;
        }
    });
}

function limitar_cep(){
    var el = document.querySelector('#cep');

    el.addEventListener('keyup', function(event){
        var input = event.target;
        var toStr = String(input.value);
        if(input.value.length > 8){
            var novo = toStr.slice(0, 8);
            input.value = novo;
        }
    });
}

