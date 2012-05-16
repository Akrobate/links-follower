<? if (@$error_msg != "") : ?>
	<div class="error_msg">
		<?=$error_msg?>
	</div>
<? endif; ?>
<form method="post">
	<input type="text" name="login" />
	<input type="password" name="password" />
	<input type="submit" value="connection" />
</form>