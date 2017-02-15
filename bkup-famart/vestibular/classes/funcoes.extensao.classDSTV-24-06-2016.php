<?php 


class Accordion 
{


	public function geraAccordions($query){
		require "classes/conexao.class.php";


		$sql = "SELECT * FROM cursos WHERE $query";
		$query = mysqli_query($con,$sql);
		$num = 0;
		while ($linha = mysqli_fetch_array($query))

		{
			$oque = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º' );
			$para = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-' );
			$area = str_replace($oque,$para, $linha['area']);
			$area = strtolower(trim($area));
			$categoria = str_replace($oque,$para, $linha['categoria']);
			$categoria = strtolower(trim($categoria));

			?>


			<div class="<?php if ($num % 2 == 0) {
				echo 'cinza';
			} else {
				echo "branco";
			}
			$num++; ?>">
		
			<h1><?php echo isset($linha['nome']) ? $linha['nome'] : null ?><span
				class="duracao-carga">Carga Horária: <?php echo "{$linha['cargaHoraria']}" ?>
				| Duração: <?php echo "{$linha['duracao']}" ?></span></h1>

				<div>
					<div class="p-acord-tabs1 f-left">
						<?php echo substr(isset($linha['detalhes']) ? $linha['detalhes'] : null, 0, 120) . '[...]' ?>
					</div>
					<div class="p-acord-tabs2 f-left">
						Investimento
						<font class="investimento">
							<?php echo $linha['InvestimentoMensalPOR'] ?>
						</font>
					</div>
					<div class="p-acord-tabs3 f-left">
						<div class="f-left botao-acord-detalhes">
							<a class="btns" href="<?php echo("/$categoria/$area/{$linha['link']}/detalhes-do-curso") ?>">
								VEJA DETALHES
							</a>
						</div>
					</div>
					<div class="p-acord-tabs4">
						<div class="btns f-left botao-inscricao-p">
							<a href="<?php echo("/$categoria/$area/{$linha['link']}/cadastrar") ?>">
								<span class="ico-inscricao-p"></span>

								<div class="texto-botao-inscricao-p">
									FAÇA SUA INSCRIÇÃO
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>


			<?php
		}

		echo "<script>
		$('.accordion').accordion();
	</script>";
}

}



class AccordionSemCAT
{


	public function geraAccordions($query){
		require "classes/conexao.class.php";


		$sql = "SELECT * FROM cursos WHERE $query";
		$query = mysqli_query($con,$sql);
		$num = 0;
		while ($linha = mysqli_fetch_array($query))

		{
			$oque = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º' );
			$para = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-' );
			$area = str_replace($oque,$para, $linha['area']);
			$area = strtolower(trim($area));
			$categoria = str_replace($oque,$para, $linha['categoria']);
			$categoria = strtolower(trim($categoria));

			?>


			<div class="<?php if ($num % 2 == 0) {
				echo 'cinza';
			} else {
				echo "branco";
			}
			$num++; ?>">
		
			<h1><?php echo isset($linha['nome']) ? $linha['nome'] : null ?><span
				class="duracao-carga">Carga Horária: <?php echo "{$linha['cargaHoraria']}" ?>
				| Duração: <?php echo "{$linha['duracao']}" ?></span></h1>

				<div>
					<div class="p-acord-tabs1 f-left">
						<?php echo substr(isset($linha['detalhes']) ? $linha['detalhes'] : null, 0, 121) . '[...]' ?>
					</div>
					<div class="p-acord-tabs2 f-left">
						Investimento
						<font class="investimento">
							<?php echo $linha['InvestimentoMensalPOR'] ?>
						</font>
					</div>
					<div class="p-acord-tabs3 f-left">
						<div class="f-left botao-acord-detalhes">
							<a class="btns"href="<?php echo("/$categoria/{$linha['link']}/detalhes-do-curso") ?>">
								VEJA DETALHES
							</a>
						</div>
					</div>
					<div class="p-acord-tabs4">
						<div class="btns f-left botao-inscricao-p">
							<a href="<?php echo("/$categoria/{$linha['link']}/cadastrar") ?>">
								<span class="ico-inscricao-p"></span>

								<div class="texto-botao-inscricao-p">
									FAÇA SUA INSCRIÇÃO
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>


			<?php
		}

		echo "<script>
		$('.accordion').accordion();
	</script>";
}

}




















?>