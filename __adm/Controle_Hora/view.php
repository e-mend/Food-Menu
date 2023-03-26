<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Controle de Horário BETA</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
	<link href="./style.css" rel="stylesheet">
<script>
if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }


</script>
</head>
<body>

		<div class="Controle">
			
			<table>
				<tr>
					<th>
						NOME
					</th>
					<th>
						ENTRADA
					</th>
					<th>
						SAÍDA
					</th>
					<th>
						MARMITA
					</th>
				</tr>
				

				<?php while ($hor = $fulljair->fetch_array()){ ?>

				<tr>
					<td>
						<?php echo $hor["NOME"];?>
					</td>

					<td>
						
						<div class="img-size">
							<?php
							

							 if(is_string($hor["HORA_ENTRADA"]) === true && $hor["HORA_ENTRADA"] === "FALTA" OR $hor["HORA_ENTRADA"] === "" OR $hor["HORA_ENTRADA"] == null){

								echo "<img src='img/remove.png'>";
								echo $hor["HORA_ENTRADA"];


								}else{

								echo "<img src='img/checked.png'>";

								echo $hor["HORA_ENTRADA"];

								}; 

							?>
						</div>
						
					</td>
					<td>
						<div class="img-size">
							<?php
							

							 if(is_string($hor["HORA_SAIDA"]) === true && $hor["HORA_SAIDA"] === "FALTA" OR $hor["HORA_SAIDA"] === "" OR $hor["HORA_SAIDA"] == null){

								echo "<img src='img/remove.png'>";
								echo $hor["HORA_SAIDA"];


								}else{

								echo "<img src='img/checked.png'>";

								echo $hor["HORA_SAIDA"];

								}; 

							?>
						</div>
					</td>

					<td>
						<div class="img-size marmitao">
							<?php
							

							 if($hor["Comida"]){

								echo $hor["Comida"];

								}
								 

							?>
						</div>
					</td>
				</tr>

				<?php } ?>			

			</table>
		</div>

		<div class="controle3">
		<div class="ITEMS-CONTROLLER">
			<?php while($itemsAtivos = $fullfoodyy->fetch_array()){ ?>

				
				<?php echo "<p>" . $itemsAtivos['ITENS'] . "</p>" ?>
				

			<?php }?>

			</div>
			

			<form method="post" action="delete.php">
				<input type="submit" name="delete"
						class="delete" value="LIMPAR HISTORICO" />	
			</form>
			<form method="post" action="update.php">
				

				<input type="submit" name="update"
						class="update" value="ATUALIZAR ITEMS" />	

				<input type="text" name="ITEMZ" id="ADCIONAR" placeholder="ADICIONE SEU INGREDIENTE"/>

				<div class="inputy">
					<select name="tipo" class="categoria">
						<option selected value="carne">CARNE
							</option>
						<option value="item">ITEM
							</option>
					</select>
				</div>
				<div class="remover1">
					<select name="retirar">
						<option selected value="">SELECIONE PARA REMOVER DO CARDÁPIO</option>
					
						<?php while($itemsAtivos = $lefty->fetch_array()) { ?>
							<option value="<?= $itemsAtivos['ITENS'] ?>">
								<?= $itemsAtivos['ITENS'] ?>
							</option>

						<?php } ?>
					</select>
				</div>

			</form>

			
				<div class="clear"></div>

				

			</div>

			
								

	

	<script type="text/javascript">

		setInterval(function(){location.reload(true);}, 10000);
	</script>

</body>
</html>