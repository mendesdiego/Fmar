<html>
<head>
	<style type="text/css">

	.carregando{
		color:#666;
		display:none;
	}


	</style>
</head>
<body>
	<?php
	include ('conexao.php');
	?>
	
	<label class="estados" for="cod_estados">Estado:</label>
	<select class="estados" name="cod_estados" id="cod_estados">
		<option value=""></option>
		<?php
		$sql = "SELECT cod_estados, sigla
		FROM estados
		ORDER BY sigla";

		$res = mysql_query( $sql );
		while ( $row = mysql_fetch_assoc( $res ) ) {
			echo '<option value="'.$row['cod_estados'].'">'.$row['sigla'].'</option>';
		}
		?>
	</select>
	<br>	
	<label id="cidades" for="cod_cidades">Cidade:</label>
	<span class="carregando">Aguarde, carregando...</span>
	<select name="cod_cidades" id="cod_cidades">
		<option value="">-- Escolha um estado --</option>
	</select>

	<script src="http://www.google.com/jsapi"></script>


	<script type="text/javascript">

	
	$(function(){
		$('#cod_estados').change(function(){
			if( $(this).val() ) {
				$('#cod_cidades').hide();
				$('.carregando').show();
				$.getJSON('cidades.ajax.php?search=',{cod_estados: $(this).val(), ajax: 'true'}, function(j){
					var options = '<option value=""></option>';	
					for (var i = 0; i < j.length; i++) {
						options += '<option value="' + j[i].cod_cidades + '">' + j[i].nome + '</option>';
					}	
					$('#cod_cidades').html(options).show();
					$('.carregando').hide();
				});
			} else {
				$('#cod_cidades').html('<option value=""> Escolha um estado </option>');
			}
		});
	});
	</script>
</body>
</htm>