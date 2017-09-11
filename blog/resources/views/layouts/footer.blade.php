<footer>
	
</footer>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

<script>
	$(document).ready(function(){

		$(".button-collapse").sideNav();

		$('#frmComment').submit(function(event){

			var comentario = $('#frmComment textarea[name=txt-comment]').val();
			var idPost = $('#frmComment input[name=id]').val();
			var token = $('#frmComment input[name=_token]').val();
			
			$.ajax({
				type: 'POST',
				url: '/posts/'+ idPost + '/comments',
				data: {
					'txt-comment':comentario,
					'_token': token
				},
				success: function(response){

					if(response['respuesta']){

						var datos = "<ul class='collection'>";
						datos += "<li class='collection-item avatar'>";
						datos += "<i class='material-icons circle green'>insert_chart</i>";
						datos += "<span class='title'><strong>"+response['data']['nombre']+"</strong></span>";
						datos += "<p>"+response['data']['comentario']+"<br>"+response['data']['fecha']+"</p>";
						datos += "<a href='#!' class='secondary-content'><i class='material-icons'>grade</i></a>";
						datos += "</li>";
						datos += "</ul>";
						
						$('#listComments').append(datos);

						Materialize.toast(response['mensaje'], 2000);
					}else{
						Materialize.toast(response['mensaje'], 2000);
					}
				}
			});

			event.preventDefault();
		});

		$('.btnDelete').click(function(event){
			var idPost = $(this).data('id');
			var token = $(this).data('token');

			$.ajax({
				type: 'DELETE',
				url:'/posts/' + idPost,
				data: {
					"_token": token
				},
				success: function(response){ // 1 correctamente
					$(".post-"+idPost).remove();
					Materialize.toast(response['mensaje'], 2000);
				}
			});

			event.preventDefault();
		});

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