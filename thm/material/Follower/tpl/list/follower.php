<?php /** @var $follower GDO\Follower\GDO_Follower **/
use GDO\User\GDO_User;
use GDO\Profile\GDT_ProfileLink;
use GDO\UI\GDT_Menu;
use GDO\UI\GDT_Button;
$user = $follower->getOther(GDO_User::current());
$mode = $user === $follower->getUser() ? 1 : 2;
?>
<md-list-item class="md-2-line" ng-click="null" href="<?= href('Profile', 'View', '&id='.$user->getID()); ?>">
  <h3><?=GDT_ProfileLink::make()->withNickname()->forUser($user)->render()?></h3>
  <p>aaaa</p>
<?php
if ($mode === 2)
{
	echo GDT_Menu::make()->addFields(array(
		GDT_Button::make('btn_unfollow')->href(href('Follower', 'Unfollow', "&id={$user->getID()}")),
	))->render();
}
?>
</md-list-item>
