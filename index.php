<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html;" charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="views/styles/styles_revues.css" media="screen" />
	<title> Liste des revues </title>
</head>
<body>
	<div id="global">
		<div id="centre">
			<?php require("include/header.inc.html"); ?>
			<?php require("include/navigation.inc.html"); ?>

			<div id="accueil">
				<?php
				if(isset($_GET['page'])){
					$page = strtolower($_GET['page']);
					if(file_exists("control/" . $page . ".php")){
						if($page == "gestioncompte" && isset($_GET['mode'])){
							$mode = addslashes($_GET['mode']);
						}
						include("control/" . addslashes($page) . ".php");
					}else{
						include("include/error.inc.html");
					}
				}else{
					include("control/home.php");
				}
				?>
			</div>
		</div>

		<?php require("include/footer.inc.html"); ?>
	</div>
</div>
</body>
</html>

