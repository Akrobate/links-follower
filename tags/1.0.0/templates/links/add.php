<!-- template links/add -->


<a href="?controller=sites&action=index">liste des sites</a> - 	
<a href="?controller=pages&action=index&id_site=<?=$id_site?>">liste des pages</a> - 
<a href="?controller=links&action=index&id_site=<?=$id_site?>&id_page=<?=$id_page?>">liste des liens</a>
<div class="add">
	<h2>Ajouter un lien</h2>

	<? if (@$error_msg != "") : ?>
		<div class="error_msg">
			<?=$error_msg?>
		</div>
	<? endif; ?>

	<form action="" method="post">
		<input class="url" type="text" name="url" />
		<input class="submit" type="submit" value="Ajouter" />
	</form>
</div>
