<?php /** @var $field \GDO\User\GDT_Password **/ ?>
<div class="ui-field-contain gdo-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
  <input
   <?=$field->htmlID()?>
   type="password"
   <?= $field->htmlRequired(); ?>
   <?= $field->htmlPattern(); ?>
   min="<?= $field->min; ?>"
   max="<?= $field->max; ?>"
   size="<?= min($field->max, 32); ?>"
   <?=$field->htmlFormName()?>
   value="" />
  <?= $field->htmlError(); ?>
</div>
