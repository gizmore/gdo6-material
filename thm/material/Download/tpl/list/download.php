<?php
use GDO\User\GDO_User;
use GDO\Download\GDO_Download;
use GDO\Download\GDO_DownloadToken;
use GDO\UI\GDT_Tooltip;
use GDO\Vote\GDT_VoteSelection;
use GDO\UI\GDT_Button;
use GDO\UI\GDT_Icon;
use GDO\UI\GDT_EditButton;
use GDO\Vote\GDT_VoteCount;
use GDO\Vote\GDT_VotePopup;
use GDO\User\GDT_LevelPopup;
$download instanceof GDO_Download;
$user = GDO_User::current();
$id = $download->getID();
?>
<?php
$price = $download->getPrice();
$paid = $download->isPaid();
$rating = sprintf('%.01f', $download->getRating());
$ratingField = $download->getVoteRatingColumn()->renderCell();
$downloads = $download->getDownloads();
$payClass = $paid ? 'gdo-download-paid' : 'gdo-download-free';
$buyClass = '';
if ($paid) $buyClass = GDO_DownloadToken::hasToken($user, $download) ? 'gdo-download-purchased' : 'gdo-download-not-purchased';
$infoHtml = $download->displaySize()."\n".$download->getType()."\n".$download->getFile()->displayName();
$infoTooltip = GDT_Tooltip::make()->tooltip($infoHtml)->icon('info')->renderCell();

$levelTooltip = GDT_LevelPopup::make()->level($download->getLevel())->render();

$editButton = '';
if ($download->canEdit($user))
{
	$editButton .= GDT_EditButton::make()->gdo($download)->renderCell();
}

$downloadButton = sprintf('<md-button class="md-icon-button" href="%s" ng-disabled="%s">', $download->href_download(), $download->canDownload($user)?0:1);
$downloadButton .= sprintf('<md-icon class="material-icons">file_download</md-icon>%s', $downloads);
$downloadButton .= "</md-button>\n";

$voteButton = GDT_VotePopup::make()->gdo($download)->renderCell();

$payButton = sprintf('<md-button ng-click="showDialogId(\'#DialogDownloadBuy_%s\', $event)" class="md-icon-button" ng-disabled="%s">', $id, $paid?0:1);
$payButton .= sprintf('<md-icon class="material-icons icon-attach_money">attach_money</md-icon>%s', $download->displayPrice());
$payButton .= "</md-button>\n";
?>
<md-list-item
 class="md-3-line <?=$payClass;?> <?=$buyClass;?>"
 hrex="<?= href('Download', 'View', "&id=$id"); ?>">
  <div class="md-list-item-text" layout="column">
	<h3><?= $editButton; ?><?= html($download->getTitle()); ?><?= $infoTooltip; ?></h3>
	<h4><?= $download->displayInfoText(); ?></h4>
	<p>
	  <?= $downloadButton; ?>
	  <?= $levelTooltip; ?>
	  <?= $payButton; ?>
	  <?= $voteButton; ?>
	</p>
  </div>
</md-list-item>


<!-- Dialog Purchase -->
<div style="visibility: hidden">
  <div class="md-dialog-container" id="DialogDownloadBuy_<?= $id; ?>">
	<md-dialog layout-padding>
	  <h2><?= t('dlg_download_purchase_title'); ?></h2>
	  <p>
	  <?= t('li_download_price', [$download->displayPrice()]); ?><br/>
	  <?= GDT_Button::make('btn_purchase')->href(href('Download', 'Order', "&id=$id")); ?>
	  </p>
	</md-dialog>
  </div>
</div>

