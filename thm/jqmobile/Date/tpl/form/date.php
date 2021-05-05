<?php /** @var $field \GDO\Date\GDT_Date **/ ?>
<div class="ui-field-contain gdt-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
  <input
   <?=$field->htmlID()?>
   type="date"
   <?=$field->htmlFormName()?>
   value="<?=$field->getVar()?>"
   <?=$field->htmlDisabled()?> />
  <?=$field->htmlError()?>
</div>
