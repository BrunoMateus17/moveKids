function Login(){
    this.init = function(){
        $("#btnLogin").click(function(){
            // login.validarLogin();
            login.IniciaLogin();
        })
        $("#btnCadastro").click(function(){
            // login.validarLogin();
            login.cadastro();
        })
    }

    this.IniciaLogin = function(){
        $.ajax({
            url : "../service/validacao/index.php",
            type : 'post',
            data : login.pegarDados(),
            beforeSend : function(){
                loading.open();
            }
       })
       .done(function(dados){
            loading.close();
            var dados = JSON.parse(dados);
            if(!dados.success){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: dados.message,
                })
            }else{
                window.location.href = dados.caminho;
            }
       })
       .fail(function(jqXHR, textStatus, msg){
        loading.close();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: msg,
            })
       });
    }

    this.cadastro = function(){
        $.ajax({
            url : "../service/cadastro/index.php",
            type : 'post',
            data : login.pegarDados(),
            beforeSend : function(){
                loading.open();
            }
       })
       .done(function(dados){
            loading.close();
            var dados = JSON.parse(dados);
            if(!dados.success){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: dados.message,
                })
            }else{
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: dados.message,
                })

                setTimeout(() => {
                    window.location.href = "index.php";
                }, 1000);
            }
       })
       .fail(function(jqXHR, textStatus, msg){
        loading.close();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: msg,
            })
       });
    }

    this.validarLogin = function(){
        var verificarVazio = false;
        $("input").each(function(){
            if($(this).val() == ""){
                $(this).css("border-color","red");
                verificarVazio = true;
            }else{
                $(this).css("border-color","#767676");
            }
        })
        return verificarVazio;
    }

    this.pegarDados = function(){
        var jsonDados = {};
        $("input").each(function(){
            jsonDados[$(this).attr("name")] = $(this).val();
        })
        return jsonDados;
    }
}
let login = new Login();
login.init();