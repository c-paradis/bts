				<h3 id="revues">Liste des revues</h3>
				<p>
					<?php
					foreach($revues as $revue){
						?>
						<div id='bloc-externe'>
							<img src='views/images/<?php echo $revue->ImageRevue; ?>' alt='<?php echo $revue->ImageRevue; ?>'/>
							<div id='bloc-interne'>
								<div id='revues'>
									<?php echo utf8_encode($revue->DesignationRevue); ?><br/>
									<?php echo $revue->DureeAbonnement; ?> an(s)<br/>
									<?php echo $revue->TarifAbonnement; ?> €
								</div>
								<br/>
								<a href="?page=formulaire_ajouter&action=ajouter&num=<?php echo $revue->IdRevue; ?>">Ajouter abonnement</a>
							</div>
						</div>
						<?php
					}
					?>
				</p>