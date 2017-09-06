<footer>
	
</footer>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

<script>
	$(document).ready(function(){

		$(".button-collapse").sideNav();
		$("#btnAjax").click(function(){
			$.ajax({
				type: 'GET',
				url: '/pruebaAjax',
				success: function(response){

					$('#notas').append(response);
					Materialize.toast('Se consultaron las tareas', 4000);
				}
			});
		});

	});
</script>