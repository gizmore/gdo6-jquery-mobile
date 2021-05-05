<?php /** @var $field \GDO\Date\GDT_Duration **/ ?>
<div class="ui-field-contain gdt-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
  <input
   <?=$field->htmlID()?>
   type="text"
   <?=$field->htmlFormName()?>
   <?= $field->htmlDisabled(); ?>
   <?= $field->htmlRequired(); ?>
   value="<?= $field->getVar(); ?>" />
  <?= $field->htmlError(); ?>
</div>
