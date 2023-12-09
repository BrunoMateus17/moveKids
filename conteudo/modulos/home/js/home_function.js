function Home(){
    this.init = function(){
        home.carregarJogos();

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
            html += ' <div class="h2 h2-title grid-title ">'+agrupamentoDados[i].categoria+'</div>';
            for(z in agrupamentoDados[i].dados){
                html += ' <a href="jogo.php?id='+agrupamentoDados[i].dados[z].id+'" title="'+agrupamentoDados[i].dados[z].titulo+'" class="thumb-v2 grid-item has-video-preview video-ready" data-google-interstitial="false">';
                html += '     <img class="thumb-img" src="../../../../upload/'+agrupamentoDados[i].dados[z].img+'" alt="'+agrupamentoDados[i].dados[z].titulo+'" width="512" height="512"> ';
                // html += '     <script>function videoReady(e){const videoParent=e.parentElement if(videoParent){videoParent.classList.add("video-ready")}}';
                // html += '     </script> ';
                // html += '     <video class="video-preview" loop="" width="200&quot;" height="200" muted="" onloadeddata="videoReady(this)" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" preload="none">';
                // html += '         <source src="https://cdn.jogos360.com.br/files/games/pa/pa/papa-s-taco-mia-video.mp4" type="video/mp4">';
                // html += '     </video>';
                html += '     <div class="thumb-info">';
                html += '         <div class="thumb-title">'+agrupamentoDados[i].dados[z].titulo+'</div>';
                html += '         <div class="thumb-description">';
                html += '             <p>';
                html += '                '+agrupamentoDados[i].dados[z].titulo+'';
                html += '             </p>';
                html += '         </div>';
                html += '     </div>';
                html += ' </a>';
            }
            html += '<div class="micro-sites-blocks full-grid mb-1"></div>';
        }
        $(".homepage-grid").html(html);
     
    }
}

let home = new Home();
home.init();