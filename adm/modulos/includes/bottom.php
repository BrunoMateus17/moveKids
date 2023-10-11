		<script>
			function Modulos(){
				this.init = function(){
					$(".selecioneModulo").click(function(){
						$("iframe").attr("src",$(this).data("value"))
					})
				}
			}
			let modulos = new Modulos();
			modulos.init();
		</script>
	</body>
</html>