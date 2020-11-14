<?php /** @var $field \GDO\DB\GDT_String **/ ?>
<div class="ui-field-contain gdo-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
  <input
   type="<?=$field->_inputType?>"
   data-clear-btn="true"
   <?=$field->htmlID()?>
   <?=$field->htmlRequired()?>
   <?=$field->htmlPattern()?>
   <?=$field->htmlDisabled()?>
   min="<?=$field->min?>"
   max="<?=$field->max?>"
   size="<?=min($field->max, 32) ?>"
   <?=$field->htmlFormName()?>
   value="<?=$field->displayVar()?>" />
  <?=$field->htmlError()?>
</div>
