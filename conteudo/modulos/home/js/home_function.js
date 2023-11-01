function Home(){
    this.init = function(){
        home.carregarJogos();
        // home.carregarCategoria();
    }

    this.carregarJogos = function(){
        $.ajax({
            url : "../service/listarJogos/",
            type : 'post',
            data :  {codigo:""}
       })
       .done(function(json){
            var dados = JSON.parse(json);
            if(dados.success){
                var agrupamentoDados = [];
                var arrayVerificacao = [];
                for(i in dados.elements){
                    elements = dados.elements[i];
                    if(arrayVerificacao.indexOf(elements.categoria) == -1){
                        var json = {
                                categoria:elements.categoria,
                                categoria_id:elements.categoria_id,
                                dados:[elements]
                        }
                        agrupamentoDados.push(json)
                        arrayVerificacao.push(elements.categoria)
                    }else{
                        agrupamentoDados.filter(function(json){
                            if(json.categoria == elements.categoria){
                                json.dados.push(elements)
                            }
                        })
                    }
                }
                home.listarJogos(agrupamentoDados);
            }else{
                Swal.fire('Ops...',dados.message,'error')
            }
       })
       .fail(function(jqXHR, textStatus, msg){
            Swal.fire('Ops...',msg,'error')
       });
    }

    this.listarJogos = function(agrupamentoDados){
        var html = "";
        for(i in agrupamentoDados){
                html += '<div class="titulo">';
                html += '    <a class="btn-titulo" href="categoria.php?categoria_id='+agrupamentoDados[i].categoria_id+'">';
                html +=         agrupamentoDados[i].categoria;                    
                html += '    <span class="right-arrow"></span>';
                html += '    </a>';
                html += '</div>';
                html += '<div class="row jogos">';
            for(z in agrupamentoDados[i].dados){
                  html += '    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-2">';
                  html += '        <div class="teste">';
                  html += '            <a href="jogo.php?id='+agrupamentoDados[i].dados[z].id+'">';
                  html += '                <img class="w-100" src="../../../../upload/'+agrupamentoDados[i].dados[z].img+'" alt="">';
                  html += '                <div class="mostrar-nome text-center">'+agrupamentoDados[i].dados[z].titulo+'</div> ';
                  html += '            </a>';
                  html += '        </div>';
                  html += '    </div>';
                }
                html += '</div> ';
        }
        $(".conteudo").html(html);
    }

    this.carregarCategoria = function(){
        $.ajax({
            url : "../service/listarCategoria/",
            type : 'post',
            data :  {codigo:""}
       })
       .done(function(json){
            var dados = JSON.parse(json);
            if(dados.success){
               
            }else{
                Swal.fire('Ops...',dados.message,'error')
            }
       })
       .fail(function(jqXHR, textStatus, msg){
            Swal.fire('Ops...',msg,'error')
       });
    }

    this.listarJogos = function(agrupamentoDados){
        var html = "";
        for(i in agrupamentoDados){
                html += '<div class="titulo">';
                html += '    <a class="btn-titulo" href="categoria.php?categoria_id='+agrupamentoDados[i].categoria_id+'">';
                html +=         agrupamentoDados[i].categoria;                    
                html += '    <span class="right-arrow"></span>';
                html += '    </a>';
                html += '</div>';
                html += '<div class="row jogos">';
            for(z in agrupamentoDados[i].dados){
                  html += '    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-2">';
                  html += '        <div class="teste">';
                  html += '            <a href="jogo.php?id='+agrupamentoDados[i].dados[z].id+'">';
                  html += '                <img class="w-100" src="../../../../upload/'+agrupamentoDados[i].dados[z].img+'" alt="">';
                  html += '                <div class="mostrar-nome text-center">'+agrupamentoDados[i].dados[z].titulo+'</div> ';
                  html += '            </a>';
                  html += '        </div>';
                  html += '    </div>';
                }
                html += '</div> ';
        }
        $(".conteudo").html(html);
    }

    this.listarcategoria = function(){
        
    }
}

let home = new Home();
home.init();