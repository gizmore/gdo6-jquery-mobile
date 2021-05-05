<?php
/** @var $field \GDO\DB\GDT_UInt **/
?>
<div class="ui-field-contain gdt-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
  <input
   <?=$field->htmlID()?>
   type="number"
   min="<?=$field->min;?>"
   max="<?=$field->max;?>"
   step="<?=$field->step?>"
   <?=$field->htmlFormName()?>
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
   value="<?=$field->getVar()?>" />
  <?=$field->htmlError()?>
</div>
