<?php /** @var $field \GDO\DB\GDT_String **/ ?>
<div class="ui-field-contain gdt-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
  <input
   type="<?=$field->_inputType?>"
   data-clear-btn="true"
   <?=$field->htmlID()?>
   <?=$field->htmlRequired()?>
   <?=$field->htmlPattern()?>
   <?=$field->htmlDisabled()?>
   maxlength="<?=$field->max?>"
   size="<?=min($field->max, 32) ?>"
   <?=$field->htmlFormName()?>
   value="<?=$field->display()?>" />
  <?=$field->htmlError()?>
</div>
