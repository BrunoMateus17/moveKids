function Jogos(){
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get("id");
    const text = urlParams.get("text");
    this.init = function(){
        if(id){
            jogos.carregarJogos();
        }else{
            jogos.buscarJogos();
        }
    }

    this.carregarJogos = function(){
        $.ajax({
            url : "../service/visualizarJogo/",
            type : 'post',
            data :  {id}
       })
       .done(function(json){
            var dados = JSON.parse(json);
            if(dados.success){
                $(".iframe").attr("src",dados.elements[0].url);
                $("#sobreGame").html(dados.elements[0].sobre);
                $("#instrucoesGame").html(dados.elements[0].instrucoes);
            }else{
                Swal.fire('Ops...',dados.message,'error')
            }
       })
       .fail(function(jqXHR, textStatus, msg){
            Swal.fire('Ops...',msg,'error')
       });
    }

    this.buscarJogos = function(){
        $.ajax({
            url : "../service/listarJogos/",
            type : 'post',
            data :  {text}
        })
        .done(function(json){
            var dados = JSON.parse(json);
            if(dados.success){
                var html = "";
                html += '<div class="titulo">';
                html += '    <span>';
                html +=         dados.elements[0].categoria;                    
                html += '    <span class="right-arrow"></span>';
                html += '    </span>';
                html += '</div>';
                html += '<div class="row jogos">';
                for(i in dados.elements){
                        html += '    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-2">';
                        html += '        <div class="">';
                        html += '            <a href="jogo.php?id='+dados.elements[i].id+'">';
                        html += '                <img class="w-100" src="../../../../upload/'+dados.elements[i].img+'" alt="">';
                        html += '                <div class="mostrar-nome text-center">'+dados.elements[i].titulo+'</div> ';
                        html += '            </a>';
                        html += '        </div>';
                        html += '    </div>';
                    }
                    html += '</div> ';
                $(".conteudo").html(html);
            }else{
                var html = "";
                html += '<div class="titulo">';
                html += '    <span>';
                html += '       Não existe resultado'                   
                html += '    <span class="right-arrow"></span>';
                html += '    </span>';
                $(".conteudo").html(html);

                // Swal.fire('Ops...',dados.message,'error');
            }
        })
        .fail(function(jqXHR, textStatus, msg){
            Swal.fire('Ops...',msg,'error')
        });
    }

}

let jogos = new Jogos();
jogos.init();