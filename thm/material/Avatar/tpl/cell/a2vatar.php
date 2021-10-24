<?php use GDO\Avatar\GDT_Avatar;
$field instanceof GDT_Avatar; ?>
<gdo-avatar
 class="<?= $field->user->getGender(); ?> md-avatar">
  <img
   class="md-avatar"
   alt="<?= t('avatar_of', [$field->user->displayNameLabel()]); ?>"
   src="<?= href('Avatar', 'Image', '&_ajax=1&file=' . $field->gdo->getVar('avatar_file_id')); ?>" />
</gdo-avatar>
