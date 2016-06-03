		<?php
		if(isset($_GET['num']) && !empty($_GET['num'])){
			$revue = Revue::recherche($_GET['num']);
			?>
			<form method="post" action="index.php?page=action_revue&num=<?php echo $_GET['num']; ?>">
				<table style="border-collapse: collapse; float: left;">
					<tr>
						<td style="border: none;">
							<img src="<?php echo 'views/images/' . $revue->ImageRevue; ?>" alt="revue"/>
						</td>
						<td valign="top" style="border: none; text-align: left;">
							<?php
							echo "<b>" . utf8_encode($revue->DesignationRevue) . "</b><br/>" . $revue->DureeAbonnement . " an(s)<br/>" . $revue->TarifAbonnement . "€<br/><br/>";
							?>
							Quantité <input type="text" value="<?php echo $quantite; ?>" name="quantite" />
							<br/>
							<br/>
							<input type="submit" name="Bt_ajouter" value="<?php echo $libelleBouton;?>"/>
						</td>
					</tr>
				</table>
			</form>
			<?php
		}else{
			?>
			Aucune revue sélectionnée !
			<?php
		}
		?>