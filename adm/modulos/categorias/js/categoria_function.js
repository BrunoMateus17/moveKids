function Categoria(){
    this.init = function(){
        categoria.listar();
        $(document).on("click",".btn-modal",function(){
            if($(this).data("value")){
                categoria.listarDados($(this).data("value"));
            }else{
                $("form .form-control").each(function(i){
                    $(this).val("");
                });
                $("#btnAlterar").addClass("d-none");
                $("#btnCadastro").removeClass("d-none");
                $('#modalAcoes').modal('show');

            }
        })

        $("#btnCadastro").click(function(){
            categoria.cadastro();
        })

        $("#btnAlterar").click(function(){
            console.log(123)
            categoria.alterar();
        })

        $(document).on("click",".btnDeletar",function(){
            categoria.deletar($(this).data("value"));
        })
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
                    html += '   <td>'+dados.elements[i].nome+'</td>';
                    html += '   <td>'+dados.elements[i].descricao+'</td>';
                    html += '   <td>'+(dados.elements[i].status == "H" ? "Habilitado" : "Desabilitado" )+'</td>';
                    html += '   <td> ';
                    html += '       <span class="p-0 btn-modal cursor-p" data-value="'+dados.elements[i].id+'">';
                    html += '           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">';
                    html += '               <path fill="#D11515" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>';
                    html += '           </svg>';
                    html += '       </span> ';
                    html += '       <span class="p-0 btnDeletar cursor-p" data-value="'+dados.elements[i].id+'"> ';
                    html += '           <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">'
                    html += '               <path fill="#D11515" d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>'
                    html += '               <path fill="#D11515" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>'
                    html += '           </svg>'
                    html += '       </span>';
                    html += '   </td>';
                    html += "</tr>";
                }
                $("tbody").html(html);

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
                    $(this).val(dados.elements[0][$(this).attr("name")])
                });
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
        $.ajax({
            url : "../service/cadastro/",
            type : 'POST',
            data :  categoria.pegarDados(),
        })
        .done(function(json){
            var json = JSON.parse(json);
            if(json.success){
                Swal.fire('Sucesso',json.message,'success');
                $('#modalAcoes').modal('hide');
                categoria.listar();
            }else{
                Swal.fire('error',json.message,'error');
            }
        })
        .fail(function(jqXHR, textStatus, msg){
            Swal.fire('error',msg,'error')
        });
    }

    this.alterar = function(){
        $.ajax({
            url : "../service/alterar/",
            type : 'POST',
            data :  categoria.pegarDados(),
       })
       .done(function(json){
            var json = JSON.parse(json);
            if(json.success){
                Swal.fire('Sucesso',json.message,'success');
                $('#modalAcoes').modal('hide');
                categoria.listar();
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
                        categoria.listar();
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
            if($(this).val() == ""){
                $(this).addClass("verificacao")
                check = true;
            }else{
                $(this).removeClass("verificacao")
            }
        })
        return check;
    }
}
let categoria = new Categoria();
categoria.init();