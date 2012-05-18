<table>
	<? foreach($data as $item): ?>
		<tr>
			<td>
				<p class="title"><?=$item['title']?></p>
				<p class="url"><?=$item['url']?></p>
			</td>
			<td>
				<a href="?controller=pages&action=index&id_site=<?=$item['id']?>">voir pages</a><br />
				<a href="?controller=sites&action=delete&id=<?=$item['id']?>">effacer</a><br />
				<a href="?controller=pages&action=add&id_site=<?=$item['id']?>">Ajouter une page</a><br />
			</td>
		</tr>
	<? endforeach; ?>
</table>
