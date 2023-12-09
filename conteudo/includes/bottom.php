		<script>
			function Modulos(){
				this.init = function(){
					modulos.carregarCategoria();

					$(".selecioneModulo").click(function(){
						$("iframe").attr("src",$(this).data("value"))
					})

					$(document).on("click",".btn-categoria",function(){
						$("iframe").attr("src","modulos/home/template/categoria.php?categoria_id="+$(this).data("value"))
					})

					$('.search').on('keydown', function(e) {
						if(e.keyCode == 13){
							$("iframe").attr("src","modulos/home/template/buscar.php?text="+$('input').val())
						}
					});
					$('.search-inner-button').on('click', function(e) {
						$("iframe").attr("src","modulos/home/template/buscar.php?text="+$('input').val())
					});
				}


				this.carregarCategoria = function(){
					$.ajax({
						url : "modulos/home/service/listarCategoria/",
						type : 'post',
						data :  {codigo:""}
					})
					.done(function(json){
						var dados = JSON.parse(json);
						if(dados.success){
							var html = "";
								html += '<li class="">';
								html += '	<a href="javascript:window.location.reload(true)" class="btn-categoria" >';
								html += '		<span class="text">Home</span>';
								html += '	</a>';
								html += '</li>';
							for (const i in dados.elements) {
								html += '<li class="">';
								html += '	<a href="#" class="btn-categoria" data-value="'+dados.elements[i].id+'">';
								// html += '	<span class="icon icon-bike"></span>';
								html += '		<span class="text">'+dados.elements[i].nome+'</span>';
								html += '	</a>';
								html += '</li>';
							}
							$(".main-nav").html(html);
							$(".mobile-list").html(html);
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
						url : "modulos/home/service/listarJogos/",
						type : 'post',
						data :  {text:$('input').val()}
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
			}
			let modulos = new Modulos();
			modulos.init();
		</script>
	</body>
</html>