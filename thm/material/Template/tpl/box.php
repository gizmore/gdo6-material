<md-content class="gdo-box" layout-padding layout-fill flex>
  <div class="md-whiteframe-8dp">
<?php if ($box->label) : ?>
  <div class="gdo-box-title"><?= $box->label ?></div>
<?php endif;?>
  <div class="gdo-box-content"><?= $box->html; ?></div>
  </div>
</md-content>
