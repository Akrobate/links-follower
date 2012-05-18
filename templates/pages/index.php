<table>
	<? foreach($data as $item): ?>
		<tr>
			<td>
				<p class="title"><?=$item['title']?></p>
				<p class="url"><?=$item['url']?></p>
			</td>
			<td>
				<a href="?controller=links&action=index&id=<?=$item['id']?>">voir les liens</a>
				<a href="?controller=pages&action=delete&id=<?=$item['id']?>">effacer</a>
			</td>
		</tr>
	<? endforeach; ?>
</table>
