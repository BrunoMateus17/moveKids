function Main(){
    this.init = function(){

    }

    this.pegarDados = function(){
        let dados = {};
        $("form .form-control").each(function(){
            dados[$(this).attr("name")] = this.value;
        })
        return dados;
    }

    this.checkData = function(){
        var check = false;
        $(".form-control").each(function(){
            if($(this).attr("id") != "id"){
                if($(this).val() == ""){
                    $(this).addClass("verificacao");
                    check = true;
                }else{
                    $(this).removeClass("verificacao");
                }
            }
        }) 
        return check;
    }
}
let main = new Main();
main.init();