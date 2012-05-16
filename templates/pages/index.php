<table>
	<? foreach($data as $item): ?>
		<tr>
			<td>
				<p class="title"><?=$item['title']?></p>
				<p class="url"><?=$item['url']?></p>
			</td>
			<td>
				<a href="?controller=pages&action=index&id=<?=$item['id']?>">
					view pages
				</a>
			</td>
		</tr>
	<? endforeach; ?>
</table>