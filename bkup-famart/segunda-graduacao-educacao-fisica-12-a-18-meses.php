<html>
<title>Formulário Bacharel</title>
<head>

	<script src="javascript/jquery-1.9.0.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="javascript/jquery.maskedinput.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(function() {
			$.mask.definitions['~'] = "[+-]";
			$("#date").mask("99/99/9999",{placeholder:"mm/dd/yyyy",completed:function(){alert("completed!");}});
			$(".phone").mask("(999) 999-9999");
			$("#phoneExt").mask("(999) 999-9999? x99999");
			$("#iphone").mask("+33 999 999 999");
			$("#tin").mask("99-9999999");
			$("#cpf").mask("999.999.999-99");
			$("#product").mask("a*-999-a999", { placeholder: " " });
			$("#eyescript").mask("~9.99 ~9.99 999");
			$("#po").mask("PO: aaa-999-***");
			$("#pct").mask("99%");
			$("#phoneAutoclearFalse").mask("(999) 999-9999", { autoclear: false, completed:function(){alert("completed autoclear!");} });
			$("#phoneExtAutoclearFalse").mask("(999) 999-9999? x99999", { autoclear: false });

			$("input").blur(function() {
				$("#info").html("Unmasked value: " + $(this).mask());
			}).dblclick(function() {
				$(this).unmask();
			});
		});

	</script>


	<style type="text/css">

		.container-geral{
			width: 70%;
			margin: 0 auto;
			border: solid 1px #ccc;
			padding: 5%;
			border-radius: 5px;
		}

		.style-input{
			padding: 1.5%;
			border-radius: 2px;
			border: solid 1px #dbdbdb;
			background: #eff3f3;
			width: 100%;
		}

		.box-campos{
			margin-bottom: 2%;
		}

		.box-nome{
			font-size: 1.1em;
			font-family: tahoma;
			margin-bottom: 0.5%;
		}

		.input-button{
			width: 100%;
			height: 6%;
			margin-top: 2%;
			background: #183541;
			border: 0;
			cursor: pointer;
			color: #fff;
			font-size: 1.5em;
			font-weight: bold;
		}

		.input-button:hover {
			background: #4b7485;
		}

		.texto-topo{
			width: 100%;
		}

		.alinhar-texto{
			font-family: arial;
			margin: 0 auto;
			width: 90%;
			text-align: justify;
			margin-bottom: 4%;
		}


	</style>
</head>

<?php 
//Inserir data e hora//
date_default_timezone_set('America/Sao_Paulo');
$datamatricula =  date("d/m/Y");
$horamatricula = date('H:i:s', time());

?>

<?php 
//Gera número de protocolo//
$randon = mt_rand(1000, 10000000000); 

?>

<!--
<script Language="JavaScript">
	function getStates(what) {
		if (what.selectedIndex != '') {
			var estado = what.value;
			document.location=('teste.php?estado=' + estado);
		}
	}
