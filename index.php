<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>modal en javascript</title>
	
		<style>
			@charset "UTF-8";
		
			body, html{
				padding: 0;
				margin: 0;
				background-color: #ecf0f1;
			}

			.button_container{
				width: 100%;
				text-align: center;
			}		

			#button_modal{
				height: 50px;
				width: 30%;
				background-color: lawngreen;
				color: #fff;
				font-family: helvetica;
				font-size: 20px;
				border: none;
				cursor: pointer;
				margin-top: 200px;
				margin-bottom: 50px;
			}

			#modal{
				display: flex;
				flex-direction: column;
				height: 300px;
				width: 30%;
				background-color: #fff;
				font-family: helvetica;
				text-align: center;
				color: #95a5a6;
				position: absolute;
				top: -450px;
				left: 35%;
				transition: 0.5s;
				margin-top: 10%;
			}

			#annulation{
				height: 35px;
				width: 150px;
				background-color: red;
				color: #fff;
				font-family: helvetica;
				font-size: 15px;
				border: none;
				cursor: pointer;
				margin: auto;
				margin-top: 50px;
				margin-bottom: 50px;
			}

			#validation{
				height: 35px;
				width: 150px;
				background-color: blue;
				color: #fff;
				font-family: helvetica;
				font-size: 15xp;
				border: none;
				cursor: pointer;
				margin: auto;
			}

			input{
				text-align: center;
				width: 50%;
				margin: auto;
				font-size: 15px;
			}		
	
			#answer{
				width: 80px;
				margin: auto;
				background-color: coral;
				color: #fff;
				font-family: helvetica;
				font-size: 20px;
				border: none;
			}

		</style>
	</head>

	<body>
		<div class="button_container">

			<button id="button_modal" onclick="openModal()">S'inscrire</button>

			<div id="modal">
				
				<h2>Fiche d'inscription</h2>

				<form action="" method="post">
				
				<input type="text" name="pseudo" placeholder="Pseudo" id="pseudo" /><br />

				<button type="submit" id="annulation" name="annulation" onclick="annulationModal()">Annuler</button><br />

				<button type="submit" id="validation" name="validation" onclick="validationModal()">Valider</button>
				
				</form>			
				
			</div>
			
			<p id="answer">

				<?php
				
				if (isset($_POST['validation'])){

					if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {

						$_SESSION['pseudo'] = htmlspecialchars($_POST['pseudo']);

						echo 'Salut ' . $_SESSION['pseudo'] . ' votre inscription est bien validée !';


				}	

}

				?>

			</p>

		</div>

		<script src="app.js" type="text/javascript"></script>
	</body>
</html>


