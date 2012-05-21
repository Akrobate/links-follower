<!-- template -->

<h2>Ajouter un site</h2>

<? if (@$error_msg != "") : ?>
	<div class="error_msg">
		<?=$error_msg?>
	</div>
<? endif; ?>

<form action="" method="post">
	<input type="text" name="url" />
	<input type="submit" value="Ajouter" />
</form>
