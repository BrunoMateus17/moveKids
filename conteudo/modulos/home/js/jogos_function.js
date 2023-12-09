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
                $("iframe").attr("src",dados.elements[0].url);
                $("img").attr("src",'../../../../upload/'+dados.elements[0].img);
                $(".player-bottom-bar_name,.title").html(dados.elements[0].titulo);
                if(dados.elements[0].sobre == "" && dados.elements[0].instrucoes == ""){
                    $(".grid-game-description").css("display","none");
                }else{
                    $(".game-description").html(dados.elements[0].sobre);
                    $(".game-description-sub").html(dados.elements[0].instrucoes);
                }
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
                html += ' <div class="h2 h2-title grid-title ">'+text+'</div>';
                for(z in dados.elements){
                    html += ' <a href="jogo.php?id='+dados.elements[z].id+'" title="'+dados.elements[z].titulo+'" class="thumb-v2 grid-item has-video-preview video-ready" data-google-interstitial="false">';
                    html += '     <img class="thumb-img" src="../../../../upload/'+dados.elements[z].img+'" alt="'+dados.elements[z].titulo+'" width="512" height="512"> ';
                    // html += '     <script>function videoReady(e){const videoParent=e.parentElement if(videoParent){videoParent.classList.add("video-ready")}}';
                    // html += '     </script> ';
                    // html += '     <video class="video-preview" loop="" width="200&quot;" height="200" muted="" onloadeddata="videoReady(this)" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" preload="none">';
                    // html += '         <source src="https://cdn.jogos360.com.br/files/games/pa/pa/papa-s-taco-mia-video.mp4" type="video/mp4">';
                    // html += '     </video>';
                    html += '     <div class="thumb-info">';
                    html += '         <div class="thumb-title">'+dados.elements[z].titulo+'</div>';
                    html += '         <div class="thumb-description">';
                    html += '             <p>';
                    html += '                '+dados.elements[z].titulo+'';
                    html += '             </p>';
                    html += '         </div>';
                    html += '     </div>';
                    html += ' </a>';
                }
                html += '<div class="micro-sites-blocks full-grid mb-1"></div>';
            
            $(".homepage-grid").html(html);
            }else{
                var html = "";
                html += '<div class="titulo">';
                html += '    <span>';
                html += '       Não existe resultado com a palavra: <b>'+text+'</b>'                   
                html += '    </span>';
                $(".homepage-grid").html(html);

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