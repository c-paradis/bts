			<h2> Liste des revues du panier</h2></br>
			<?php
			if(!isset($_SESSION["panier"])) $_SESSION["panier"]= new  Panier();
				$nouveauPanier = new Panier();
				$nouveauPanier =Panier::affecter($_SESSION["panier"]);
				if($nouveauPanier->getVide()) echo " Votre panier est vide";
				else
				{
					?>
					<table><tr><td>Désignation Revue</td><td>Durée Abonnement</td><td>Tarif Abonnement</td><td>Quantité</td><td>Modifier</td><td>Supprimer</td></tr>
						<?php
						foreach($nouveauPanier->getRevues() as $unerevue)
						{
							?>
							<tr>
								<td><?php echo $unerevue->DesignationRevue; ?></td>
								<td><?php echo $unerevue->DureeAbonnement; ?></td>
								<td><?php echo $unerevue->TarifAbonnement; ?></td>
								<td><?php echo $unerevue->quantite; ?></td>
								<td><a href='index.php?page=formulaire_ajouter&num=<?php echo $unerevue->IdRevue; ?>&action=modifier'>Modifier </a></td>
								<td><a href='index.php?page=action_revue&action&num=<?php echo $unerevue->IdRevue; ?>&action=supprimer'>Supprimer; </a></td>
							</tr>
							<?php
						}
					}
					?>
				</table>

			</br></br><a href='index.php?page=listeRevues'><h2>continuer la commande</h2></a>