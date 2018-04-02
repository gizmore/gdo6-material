<?php
/** @var $post GDO\Forum\GDO_ForumPost */
use GDO\UI\GDT_IconButton;
use GDO\User\GDO_User;
use GDO\UI\GDT_Icon;
use GDO\UI\GDT_Link;
use GDO\Vote\GDT_LikeButton;
$creator = $post->getCreator();
$user = GDO_User::current();
$unread = $post->isUnread($user);
$readClass = $unread ? 'gdo-forum-unread' : 'gdo-forum-read';
$scoreClass = $post->canRead() ? ' gdo-forum-post' : ' gdo-forum-post-locked';
if ($unread) $post->markRead($user);
?>
<!-- Begin ForumPost card -->
<md-card class="<?=$readClass?><?=$scoreClass?>" id="post-<?=$post->getID()?>">
  <md-card-title>
    <md-card-title-text>
      <span class="md-headline">
        <a href="#post-<?=$post->getID()?>"><?=t('post_link')?></a>
        <div><?= $creator->renderCell(); ?></div>
        <div class="gdo-card-date"><?= t('posted_at', [$post->displayCreated()]); ?></div>
      </span>
    </md-card-title-text>
  </md-card-title>
  <gdo-div></gdo-div>
  <md-card-content>
    <?= $post->displayMessage(); ?>
<?php if ($post->hasAttachment()) : ?>
    <div class="gdo-attachment" layout="row" flex layout-fill layout-align="left center">
      <div><?= GDT_IconButton::make()->icon('file')->href($post->hrefAttachment())->render(); ?></div>
      <div><?= $post->getAttachment()->tempHref($post->hrefAttachment())->renderCell(); ?></div>
    </div>
<?php endif; ?>
      <hr/>
      <?= $post->displaySignature(); ?>
  </md-card-content>
  <gdo-div></gdo-div>
  <md-card-actions layout="row" layout-align="end center">
   <md-menu>
      <md-button aria-label="Open action menu" class="md-icon-button" ng-click="$mdMenu.open($event)">
        <?=GDT_Icon::iconS('menu')?>
      </md-button>
      <md-menu-content width="4">
        <md-menu-item><?=GDT_Link::make('btn_edit')->icon('edit')->href($post->hrefEdit())->editable($post->canEdit($user))->render()?></md-menu-item>
        <md-menu-item><?=GDT_LikeButton::make('btn_like')->gdo($post)->render()?></md-menu-item>
        <md-menu-divider></md-menu-divider>
        <md-menu-item><?=GDT_Link::make('btn_reply')->icon('reply')->href($post->hrefReply())->render()?></md-menu-item>
        <md-menu-item><?=GDT_Link::make('btn_quote')->icon('quote')->href($post->hrefQuote())->render()?></md-menu-item>
      </md-menu-content>
    </md-menu>

  </md-card-actions>
</md-card>
<!-- End ForumPost card -->
