<!-- template sites/index -->

<table class="listeResults">
	<? $i = 0; ?>
	<? foreach($data as $item): ?>
		<tr class="<? if (($i%2) == 0): ?>bgJaune<? else: ?>bgVert<? endif; $i++; ?>">
			<td>
				<div class="notification">
					<? if (flux::siteCheckNew($item['id'])) : ?>
						<img src="public/images/warning.png" width="25px;"/>	
					<? else: ?>
						<img src="public/images/website.png" width="25px;"/>
					<? endif; ?>
					&nbsp;
				</div>
				<div class="tdcontent">
				
					<p class="title"><?=$item['title']?></p>
					<div class="actions">
						<a href="?controller=pages&action=index&id_site=<?=$item['id']?>">voir pages</a> - 
						<a href="?controller=sites&action=delete&id=<?=$item['id']?>">effacer</a> - 
						<a href="?controller=pages&action=add&id_site=<?=$item['id']?>">Ajouter une page</a>
					</div>
					<p class="url"><?=$item['url']?></p>
			</td>
		</tr>
	<? endforeach; ?>
</table>
