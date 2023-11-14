function Games(){
    this.init = function(){
        games.listar();
        $(document).on("click",".btn-modal",function(){
            $("#img").val("");
            if($(this).data("value")){
                games.listarDados($(this).data("value"));
            }else{
                $(".valueImg").text("");
            
                $("form .form-control").each(function(i){
                    $(this).val("");
                });
                $("#btnAlterar").addClass("d-none");
                $("#btnCadastro").removeClass("d-none");
                $('#modalAcoes').modal('show');
                tinyMCE.get('sobre').setContent("");
                tinyMCE.get('instrucoes').setContent("");
            }

            
        })

        tinymce.init({
            selector: '#sobre',
            plugins: [
              'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
              'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
              'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
              'alignleft aligncenter alignright alignjustify | ' +
              'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
          });
        tinymce.init({
            selector: '#instrucoes',
            plugins: [
              'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
              'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
              'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
              'alignleft aligncenter alignright alignjustify | ' +
              'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
          });
        $(document).on("click",".btn-visualizar",function(){
            $("iframe").attr("src",$(this).data("value"))
            $('#modalUrl').modal('show');
        })

        $("#btnCadastro").click(function(){
            // if(main.checkData()){
            //     Swal.fire('',"Existe campos vazios",'warning');
            // }else{
                games.cadastro();
            // }
        })

        $("#btnAlterar").click(function(){
            // if(main.checkData()){
            //     Swal.fire('',"Existe campos vazios",'warning');
            // }else{
                games.alterar();
            // }
        })

        $(document).on("click",".btn-deletar",function(){
            games.deletar($(this).data("value"));
        })
    }

    this.listarCategoria = function(){
        $.ajax({
            url : "../service/categoria/",
            type : 'post',
            data :  {codigo:""}
       })
       .done(function(json){
            var dados = JSON.parse(json);
            if(dados.success){
                var html = '<option hidden value="">Selecione</option>';

                for(i in dados.elements){
                    html += '<option value="'+dados.elements[i].id+'">'+dados.elements[i].nome+'</option>';
                }
                $("#categoria_id").html(html);

            }else{
                $("#categoria_id").html('');
                Swal.fire('Ops...',dados.message,'error')
            }
       })
       .fail(function(jqXHR, textStatus, msg){
            Swal.fire('Ops...',msg,'error')
       });
    }

    this.listar = function(){
        $.ajax({
            url : "../service/listar/",
            type : 'post',
            data :  {codigo:""}
       })
       .done(function(json){
            var dados = JSON.parse(json);
            if(dados.success){
                var html = "";
                for(i in dados.elements){
                    html += '<tr>';
                    html += '   <td><img src="../../../../upload/'+dados.elements[i].img+'" class="imagem-table"></img></td>';
                    html += '   <td>'+dados.elements[i].titulo+'</td>';
                    html += '   <td>'+dados.elements[i].categoria+'</td>';
                    html += '   <td>'+dados.elements[i].sobre+'</td>';
                    html += '   <td>'+(dados.elements[i].status == "H" ? "Habilitado" : "Desabilitado" )+'</td>';
                    html += '   <td class="text-center"> ';
                    html += '       <span class="p-0 btn-modal cursor-p" data-value="'+dados.elements[i].id+'">';
                    html += '           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">';
                    html += '               <path fill="#D11515" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>';
                    html += '           </svg>';
                    html += '       </span> ';
                    html += '       <span class="p-0 btn-deletar cursor-p" data-value="'+dados.elements[i].id+'"> ';
                    html += '           <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">'
                    html += '               <path fill="#D11515" d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>'
                    html += '               <path fill="#D11515" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>'
                    html += '           </svg>'
                    html += '       </span>';
                    html += '       <span class="p-0 btn-visualizar cursor-p" data-value="'+dados.elements[i].url+'"> ';
                    html += '           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">';
                    html += '               <path  fill="#D11515" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>';
                    html += '               <path  fill="#D11515" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>';
                    html += '           </svg>';
                    html += '       </span>';
                    html += '   </td>';
                    html += "</tr>";
                }
                $("tbody").html(html);
                games.listarCategoria();

            }else{
                $("tbody").html('<tr><td class="text-center" colspan="4">Listagem vazia</td></tr>');
                Swal.fire('Ops...',dados.message,'error')
            }
       })
       .fail(function(jqXHR, textStatus, msg){
            Swal.fire('Ops...',msg,'error')
       });
    }

    this.listarDados = function(id){
        $.ajax({
            url : "../service/listar/",
            type : 'post',
            data :  {id}
       })
       .done(function(json){
            var dados = JSON.parse(json);
            if(dados.success){

                $("form .form-control").each(function(i){
                    if($(this).attr("id") != "img"){
                        $(this).val(dados.elements[0][$(this).attr("name")]);
                    }else{
                        $(".valueImg").text(dados.elements[0]["img"]);
                    }
                });

                tinyMCE.get('sobre').setContent(dados.elements[0]['sobre']);
                tinyMCE.get('instrucoes').setContent(dados.elements[0]['instrucoes']);

                $('#modalAcoes').modal('show');
                $("#btnAlterar").removeClass("d-none");
                $("#btnCadastro").addClass("d-none");
            }else{
                Swal.fire('Ops...',dados.message,'error')
            }
       })
       .fail(function(jqXHR, textStatus, msg){
            Swal.fire('Ops...',msg,'error')
       });
    }

    this.cadastro = function(){
        var formdata = new FormData($("form")[0]);
        $.ajax({
            url : "../service/cadastro/",
            type : 'POST',
            data :  formdata,
            processData: false,
            contentType: false
        })
        .done(function(json){
            var json = JSON.parse(json);
            if(json.success){
                Swal.fire('Sucesso',json.message,'success');
                $('#modalAcoes').modal('hide');
                games.listar();
            }else{
                Swal.fire('error',json.message,'error');
            }
        })
        .fail(function(jqXHR, textStatus, msg){
            Swal.fire('error',msg,'error')
        });
    }

    this.alterar = function(){
        var formdata = new FormData($("form")[0]);
        formdata.append("imgAntiga",$(".valueImg").text());
        formdata.append("sobre",tinyMCE.get('sobre').getContent());
        formdata.append("instrucoes",tinyMCE.get('instrucoes').getContent());
        $.ajax({
            url : "../service/alterar/",
            type : 'POST',
            data : formdata,
            processData: false,
            contentType: false
       })
       .done(function(json){
            var json = JSON.parse(json);
            if(json.success){
                Swal.fire('Sucesso',json.message,'success');
                $('#modalAcoes').modal('hide');
                games.listar();
            }else{
                Swal.fire('error',json.message,'error');
            }
        })
       .fail(function(jqXHR, textStatus, msg){
            Swal.fire('error',msg,'error')
       });
    }

    this.deletar = function(id){
        Swal.fire({
            title:'',
            text:'Deseja deletar essa categoria ?',
            icon:'question',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não',
            showCancelButton: true,
            showCloseButton: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url : "../service/deletar/",
                    type : 'post',
                    data :  {id}
                })
                .done(function(json){
                    var dados = JSON.parse(json);
                    if(dados.success){
                        Swal.fire('Sucesso!',dados.message,'success')
                        games.listar();
                    }else{
                        Swal.fire('Ops...',dados.message,'error');
                    }
                })
                .fail(function(jqXHR, textStatus, msg){
                    Swal.fire('Ops...',msg,'error')
                });
            }
        })
    }
}
let games = new Games();
games.init();