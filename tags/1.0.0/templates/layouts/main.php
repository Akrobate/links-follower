<html>
	<head>
		<link rel=stylesheet type="text/css" href="public/css/style.css" />
		<script src="public/js/jquery.js"></script>
		<script>
			$(document).ready(function() {
				$('.listeResults td').hover(function() {
					$(this).find('.actions').show();
					$(this).find('.url').show();
				}, function() {
					$(this).find('.actions').hide();
					$(this).find('.url').hide();
				});


			});
		</script>
		
	</head>
	<body>
		<div class="main">
			<div class="header">
				<h1><span style="color:red">L</span>inks<span style="color:red">F</span>ollower</h1>
			</div>
			<div class="leftZone">
				<a href="?controller=sites&action=add">Ajouter un site</a><br />
				<a href="?controller=sites&action=index">Liste des sites</a><br />
				<a href="cron/updatelinks.php" target="_blank">Verifier les urls</a><br />
				<a href="?controller=users&action=logout">Deconnection</a><br />
				<br />
				<a href="#">Aide</a><br />
				<a href="#">A propos</a><br />
				<a href="#">Configurer crontab</a><br />
			</div>
			<div class="mainZone">
				<?=$template_content?>
			</div>
			<div class="spacer"></div>
		</div>
	</body>
</html>