</script>
-->
<body>

	<div class="texto-topo">
		<div class="alinhar-texto">
			Fica o aluno devidamente informado de que <strong>é de sua inteira responsabilidade o preenchimento correto</strong> das informações abaixo.
			Caso haja dúvidas, favor entrar em contato com o setor pedagógico pelo email <strong>atendimento02@grupoandrademartins.com.br</strong> 
		</div>
	</div>

	<div class="container-geral">

		<form id="formulario-inscricao" name="formulario-inscricao" method="POST" action="imprimir-segunda-graduacao.php">

			<div class="box-campos">
				<div class="box-nome">
					NOME COMPLETO:*
				</div>
				<div class="box-input">
					<input type="text" name="nome" class="style-input" required>
				</div>
			</div>

			<div class="box-campos">
				<div class="box-nome">
					EMAIL:*
				</div>
				<div class="box-input">
					<input type="email" id="email" name="email" class="style-input" required>
				</div>
			</div>

			<div class="box-campos">
				<div class="box-nome">
					CURSO:*
				</div>
				<div class="box-input">
					<input type="text" name="curso" class="style-input" value="Educação Física" readonly="readonly" required>
				</div>
			</div>

			<div class="box-campos">
				<div class="box-nome">
					RA:*
				</div>
				<div class="box-input">
					<input type="text" name="ra" class="style-input" required>
				</div>
			</div>

			<div class="box-campos">
				<div class="box-nome">
					CPF:*
				</div>
				<div class="box-input">
					<input type="text" class="style-input" name="cpf" id="cpf" size="12" maxlength="11" required>
					<!--<input name="cpf" type="text" class="imput" id="cpf" size="12" maxlength="11" onKeyPress="return Apenas_Numeros(event);" onBlur="validaCPF(this);">-->
				</div>
			</div>

			<div class="box-campos">
				<div class="box-nome">
					RG:*
				</div>
				<div class="box-input">
					<input type="text" name="rg" id="rg" class="style-input" required>
				</div>
			</div>

			<div class="box-campos" style="display:none;">
				<div class="box-nome">
					NÚMERO DE VERIFICAÇÃO:*
				</div>
				<div class="box-input">
					<input type="text" name="protocolo" class="style-input" value="<?=$randon;?>" readonly="readonly" required>
				</div>
			</div>

			<div class="box-campos" style="display:none;">
				<div class="box-nome">
					DATA DE EMISSÃO:*
				</div>
				<div class="box-input">
					<input type="text" name="data" class="style-input" value="<?=$datamatricula;?>" readonly="readonly" required>
				</div>
			</div>
			
			<div class="box-campos" style="display:none;">
				<div class="box-nome">
					HORA DE EMISSÃO:*
				</div>
				<div class="box-input">
					<input type="text" name="hora" class="style-input" value="<?=$horamatricula;?>" readonly="readonly" required>
				</div>
			</div>
			<div class="box-campos">
				<input type="submit" name="gerar" class="input-button" value="GERAR DECLARAÇÃO">
			</div>
		</form>
	</div>



	<!--<?
	$estado=$_GET['estado'];
	?>
	<select name="select" size=1 value="2" onChange="getStates(this);">
		<option value="">selecione o estado</option>
		<option value="1" <? if ($estado==1){ echo "SELECTED";} ?> > Minas Gerais </option>
		<option value="2" <? if ($estado==2){ echo "SELECTED";} ?> > São Paulo </option> 
		<option value="3" <? if ($estado==3){ echo "SELECTED";} ?> > Rio Grande do Sul </option>
		<option value="4" <? if ($estado==4){ echo "SELECTED";} ?> > Pará </option> 
		<option value="5" <? if ($estado==5){ echo "SELECTED";} ?> > Recife </option>
	</select>
	<?php
	if ($estado==1){ ?>
		<select name="cidade" size=1>
			<option value="">selecione sua cidade</option>
			<option> Belo Horizonte </option>
			<option> Uberlândia </option> 
			<option> Ipatinga </option>
			<option> Juiz de Fora </option> 
			<option> Pequi </option>
		</select>
		<?php }
		if ($estado==2){ ?>
			<select name="cidade" size=1>
				<option value="">selecione sua cidade</option>
				<option> São Paulo </option>
				<option> Santos </option> 
				<option> Campinas </option>
				<option> Guarulhos </option> 
				<option> Osasco </option>
			</select>
			<?php
		}
		if ($estado==3){ ?>
			<select name="cidade" size=1>
				<option value="">selecione sua cidade</option>
				<option> Porto Alegre </option>
				<option> Pelotas </option> 
				<option> Caxias do Sul </option>
				<option> Nova Hamburgo </option> 
				<option> Canoas </option>
			</select>
			<?php }

			if ($estado==4){ ?>
				<select name="cidade" size=1>
					<option value="">selecione sua cidade</option>
					<option> Manaus </option>
					<option> Manacapuru </option> 
					<option> Tefé </option>
					<option> Parintins </option> 
					<option> Itacoatiara </option>
				</select>
				<?php }

				if ($estado==5){ ?>
					<select name="cidade" size=1>
						<option value="">selecione sua cidade</option>
						<option> Recife </option>
						<option> Olinda </option> 
						<option> Caruaru </option>
						<option> Paulista </option> 
						<option> Petrolina </option>
					</select>
					<?php }
					?>
				-->


			</body>
			</html>