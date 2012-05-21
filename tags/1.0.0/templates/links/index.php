<!-- Template links/index -->

<a href="?controller=sites&action=index">liste des sites</a> - 
<a href="?controller=pages&action=index&id_site=<?=$id_site?>">liste des pages</a> - 
<a href="?controller=links&action=add&id_site=<?=$id_site?>&id_page=<?=$id_page?>">ajouter un lien</a>

<table class="listeResults">
<? $i = 0; ?>
	<? foreach($data as $item): ?>
		<tr class="<? if (($i%2) == 0): ?>bgJaune<? else: ?>bgVert<? endif; $i++; ?>">
			<td>
				<div class="notification">
					<? if (flux::linkCheckNew($item['id'])) : ?>
						<img src="public/images/warning.png" width="25px;"/>
					<? else: ?>
						<img src="public/images/link.png" width="25px;"/>
					<? endif; ?>
				</div>			
				<div class="tdcontent">			
					<p class="title"><?=$item['title']?></p>
					
					<div class="actions">
						<a href="?controller=links&action=delete&id=<?=$item['id']?>&id_page=<?=$id_page?>&id_site=<?=$id_site?>">effacer</a> - 
						<a href="?controller=links&action=markreaden&id=<?=$item['id']?>&id_page=<?=$id_page?>&id_site=<?=$id_site?>">marquer comme lu</a> - 
						<a href="<?=$item['url']?>" target="_blank" >voir le lien</a>
					</div>
					<p class="url"><?=$item['url']?></p>
				</div>
			
			</td>
		</tr>
	<? endforeach; ?>
</table>
