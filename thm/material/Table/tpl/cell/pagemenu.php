<?php
use GDO\Table\GDT_PageMenu;
use GDO\Table\PageMenuItem;
$pagemenu instanceof GDT_PageMenu;
?>
<div class="gdo-pagemenu" flex layout-fill layout-padding>
  <div class="md-whiteframe-8dp">
	<ul class="pagination">
	  <?php foreach ($pages as $page) : $page instanceof PageMenuItem; ?>
		<li<?= $page->htmlClass(); ?>><a href="<?= html($page->href); ?>"><?= $page->page; ?></a></li>
	  <?php endforeach; ?>
	</ul>
  </div>
</div>
