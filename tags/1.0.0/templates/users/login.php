<div class="connection">
	<h1><span style="color:red">L</span>inks<span style="color:red">F</span>ollower</h1>
	<? if (@$error_msg != "") : ?>
		<div class="error_msg">
			<?=$error_msg?>
		</div>
	<? endif; ?>
	<form method="post">
		<table border="0">
			<tr>
				<td>
					Login:
				</td>
				<td>
					<input type="text" name="login" />
				</td>
			</tr>
			<tr>
				<td>
					Mot de passe:
				</td>
				<td>
						<input type="password" name="password" />
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="connection" />
				</td>
			</tr>
		</table>
	</form>
</div>
