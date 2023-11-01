function Usuario(){
    this.init = function(){
        usuario.listar();
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
                    html += '   <td>'+dados.elements[i].cpf+'</td>';
                    html += '   <td>'+dados.elements[i].email+'</td>';
                    html += '   <td>'+dados.elements[i].numTelefone+'</td>';
                    html += '   <td>'+(dados.elements[i].sexo == "M" ? "Masculino" : dados.elements[i].sexo == "F" ? "Feminino" : "Outros" )+'</td>';
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
}
let usuario = new Usuario();
usuario.init();