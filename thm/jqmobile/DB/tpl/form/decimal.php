<?php /** @var $field \GDO\DB\GDT_Decimal **/ ?>
<div class="ui-field-contain gdo-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
  <input
   <?=$field->htmlID()?>
   type="number"
   <?=$field->htmlFormName()?>
   <?=$field->htmlDisabled()?>
   <?=$field->htmlRequired()?>
   min="<?=$field->min?>"
   max="<?=$field->max?>"
   step="<?=$field->step?>"
   value="<?=$field->getVar()?>" /><?= $field->htmlError(); ?></div>
